<?php

namespace NoxIntranet\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\PointageBundle\Entity\Tableau;
use NoxIntranet\PointageBundle\Controller\AssistanteAgenceGetter;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PointageController extends Controller {

    // Affiche le tableau de pointage vide du mois et de l'année courante.
    public function accueilAction(Request $request) {
        // On récupére la date des premiers et derniers jours du mois courant.
        $date = '01-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];
        $end_date = $this->getMonthAndYear()['days'] . '-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];

        // On récupére toutes les dates des jours du mois.
        $monthDates = array();
        $i = 0;
        while (strtotime($date) <= strtotime($end_date)) {
            $monthDates[$i] = strtotime($date);
            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
            $i++;
        }

        // On récupére les jours fériés.
        $joursFeries = $this->getPublicHoliday($this->getMonthAndYear()['year']);

        // On récupére le nom de l'utilisateur courant.
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        // On récupére la feuille de pointage de l'utilisateur pour le mois et l'année courante.
        $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user->getUsername(), 'month' => $this->getMonthAndYear()['month'], 'year' => $this->getMonthAndYear()['year']));

        // Si la feuille de pointage n'existe pas, on la crée.
        if (empty($tableData)) {
            $tableData = new Tableau();

            $tableData->setUser($user->getUsername());
            $tableData->setMonth($this->getMonthAndYear()['month']);
            $tableData->setYear($this->getMonthAndYear()['year']);
            $tableData->setData('');
            $tableData->setSignatureCollaborateur('');
            $tableData->setStatus(0);

            $em->persist($tableData);
            $em->flush();
        }

        // Génére le formulaire de validation du pointage.
        $form = $this->createFormBuilder()
                ->add('Valider', SubmitType::class)
                ->add('month', 'hidden', array(
                    'data' => $this->getMonthAndYear()['month']
                ))
                ->add('year', 'hidden', array(
                    'data' => $this->getMonthAndYear()['year']
                ))
                ->getForm();

        // Valide le pointage, le sauvegarde et passe son status à 1 (Validation assistante agence).
        $form->handleRequest($request);
        if ($form->isValid()) {

            $newTableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user->getUsername(), 'month' => $form->get('month')->getData(), 'year' => $form->get('year')->getData()));

            if (empty($newTableData)) {
                $newTableData = new Tableau();

                $newTableData->setUser($user->getUsername());
                $newTableData->setMonth($form->get('month')->getData());
                $newTableData->setYear($form->get('year')->getData());
                $newTableData->setData('');
                $newTableData->setSignatureCollaborateur('');
                $newTableData->setStatus(0);

                $em->persist($newTableData);
                $em->flush();
            }

            $newTableData->setStatus(1);

            $em->persist($newTableData);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'La feuille de pointage a été validé.');

            $this->redirectToRoute('nox_intranet_pointage');
        }

        return $this->render('NoxIntranetPointageBundle:Pointage:pointage.html.twig', array('monthDates' => $monthDates, 'currentMonth' => $this->getMonthAndYear()['month'],
                    'currentYear' => $this->getMonthAndYear()['year'], 'form' => $form->createView(), 'joursFeries' => $joursFeries));
    }

    // Retourne la date courante.
    public function getMonthAndYear() {

        $month = date('n');
        $year = date('Y');

        $date['month'] = $month;
        $date['year'] = $year;
        $date['days'] = date('t');

        return $date;
    }

    // Affiche le tableau administratif de pointage vide du mois et de l'année courante.
    public function acceuilAdministratifAction() {
        $date = '01-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];
        $end_date = $this->getMonthAndYear()['days'] . '-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];

        $monthDates = array();

        $i = 0;
        while (strtotime($date) <= strtotime($end_date)) {
            $monthDates[$i] = strtotime($date);
            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
            $i++;
        }

        return $this->render('NoxIntranetPointageBundle:Pointage:pointageAdministratif.html.twig', array('monthDates' => $monthDates, 'currentMonth' => $this->getMonthAndYear()['month'],
                    'currentYear' => $this->getMonthAndYear()['year']));
    }

    // Crypte les données à l'aide de la clé de cryptage fournie
    function f_crypt($private_key, $str_to_crypt) {
        $private_key = md5($private_key);
        $letter = -1;
        $new_str = '';
        $strlen = strlen($str_to_crypt);

        for ($i = 0; $i < $strlen; $i++) {
            $letter++;
            if ($letter > 31) {
                $letter = 0;
            }
            $neword = ord($str_to_crypt{$i}) + ord($private_key{$letter});
            if ($neword > 255) {
                $neword -= 256;
            }
            $new_str .= chr($neword);
        }
        return base64_encode($new_str);
    }

    // Décrypte les données à l'aide de la clé de cryptage fournie
    function f_decrypt($private_key, $str_to_decrypt) {
        $private_key = md5($private_key);
        $letter = -1;
        $new_str = '';
        $str_to_decrypt = base64_decode($str_to_decrypt);
        $strlen = strlen($str_to_decrypt);
        for ($i = 0; $i < $strlen; $i++) {
            $letter++;
            if ($letter > 31) {
                $letter = 0;
            }
            $neword = ord($str_to_decrypt{$i}) - ord($private_key{$letter});
            if ($neword < 1) {
                $neword += 256;
            }
            $new_str .= chr($neword);
        }
        return $new_str;
    }

    // Lis le fichier Excel de la RH et récupère le nom des assistantess d'agence.
    function getAssistantesAgence() {

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();

        $assistantes = array();

        $assistantes['Tristan BESSON'] = 'Tristan BESSON';

        // Récupère le nom des assistantes d'agence et leurs supérieurs.
        foreach ($users as $user) {
            $assistantes[$user->getAA()] = $user->getAA();
            $assistantes[$user->getDA()] = $user->getDA();
            $assistantes[$user->getRH()] = $user->getRH();
        }
        return $assistantes;
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante d'agence connectée.
    function getUsersByAssistante($securityName, $em) {

        // On récupére les utilisateurs qui ont l'assistante comme supérieur hiérarchique.
        $qb = $em->createQueryBuilder();
        $qb
                ->add('select', 'u')
                ->add('from', 'NoxIntranetPointageBundle:UsersHierarchy u')
                ->add('where', 'u.aa = :securityName OR u.da = :securityName OR u.rh = :securityName')
                ->setParameter('securityName', $securityName);
        $query = $qb->getQuery();
        $usersHierarchie = $query->getResult();

        $users = array();
        foreach ($usersHierarchie as $user) {
            $users[$user->getUsername()] = $user->getPrenom() . ' ' . $user->getNom();
        }

        return $users;
    }

    // Affiche l'inteface de visualisation/correction/validation des pointages des collaborateurs en fonction de l'assistante d'agence.
    public function assistantesAgenceGestionPointageAction() {

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();

        // Vérifie que l'utilistateur est une assistante d'agence.
        if (in_array($securityName, $this->getAssistantesAgence())) {

            // Génére les dates du mois courant.
            $date = '01-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];
            $end_date = $this->getMonthAndYear()['days'] . '-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];
            $monthDates = array();
            $i = 0;
            while (strtotime($date) <= strtotime($end_date)) {
                $monthDates[$i] = strtotime($date);
                $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
                $i++;
            }

            // On récupére les jours fériés.
            $joursFeries = $this->getPublicHoliday($this->getMonthAndYear()['year']);

            // Génére le formulaire de séléction du pointage par nom d'utilisateur, mois et année.
            $form = $this->createFormBuilder()
                    ->add('User', ChoiceType::class, array(
                        'choices' => $this->getUsersByAssistante($securityName, $em),
                        'choices_as_values' => false,
                        'attr' => array(
                            'size' => 5
                        ),
                        'choice_attr' => function($val) use ($securityName, $em) {
                    return ['title' => $this->getUsersByAssistante($securityName, $em)[$val]];
                }
                    ))
                    ->add('Month', ChoiceType::class, array(
                        'placeholder' => 'Selectionnez le moi',
                        'attr' => array(
                            'disabled' => true
                        )
                    ))
                    ->add('Year', ChoiceType::class, array(
                        'placeholder' => 'Selectionnez l\'année',
                        'attr' => array(
                            'disabled' => true
                        )
                    ))
                    ->getForm();

            // Génére le formulaire de séléction du pointage par pointage à valider.
            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            $formToCheckPointage = $this->createFormBuilder()
                    ->add('Pointage', EntityType::class, array(
                        'class' => 'NoxIntranetPointageBundle:Tableau',
                        'query_builder' => function (EntityRepository $er) use ($securityName, $em) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.status = '1' AND u.user IN (:users)")
                                    ->orderBy('u.user', 'ASC')
                                    ->setParameter('users', array_keys($this->getUsersByAssistante($securityName, $em)));
                        },
                        'choice_label' => function($tableau) use ($em, $month) {
                            return $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($tableau->getUser())->getFirstname() . ' ' . $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($tableau->getUser())->getLastname() . ' (' . $month[$tableau->getMonth()] . ' ' . $tableau->getYear() . ')';
                        },
                        'attr' => array(
                            'size' => 5
                        ),
                        'choice_attr' => function($tableau) use ($em, $month) {
                    return array('title' => $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($tableau->getUser())->getFirstname() . ' ' . $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($tableau->getUser())->getLastname() . ' (' . $month[$tableau->getMonth()] . ' ' . $tableau->getYear() . ')');
                }
                    ))
                    ->getForm();

            return $this->render('NoxIntranetPointageBundle:Pointage:assistantesAgenceGestionPointages.html.twig', array('form' => $form->createView(), 'monthDates' => $monthDates,
                        'currentMonth' => $this->getMonthAndYear()['month'], 'currentYear' => $this->getMonthAndYear()['year'],
                        'formToCheckPointage' => $formToCheckPointage->createView(), 'joursFeries' => $joursFeries));
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistant(e)s d\'agence peuvent accéder à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Compile les feuilles de pointages du mois courant validées par les assistantes d'agence.
    public function assistantesAgencePointagesCompilationAction(Request $request) {

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();

        // Vérifie que l'utilistateur est une assistante d'agence.
        if (in_array($securityName, $this->getAssistantesAgence())) {

            // Initialisation d'une échelle de temps.
            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            for ($i = $this->getMonthAndYear()['year'] - 50; $i < $this->getMonthAndYear()['year'] + 50; $i++) {
                $year[$i] = $i;
            }

            // On récupére les jours fériés.
            $joursFeries = $this->getPublicHoliday($this->getMonthAndYear()['year']);

            // Retourne le nombre de pointages des collaborateurs qui n'ont pas encore était validés par l'assistante d'agence.
            function getNbPointagesNonValides($em, $users, $context) {
                // On récupére tout les tableau de pointages du mois et de l'année courante.
                $pointagesEntity = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findBy(array('month' => $context->getMonthAndYear()['month'], 'year' => $context->getMonthAndYear()['year']));
                $pointageEnAttenteValidationAA = array(); // Initialisation du tableau des pointages en attente de validation par l'assistant d'agence.
                $pointageValideParCollaborateur = array(); // Initialisation du tableau des pointages validés par le collaborateur.
                // Pour chaque pointage.
                foreach ($pointagesEntity as $pointage) {
                    // Si le collaborateur est attribué à l'assistant d'agence et que le pointage a été validé par le collaborateur mais pas encore par l'assistant d'agence.
                    if (in_array($pointage->getUser(), array_keys($users)) && $pointage->getStatus() === '1') {
                        $pointageEnAttenteValidationAA[] = $pointage; // On l'ajout au tableau des pointages en attente de validation par l'assistant d'agence.
                    }
                    // Si le collaborateur est attribué à l'assistant d'agence et que le pointage a au moins été validé par le collaborateur.
                    if (in_array($pointage->getUser(), array_keys($users)) && $pointage->getStatus() >= '1') {
                        $pointageValideParCollaborateur[] = $pointage->getUser(); // On ajoute l'username du collaborateur au tableau des pointages validés par le collaborateur.
                    }
                }

                // On récupére les entitées des utilisateurs qui n'ont pas remplis/validé leur pointage.
                $collaborateurSansPointage = array();
                foreach (array_diff(array_keys($users), $pointageValideParCollaborateur) as $collaborateur) {
                    $collaborateurEntity = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($collaborateur);
                    if (!empty($collaborateurEntity)) {
                        $collaborateurSansPointage[$collaborateur] = $collaborateurEntity->getFirstname() . " " . $collaborateurEntity->getLastname();
                    }
                }

                return array('pointageEnAttenteValidationAA' => $pointageEnAttenteValidationAA, 'collaborateurSansPointage' => $collaborateurSansPointage);
            }

            // Retourne les pointages valides des collaborateurs de l'assistante d'agence.
            function getPointagesValides($em, $users, $context) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $context->getMonthAndYear()['month'], 'year' => $context->getMonthAndYear()['year'], 'status' => 2), array('lastname' => 'asc', 'firstname' => 'asc'));
                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    if (in_array($pointage->getUser(), array_keys($users))) {
                        $pointage->setAbsences(json_decode($pointage->getAbsences(), true));
                        $pointages[] = $pointage;
                    }
                }

                return $pointages;
            }

            // Retourne les pointages prêt à être compilés.
            function getPointagesACompile($em, $users, $month, $year) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $month, 'year' => $year, 'status' => 2));
                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    if (in_array($pointage->getUser(), array_keys($users))) {
                        $pointage->setAbsences(json_decode($pointage->getAbsences(), true));
                        $pointages[] = $pointage;
                    }
                }

                return $pointages;
            }

            // Envoi un mail indiquant que la compilation a été validé par les assistants d'agences.
            function sendMailToDestinataire($Destinataires, $validateur, $mois, $annee, $lienValidationCompilation, $collaborateursNonValide, $em, $context) {
                // Pour chaque DA.
                foreach ($Destinataires as $Destinataire) {
                    // On récupére son entitée utilisateur.
                    $DestinataireEntity = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => explode(' ', $Destinataire)[0], 'lastname' => explode(' ', $Destinataire)[1]));

                    // Si l'entitée existe.
                    if (!empty($DestinataireEntity)) {
                        // On génére son adresse email.
                        $mailDestinataire = $DestinataireEntity->getUsername() . '@groupe-nox.com';

                        // On lui envoi un mail lui indiquant que la compilation est prête pour validation.
                        $message = \Swift_Message::newInstance()
                                ->setSubject('Compilation disponible pour validation.')
                                ->setFrom('noreply@groupe-nox.com')
                                ->setTo($mailDestinataire)
                                ->setBody(
                                $context->renderView(
                                        // app/Resources/views/Emails/*.html.twig
                                        'Emails/Pointages/confirmationCompilation.html.twig', array('destinataire' => $DestinataireEntity, 'validateur' => $validateur, 'mois' => $mois, 'annee' => $annee, 'lienValidationCompilation' => $lienValidationCompilation, 'collaborateursNonValide' => $collaborateursNonValide)
                                ), 'text/html'
                                )
                        ;
                        $context->get('mailer')->send($message);
                    }
                }
            }

            // Génération du formulaire de séléction du mois/année.
            $form = $this->createFormBuilder()
                    ->add('Month', ChoiceType::class, array(
                        'choices' => $month,
                        'data' => $this->getMonthAndYear()['month']
                    ))
                    ->add('Year', ChoiceType::class, array(
                        'choices' => $year,
                        'data' => $this->getMonthAndYear()['year']
                    ))
                    ->getForm();


            // Génération du formulaire de validation de la compilation.
            $formValidationRefus = $this->get('form.factory')->createNamedBuilder('formValidationRefus', 'form')
                    ->add('Compilation', SubmitType::class)
                    ->add('month', 'hidden', array(
                        'data' => $this->getMonthAndYear()['month']
                    ))
                    ->add('year', 'hidden', array(
                        'data' => $this->getMonthAndYear()['year']
                    ))
                    ->getForm();

            // Traitement du formulaire de validation de la compilation.
            $formValidationRefus->handleRequest($request);
            if ($formValidationRefus->isValid()) {
                // On récupére les pointages à inclure dans la compilation.
                $pointagesCompilation = getPointagesACompile($em, $this->getUsersByAssistante($securityName, $em), $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData());
                // On initalise la liste des DA concerné par le pointage.
                $DAs = array();
                // Lors du clique sur le bouton de validation.
                if ($formValidationRefus->get('Compilation')->isClicked()) {
                    // Pour chaque pointages.
                    foreach ($pointagesCompilation as $pointage) {
                        // On récupére l'entitée hiérarchique de l'utilisateur associé au pointage.
                        $hierachy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage->getUser());
                        // On ajoute le DA correspondant à l'utilisateur du pointage dans le tableau des DA.
                        $DAs[$hierachy->getDA()] = $hierachy->getDA();

                        $pointage->setStatus(3); // On modifie son status.
                        $pointage->setAbsences(json_encode($pointage->getAbsences(), true)); // On encode ses absences en JSON.
                        $em->persist($pointage);
                    }
                    $this->get('session')->getFlashBag()->add('notice', 'La compilation a été envoyée aux directeur d\'agence/managers.'); // On affiche un message de confirmation.
                    // On envoie un mail au n+1 pour validation.
                    sendMailToDestinataire($DAs, "un/une assistant(e) d'agence", $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData(), $this->generateUrl('nox_intranet_da_manager_pointage_compilation'), getNbPointagesNonValides($em, $this->getUsersByAssistante($securityName, $em), $this)['collaborateurSansPointage'], $em, $this);
                }

                $em->flush(); // On sauvegarde les changements de status en base de donnée.
                // On redirige vers la compilation des pointages.
                return $this->redirectToRoute('nox_intranet_assistantes_agence_pointage_compilation');
            }

            return $this->render('NoxIntranetPointageBundle:Pointage:assistantesAgencePointagesCompilation.html.twig', array('form' => $form->createView(),
                        'pointageNonValide' => getNbPointagesNonValides($em, $this->getUsersByAssistante($securityName, $em), $this),
                        'pointagesValides' => getPointagesValides($em, $this->getUsersByAssistante($securityName, $em), $this),
                        'formValidation' => $formValidationRefus->createView(), 'joursFeries' => $joursFeries
                            )
            );
        }
        // Si l'utilisateur n'est pas une assistante d'agence.
        else {
            // On affiche un message d'erreur et on redirige vers l'accueil.
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistant(e)s d\'agence peuvent accéder à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Lis le fichier Excel de la RH et récupère le nom des directeur d'agences et manager.
    function getDAManager() {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();

        $da = array();

        $da['Tristan BESSON'] = 'Tristan BESSON';

        // Récupère le nom des directeurs d'agence et leurs supérieurs.
        foreach ($users as $user) {
            $da[$user->getDA()] = $user->getDA();
            $da[$user->getRH()] = $user->getRH();
        }

        return $da;
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante d'agence connectée.
    function getUsersByDAManager($securityName, $em) {

        // On récupére les utilisateurs qui ont le DH comme supérieur hiérarchique.
        $qb = $em->createQueryBuilder();
        $qb
                ->add('select', 'u')
                ->add('from', 'NoxIntranetPointageBundle:UsersHierarchy u')
                ->add('where', 'u.da = :securityName OR u.rh = :securityName')
                ->setParameter('securityName', $securityName);
        $query = $qb->getQuery();
        $usersHierarchie = $query->getResult();

        $users = array();
        foreach ($usersHierarchie as $user) {
            $users[$user->getUsername()] = $user->getPrenom() . ' ' . $user->getNom();
        }

        return $users;
    }

    // Compile les feuilles de pointages du mois courant validées par les DA/Manager.
    public function DAManagerPointagesCompilationAction(Request $request) {

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();

        // Vérifie que l'utilistateur est un directeur d'agence ou un manager.
        if (in_array($securityName, $this->getDAManager())) {

            // Initialisation d'une échelle de temps.
            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            for ($i = $this->getMonthAndYear()['year'] - 50; $i < $this->getMonthAndYear()['year'] + 50; $i++) {
                $year[$i] = $i;
            }

            // On récupére les jours fériés.
            $joursFeries = $this->getPublicHoliday($this->getMonthAndYear()['year']);

            function getPointagesValides($em, $users, $context) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $context->getMonthAndYear()['month'], 'year' => $context->getMonthAndYear()['year'], 'status' => 3), array('lastname' => 'asc', 'firstname' => 'asc'));
                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    if (in_array($pointage->getUser(), array_keys($users))) {
                        $pointage->setAbsences(json_decode($pointage->getAbsences(), true));
                        $pointages[] = $pointage;
                    }
                }

                return $pointages;
            }

            // Retourne les pointages prêt à être compilés.
            function getPointagesACompile($em, $users, $month, $year) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $month, 'year' => $year, 'status' => 3));
                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    if (in_array($pointage->getUser(), array_keys($users))) {
                        $pointage->setAbsences(json_decode($pointage->getAbsences(), true));
                        $pointages[] = $pointage;
                    }
                }

                return $pointages;
            }

            // Envoi un mail indiquant que la compilation a été validé par les assistants d'agences.
            function sendMailToDestinataire($Destinataires, $validateur, $mois, $annee, $lienValidationCompilation, $em, $context) {
                // Pour chaque DA.
                foreach ($Destinataires as $Destinataire) {
                    // On récupére son entitée utilisateur.
                    $DestinataireEntity = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => explode(' ', $Destinataire)[0], 'lastname' => explode(' ', $Destinataire)[1]));

                    // Si l'entitée existe.
                    if (!empty($DestinataireEntity)) {
                        // On génére son adresse email.
                        $mailDestinataire = $DestinataireEntity->getUsername() . '@groupe-nox.com';

                        // On lui envoi un mail lui indiquant que la compilation est prête pour validation.
                        $message = \Swift_Message::newInstance()
                                ->setSubject('Compilation disponible pour validation.')
                                ->setFrom('noreply@groupe-nox.com')
                                ->setTo($mailDestinataire)
                                ->setBody(
                                $context->renderView(
                                        // app/Resources/views/Emails/*.html.twig
                                        'Emails/Pointages/confirmationCompilation.html.twig', array('destinataire' => $DestinataireEntity, 'validateur' => $validateur, 'mois' => $mois, 'annee' => $annee, 'lienValidationCompilation' => $lienValidationCompilation)
                                ), 'text/html'
                                )
                        ;
                        $context->get('mailer')->send($message);
                    }
                }
            }

            // Génération du formulaire de séléction du mois/année.
            $form = $this->createFormBuilder()
                    ->add('Month', ChoiceType::class, array(
                        'choices' => $month,
                        'data' => $this->getMonthAndYear()['month']
                    ))
                    ->add('Year', ChoiceType::class, array(
                        'choices' => $year,
                        'data' => $this->getMonthAndYear()['year']
                    ))
                    ->getForm();

            // Génération du formulaire de validation/refus de la compilation.
            $formValidationRefus = $this->get('form.factory')->createNamedBuilder('formValidationRefus', 'form')
                    ->add('Compilation', SubmitType::class)
                    ->add('Refus', SubmitType::class)
                    ->add('month', 'hidden', array(
                        'data' => $this->getMonthAndYear()['month']
                    ))
                    ->add('year', 'hidden', array(
                        'data' => $this->getMonthAndYear()['year']
                    ))
                    ->getForm();

            // Traitement du formulaire de validation/refus
            $formValidationRefus->handleRequest($request);
            if ($formValidationRefus->isValid()) {
                // On récupére les pointages à compiler.
                $pointagesCompilation = getPointagesACompile($em, $this->getUsersByDAManager($securityName, $em), $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData());
                // Lors du clique sur le bouton de compilation.
                if ($formValidationRefus->get('Compilation')->isClicked()) {
                    // On initalise la liste des DA concerné par le pointage.
                    $RHs = array();
                    // Pour chaque pointages à compiler.
                    foreach ($pointagesCompilation as $pointage) {
                        // On récupére l'entitée hiérarchique de l'utilisateur associé au pointage.
                        $hierachy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage->getUser());
                        // On ajoute le RH correspondant à l'utilisateur du pointage dans le tableau des RH.
                        $RHs[$hierachy->getRH()] = $hierachy->getRH();

                        $pointage->setStatus(4); // On change le status du pointage.
                        $pointage->setAbsences(json_encode($pointage->getAbsences(), true)); // On encode les abscences.
                        $em->persist($pointage);
                    }
                    // On envoie un mail au n+1 pour validation.
                    sendMailToDestinataire($RHs, "un directeur d'agence", $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData(), $this->generateUrl('nox_intranet_assistantes_rh_pointage_compilation'), $em, $this);
                    $this->get('session')->getFlashBag()->add('notice', 'La compilation a été validée et envoyée aux assistant(e)s RH.'); // On affiche un message de confirmation.
                }
                // Lors du clique sur le bouton de refus de compilation.
                if ($formValidationRefus->get('Refus')->isClicked()) {
                    // Pour chaque pointages à compiler.
                    foreach ($pointagesCompilation as $pointage) {
                        $pointage->setStatus(2); // On change le status du pointage.
                        $pointage->setAbsences(json_encode($pointage->getAbsences(), true)); // On encode les abscences.
                        $em->persist($pointage);
                    }
                    $this->get('session')->getFlashBag()->add('notice', 'La compilation a été refusée et renvoyée aux assistant(e)s d\'agences.'); // On affiche un message de confirmation de refus.
                }

                $em->flush(); // On sauvegarde les changements en base de données.
                // On redirige vers la compilation des pointages.
                return $this->redirectToRoute('nox_intranet_da_manager_pointage_compilation');
            }

            return $this->render('NoxIntranetPointageBundle:Pointage:DAManagerPointagesCompilation.html.twig', array('form' => $form->createView(),
                        'pointagesValides' => getPointagesValides($em, $this->getUsersByDAMAnager($securityName, $em), $this),
                        'formValidationRefus' => $formValidationRefus->createView(), 'joursFeries' => $joursFeries)
            );
        }
        // Si l'utilisateur n'est pas un DA.
        else {
            // On affiche un message d'erreur et on redirige vers l'accueil.
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les directeurs d\'agence/Managers peuvent accéder à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Lis le fichier Excel de la RH et récupère le nom des assistantes RH/DRH.
    function getAssistantesRH() {

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();

        $assistantesRH = array();

        $assistantesRH['Tristan BESSON'] = 'Tristan BESSON';

        // Récupère le nom des directeurs d'agence et leurs supérieurs.
        foreach ($users as $user) {
            $assistantesRH[$user->getRH()] = $user->getRH();
        }

        return $assistantesRH;
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante RH/DRH connectée.
    function getUsersByAssistantesRH($securityName, $em) {

        // On récupére les utilisateurs qui ont l'assistante RH comme supérieur hiérarchique.
        $qb = $em->createQueryBuilder();
        $qb
                ->add('select', 'u')
                ->add('from', 'NoxIntranetPointageBundle:UsersHierarchy u')
                ->add('where', 'u.rh = :securityName')
                ->setParameter('securityName', $securityName);
        $query = $qb->getQuery();
        $usersHierarchie = $query->getResult();

        $users = array();
        foreach ($usersHierarchie as $user) {
            $users[$user->getUsername()] = $user->getPrenom() . ' ' . $user->getNom();
        }

        return $users;
    }

    // Compile les feuilles de pointages du mois courant validées par les assistantes RH/DRH.
    public function AssistantesRHPointagesCompilationAction(Request $request) {

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();

        // Vérifie que l'utilistateur est un directeur d'agence ou un manager.
        if (in_array($securityName, $this->getAssistantesRH())) {

            // Initialisation d'une échelle de temps.
            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            for ($i = $this->getMonthAndYear()['year'] - 50; $i < $this->getMonthAndYear()['year'] + 50; $i++) {
                $year[$i] = $i;
            }

            // On récupére les jours fériés.
            $joursFeries = $this->getPublicHoliday($this->getMonthAndYear()['year']);

            function getPointagesValides($em, $users, $context) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $context->getMonthAndYear()['month'], 'year' => $context->getMonthAndYear()['year'], 'status' => 4), array('lastname' => 'asc', 'firstname' => 'asc'));
                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    if (in_array($pointage->getUser(), array_keys($users))) {
                        $pointage->setAbsences(json_decode($pointage->getAbsences(), true));
                        $pointages[] = $pointage;
                    }
                }

                return $pointages;
            }

            // Retourne les pointages prêt à être compilés.
            function getPointagesACompile($em, $users, $month, $year) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $month, 'year' => $year, 'status' => 4));
                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    if (in_array($pointage->getUser(), array_keys($users))) {
                        $pointage->setAbsences(json_decode($pointage->getAbsences(), true));
                        $pointages[] = $pointage;
                    }
                }

                return $pointages;
            }

            $form = $this->createFormBuilder()
                    ->add('Month', ChoiceType::class, array(
                        'choices' => $month,
                        'data' => $this->getMonthAndYear()['month']
                    ))
                    ->add('Year', ChoiceType::class, array(
                        'choices' => $year,
                        'data' => $this->getMonthAndYear()['year']
                    ))
                    ->getForm();

            $formValidationRefus = $this->get('form.factory')->createNamedBuilder('formValidationRefus', 'form')
                    ->add('Compilation', SubmitType::class)
                    ->add('Refus', SubmitType::class)
                    ->add('month', 'hidden', array(
                        'data' => $this->getMonthAndYear()['month']
                    ))
                    ->add('year', 'hidden', array(
                        'data' => $this->getMonthAndYear()['year']
                    ))
                    ->getForm();

            $formValidationRefus->handleRequest($request);

            if ($formValidationRefus->isValid()) {

                $pointagesCompilation = getPointagesACompile($em, $this->getUsersByAssistantesRH($securityName, $em), $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData());

                if ($formValidationRefus->get('Compilation')->isClicked()) {
                    foreach ($pointagesCompilation as $pointage) {
                        $pointage->setStatus(5);
                        $pointage->setAbsences(json_encode($pointage->getAbsences(), true));
                        $em->persist($pointage);
                    }
                    $this->get('session')->getFlashBag()->add('notice', 'La compilation a été validée définitivement.');
                }

                if ($formValidationRefus->get('Refus')->isClicked()) {
                    foreach ($pointagesCompilation as $pointage) {
                        $pointage->setStatus(3);
                        $pointage->setAbsences(json_encode($pointage->getAbsences(), true));
                        $em->persist($pointage);
                    }
                    $this->get('session')->getFlashBag()->add('notice', 'La compilation a été refusée et renvoyée aux directeurs d\'agence/Manager.');
                }

                $em->flush();

                return $this->redirectToRoute('nox_intranet_assistantes_rh_pointage_compilation');
            }

            return $this->render('NoxIntranetPointageBundle:Pointage:assistantesRHPointagesCompilation.html.twig', array('form' => $form->createView(),
                        'pointagesValides' => getPointagesValides($em, $this->getUsersByAssistantesRH($securityName, $em), $this),
                        'formValidationRefus' => $formValidationRefus->createView(), 'joursFeries' => $joursFeries)
            );
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistant(e)s RH/DRH peuvent accéder à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Permet de consulter les compilations de pointages ayant été validées.
    public function compilationValidesAction(Request $request) {

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();

        // Vérifie que l'utilistateur est un directeur d'agence/manager ou fait parti de la RH.
        if (in_array($securityName, $this->getAssistantesRH()) || in_array($securityName, $this->getDAManager()) || $this->get('security.context')->isGranted('ROLE_RH')) {

            // Initialisation d'une échelle de temps.
            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            for ($i = $this->getMonthAndYear()['year'] - 50; $i < $this->getMonthAndYear()['year'] + 50; $i++) {
                $year[$i] = $i;
            }

            // On récupére les jours fériés.
            $joursFeries = $this->getPublicHoliday($this->getMonthAndYear()['year']);

            function getPointagesValides($em, $context) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $context->getMonthAndYear()['month'], 'year' => $context->getMonthAndYear()['year'], 'status' => 5));
                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    $pointage->setAbsences(json_decode($pointage->getAbsences(), true));
                    $pointages[] = $pointage;
                }

                return $pointages;
            }

            $form = $this->createFormBuilder()
                    ->add('Month', ChoiceType::class, array(
                        'choices' => $month,
                        'data' => $this->getMonthAndYear()['month']
                    ))
                    ->add('Year', ChoiceType::class, array(
                        'choices' => $year,
                        'data' => $this->getMonthAndYear()['year']
                    ))
                    ->getForm();

            return $this->render('NoxIntranetPointageBundle:Pointage:affichageCompilationsValides.html.twig', array('form' => $form->createView(),
                        'pointagesValides' => getPointagesValides($em, $this),
                        'joursFeries' => $joursFeries
                            )
            );
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistant(e)s RH/DRH peuvent accéder à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Retourne les dates des jours fériés de l'année courante en France.
    public function getPublicHoliday($year) {
        if ($year === null) {
            $year = intval(date('Y'));
        }

        $easterDate = easter_date($year);
        $easterDay = date('j', $easterDate);
        $easterMonth = date('n', $easterDate);
        $easterYear = date('Y', $easterDate);

        $holidays = array(
            // Dates fixes
            mktime(0, 0, 0, 1, 1, $year), // 1er janvier
            mktime(0, 0, 0, 5, 1, $year), // Fête du travail
            mktime(0, 0, 0, 5, 8, $year), // Victoire des alliés
            mktime(0, 0, 0, 7, 14, $year), // Fête nationale
            mktime(0, 0, 0, 8, 15, $year), // Assomption
            mktime(0, 0, 0, 11, 1, $year), // Toussaint
            mktime(0, 0, 0, 11, 11, $year), // Armistice
            mktime(0, 0, 0, 12, 25, $year), // Noel
            // Dates variables
            mktime(0, 0, 0, $easterMonth, $easterDay + 1, $easterYear),
            mktime(0, 0, 0, $easterMonth, $easterDay + 39, $easterYear),
            mktime(0, 0, 0, $easterMonth, $easterDay + 50, $easterYear),
        );

        sort($holidays);

        return $holidays;
    }

}
