<?php
/**
 * Created by PhpStorm.
 * User: samuelerb
 * Date: 26.12.17
 * Time: 14:14
 */

namespace App\Controller;

use App\Entity\MyUserEntity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\HeaderBag;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends Controller
{
    /**
     * @Route("/go", name="go")
     */
    public function go(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $query = $request->request->get('name');
        if ($query != '') {
            $result = $this->getDoctrine()->getRepository('App:Entity\MyUserEntity')->searchForUserByName($query);
            if (count($result) == 0 | count($result) > 1) {
                return new Response("", Response::HTTP_NOT_FOUND);
            }
            return $this->redirectToRoute('profile', ['id' => $result[0]->getId()], Response::HTTP_PERMANENTLY_REDIRECT);
//                $this->render('search/search.html.twig', [
//                'page_title' => 'Search',
//                'search_string' => $query,
//                'result' => $result
//            ]);
        } else {
            return new Response("", Response::HTTP_NOT_FOUND);
        }
    }

//requirements={"query" = "[a-zA-Z0-9]*"},
    /**
     * @Route("/search/{query}", name="search", requirements={"query" = "[a-zA-Z0-9]*"})
     */
    public function search(Request $request,string $query)
    {
        if (strlen($query) < 3) {
            return new Response('Query must be longer!', Response::HTTP_BAD_REQUEST);
        }
        $this->denyAccessUnlessGranted('ROLE_USER');
        $result = $this->getDoctrine()->getRepository('App:Entity\MyUserEntity')->searchForUserByName($query);
        $jsondata = [];
        $jsondata['query'] = $query;
        foreach ($result as $key => $value) {
            if ($key == 10) {break;}
            $jsondata['result'.$key] = [
                'id' => $value->getId(),
                'name' => $value->getUsername()
            ];
        }
        return new JsonResponse($jsondata);
    }

}