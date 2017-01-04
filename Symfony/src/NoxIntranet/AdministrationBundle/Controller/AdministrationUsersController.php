<?php

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdministrationUsersController extends Controller {

    public function administrationUsernameAction(Request $request, $numPage, $roleUser, $termeRecherche) {

        if ($termeRecherche == 'aucun') {
            $name = $request->query->get('recherche');
        } else {
            $name = $termeRecherche;
        }

        $em = $this->getDoctrine()->getManager();

        //$users = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array('username' => $name), array('username' => 'ASC'));

        $repository = $em->getRepository('NoxIntranetUserBundle:User');
        $query = $repository->createQueryBuilder('p')
                ->orderBy('p.username', 'ASC')
                ->where('p.username LIKE :name')
                ->setParameter('name', '%' . $name . '%')
                ->getQuery();
        $users = $query->getResult();

        $usersAfficher = null;
        $usersAfficher = array();
        $usersWithRole = array();
        $usersWhitoutRole = array();

        if ($roleUser == "ROLE_USER") {
            $usersAfficher = $users;
        } elseif ($roleUser == "LOCAL") {
            foreach ($users as $user) {
                $asRole = false;
                $role = $user->getLocal();

                if ($asRole) {
                    $usersWithRole[] = $user;
                } else {
                    $usersWhitoutRole[] = $user;
                }
            }

            $usersAfficher = array_merge($usersWithRole, $usersWhitoutRole);
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
        }

        if ($usersAfficher == null) {
            $nbPages = 1;
            $usersPages = null;
        } else {
            $nbPages = intval(ceil(sizeof($usersAfficher) / 20));
            $usersPages = array_chunk($usersAfficher, 20);
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig', array('recherche' => true, 'utilisateurs' => $usersPages[$numPage - 1], 'nbPage' => $nbPages, 'numPage' => $numPage, 'roleUser' => $roleUser, 'termeRecherche' => $name));
    }

    public function editionUserAction($userID, Request $request, $numPage, $roleUser) {

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('NoxIntranetUserBundle:User')->find($userID);

        $users = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array(), array('username' => 'ASC'));

        $roleAdmin = "";
        $roleReference = "";
        $roleCompetences = "";
        $roleProcedures = "";
        $roleNews = "";
        $roleFAQ = "";
        $roleLiens = "";
        $roleQualite = "";
        $roleRH = "";

        if ($request->get('Admin') == 'Admin') {
            $roleAdmin = 'ROLE_ADMIN';
        }
        if ($request->get('References') == 'References') {
            $roleReference = 'ROLE_REFERENCES';
        }
        if ($request->get('Competences') == 'Competences') {
            $roleCompetences = 'ROLE_COMPETENCES';
        }
        if ($request->get('Procedures') == 'Procedures') {
            $roleProcedures = 'ROLE_PROCEDURES';
        }
        if ($request->get('News') == 'News') {
            $roleNews = 'ROLE_COMMUNICATION';
        }
        if ($request->get('FAQ') == 'FAQ') {
            $roleFAQ = 'ROLE_FAQ';
        }
        if ($request->get('Liens') == 'Liens') {
            $roleLiens = 'ROLE_LIENS';
        }
        if ($request->get('Qualite') == 'Qualite') {
            $roleQualite = 'ROLE_QUALITE';
        }
        if ($request->get('RH') == 'RH') {
            $roleQualite = 'ROLE_RH';
        }

        $user->setRoles(array($roleAdmin, $roleReference, $roleCompetences, $roleProcedures, $roleNews, $roleFAQ, $roleLiens, $roleQualite, $roleRH, 'ROLE_USER'));
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', "Le rôle de l'utilisateur a bien été modifié.");

        $nbPages = ceil(sizeof($users) / 20);

        $usersPages = array_chunk($users, 20);

        return $this->render('NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig', array('recherche' => false, 'utilisateurs' => $usersPages[$numPage - 1], 'nbPage' => $nbPages, 'numPage' => $numPage, 'roleUser' => $roleUser));
    }

    function exportUserAction(Request $request) {

        $root = $this->get('kernel')->getRootDir() . '\..';

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array(), array('username' => 'ASC'));

        $listeUsers = fopen($root . '\utilisateurs.csv', 'w');

        fputcsv($listeUsers, array('Nom D\'utilisateur', 'Roles', 'Local'), ';');

        foreach ($users as $user) {

            $role = null;

            $username = $user->getUsername();
            foreach ($user->getRoles() as $roleUser) {
                if (next($users)) {
                    $role = $role . $roleUser . "/";
                } else {
                    $role = $role . $roleUser;
                }

                $role = str_replace(',', '', $role);
            }
            if ($user->getLocal()) {
                $local = 'oui';
            } else {
                $local = 'non';
            }

            fputcsv($listeUsers, array($username, $role, $local), ';');
        }

        $file = $root . '\utilisateurs.csv';

        var_dump($file);

        if (file_exists($root . '\utilisateurs.csv')) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            unlink($file);
        }

        return $this->redirect($request->server->get('HTTP_REFERER'));
    }

    function collaborateursEnLigneAction() {
        return $this->render('NoxIntranetAdministrationBundle:AdministrationUser:collaborateursEnLigne.html.twig');
    }

    /**
     * @Template("@NoxIntranetAdministration/AdministrationUser/whoIsOnline.html.twig")
     */
    public function whoIsOnlineAction() {
        $users = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User')->getActive();

        return array('users' => $users);
    }

}
