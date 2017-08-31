<?php

namespace NoxIntranet\AdministrationBundle\Controller;

use NoxIntranet\UserBundle\Entity\Entite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\UserBundle\Entity\User;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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

        $root = $this->get('kernel')->getRootDir() . '\..';

        $output = null;

        exec($root . '\scripts\recupUsers.bat', $output);

        for ($i = 0; $i < 17; $i++) {
            unset($output[$i]);
        }

        $request->getSession()->getFlashBag()->add('notice', "La base de données utilisateurs a été mise à jours.");

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig', array('outputs' => $output, 'ajout' => false, 'confirmation' => false));
        //, array('usernames' => $newUserNames, 'ajout' => 'true'));
    }

    public function administrationUserVerifDBMajAction() {

        $root = $this->get('kernel')->getRootDir() . '\..';

        $output = null;

        exec($root . '\scripts\verifRecupUsers.bat', $output);

        for ($i = 0; $i < 17; $i++) {
            unset($output[$i]);
        }

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig', array('outputs' => $output, 'ajout' => true, 'confirmation' => true));
    }

    public function administrationBDDRestaurationAction() {

        return $this->render('NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig', array('ajout' => false, 'confirmationRestauration' => true));
    }

    public function administrationBDDRestaurationConfirmationAction(Request $request) {

        $root = $this->get('kernel')->getRootDir() . '\..';

        $output = null;

        exec($root . '\scripts\RestaurationBDD.bat', $output);

        if ($output != null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "La restauration a échoué !");
        } else {
            $request->getSession()->getFlashBag()->add('notice', "La base de données a été restauré avec succés.");
        }

        return $this->redirectToRoute('nox_intranet_administration_userDB');
    }

    public function sauvegardeBDDAction(Request $request) {

        $root = $this->get('kernel')->getRootDir() . '\..';

        $output = null;

        exec($root . '\scripts\BDDDump.bat', $output);

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

        return $this->redirectToRoute('nox_intranet_liens');
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

    public function uploadFichierHierarchieRHAction(Request $request) {
        $baseurl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath(); // Url de base du dossier web public.
        $pathFichierHierarchie = $baseurl . '/uploads/FichierHierarchieRH/HierarchieRH.xlsx';
        $pathExemple = $baseurl . '/uploads/FichierHierarchieRH/Exemple.pdf';

        // Génération du formulaire d'upload du fichier de hiérachie RH.
        $formUpload = $this->createFormBuilder()
                ->add('fichierRH', FileType::class, array(
                    'attr' => array('accept' => ".xlsx, application/vnd.ms-excel")
                ))
                ->add('envoiFichier', SubmitType::class)
                ->getForm();

        // Traitement du formulaire.
        $formUpload->handleRequest($request);
        if ($formUpload->isValid()) {
            $file = $formUpload->get('fichierRH')->getData(); // On récupére le fichier.
            // On vérifie si le fichier est bien de type xlsx sinon on affiche un message d'erreur.
            if ($file->getClientOriginalExtension() !== 'xlsx') {
                $request->getSession()->getFlashBag()->add('noticeErreur', "Le fichier doit être au format 'xlsx'."); // On affiche un message de confirmation du transfert.
                return $this->redirectToRoute('nox_intranet_administration_upload_fichier_hierarchie_rh'); // On redirige vers l'envoi de fichier.
            }

            $filename = 'HierarchieRH.xlsx'; // Nom du fichier.
            $path = $this->get('kernel')->getRootDir() . '/../web/uploads/FichierHierarchieRH'; // Chemin du dossier d'upload.
            $file->move($path, $filename); // On transfert le fichier.

            exec($this->get('kernel')->getRootDir() . '/../scripts/RHHierarchieExtraction.bat'); // On met la base de donnée de hiérarchie à jours avec le nouveau fichier.

            $request->getSession()->getFlashBag()->add('notice', "Le fichier de hiérarchie a bien été transféré."); // On affiche un message de confirmation du transfert.
            return $this->redirectToRoute('nox_intranet_administration_upload_fichier_hierarchie_rh'); // On redirige vers l'envoi de fichier.
        }

        return $this->render('NoxIntranetAdministrationBundle:Administration:uploadFichierHierarchieRH.html.twig', array('formUpload' => $formUpload->createView(),
                    'pathFichierHierarchie' => $pathFichierHierarchie, 'pathExemple' => $pathExemple
        ));
    }
    
    public function administrationEntiteAction() { 
        $em = $this->getDoctrine()->getManager();
        $entite = $em->getRepository('NoxIntranetUserBundle:Entite')->findAll();
        return $this->render('NoxIntranetAdministrationBundle:Administration:adminEntite.html.twig', array('entite' => $entite));
    }
    
    public function administrationModifEntiteAction($id,Request $request) {  
        $em = $this->getDoctrine()->getManager();
        $entite = $em->getRepository('NoxIntranetUserBundle:Entite')->findById($id);

        
        // Génération du formulaire d'upload du fichier de hiérachie RH.
        $modifEntite = $this->createFormBuilder()
                ->add('societe',     TextType::class, array(
                    'attr' => array('value' => $entite[0]->getSociete())
                ))
                ->add('etablissement',     TextType::class, array(
                    'attr' => array('value' => $entite[0]->getEtablissement())
                ))
                ->add('aa',     TextType::class, array(
                    'attr' => array('value' => $entite[0]->getAa())
                ))
                ->add('da',     TextType::class, array(
                    'attr' => array('value' => $entite[0]->getDa())
                ))
                ->add('arh',     TextType::class, array(
                    'attr' => array('value' => $entite[0]->getArh())
                ))
                ->add('n2',     TextType::class, array(
                    'attr' => array('value' => $entite[0]->getN2())
                ))
                ->add('modifer', SubmitType::class)
                ->getForm();
        
        // Si la requête est en POST
        if ($request->isMethod('POST')) {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $modifEntite contient les valeurs entrées dans le formulaire par le visiteur
          $modifEntite->handleRequest($request);

          // On vérifie que les valeurs entrées sont correctes
          // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          if ($modifEntite->isValid()) {
              $formodif = $modifEntite->getData();
            // On enregistre notre objet $modifEntite dans la base de données, par exemple
             
                $entite[0]->setSociete($formodif["societe"]);
                $entite[0]->setEtablissement($formodif["etablissement"]);
                $entite[0]->setAa($formodif["aa"]);
                $entite[0]->setDa($formodif["da"]);    
                $entite[0]->setArh($formodif["arh"]);    
                $entite[0]->setN2($formodif["n2"]);  
   

            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Entite à bien été modifier.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_administration_entite');
          }
        }
        
        return $this->render('NoxIntranetAdministrationBundle:Administration:adminModifEntite.html.twig', array('entite' => $entite, 'form' => $modifEntite->createView()));
        
        
        
        
    }

    
}