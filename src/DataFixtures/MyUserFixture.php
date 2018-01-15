<?php
/**
 * Created by PhpStorm.
 * MyUserEntity: samuelerb
 * Date: 18.12.17
 * Time: 02:41
 */

namespace App\DataFixtures;


use App\Entity\MyUserEntity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class MyUserFixture extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager) {
        $user1 = new MyUserEntity();
        $user1->setUsername('Marta');
        $user1->setEmail('Marta@me.com');
        $user1->setPassword($this->encoder->encodePassword($user1, 'passwort123'));
        $user1->setRoles(array('ROLE_USER', 'ROLE_ADMIN'));
        $manager->persist($user1);
        $manager->flush();

        $user2 = new MyUserEntity();
        $user2->setUsername('Peter');
        $user2->setEmail('Peter@me.com');
        $user2->setPassword($this->encoder->encodePassword($user2, 'passwort123'));
        $user2->setRoles(array('ROLE_USER'));
        $manager->persist($user2);
        $manager->flush();

        $user3 = new MyUserEntity();
        $user3->setUsername('Petra');
        $user3->setEmail('Petra@me.com');
        $user3->setPassword($this->encoder->encodePassword($user3, 'passwort123'));
        $user3->setRoles(array('ROLE_USER'));
        $manager->persist($user3);
        $manager->flush();

        $user4 = new MyUserEntity();
        $user4->setUsername('Paul');
        $user4->setEmail('Paul@me.com');
        $user4->setPassword($this->encoder->encodePassword($user4, 'passwort123'));
        $user4->setRoles(array('ROLE_USER'));
        $manager->persist($user4);
        $manager->flush();

        $user5 = new MyUserEntity();
        $user5->setUsername('Maria');
        $user5->setEmail('Maria@me.com');
        $user5->setPassword($this->encoder->encodePassword($user5, 'passwort123'));
        $user5->setRoles(array('ROLE_USER'));
        $manager->persist($user5);
        $manager->flush();

        $user6 = new MyUserEntity();
        $user6->setUsername('Jakob');
        $user6->setEmail('Jakob@me.com');
        $user6->setPassword($this->encoder->encodePassword($user6, 'passwort123'));
        $user6->setRoles(array('ROLE_USER'));
        $manager->persist($user6);
        $manager->flush();

        $user7 = new MyUserEntity();
        $user7->setUsername('Claude');
        $user7->setEmail('Claude@me.com');
        $user7->setPassword($this->encoder->encodePassword($user7, 'passwort123'));
        $user7->setRoles(array('ROLE_USER'));
        $manager->persist($user7);
        $manager->flush();

        $user8 = new MyUserEntity();
        $user8->setUsername('Klaus');
        $user8->setEmail('Klaus@me.com');
        $user8->setPassword($this->encoder->encodePassword($user8, 'passwort123'));
        $user8->setRoles(array('ROLE_USER'));
        $manager->persist($user8);
        $manager->flush();
        
        
        

        /* Peter, Petra, Paul, Maria, Jakob, Claude, Klaus, Marta */
    }
}