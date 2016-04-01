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

namespace NoxIntranet\AdministrationBundle\MajUserDB;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\UserBundle\Entity\User;

class NoxIntranetMajUserDB extends Controller {

    public function __construct(\Doctrine\ORM\EntityManager $entityManager) {
        $this->em = $entityManager;
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

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $users = null;

        $newUsersNames = null;

        if (($handle = fopen($root . "/users.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, ",")) !== FALSE) {
                if (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr($data[0], 'OU=Bron') != false) {
                    $name = $data[1];
                    $agence = 'Bron';
                    $fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $users[] = array('name' => $name, 'fullname' => $fullname, 'agence' => $agence);
                } elseif (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr(utf8_encode($data[0]), 'OU=Siège') != false) {
                    $name = $data[1];
                    $agence = 'Siège';
                    $fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $users[] = array('name' => $name, 'fullname' => $fullname, 'agence' => $agence);
                } elseif (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr($data[0], 'OU=Bron') === false && mb_stristr(utf8_encode($data[0]), 'OU=Siège') === false) {
                    $name = $data[1];
                    $OU = explode('OU=', $data[0]);
                    if (array_key_exists(1, $OU)) {
                        $agence = str_replace(',', '', $OU[1]);
                    } else {
                        $agence = null;
                    }
                    $fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $users[] = array('name' => $name, 'fullname' => $fullname, 'agence' => $agence);
                }
            }
            fclose($handle);
        }

        unset($users[0]);

        $userEM = $this->em;

        foreach ($users as $user) {

            if ($userEM->getRepository('NoxIntranetUserBundle:User')->findByUsername($user['name']) == null) {
                // On crée l'utilisateur
                $newUser = new User();

                $fullnames = explode(' ', $user['fullname']);
                $firstname = '';
                $lastname = '';

                foreach ($fullnames as $fullname) {
                    if (ctype_upper($fullname)) {
                        if ($lastname != '') {
                            $lastname = $lastname . ' ' . $fullname;
                        } else {
                            $lastname = $fullname;
                        }
                    } else {
                        if ($firstname != '') {
                            $firstname = $firstname . ' ' . $fullname;
                        } else {
                            $firstname = $fullname;
                        }
                    }
                }

                // Le nom d'utilisateur et le mot de passe sont identiques
                $newUser->setUsername($user['name']);
                $newUser->setFirstname($firstname);
                $newUser->setLastname($lastname);
                $newUser->setAgence($user['agence']);



                // On le persiste
                $userEM->persist($newUser);

                $newUsersNames[] = $user['name'];
            }
        }

        $existantUsers = $userEM->getRepository('NoxIntranetUserBundle:User')->findAll();


        $deleteUserNames = null;

        foreach ($existantUsers as $existantUser) {
            $i = 1;
            $find = false;
            $existantUser->getUsername();
            while (!$find && $i <= sizeof($users)) {
                if ($existantUser->getUsername() == $users[$i]['name']) {
                    $find = true;
                }
                $i++;
            }
            if (!$find && $existantUser->getUsername() != 'superadmin' && $existantUser->getLocal() != true) {
                $userEM->remove($userEM->getRepository('NoxIntranetUserBundle:User')->find($existantUser->getId()));
                $deleteUserNames[] = $existantUser->getUsername();
                $userEM->flush();
            }
        }


        if ($userEM->getRepository('NoxIntranetUserBundle:User')->findByUsername('superadmin') == null) {
            $superAdmin = new User();
            $superAdmin->setUsername('superadmin');
            $superAdmin->setFirstname('Super');
            $superAdmin->setLastname('Admin');
            $superAdmin->setAgence('Jakku');
            $superAdmin->setPassword('superadmin');
            $superAdmin->setRoles(array('ROLE_SUPER_ADMIN'));
            $superAdmin->setLocal(true);
            $userEM->persist($superAdmin);
        }

        // On déclenche l'enregistrement
        $userEM->flush();

        $usersAction = array('new' => $newUsersNames, 'delete' => $deleteUserNames);

        return $usersAction;
    }

    public function verifMajUserDB() {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $users = null;

        $newUsersNames = null;

        if (($handle = fopen($root . "/users.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, ",")) !== FALSE) {
                if (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr($data[0], 'OU=Bron') != false) {
                    $name = $data[1];
                    $agence = 'Bron';
                    $fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $users[] = array('name' => $name, 'fullname' => $fullname, 'agence' => $agence);
                } elseif (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr(utf8_encode($data[0]), 'OU=Siège') != false) {
                    $name = $data[1];
                    $agence = 'Siège';
                    $fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $users[] = array('name' => $name, 'fullname' => $fullname, 'agence' => $agence);
                } elseif (strpos($data[0], "CN=Users") === false && strpos($data[0], "OU=_Old") === false && mb_stristr($data[0], 'OU=Bron') === false && mb_stristr(utf8_encode($data[0]), 'OU=Siège') === false) {
                    $name = $data[1];
                    $OU = explode('OU=', $data[0]);
                    if (array_key_exists(1, $OU)) {
                        $agence = str_replace(',', '', $OU[1]);
                    } else {
                        $agence = null;
                    }
                    $fullname = $this->GetBetween('CN=', ',', $data[0]);
                    $users[] = array('name' => $name, 'fullname' => $fullname, 'agence' => $agence);
                }
            }
            fclose($handle);
        }

        unset($users[0]);

        $userEM = $this->em;

        foreach ($users as $user) {

            if ($userEM->getRepository('NoxIntranetUserBundle:User')->findByUsername($user['name']) == null) {
                // On crée l'utilisateur
                $newUser = new User();

                $fullname = explode(' ', $user['fullname']);
                $firstname = '';
                $lastname = '';

                foreach ($fullnames as $fullname) {
                    if (ctype_upper($fullname)) {
                        if ($lastname != '') {
                            $lastname = $lastname . ' ' . $fullname;
                        } else {
                            $lastname = $fullname;
                        }
                    } else {
                        if ($firstname != '') {
                            $firstname = $firstname . ' ' . $fullname;
                        } else {
                            $firstname = $fullname;
                        }
                    }
                }

                // Le nom d'utilisateur et le mot de passe sont identiques
                $newUser->setUsername($user['name']);
                $newUser->setFirstname($firstname);
                $newUser->setLastname($lastname);
                $newUser->setAgence($user['agence']);

                $newUsersNames[] = $user['name'];
            }
        }

        $existantUsers = $userEM->getRepository('NoxIntranetUserBundle:User')->findAll();


        $deleteUserNames = null;

        foreach ($existantUsers as $existantUser) {
            $i = 1;
            $find = false;
            $existantUser->getUsername();
            while (!$find && $i <= sizeof($users)) {
                if ($existantUser->getUsername() == $users[$i]['name']) {
                    $find = true;
                }
                $i++;
            }
            if (!$find && $existantUser->getUsername() != 'superadmin' && $existantUser->getLocal() != true) {

                $deleteUserNames[] = $existantUser->getUsername();
            }
        }


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

        $usersAction = array('new' => $newUsersNames, 'delete' => $deleteUserNames);

        return $usersAction;
    }

}
