<?php

// src/OC/UserBundle/DataFixtures/ORM/LoadUser.php

namespace NoxIntranet\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use NoxIntranet\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUser implements FixtureInterface, ContainerAwareInterface {

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {
        // Les noms d'utilisateurs à créer
        $listNames = array('ROLE_CE', 'ROLE_CHSCT', 'ROLE_COMMUNICATION', 'ROLE_COMPETENCES', 'ROLE_FAQ', 'ROLE_LIENS', 'ROLE_PROCEDURES', 'ROLE_QUALITE', 'ROLE_REFERENCES', 'ROLE_USER');

        foreach ($listNames as $name) {
            // On crée l'utilisateur
            $user = new User;

            // Le nom d'utilisateur et le mot de passe sont identiques
            $user->setUsername($name);
            $user->setPassword("default");
            $user->setFirstname($name);
            // the 'security.password_encoder' service requires Symfony 2.6 or higher
            // On ne se sert pas du sel pour l'instant
            // On définit uniquement le role ROLE_USER qui est le role de base
            $user->setRoles(array($name));

            $user->setLocal(true);

            // On le persiste
            $manager->persist($user);
        }

        $user = new User;

        // Le nom d'utilisateur et le mot de passe sont identiques
        $user->setUsername('superadmin');
        $user->setPassword("superadmin");
        $user->setFirstname('Superadmin');
        // the 'security.password_encoder' service requires Symfony 2.6 or higher
        // On ne se sert pas du sel pour l'instant
        // On définit uniquement le role ROLE_USER qui est le role de base
        $user->setRoles(array('ROLE_SUPER_ADMIN'));

        $user->setLocal(true);

        // On le persiste
        $manager->persist($user);

        // On déclenche l'enregistrement
        $manager->flush();
    }

}
