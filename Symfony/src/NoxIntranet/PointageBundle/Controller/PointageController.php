<?php

namespace NoxIntranet\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\PointageBundle\Entity\Tableau;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use DateTime;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use NoxIntranet\PointageBundle\Entity\JustificatifFile;
use Symfony\Component\HttpFoundation\Response;

class PointageController extends Controller {

    // Affiche le tableau de pointage vide du mois et de l'année courante.
    public function accueilAction(Request $request, $collaborateurExterne) {
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
        if (!empty($collaborateurExterne)) {
            $user = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($collaborateurExterne);
        } else {
            $user = $this->get('security.token_storage')->getToken()->getUser();
        }

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
                    'currentYear' => $this->getMonthAndYear()['year'], 'form' => $form->createView(), 'joursFeries' => $joursFeries, 'user' => $user->getUsername()));
    }

    // Retourne la date courante.
    private function getMonthAndYear() {

        $month = date('n');
        $year = date('Y');

        $date['month'] = $month;
        $date['year'] = $year;
        $date['days'] = date('t');

        return $date;
    }

    // Affiche l'inteface de visualisation/correction/validation des pointages des collaborateurs en fonction de l'assistante d'agence.
    public function assistantesAgenceGestionPointageAction() {
        // Inisialisation des varibables de fonction.
        $securityName = mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8');
        $em = $this->getDoctrine()->getManager();

        // Vérifie que l'utilistateur est une assistante d'agence.
        if (in_array($securityName, $this->getUserWithStatus('AA')) || $this->get('security.context')->isGranted('ROLE_RH')) {
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

            // On vérifie le status hiérarchique de l'utilisateur et on retourne les pointages valides et non validés des collaborateurs associés à l'utilisateur.
            if ($this->get('security.context')->isGranted('ROLE_RH')) {
                // On récupére tous les utilisateurs.
                $userStatus = 'roleRH';
                $users = $this->getUsersByStatus($userStatus, $securityName);
            } else if (in_array($securityName, $this->getUserWithStatus('AA'))) {
                $userStatus = 'AA';
                $users = $this->getUsersByStatus($userStatus, $securityName);
            }

            // On récupére les agences des collaborateurs qui dépendent de l'assistant d'agence ou toutes les agence si ROLE_RH.
            $etablissements = array();
            if ($userStatus == 'AA') {
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByAa($securityName) as $userHierarchy) {
                    $etablissements[$userHierarchy->getEtablissement()] = $userHierarchy->getEtablissement();
                }
            } {
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll() as $userHierarchy) {
                    $etablissements[$userHierarchy->getEtablissement()] = $userHierarchy->getEtablissement();
                }
            }

            // Trie du tableau des établissements.
            asort($etablissements);

            // Génére le formulaire de séléction du pointage par établissement, mois et année.
            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            $form = $this->createFormBuilder()
                    ->add('Month', ChoiceType::class, array(
                        'choices' => $month,
                        'data' => $this->getMonthAndYear()['month']
                    ))
                    ->add('Year', ChoiceType::class, array(
                        'choices' => array_combine(range(date("Y") - 50, date("Y") + 50), range(date("Y") - 50, date("Y") + 50)),
                        'data' => $this->getMonthAndYear()['year']
                    ))
                    ->add('Etablissement', ChoiceType::class, array(
                        'placeholder' => 'Choisir un établissement',
                        'choices' => $etablissements
                    ))
                    ->getForm();


            // Génére le formulaire de séléction du pointage par pointage à valider.
            $formToCheckPointage = $this->createFormBuilder()
                    ->add('Pointage', ChoiceType::class)
                    ->getForm();

            return $this->render('NoxIntranetPointageBundle:Pointage:assistantesAgenceGestionPointages.html.twig', array('form' => $form->createView(), 'monthDates' => $monthDates,
                        'currentMonth' => $this->getMonthAndYear()['month'], 'currentYear' => $this->getMonthAndYear()['year'], 'userStatus' => $userStatus,
                        'formToCheckPointage' => $formToCheckPointage->createView(), 'joursFeries' => $joursFeries));
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistant(e)s d\'agence peuvent accéder à cette espace.');
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

    // Affiche la compilation des pointages en fonction de l'étape de validation passé en paramêtre.
    public function pointagesCompilationAction(Request $request, $validationStep) {

        // Inisialisation des varibables de fonction.
        $securityName = mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8');
        $em = $this->getDoctrine()->getManager();

        // On récupére la liste des utilisateurs autorisés en fonction de l'étape de validation de la compilation.
        $authorizedUsers = $this->getUserWithStatus($validationStep);

        // Initialise le titre afficher sur le template.
        $templateTitle = array('AA' => 'Assistant(e) agence - Correction/Validation compilation', 'DAManager' => 'DA/Manager - Correction/Validation compilation', 'RH' => 'Assistant(e) RH - Correction/Validation compilation', 'Final' => 'Compilations validées');

        // Si l'utilisateur à le statut correspondant à l'étape de validation on lui attribut ce statut.
        if ($this->get('security.context')->isGranted('ROLE_RH')) {
            $userStatus = 'roleRH';
        } else if (in_array($securityName, $authorizedUsers)) {
            $userStatus = $validationStep;
        }
        // Si l'utilisateur n'as pas les droits suffisant on le redirige vers l'accueil.
        else {
            $this->get('session')->getFlashBag()->add('noticeErreur', "Vous n'avez pas le statut requis pour accéder à cette section.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        // Initialisation d'une échelle de temps.
        $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
        for ($i = $this->getMonthAndYear()['year'] - 50; $i < $this->getMonthAndYear()['year'] + 50; $i++) {
            $year[$i] = $i;
        }

        // On récupére les jours fériés.
        $joursFeries = $this->getPublicHoliday($this->getMonthAndYear()['year']);

        // On récupére la liste des établissements qui dépendent de l'utilisateur.
        $etablissements = array();
        switch ($userStatus) {
            case 'AA':
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByAa($securityName) as $userHierarchy) {
                    $etablissements[$userHierarchy->getEtablissement()] = $userHierarchy->getEtablissement();
                }
                break;
            case 'DAManager':
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByDa($securityName) as $userHierarchy) {
                    $etablissements[$userHierarchy->getEtablissement()] = $userHierarchy->getEtablissement();
                }
                break;
            case 'roleRH':
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll() as $userHierarchy) {
                    $etablissements[$userHierarchy->getEtablissement()] = $userHierarchy->getEtablissement();
                }
                break;
            case 'Final':
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByDa($securityName) as $userHierarchy) {
                    $etablissements[$userHierarchy->getEtablissement()] = $userHierarchy->getEtablissement();
                }
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByRh($securityName) as $userHierarchy) {
                    $etablissements[$userHierarchy->getEtablissement()] = $userHierarchy->getEtablissement();
                }
                break;
        }

        // Génération du formulaire de séléction du mois/année.
        $formSelectionMonthYear = $this->createFormBuilder()
                ->add('Month', ChoiceType::class, array(
                    'choices' => $month,
                    'data' => $this->getMonthAndYear()['month']
                ))
                ->add('Year', ChoiceType::class, array(
                    'choices' => $year,
                    'data' => $this->getMonthAndYear()['year']
                ))
                ->add('Etablissement', ChoiceType::class, array(
                    'placeholder' => 'Choisir un établissement',
                    'choices' => $etablissements
                ))
                ->getForm();

        // Génération du formulaire de validation de la compilation.
        $formValidationRefus = $this->get('form.factory')->createNamedBuilder('formValidationRefus', 'form')
                ->add('Compilation', SubmitType::class)
                ->add('month', HiddenType::class, array(
                    'data' => $this->getMonthAndYear()['month']
                ))
                ->add('year', HiddenType::class, array(
                    'data' => $this->getMonthAndYear()['year']
                ))
                ->add('etablissement', HiddenType::class)
                ->add('collaborateursSansPointage', HiddenType::class)
                ->getForm();

        // Traitement du formulaire de validation de la compilation.
        $formValidationRefus->handleRequest($request);
        if ($formValidationRefus->isValid()) {
            // Lors du clique sur le bouton de validation.
            if ($formValidationRefus->get('Compilation')->isClicked()) {
                // On récupére les pointages à inclure dans la compilation en fonction du status de l'utilisateur.
                $pointagesCompilation = $this->getPointagesACompile($this->getUsersByStatus($userStatus, $securityName), $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData(), $formValidationRefus->get('etablissement')->getData(), $validationStep, $formValidationRefus->get('collaborateursSansPointage')->getData());
                // Initialisation de la liste des utilisateurs à qui envoyer un mail les prévenants qu'une compilation est disponible.
                $mailingListUser = array();

                // Pour chaque pointages.
                foreach ($pointagesCompilation as $pointage) {
                    // On récupére l'entitée hiérarchique de l'utilisateur associé au pointage.
                    $hierachy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage->getUser());

                    // En fonction de l'étape de validation.
                    switch ($validationStep) {
                        case 'AA':
                            $mailingListUser[$hierachy->getDA()] = $hierachy->getDA(); // On ajoute le DA du collaborateur à la mailingList.
                            $pointage->setStatus(3); // On modifie le statut du pointage.
                            break;
                        case 'DAManager':
                            $mailingListUser[$hierachy->getRH()] = $hierachy->getRH(); // On ajoute le DA du collaborateur à la mailingList.
                            $pointage->setStatus(4); // On modifie le statut du pointage.
                            break;
                        case 'RH':
                            $pointage->setStatus(5); // On modifie le statut du pointage.
                    }
                    $em->persist($pointage); // On persist le pointage.
                }
                // On sauvegarde les changements de status en base de donnée.
                $em->flush();

                // Initialise la liste des message de confirmation de validation et affiche le message.
                $flashBagMessages = array(
                    'AA' => "La compilation a été envoyée au directeur d'agence/managers.",
                    'DAManager' => "La compilation a été envoyée à la RH.",
                    'RH' => 'La compilation a été validée définitivement.'
                );
                $this->get('session')->getFlashBag()->add('notice', $flashBagMessages[$validationStep]);

                $this->sendValidationMail($mailingListUser, $securityName, $validationStep, $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData(), $formValidationRefus->get('etablissement')->getData(), $formValidationRefus->get('collaborateursSansPointage')->getData());
                // On redirige vers la compilation des pointages.
                return $this->redirectToRoute('nox_intranet_pointages_compilation', array('validationStep' => $validationStep));
            }
        }

        return $this->render('NoxIntranetPointageBundle:Pointage:pointagesCompilation.html.twig', array(
                    'form' => $formSelectionMonthYear->createView(), 'userStatus' => $userStatus, 'formValidation' => $formValidationRefus->createView(),
                    'joursFeries' => $joursFeries, 'templateTitle' => $templateTitle[$validationStep], 'validationStep' => $validationStep
                        )
        );
    }

    // Retourne les pointages prêt à être compilés.
    private function getPointagesACompile($users, $month, $year, $etablissement, $validationStep) {
        $em = $this->getDoctrine()->getManager(); // Initialisation de l'entityManager.
        $status = array('AA' => 2, 'DAManager' => 3, 'RH' => 4); // Initialisation des status des pointages en fonction de l'étape de validation de la compilation.
        // On récupére la liste des pointages correspondant au mois, à l'année et au status définie.
        $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $month, 'year' => $year, 'status' => $status[$validationStep]));
        // Pour chaques pointages.
        $pointages = array();
        foreach ($pointagesValides as $pointage) {
            $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage->getUser()); // On récupére l'entité hiérarchique du collaborateur du pointage.
            // Si le collaborateur dépend de l'utilisateur, qu'il est défini dans la hiérarchie et qu'il fait partie de l'établissement.
            if (in_array($pointage->getUser(), array_keys($users)) && !empty($userHierarchy) && $userHierarchy->getEtablissement() === $etablissement) {
                $pointages[] = $pointage; // On ajoute le pointage aux pointages à compiler.
            }
        }

        // On retourne la liste des pointages.
        return $pointages;
    }

    // Retourne tous les utilisateurs qui on le status passé en paramêtre.
    private function getUserWithStatus($status) {
        // On récupére toutes les entité hiérarchiques.
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();

        // Récupère le nom des assistant d'agence/DA/RH et leurs supérieurs.
        $usersFromHierarchy = array();
        foreach ($users as $user) {
            if ($status === 'AA') {
                $usersFromHierarchy[mb_strtoupper($user->getAA(), 'UTF-8')] = mb_strtoupper($user->getAA(), 'UTF-8');
                $usersFromHierarchy[mb_strtoupper($user->getDA(), 'UTF-8')] = mb_strtoupper($user->getDA(), 'UTF-8');
            }
            if ($status === 'DAManager' || $status === 'Final') {
                $usersFromHierarchy[mb_strtoupper($user->getDA(), 'UTF-8')] = mb_strtoupper($user->getDA(), 'UTF-8');
            }
            if ($status === 'Final' || $status === 'RH') {
                $usersFromHierarchy[mb_strtoupper($user->getRH(), 'UTF-8')] = mb_strtoupper($user->getRH(), 'UTF-8');
            }
        }

        // On retourne la liste des assistant d'agence/DA/RH.
        return $usersFromHierarchy;
    }

    // Retourne les collaborateurs qui dépende de l'utilisateur passé en paramêtre en fonction de son status.
    private function getUsersByStatus($status, $securityName) {
        // On récupére les utilisateurs qui ont l'assistante comme supérieur hiérarchique.
        $em = $this->getDoctrine()->getManager();

        // Si l'utilisateur n'as pas le ROLE_RH.
        if ($status !== 'roleRH') {
            $qb = $em->createQueryBuilder();
            $qb
                    ->add('select', 'u')
                    ->add('from', 'NoxIntranetPointageBundle:UsersHierarchy u')
                    ->add('where', ($status === 'DAManager' || $status === 'Final') ? 'u.da = :securityName OR u.rh = :securityName' : (($status === 'AA') ? 'u.aa = :securityName OR u.da = :securityName OR u.rh = :securityName' : false))
                    ->setParameter('securityName', $securityName);
            $query = $qb->getQuery();
            $usersHierarchie = $query->getResult();
        }

        // Si l'utilisateur à le ROLE_RH.
        else {
            $usersHierarchie = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();
        }

        // On récupére l'username et le nom canonique de chaque utilisateurs.
        $users = array();
        foreach ($usersHierarchie as $user) {
            $users[$user->getUsername()] = $user->getPrenom() . ' ' . $user->getNom();
        }

        return $users;
    }

    // Envoie un mail au N+1 pour lui signaler qu'une compilation est disponible à la validation.
    private function sendValidationMail($recipients, $sender, $validationStep, $month, $year, $etablissement, $collaborateursSansPointage) {
        // Si l'étape de validation ne correspond pas à une étape de validation final.
        if ($validationStep !== 'RH' && $validationStep !== 'Final') {
            $em = $this->getDoctrine()->getManager();

            // On génére le lien vers l'étape de validation supérieur.
            $nextValidationStep = array('AA' => 'DAManager', 'DAManager' => 'RH');
            $redirectionUrl = $this->generateUrl('nox_intranet_pointages_compilation', array('validationStep' => $nextValidationStep[$validationStep]), UrlGeneratorInterface::ABSOLUTE_URL);

            // Pour chaque N+1 récepteur..
            foreach ($recipients as $recipient) {

                // On vérifie que le N+1 est défini dans la hiérarchie et on lui envoie le mail.
                $recipientEntity = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => explode(' ', $recipient)[0], 'lastname' => explode(' ', $recipient)[1]));
                if (!empty($recipientEntity)) {
                    $recipientEmail = $recipientEntity->getUsername() . '@groupe-nox.com';

                    $message = \Swift_Message::newInstance()
                            ->setSubject('Compilation de pointages disponible')
                            ->setFrom('noreply@groupe-nox.com')
                            ->setTo($recipientEmail)
                            ->setBody(
                            $this->renderView(
                                    'Emails/Pointages/confirmationCompilation.html.twig', array('recipient' => $recipientEntity, 'sender' => $sender, 'redirectionUrl' => $redirectionUrl, 'month' => $month, 'year' => $year, 'etablissement' => $etablissement, 'collaborateursSansPointage' => json_decode($collaborateursSansPointage))
                            ), 'text/html'
                    );
                    $this->get('mailer')->send($message);
                }
            }
        }
    }

    // Permet de télécharger un fichier justificatif de transport.
    public function downloadJustificatifTransportAction($idJustificatif) {
        // On récupére l'entitée du justificatif.
        $em = $this->getDoctrine()->getManager();
        $justificatif = $em->getRepository('NoxIntranetPointageBundle:JustificatifTransportFile')->find($idJustificatif);

        // On récupére le fichier sous forme de chaine et on rétablie sa forme d'origine en suppriment les slashes.
        $file = stripslashes(stream_get_contents($justificatif->getContent()));

        // On récupére les paramètres du fichier.
        $filename = stripslashes($justificatif->getName());
        $size = $justificatif->getSize();
        $type = $justificatif->getType();

        // On prépare le header pour le téléchargement.
        header("Content-length: " + $size);
        header("Content-type: \"$type\"");
        header("Content-Disposition: inline; filename=\"$filename\"");
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');

        // On lance le téléchargement du fichier.
        echo $file;
        exit;
    }

    // Permet aux assistantes d'accéder au remplissage du pointage d'un collaborateur.
    public function assistanteRemplissagePointageAction(Request $request) {
        // Génération du formulaire d'accès au pointage d'un collaborateur.
        $formAccessCollaborateurPointageBuilder = $this->get('form.factory')->createNamedBuilder('formAcessCollaborateurPointage', 'form');
        $formAccessCollaborateurPointageBuilder
                ->add('username', TextType::class, array(
                    'label' => "Login du collaborateur"
                ))
                ->add('access', SubmitType::class, array(
                    'label' => 'Accéder au pointage'
        ));
        $formAccessCollaborateurPointage = $formAccessCollaborateurPointageBuilder->getForm();

        // Traitement du formulaire d'accès au pointage d'un collaborateur.
        $formAccessCollaborateurPointage->handleRequest($request);
        if ($formAccessCollaborateurPointage->isValid()) {
            // On récupére le login passé en paramêtre.
            $username = $formAccessCollaborateurPointage->get('username')->getData();

            // On récupére l'entité utilisateur associée au login.
            $em = $this->getDoctrine()->getManager();
            $userEntity = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($username);

            // On récupére le nom canonique du collaborateur qui cherche a accéder au pointage.
            $securityName = mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8');

            // Si il n'existe pas de collaborateur associé au login passé en paramêtre...
            if (empty($userEntity)) {
                // On affiche un message d'erreur et on redirige vers le formulaire d'accés au pointage collaborateur.
                $this->get('session')->getFlashbag()->add('noticeErreur', "Il n'existe pas de collaborateur associé au login renseigné.");
                return $this->redirectToRoute('nox_intranet_pointage_access_collaborateur_pointage');
            }
            // Sinon si le collaborateur courant n'est le référent du collaborateur et qu'il n'a le statut RH...
            else if (!empty($userEntity) && !(array_key_exists($userEntity->getUsername(), $this->getUsersByStatus('AA', $securityName)) || $this->get('security.context')->isGranted('ROLE_RH'))) {
                // On affiche un message d'erreur et on redirige vers le formulaire d'accés au pointage collaborateur.
                $this->get('session')->getFlashbag()->add('noticeErreur', "Vous n'avez pas les droits requis pour accéder au pointage de ce collaborateur.");
                return $this->redirectToRoute('nox_intranet_pointage_access_collaborateur_pointage');
            }

            // On retourne le pointage du collaborateur dont le login est passé en paramêtre.
            return $this->redirectToRoute('nox_intranet_pointage', array('collaborateurExterne' => $username));
        }

        return $this->render('NoxIntranetPointageBundle:Pointage:accessCollaborateurPointage.html.twig', array('formAccessCollaborateurPointage' => $formAccessCollaborateurPointage->createView()));
    }

    // Permet l'envoi de fichiers justificatif associé au pointage.
    public function justificatifFilesUploadAction(Request $request, $month, $year, $username) {
        $em = $this->getDoctrine()->getManager();
        if (!is_numeric($username)) {
            $pointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('month' => $month, 'year' => $year, 'user' => $username));
        } else {
            $pointage = $em->find('NoxIntranetPointageBundle:Tableau', $username);
        }
        $justificatifFiles = $em->getRepository('NoxIntranetPointageBundle:JustificatifFile')->findByTableau($pointage);

        // Initialisation d'un nouveau justificatif.
        $newJustificatifFile = new JustificatifFile();

        // Génération du formulaire d'ajout de fichier justificatif.
        $formAddJustificatifFileBuilder = $this->createFormBuilder($newJustificatifFile);
        $formAddJustificatifFileBuilder
                ->add('content', FileType::class, array(
                    'label' => 'Ajouter un justificatif'
                ))
                ->add('ajouter', SubmitType::class);
        $formAddJustificatifFile = $formAddJustificatifFileBuilder->getForm();

        // Traitement du formulaire d'ajout de fichier justificatif.
        $formAddJustificatifFile->handleRequest($request);
        if ($formAddJustificatifFile->isValid()) {
            // On récupére le fichier.
            $file = $formAddJustificatifFile->get('content')->getData();

            // On associe son pointage au fichier.
            $newJustificatifFile->setTableau($pointage);

            // On récupére le nom, le type et la taille du fichier.
            $newJustificatifFile->setName(addslashes($file->getClientOriginalName()));
            $newJustificatifFile->setType($file->getMimeType());
            $newJustificatifFile->setSize($file->getClientSize());

            // On récupére le contenu du fichier sous forme binaire.
            $streamFile = fopen($file->getRealPath(), 'rb');
            $newJustificatifFile->setContent(stream_get_contents($streamFile));

            // On sauvegarde les changements en base de données.
            $em->persist($newJustificatifFile);
            $em->flush();

            // On redirige vers l'ajout de justificatif.
            return $this->redirectToRoute('nox_intranet_pointage_add_justificatif_file', array('month' => $month, 'year' => $year, 'username' => $username));
        }

        return $this->render('NoxIntranetPointageBundle:Pointage:addJustificatifFiles.html.twig', array('formAddJustificatifFile' => $formAddJustificatifFile->createView(), 'justificatifFiles' => $justificatifFiles));
    }

    // Supprime un fichier justificatif du pointage.
    public function deleteJustificatifFileAction($justificatifId) {
        // On récupére le justificatif depuis son ID.
        $em = $this->getDoctrine()->getManager();
        $justificatifFile = $em->find('NoxIntranetPointageBundle:JustificatifFile', $justificatifId);

        // On récupére le pointage associé au justificatif.
        $pointage = $justificatifFile->getTableau();

        // On le supprime
        $em->remove($justificatifFile);
        $em->flush();

        return $this->redirectToRoute('nox_intranet_pointage_add_justificatif_file', array('month' => $pointage->getMonth(), 'year' => $pointage->getYear(), 'username' => $pointage->getUser()));
    }

    // Permet de consulter un fichier justificatif associé au pointage.
    public function showJustificatifFileAction($justificatifId) {
        // On récupére le justificatif depuis son ID.
        $em = $this->getDoctrine()->getManager();
        $justificatifFile = $em->find('NoxIntranetPointageBundle:JustificatifFile', $justificatifId);

        // On récupére le fichier.
        $file = stream_get_contents($justificatifFile->getContent());

        // Initialisation de la réponse.
        $response = new Response($file, 200);
        $response->headers->set('Content-Type', $justificatifFile->getType());
        $response->headers->set('Content-Disposition', "filename='" . $justificatifFile->getName() . "'");

        // On retourne le fichier.
        return $response;
    }

    // Lance le téléchargement du fichier CSV dont le nom est passé en paramètre.
    public function downloadCSVAction($fileName) {
        // On récupére la racine du serveur web.
        $root = $this->get('kernel')->getRootDir() . '\..\web\\';

        // On génére le chemin du fichier à retourner.
        $filePath = $root . $fileName;

        // On ouvre le fichier.
        $CSVFileHandler = fopen($filePath, 'r');

        // On récupére les données du fichier.
        $file = stream_get_contents($CSVFileHandler);

        // On ferme le fichier.
        fclose($CSVFileHandler);

        // On supprime le fichier.
        unlink($filePath);

        // Initialisation de la réponse.
        $response = new Response($file, 200);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', "filename='Pointage CSV.csv'");

        // On retourne le téléchargement du fichier.
        return $response;
    }

    // Lance le téléchargement d'un fichier ZIP contenant les justificatifs des pointages d'une compilation.
    public function downloadJustificatifZipAction($fileName, $etablissement, $month, $year) {
        // On récupére la racine du serveur web.
        $root = $this->get('kernel')->getRootDir() . '\..\web\\';

        // On génére le chemin du fichier à retourner.
        $filePath = $root . $fileName;


        // On ouvre le fichier.
        $ZIPFileHandler = fopen($filePath, 'r');

        // On récupére les données du fichier.
        $file = stream_get_contents($ZIPFileHandler);

        // On ferme le fichier.
        fclose($ZIPFileHandler);

        // On supprime le fichier.
        unlink($filePath);

        // Tableau de conversion numéro/nom du mois.
        $monthName = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');

        // Génération du nom du fichier téléchargé.
        $downloadFileName = "Justificatifs compilation [" . $monthName[$month] . " " . $year . "] [" . $etablissement . "].zip";

        // Initialisation de la réponse.
        $response = new Response($file, 200);
        $response->headers->set('Content-Type', 'application/zip');
        $response->headers->set('Content-Disposition', "filename='$downloadFileName'");

        // On retourne le téléchargement du fichier.
        return $response;
    }

    // Retourne un fichier CSV de compilation des données d'affaires des collaborateurs de NOX IP pour le mois et l'années donnée.
    public function compilationNOXIPCSVAction(Request $request) {
        // Si l'utilisateur n'as pas les droits d'accès on le redirige vers l'accueil.
        $currentUser = $this->get('security.context')->getToken()->getUser()->getUsername();
        if (!($currentUser === 't.besson' || $currentUser === 'l.sauvage')) {
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        // Génération du formulaire de téléchargement de la compilation.
        $formCompilationDateBuilder = $this->createFormBuilder();
        $formCompilationDateBuilder
                ->add('date', DateType::class, array(
                    'label' => "Date de la compilation",
                    'data' => new DateTime()
                ))
                ->add('download', SubmitType::class, array(
                    'label' => "Télécharger"
        ));
        $formCompilationDate = $formCompilationDateBuilder->getForm();

        // Traitement du formulaire de téléchargement de la compilation.
        $formCompilationDate->handleRequest($request);
        if ($formCompilationDate->isValid()) {
            // On récupére le mois et la date.
            $month = $formCompilationDate->get('date')->getData()->format('n');
            $year = $formCompilationDate->get('date')->getData()->format('Y');

            // On récupére les pointage en fonction du mois et de l'année indiqué dans le formulaire.
            $em = $this->getDoctrine()->getManager();
            $tableau = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findBy(array('month' => $month, 'year' => $year));

            // On récupére la racine du serveur web.
            $root = $this->get('kernel')->getRootDir() . '\..\web\\';

            // On génére un chemin pour le fichier CSV.
            $newCSVFile = tempnam($root, '');

            // On ouvre le fichier.
            $newCSVFileHandler = fopen($newCSVFile, 'w+');

            // Pour chaque pointage...
            foreach ($tableau as $pointage) {
                // On récupére la hiérarchie du collaborateur du pointage.
                $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage->getUser());

                // Si le collaborateur du pointage appartient à NOX IP et le pointage contient des données CSV...
                if (!empty($userHierarchy) && strpos($userHierarchy->getEtablissement(), 'INDUSTRIE') !== false && strpos($userHierarchy->getEtablissement(), 'PROCESS') !== false && !empty($pointage->getCSVData())) {
                    // On récupére les données CSV.
                    $CSVData = $pointage->getCSVData();

                    // On injecte les données dans le fichier pour chaques affaires...
                    foreach ($CSVData as $affaireDate) {
                        // Et chaques dates...
                        foreach ($affaireDate as $affaire) {
                            fputcsv($newCSVFileHandler, array_map('utf8_decode', array_values($affaire)), ";");
                        }
                    }
                }
            }

            // On récupére les données du fichier.
            $file = stream_get_contents($newCSVFileHandler, -1, 0);

            // On ferme le fichier.
            fclose($newCSVFileHandler);

            // On supprime le fichier.
            unlink($newCSVFile);

            // Initialisation de la réponse.
            $response = new Response($file, 200);
            $response->headers->set('Content-Type', 'text/csv');
            $response->headers->set('Content-Disposition', "filename='Pointage CSV.csv'");

            // On retourne le téléchargement du fichier.
            return $response;
        }

        return $this->render('NoxIntranetPointageBundle:Pointage:compilationNOXIPCSV.html.twig', array('formCompilationDate' => $formCompilationDate->createView()));
    }

}
