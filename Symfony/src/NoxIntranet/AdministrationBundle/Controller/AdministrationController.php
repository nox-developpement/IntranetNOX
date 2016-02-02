<?php

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use NoxIntranet\UserBundle\Entity\User;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\ConsoleOutput;

class AdministrationController extends Controller {

    public function administrationAction() {

        return $this->render('NoxIntranetAdministrationBundle:Administration:administration.html.twig');
    }

    public function administrationNewsAction() {

        return $this->render('NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig');
    }

    public function administrationQualiteAction() {

        return $this->render('NoxIntranetAdministrationBundle:AdministrationNews:administrationQualité.html.twig');
    }

    public function administrationUserAction($numPage, $roleUser) {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array(), array('username' => 'ASC'));

        $usersAfficher = array();
        $usersWithRole = array();
        $usersWhitoutRole = array();

        if ($roleUser == "ROLE_USER") {
            $usersAfficher = $users;
        } elseif ($roleUser == "LOCAL") {
            foreach ($users as $user) {
                $asRole = false;
                $role = $user->getLocal();

                if ($role == true) {
                    $asRole = true;
                }
                if ($asRole) {
                    $usersWithRole[] = $user;
                } else {
                    $usersWhitoutRole[] = $user;
                }
            }

            $usersAfficher = array_merge($usersWithRole, $usersWhitoutRole);

//            foreach ($users as $user) {
//                $asRole = false;
//                $role = $user->getLocal();
//
//                if ($role == "ROLE_ADMIN") {
//                    $asRole = true;
//                }
//                if (!$asRole) {
//                    $usersAfficher[] = $user;
//                }
//            }
        } else {
            foreach ($users as $user) {
                $asRole = false;
                $roles = $user->getRoles();
                foreach ($roles as $role) {
                    if ($role == $roleUser) {
                        $asRole = true;
                    }
                }
                if ($asRole) {
                    $usersWithRole[] = $user;
                } else {
                    $usersWhitoutRole[] = $user;
                }
            }

            $usersAfficher = array_merge($usersWithRole, $usersWhitoutRole);

//            foreach ($users as $user) {
//                $asRole = false;
//                $roles = $user->getRoles();
//                foreach ($roles as $role) {
//                    if ($role == $roleUser) {
//                        $asRole = true;
//                    }
//                }
//                if (!$asRole) {
//                    $usersAfficher[] = $user;
//                }
//            }
        }



        $nbPages = ceil(sizeof($usersAfficher) / 20);

        $usersPages = array_chunk($usersAfficher, 20);

        return $this->render('NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig', array('recherche' => false, 'utilisateurs' => $usersPages[$numPage - 1], 'nbPage' => $nbPages, 'numPage' => $numPage, 'roleUser' => $roleUser));
    }

    public function administrationUserDBAction() {

        $output = null;

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig', array('outputs' => $output, 'ajout' => 'false', 'confirmation' => false));
    }

    public function administrationUserDBMajAction(Request $request) {

        $output = null;

        exec('C:\wamp\www\Symfony\recupUsers.bat', $output);

        for ($i = 0; $i < 17; $i++) {
            unset($output[$i]);
        }

        $request->getSession()->getFlashBag()->add('notice', "La base de données utilisateurs a été mise à jours.");

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig', array('outputs' => $output, 'ajout' => false, 'confirmation' => false));
        //, array('usernames' => $newUserNames, 'ajout' => 'true'));
    }

    public function administrationUserVerifDBMajAction(Request $request) {

        $output = null;

        exec('C:\wamp\www\Symfony\verifRecupUsers.bat', $output);

        for ($i = 0; $i < 17; $i++) {
            unset($output[$i]);
        }

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig', array('outputs' => $output, 'ajout' => true, 'confirmation' => true));
        //, array('usernames' => $newUserNames, 'ajout' => 'true'));
    }

    public function administrationBDDRestaurationAction(Request $request) {

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig', array('ajout' => false, 'confirmationRestauration' => true));
    }
    
    public function administrationBDDRestaurationConfirmationAction(Request $request) {

        $output = null;

        exec('C:\wamp\www\Symfony\RestaurationBDD.bat', $output);

        if ($output != null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "La restauration a échoué !");
        } else {
            $request->getSession()->getFlashBag()->add('notice', "La base de données a été restauré avec succés.");
        }

        return $this->redirectToRoute('nox_intranet_administration_userDB');
    }

    public function sauvegardeBDDAction(Request $request) {
        $output = null;

        exec('C:\wamp\www\Symfony\BDDDump.bat', $output);

        if ($output != null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "La sauvegarde a échoué !");
        } else {
            $request->getSession()->getFlashBag()->add('notice', "La base de données a été sauvegardé avec succés.");
        }

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig', array('outputs' => $output, 'ajout' => false, 'confirmation' => false));
    }

    public function administrationAdminAction() {
        $em = $this->getDoctrine()->getManager();

        $admins = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array(), array('username' => 'ASC'));

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationAdmins.html.twig', array('admins' => $admins));
    }

    public function administrationAdminSuppressionAction($adminID, Request $request) {

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('NoxIntranetUserBundle:User')->find($adminID);

        if ($user->getLocal() == true) {
            $em->remove($user);
            $request->getSession()->getFlashBag()->add('notice', "L'administrateur local " . $user->getUsername() . " a été supprimé.");
        } else {
            $roles[] = '';
            foreach ($user->getRoles() as $role) {
                if ($role != 'ROLE_ADMIN') {
                    $roles[] = $role;
                }
            }
            $user->setRoles($roles);
            $request->getSession()->getFlashBag()->add('notice', "L'utilisateur " . $user->getUsername() . " a perdu ses drois d'administration.");
        }

        $em->flush();

        $admins = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array(), array('username' => 'ASC'));

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationAdmins.html.twig', array('admins' => $admins));
    }

    public function administrationAdminCreationAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        if ($request->query->get('adminname') != null && $request->query->get('adminpassword') != null && $request->query->get('adminpasswordcheck') != null) {
            $adminName = $request->query->get('adminname');
            $adminpassword = $request->query->get('adminpassword');
            $adminpasswordcheck = $request->query->get('adminpasswordcheck');

            if (strcmp($adminpassword, $adminpasswordcheck) != 0) {
                $request->getSession()->getFlashBag()->add('noticeErreur', "Les mots de passes entrés ne correspondent pas !");
            } elseif ($em->getRepository('NoxIntranetUserBundle:User')->findByUsername($adminName) != null) {
                $request->getSession()->getFlashBag()->add('noticeErreur', "Ce nom d'utilisateur est déjà utilisé !");
            } else {
                $newAdmin = new User();
                $newAdmin->setUsername($adminName);
                $newAdmin->setFirstname($adminName);
                $newAdmin->setLastname('');
                $newAdmin->setPassword($adminpassword);
                $newAdmin->setLocal(true);
                $newAdmin->setRoles(array('ROLE_ADMIN', 'ROLE_USER'));

                $em->persist($newAdmin);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', "L'administrateur " . $adminName . " a été créé.");
            }
        } else {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous devez remplir tous les champs !");
        }

        $admins = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array(), array('username' => 'ASC'));
        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationAdmins.html.twig', array('admins' => $admins));
    }

    public function administrationAdminMDPAction(Request $request) {
        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig');
    }

    public function administrationAdminMDPACheckAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.token_storage')->getToken()->getUser();

        if ($request->query->get('oldpassword') == null || $request->query->get('newpassword') == null || $request->query->get('newpasswordcheck') == null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous devez remplir tous les champs !");
        } else {
            $oldpassword = $request->query->get('oldpassword');
            $newspassword = $request->query->get('newpassword');
            $newspasswordcheck = $request->query->get('newpasswordcheck');

            if (strcmp($user->getPassword(), $oldpassword) != 0) {
                $request->getSession()->getFlashBag()->add('noticeErreur', "L'ancien mot de passe ne correspond pas !");
            } else {

                if (strcmp($newspassword, $newspasswordcheck) != 0) {
                    $request->getSession()->getFlashBag()->add('noticeErreur', "Les mots de passes entrés ne correspondent pas !");
                } else {
                    $user->setPassword($newspassword);
                    $em->persist($user);
                    $em->flush();
                    $request->getSession()->getFlashBag()->add('notice', "Votre mot de passe a été modifier.");

                    return $this->render('NoxIntranetAdministrationBundle:Administration:administration.html.twig');
                }
            }
        }

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig');
    }

    public function administrationTicketingAction() {
        $adresseCourante = $_SERVER['HTTP_HOST'];
        return $this->redirect('http://' . $adresseCourante . '/Symfony/web/support/scp/index.php');
    }

    public function administrationLiensAction() {

        $em = $this->getDoctrine()->getManager();

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('libelle' => 'asc'));
        
        $categories = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByType('Catégorie');

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig', array('liens' => $liens, 'catégories' => $categories));
    }

    public function administrationArchivesAction() {
        return $this->render('NoxIntranetAdministrationBundle:Administration:accueilarchives.html.twig');
    }

    public function modifierTexteEncartAction(Request $request, $newText, $section) {

        $em = $this->getDoctrine()->getManager();

        $textEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection($section);

        if ($textEncart != null) {
            $textEncart->setText($newText);
        } else {
            $newEncart = new texteEncart();

            $newEncart->setSection($section);
            $newEncart->setText($newText);
            $em->persist($newEncart);
        }
        $em->flush();
        return $this->redirect($request->server->get('HTTP_REFERER'));
    }

}
