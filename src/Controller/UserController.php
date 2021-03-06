<?php
/**
 * Created by PhpStorm.
 * MyUserEntity: samuelerb
 * Date: 17.12.17
 * Time: 15:52
 */

namespace App\Controller;


use App\Entity\MyUserEntity;
use App\Entity\RunEntity;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\{
    DateTimeType, DateType, IntegerType, SubmitType, TimeType
};
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraints\DateTime;

class UserController extends Controller
{
    private $user;


    /**
     * @Route("/profile/{id}", requirements={"id" = "\d+"}, name="profile")
     * @Template
     */
    public function profile($id, Request $request, ObjectManager $manager, UserInterface $loggedin_user = null, TranslatorInterface $translator)
    {
        $isOwner = null;
        if ($loggedin_user == null) {
            // create temporary user for profile owner check
            $loggedin_user = new MyUserEntity();
            $loggedin_user->setId(-1);
        } else {
            $loggedin_user = $this->getDoctrine()->getRepository('App:Entity\MyUserEntity')->loadUserByUsername($loggedin_user->getUsername());
        }
        $owner = $this->getDoctrine()->getRepository('App:Entity\MyUserEntity')->loadUserByID($id);

        // form
        $form = $this->createFormBuilder()
            ->setMethod('POST')
            ->add($translator->trans('Time'), TimeType::class, array(
                //'input' => 'timestamp',
                'widget' => 'choice'
            ))
            ->add('Date', DateType::class, array(
                'format' => 'dd MM yyyy'

            ))
            ->add('Distance', IntegerType::class)
            ->add('Save', SubmitType::class, array('label' => 'Create entry'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $distance = $form['Distance']->getData();
            $date = $form['Date']->getData();
            $time = $form['Time']->getData();
            $entry = new RunEntity();
            $entry->setDate($date);
            $entry->setDistance($distance);
            $entry->setTime($time);
            $entry->setUser($owner);
            $validator = $this->get('validator');
            $errors = $validator->validate($entry);

            $validator = $this->get('validator');
            $errors = $validator->validate($entry);
            $entry->validate();

            if (count($errors) > 0) {
                /*
                 * Uses a __toString method on the $errors variable which is a
                 * ConstraintViolationList object. This gives us a nice string
                 * for debugging.
                 */
                //$errorsString = (string)$errors;
                $response['errors'] = $errors;

                //return new Response($errorsString);
            } else {
                $this->denyAccessUnlessGranted('add', $entry);
                $manager->persist($entry);
                $manager->flush();
            }

        }
        // end form

        // prepare panel data
        $panel_data = null;
        if (0 != count($owner->getRuns())) {
            $day_amount = 1;
            $days_since_first_run = 0;
            $overall_distance = 0;

            foreach ($owner->getRuns() as $key => $value) {
                if ($key > 0 and $owner->getRuns()[$key - 1]->getDate() == $value->getDate()) {
                    $day_amount++;
                }
                $overall_distance += $value->getDistance();
            }
            $now = time();
            $datediff = $now - $owner->getRuns()[count($owner->getRuns()) - 1]->getDate()->getTimestamp();
            $days_since_first_run = floor($datediff / (60 * 60 * 24));

            $panel_data = array(
                'day_amount' => $day_amount,
                'days_since_first_run' => $days_since_first_run,
                'overall_distance' => $overall_distance,
                'canView' => $this->isGranted('view', $owner->getRuns())
            );

        } else {
            $panel_data = array(
                'day_amount' => 0,
                'days_since_first_run' => 0,
                'overall_distance' => 0
            );
        }
        // end prepare

        // prepare table data
        $table_data = [];
        foreach ($owner->getRuns() as $key => $value) {
            $table_data[] = [
                'id' => $value->getId(),
                'date' => $value->getDate()->format('d.m.Y'),
                'distance' => $value->getDistance(),
                'time' => $value->getTime()->format('H:i'),
                'average_speed' => $value->getDistance() / ($value->getTime()->getTimestamp() / 3600),
                'canView' => $this->isGranted('view', $owner->getRuns()),
                'canDelete' => $this->isGranted('delete', $owner->getRuns())
            ];
        }
        // end prepare

        //generate response
        $response['isProfileOwner'] = $owner->getId() == $loggedin_user->getId();
        $response['page_title'] = 'Profil';
        $response['owner'] = $owner;
        $response['panel_data'] = $panel_data;
        $response['table_data'] = $table_data;
        $response['form'] = $form->createView();
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $response;
    }

    /**
     * @Route("/profile/{id}/diary.{_format}", defaults={"_format": "json"}, requirements={"id"="\d+"}, name="api")
     */
    public function api($id, $_format)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getDoctrine()->getRepository('App:Entity\MyUserEntity')->loadUserByID($id);
        $json = [];
        $csv = 'date,distance,time'."\n";
        foreach ($user->getRuns() as $key => $value) {
            $csv = $csv.$value->getDate()->format('Y-m-d').','.$value->getDistance().','.$value->getTime()->format('H:i');
            $csv = $csv."\n";
            $json[] = [
                'date' => $value->getDate()->format('Y-m-d'),
                'distance' => $value->getDistance(),
                'time' => $value->getTime()->format('H:i')
            ];
        }

        if ($_format == 'json') {
            $response = new JsonResponse($json);
            return $response;
        } elseif($_format == 'csv'){
            $response = new Response($csv);
            $response->headers->set('Content-Type', 'text/csv');
            return $response;
        }
        return new Response('', Response::HTTP_NOT_FOUND);
    }

    /**
     * @Route("/profile/delete/{run_id}", name="delete")
     */
    public function delete($run_id)
    {
        if ($this->isGranted('delete', $this->getDoctrine()->getRepository('App:Entity\RunEntity')->find($run_id))) {
            return new Response(
                'deleted entry with id '.$run_id,
                200
            );
        }
        return new Response('',404);

    }
}