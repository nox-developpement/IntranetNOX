<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoxIntranetMajUserDB
 *
 * @author t.besson
 */

namespace NoxIntranet\AdministrationBundle\ServicesFunction;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class NoxIntranetMajUserDB extends Controller {

    public function __construct(\Doctrine\ORM\EntityManager $entityManager, Container $container) {
        $this->em = $entityManager;
        $this->container = $container;
    }

    public function GetBetween($var1 = "", $var2 = "", $pool) {
        $temp1 = strpos($pool, $var1) + strlen($var1);
        $result = substr($pool, $temp1, strlen($pool));
        $dd = strpos($result, $var2);
        if ($dd == 0) {
            $dd = strlen($result);
        }

        return substr($result, 0, $dd);
    }

    public function majUserDB() {

        $root = str_replace('\\', '/', $this->container->getParameter('kernel.root_dir')) . '/..';
        $userEM = $this->em;
        $users = null;
        $newUsersNames = null;
        $deleteUserNames = null;

        // On récupére le contenu du fichier en Unicode.
        $unicodeFile = file_get_contents($root . "/usersUnicode.csv");

        // On converti le contenu en UTF-8.
        $convertText = iconv('UTF-16LE', 'UTF-8', $unicodeFile);

        // On place le contenu dans le fichier users.csv.
        file_put_contents($root . "/users.csv", $convertText);

        // On extrait les informations sur chaque utilisateurs depuis le fichier CSV de l'active directory.
        if (($handle = fopen($root . "/users.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, ",")) !== FALSE) {
                if (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr($data[0], 'OU=Bron') != false) {
                    $name = mb_strtolower($data[3], 'UTF-8');
                    $agence = 'Bron';
                    //$fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $firstname = $data[2];
                    $lastname = $data[1];
                    $users[] = array('name' => utf8_encode($name), 'firstname' => $firstname, 'lastname' => $lastname, 'agence' => utf8_encode($agence));
                } elseif (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr(utf8_encode($data[0]), 'OU=Siège') != false) {
                    $name = mb_strtolower($data[3], 'UTF-8');
                    $agence = 'Siège';
                    //$fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $firstname = $data[2];
                    $lastname = $data[1];
                    $users[] = array('name' => utf8_encode($name), 'firstname' => $firstname, 'lastname' => $lastname, 'agence' => utf8_encode($agence));
                } elseif (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr($data[0], 'OU=Bron') === false && mb_stristr(utf8_encode($data[0]), 'OU=Siège') === false) {
                    $name = mb_strtolower($data[3], 'UTF-8');
                    $OU = explode('OU=', $data[0]);
                    if (array_key_exists(1, $OU)) {
                        $agence = str_replace(',', '', $OU[1]);
                    } else {
                        $agence = null;
                    }
                    //$fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $firstname = $data[2];
                    $lastname = $data[1];
                    $users[] = array('name' => utf8_encode($name), 'firstname' => $firstname, 'lastname' => $lastname, 'agence' => utf8_encode($agence));
                }
            }
            fclose($handle);
        }
        unset($users[0]);


        $debugFile = fopen('debugUsers.txt', 'w+');

        // Pour chaque utilisateurs.
        foreach ($users as $user) {
            // Si le nom ou le prénom est vide on passe à l'utilisateur suivant.
            if (empty($user['firstname']) || empty($user['lastname'])) {
                var_dump($user['firstname'] . ' ' . $user['lastname']);
                continue;
            }

            // Si l'utilisateur n'existe pas en base de données.
            if ($userEM->getRepository('NoxIntranetUserBundle:User')->findByUsername($user['name']) == null) {
                // On crée l'utilisateur
                $newUser = new User();

//                // On initialise les variables de nom et de prénom.
//                $firstname = '';
//                $lastname = '';
//
//                // On découpe le nom complet en nom+prénom.
//                $fullnames = explode(' ', $user['fullname']);
//                foreach ($fullnames as $fullname) {
//                    // Si le chaîne et en majuscule (on retire les éventuels '-' pour la vérification).
//                    if (ctype_upper(str_replace('-', '', $fullname))) {
//                        $lastname .= ' ' . $fullname;
//                    } else {
//                        $firstname .= ' ' . $fullname;
//                    }
//                }
                // On attribut les varibles au nouvel utilisateur.
                $newUser->setUsername($user['name']);
                $newUser->setFirstname(trim($user['firstname']));
                $newUser->setLastname(trim($user['lastname']));
                $newUser->setAgence($user['agence']);

                // On le persit
                $userEM->persist($newUser);

                // On récupére la liste des usernames des nouveaux utilisateurs.
                $newUsersNames[] = $user['name'];
            }
            // Si l'utilisateur existe en base de données.
            else {
                // On récupére l'utilisateur courant en base de données.
                $currentUser = $userEM->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($user['name']);

//                // On initialise les variables de nom et de prénom.
//                $firstname = '';
//                $lastname = '';
//
//                // On découpe le nom complet en nom+prénom.
//                $fullnames = explode(' ', $user['fullname']);
//                foreach ($fullnames as $fullname) {
//                    // Si le chaîne et en majuscule (on retire les éventuels '-' pour la vérification).
//                    if (ctype_upper(str_replace('-', '', $fullname))) {
//                        $lastname .= ' ' . $fullname;
//                    } else {
//                        $firstname .= ' ' . $fullname;
//                    }
//                }
                // On met à jours les informations de l'utilisateur si nécessaire
                if ($currentUser->getFirstname() !== trim($user['firstname'])) {
                    $currentUser->setFirstname(trim($user['firstname']));
                }
                if ($currentUser->getLastname() !== trim($user['lastname'])) {
                    $currentUser->setLastname(trim($user['lastname']));
                }
                if ($currentUser->getAgence() !== $user['agence']) {
                    $currentUser->setAgence($user['agence']);
                }

                $userEM->persist($currentUser);
            }
        }

        fclose($debugFile);

        // On récupère tous les utilisateurs existants dans la base de données.
        $existantUsers = $userEM->getRepository('NoxIntranetUserBundle:User')->findAll();

        // Pour chaque utilisateur existant.
        foreach ($existantUsers as $existantUser) {
            $i = 1;
            $find = false;
            // Tant que l'utilisateur en base de données ne correspond pas à un utilisateur de l'active directory.
            while (!$find && $i <= sizeof($users)) {
                if ($existantUser->getUsername() == $users[$i]['name']) {
                    $find = true;
                }
                $i++;
            }
            // Si l'utilisateur n'existe pas dans l'active directory, n'est pas le superadmin et n'est pas local.
            if (!$find && $existantUser->getUsername() != 'superadmin' && $existantUser->getLocal() != true) {
                // On supprime l'utilisateur de la base de données.
                $userEM->remove($existantUser);
                // On ajoute son username à la liste des utilisateurs supprimé.
                $deleteUserNames[] = $existantUser->getUsername();
            }
        }

        // On crée le compte superadministrateur si il n'existe pas.
        if ($userEM->getRepository('NoxIntranetUserBundle:User')->findByUsername('superadmin') == null) {
            $superAdmin = new User();
            $superAdmin->setUsername('superadmin');
            $superAdmin->setFullname('Super Admin');
            $superAdmin->setAgence('Jakku');
            $superAdmin->setPassword('superadmin');
            $superAdmin->setRoles(array('ROLE_SUPER_ADMIN'));
            $superAdmin->setLocal(true);
            $userEM->persist($superAdmin);
        }

        // On déclenche l'enregistrement
        $userEM->flush();

        // On retourne la liste des nouveaux utilisateurs et la liste des utilisateurs à supprimer.
        $usersAction = array('new' => $newUsersNames, 'delete' => $deleteUserNames);
        return $usersAction;
    }

    public function verifMajUserDB() {

        $root = str_replace('\\', '/', $this->container->getParameter('kernel.root_dir')) . '/..';
        $userEM = $this->em;
        $users = null;
        $newUsersNames = null;
        $deleteUserNames = null;

        // On récupére le contenu du fichier en Unicode.
        $unicodeFile = file_get_contents($root . "/usersUnicode.csv");

        // On converti le contenu en UTF-8.
        $convertText = iconv('UTF-16LE', 'UTF-8', $unicodeFile);

        // On place le contenu dans le fichier users.csv.
        file_put_contents($root . "/users.csv", $convertText);

        // On extrait les informations sur chaque utilisateurs depuis le fichier CSV de l'active directory.
        if (($handle = fopen($root . "/users.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, ",")) !== FALSE) {
                if (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr($data[0], 'OU=Bron') != false) {
                    $name = mb_strtolower($data[3], 'UTF-8');
                    $agence = 'Bron';
                    //$fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $firstname = $data[2];
                    $lastname = $data[1];
                    $users[] = array('name' => utf8_encode($name), 'firstname' => $firstname, 'lastname' => $lastname, 'agence' => utf8_encode($agence));
                } elseif (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr(utf8_encode($data[0]), 'OU=Siège') != false) {
                    $name = mb_strtolower($data[3], 'UTF-8');
                    $agence = 'Siège';
                    //$fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $firstname = $data[2];
                    $lastname = $data[1];
                    $users[] = array('name' => utf8_encode($name), 'firstname' => $firstname, 'lastname' => $lastname, 'agence' => utf8_encode($agence));
                } elseif (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr($data[0], 'OU=Bron') === false && mb_stristr(utf8_encode($data[0]), 'OU=Siège') === false) {
                    $name = mb_strtolower($data[3], 'UTF-8');
                    $OU = explode('OU=', $data[0]);
                    if (array_key_exists(1, $OU)) {
                        $agence = str_replace(',', '', $OU[1]);
                    } else {
                        $agence = null;
                    }
                    //$fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $firstname = $data[2];
                    $lastname = $data[1];
                    $users[] = array('name' => utf8_encode($name), 'firstname' => $firstname, 'lastname' => $lastname, 'agence' => utf8_encode($agence));
                }
            }
            fclose($handle);
        }
        unset($users[0]);

        // Pour chaque utilisateurs.
        foreach ($users as $user) {
            // Si le nom ou le prénom est vide on passe à l'utilisateur suivant.
            if (empty($user['firstname']) || empty($user['lastname'])) {
                continue;
            }

            // Si l'utilisateur n'existe pas en base de données.
            if (empty($userEM->getRepository('NoxIntranetUserBundle:User')->findByUsername($user['name']))) {
                // On crée l'utilisateur
                $newUser = new User();

//                // On initialise les variables de nom et de prénom.
//                $firstname = '';
//                $lastname = '';
//
//                // On découpe le nom complet en nom+prénom.
//                $fullnames = explode(' ', $user['fullname']);
//                foreach ($fullnames as $fullname) {
//                    if (ctype_upper($fullname)) {
//                        $lastname .= ' ' . $fullname;
//                    } else {
//                        $firstname .= ' ' . $fullname;
//                    }
//                }
                // On attribut les varibles au nouvel utilisateur.
                $newUser->setUsername($user['name']);
                $newUser->setFirstname(trim($user['firstname']));
                $newUser->setLastname(trim($user['lastname']));
                $newUser->setAgence($user['agence']);

                // On récupére la liste des usernames des nouveaux utilisateurs.
                $newUsersNames[] = $user['name'];
            }
            // Si l'utilisateur existe en base de données.
            else {

                // On récupére l'utilisateur courant en base de données.
                $currentUser = $userEM->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($user['name']);

//                // On initialise les variables de nom et de prénom.
//                $firstname = '';
//                $lastname = '';
//
//                // On découpe le nom complet en nom+prénom.
//                $fullnames = explode(' ', $user['fullname']);
//                foreach ($fullnames as $fullname) {
//                    if (ctype_upper($fullname)) {
//                        $lastname .= ' ' . $fullname;
//                    } else {
//                        $firstname .= ' ' . $fullname;
//                    }
//                }
                // On met à jours les informations de l'utilisateur si nécessaire
                if ($currentUser->getFirstname() !== trim($user['firstname'])) {
                    $currentUser->setFirstname(trim($user['firstname']));
                }
                if ($currentUser->getLastname() !== trim($user['lastname'])) {
                    $currentUser->setLastname(trim($user['lastname']));
                }
                if ($currentUser->getAgence() !== $user['agence']) {
                    $currentUser->setAgence($user['agence']);
                }

                $userEM->persist($currentUser);
            }
        }

        // On récupère tous les utilisateurs existants dans la base de données.
        $existantUsers = $userEM->getRepository('NoxIntranetUserBundle:User')->findAll();

        // Pour chaque utilisateur existant.
        foreach ($existantUsers as $existantUser) {
            $i = 1;
            $find = false;
            // Tant que l'utilisateur en base de données ne correspond pas à un utilisateur de l'active directory.
            while (!$find && $i <= sizeof($users)) {
                if ($existantUser->getUsername() == $users[$i]['name']) {
                    $find = true;
                }
                $i++;
            }
            // Si l'utilisateur n'existe pas dans l'active directory, n'est pas le superadmin et n'est pas local.
            if (!$find && $existantUser->getUsername() != 'superadmin' && $existantUser->getLocal() != true) {
                // On l'ajoute à la liste des utilisateurs à supprimer.
                $deleteUserNames[] = $existantUser->getUsername();
            }
        }

        // On crée le compte superadministrateur si il n'existe pas.
        if ($userEM->getRepository('NoxIntranetUserBundle:User')->findByUsername('superadmin') == null) {
            $superAdmin = new User();
            $superAdmin->setUsername('superadmin');
            $superAdmin->setFullname('Super Admin');
            $superAdmin->setAgence('Jakku');
            $superAdmin->setPassword('superadmin');
            $superAdmin->setRoles(array('ROLE_SUPER_ADMIN'));
            $superAdmin->setLocal(true);
        }

        // On retourne la liste des nouveaux utilisateurs et la liste des utilisateurs à supprimer.
        $usersAction = array('new' => $newUsersNames, 'delete' => $deleteUserNames);
        return $usersAction;
    }

}
