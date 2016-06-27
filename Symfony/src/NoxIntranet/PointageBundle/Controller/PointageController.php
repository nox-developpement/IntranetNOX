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
        $date = '01-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];
        $end_date = $this->getMonthAndYear()['days'] . '-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];

        $monthDates = array();

        $i = 0;
        while (strtotime($date) <= strtotime($end_date)) {
            $monthDates[$i] = strtotime($date);
            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
            $i++;
        }

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user->getUsername(), 'month' => $this->getMonthAndYear()['month'], 'year' => $this->getMonthAndYear()['year']));

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

        $form = $this->createFormBuilder()
                ->add('Valider', SubmitType::class)
                ->add('month', 'hidden', array(
                    'data' => $this->getMonthAndYear()['month']
                ))
                ->add('year', 'hidden', array(
                    'data' => $this->getMonthAndYear()['year']
                ))
                ->getForm();

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
                    'currentYear' => $this->getMonthAndYear()['year'], 'form' => $form->createView()));
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
        /*
          $objReaderAssistantes = new \PHPExcel_Reader_Excel2007();
          $objReaderAssistantes->setReadFilter(new AssistanteAgenceGetter());
          $objPHPExcelAssistantes = $objReaderAssistantes->load($excelRHFile);

          $assistantes = array();
          foreach ($objPHPExcelAssistantes->getActiveSheet()->getCellCollection() as $cell) {
          if (!in_array($objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getValue(), $assistantes)) {
          $assistantes[$objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getValue()] = $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getValue();
          }
          }
          $assistantes['Tristan BESSON'] = 'Tristan BESSON';
         */

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();

        $assistantes = array();

        $assistantes['Tristan BESSON'] = 'Tristan BESSON';

        // Récupère le nom des assistantes d'agence et leurs supérieurs.
        foreach ($users as $user) {
            if (!in_array($user->getAA(), $assistantes)) {
                $assistantes[$user->getAA()] = $user->getAA();
            }
            if (!in_array($user->getDA(), $assistantes)) {
                $assistantes[$user->getDA()] = $user->getDA();
            }
            if (!in_array($user->getRH(), $assistantes)) {
                $assistantes[$user->getRH()] = $user->getRH();
            }
        }

        return $assistantes;
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante d'agence connectée.
    function getUsersByAssistante($securityName, $em) {
        /*
          $objReaderAssistantes = new \PHPExcel_Reader_Excel2007();
          $objReaderAssistantes->setReadFilter(new AssistanteAgenceGetter());
          $objPHPExcelAssistantes = $objReaderAssistantes->load($excelRHFile);

          $objReaderUsersAssistantes = new \PHPExcel_Reader_Excel2007();
          $objPHPExcelUsersAssistantes = $objReaderUsersAssistantes->load($excelRHFile);
          $usersAssistante = array();
          foreach ($objPHPExcelAssistantes->getActiveSheet()->getCellCollection() as $cell) {
          if ($objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getValue() === $securityName) {
          $usersAssistante[$objPHPExcelUsersAssistantes->getActiveSheet()->getCell('E' . $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow())->getValue() . ' ' . $objPHPExcelUsersAssistantes->getActiveSheet()->getCell('D' . $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow())->getValue()]['firstname'] = $objPHPExcelUsersAssistantes->getActiveSheet()->getCell('E' . $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow())->getValue();
          $usersAssistante[$objPHPExcelUsersAssistantes->getActiveSheet()->getCell('E' . $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow())->getValue() . ' ' . $objPHPExcelUsersAssistantes->getActiveSheet()->getCell('D' . $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow())->getValue()]['lastname'] = $objPHPExcelUsersAssistantes->getActiveSheet()->getCell('D' . $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow())->getValue();
          }
          }

          $users = array();
          foreach ($usersAssistante as $user) {
          if (!empty($em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname'])))) {
          $users[$em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getUsername()] = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getFirstname() . ' ' . $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getLastname();
          }
          }

          return $users;
         */

        $usersHierarchie = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();

        $usersAssistante = array();

        foreach ($usersHierarchie as $user) {
            if ($user->getAA() === $securityName || $user->getDA() === $securityName || $user->getRH() === $securityName) {
                $usersAssistante[$user->getPrenom() . ' ' . $user->getNom()]['firstname'] = $user->getPrenom();
                $usersAssistante[$user->getPrenom() . ' ' . $user->getNom()]['lastname'] = $user->getNom();
            }
        }

        $users = array();
        foreach ($usersAssistante as $user) {
            if ($em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))) {
                $users[$em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getUsername()] = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getFirstname() . ' ' . $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getLastname();
            }
        }

        return $users;
    }

    // Affiche l'inteface de visualisation/correction/validation des pointages des collaborateurs en fonction de l'assistante d'agence.
    public function assistantesAgenceGestionPointageAction() {

        // Permet de lire les fichiers Excel.
        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();
        $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";

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

            // Génére le formulaire de séléction du pointage par nom d'utilisateur, mois et année.
            $form = $this->createFormBuilder()
                    ->add('User', ChoiceType::class, array(
                        'choices' => $this->getUsersByAssistante($securityName, $em),
                        'choices_as_values' => false,
                        'attr' => array(
                            'size' => 5
                        ),
                        'choice_attr' => function($val) use ($excelRHFile, $securityName, $em) {
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
                        'query_builder' => function (EntityRepository $er) use ($excelRHFile, $securityName, $em) {
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
                        'formToCheckPointage' => $formToCheckPointage->createView()));
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistantes d\'agence peuvent accéder à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Compile les feuilles de pointages du mois courant validées par les assistantes d'agence.
    public function assistantesAgencePointagesCompilationAction(Request $request) {

        // Permet de lire les fichiers Excel.
        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();
        $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";

        // Vérifie que l'utilistateur est une assistante d'agence.
        if (in_array($securityName, $this->getAssistantesAgence())) {

            // Initialisation d'une échelle de temps.
            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            for ($i = $this->getMonthAndYear()['year'] - 50; $i < $this->getMonthAndYear()['year'] + 50; $i++) {
                $year[$i] = $i;
            }

            // Retourne le nombre de pointages des collaborateurs qui n'ont pas encore était validés par l'assistante d'agence.
            function getNbPointagesNonValides($em, $users, $context) {
                $pointagesNonValides = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findBy(array('month' => $context->getMonthAndYear()['month'], 'year' => $context->getMonthAndYear()['year'], 'status' => '1'));
                $nbPointageNonValide = 0;
                foreach ($pointagesNonValides as $pointage) {
                    if (in_array($pointage->getUser(), array_keys($users))) {
                        $nbPointageNonValide++;
                    }
                }

                return $nbPointageNonValide;
            }

            // Retourne les pointages valides des collaborateurs de l'assistante d'agence.
            function getPointagesValides($em, $users, $context) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $context->getMonthAndYear()['month'], 'year' => $context->getMonthAndYear()['year'], 'status' => 2));
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
                    ->add('month', 'hidden', array(
                        'data' => $this->getMonthAndYear()['month']
                    ))
                    ->add('year', 'hidden', array(
                        'data' => $this->getMonthAndYear()['year']
                    ))
                    ->getForm();

            $formValidationRefus->handleRequest($request);

            if ($formValidationRefus->isValid()) {

                $pointagesCompilation = getPointagesACompile($em, $this->getUsersByAssistante($excelRHFile, $securityName, $em), $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData());

                if ($formValidationRefus->get('Compilation')->isClicked()) {
                    foreach ($pointagesCompilation as $pointage) {
                        $pointage->setStatus(3);
                        $pointage->setAbsences(json_encode($pointage->getAbsences(), true));
                        $em->persist($pointage);
                    }
                    $this->get('session')->getFlashBag()->add('notice', 'La compilation a été envoyée aux directeur d\'agence/managers.');
                }

                $em->flush();

                return $this->redirectToRoute('nox_intranet_assistantes_agence_pointage_compilation');
            }

            return $this->render('NoxIntranetPointageBundle:Pointage:assistantesAgencePointagesCompilation.html.twig', array('form' => $form->createView(),
                        'nbPointageNonValide' => getNbPointagesNonValides($em, $this->getUsersByAssistante($securityName, $em), $this),
                        'pointagesValides' => getPointagesValides($em, $this->getUsersByAssistante($securityName, $em), $this),
                        'formValidation' => $formValidationRefus->createView()
                            )
            );
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistantes d\'agence peuvent accéder à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Lis le fichier Excel de la RH et récupère le nom des directeur d'agences et manager.
    function getDAManager() {
        /*
          $objReaderDA = new \PHPExcel_Reader_Excel2007();
          $objReaderDA->setReadFilter(new DAManagerGetter());
          $objPHPExcelDA = $objReaderDA->load($excelRHFile);

          $DAManager = array();
          foreach ($objPHPExcelDA->getActiveSheet()->getCellCollection() as $cell) {
          if (!in_array($objPHPExcelDA->getActiveSheet()->getCell($cell)->getValue(), $DAManager)) {
          $DAManager[$objPHPExcelDA->getActiveSheet()->getCell($cell)->getValue()] = $objPHPExcelDA->getActiveSheet()->getCell($cell)->getValue();
          }
          }
          $DAManager['Tristan BESSON'] = 'Tristan BESSON';

          return $DAManager;
         */

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();

        $da = array();

        $da['Tristan BESSON'] = 'Tristan BESSON';

        // Récupère le nom des directeurs d'agence et leurs supérieurs.
        foreach ($users as $user) {
            if (!in_array($user->getDA(), $da)) {
                $da[$user->getDA()] = $user->getDA();
            }
            if (!in_array($user->getRH(), $da)) {
                $da[$user->getRH()] = $user->getRH();
            }
        }

        return $da;
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante d'agence connectée.
    function getUsersByDAManager($securityName, $em) {
        /*
          $objReaderDA = new \PHPExcel_Reader_Excel2007();
          $objReaderDA->setReadFilter(new DAMAnagerGetter());
          $objPHPExcelDA = $objReaderDA->load($excelRHFile);

          $objReaderUsersDAMAnager = new \PHPExcel_Reader_Excel2007();
          $objPHPExcelUsersDA = $objReaderUsersDAMAnager->load($excelRHFile);
          $usersDAManager = array();
          foreach ($objPHPExcelDA->getActiveSheet()->getCellCollection() as $cell) {
          if ($objPHPExcelDA->getActiveSheet()->getCell($cell)->getValue() === $securityName) {
          $usersDAManager[$objPHPExcelUsersDA->getActiveSheet()->getCell('E' . $objPHPExcelDA->getActiveSheet()->getCell($cell)->getRow())->getValue() . ' ' . $objPHPExcelUsersDA->getActiveSheet()->getCell('D' . $objPHPExcelDA->getActiveSheet()->getCell($cell)->getRow())->getValue()]['firstname'] = $objPHPExcelUsersDA->getActiveSheet()->getCell('E' . $objPHPExcelDA->getActiveSheet()->getCell($cell)->getRow())->getValue();
          $usersDAManager[$objPHPExcelUsersDA->getActiveSheet()->getCell('E' . $objPHPExcelDA->getActiveSheet()->getCell($cell)->getRow())->getValue() . ' ' . $objPHPExcelUsersDA->getActiveSheet()->getCell('D' . $objPHPExcelDA->getActiveSheet()->getCell($cell)->getRow())->getValue()]['lastname'] = $objPHPExcelUsersDA->getActiveSheet()->getCell('D' . $objPHPExcelDA->getActiveSheet()->getCell($cell)->getRow())->getValue();
          }
          }

          $users = array();
          foreach ($usersDAManager as $user) {
          if (!empty($em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname'])))) {
          $users[$em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getUsername()] = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getFirstname() . ' ' . $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getLastname();
          }
          }

          return $users;
         */

        $usersHierarchie = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();

        $usersDA = array();

        foreach ($usersHierarchie as $user) {
            if ($user->getDA() === $securityName || $user->getRH() === $securityName) {
                $usersDA[$user->getPrenom() . ' ' . $user->getNom()]['firstname'] = $user->getPrenom();
                $usersDA[$user->getPrenom() . ' ' . $user->getNom()]['lastname'] = $user->getNom();
            }
        }

        $users = array();
        foreach ($usersDA as $user) {
            if ($em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))) {
                $users[$em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getUsername()] = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getFirstname() . ' ' . $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getLastname();
            }
        }

        return $users;
    }

    // Compile les feuilles de pointages du mois courant validées par les DA/Manager.
    public function DAManagerPointagesCompilationAction(Request $request) {

        // Permet de lire les fichiers Excel.
        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();
        $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";

        // Vérifie que l'utilistateur est un directeur d'agence ou un manager.
        if (in_array($securityName, $this->getDAManager())) {

            // Initialisation d'une échelle de temps.
            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            for ($i = $this->getMonthAndYear()['year'] - 50; $i < $this->getMonthAndYear()['year'] + 50; $i++) {
                $year[$i] = $i;
            }

            function getPointagesValides($em, $users, $context) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $context->getMonthAndYear()['month'], 'year' => $context->getMonthAndYear()['year'], 'status' => 3));
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

                $pointagesCompilation = getPointagesACompile($em, $this->getUsersByDAManager($securityName, $em), $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData());

                if ($formValidationRefus->get('Compilation')->isClicked()) {
                    foreach ($pointagesCompilation as $pointage) {
                        $pointage->setStatus(4);
                        $pointage->setAbsences(json_encode($pointage->getAbsences(), true));
                        $em->persist($pointage);
                    }
                    $this->get('session')->getFlashBag()->add('notice', 'La compilation a été validée et envoyée aux assistantes RH.');
                }

                if ($formValidationRefus->get('Refus')->isClicked()) {
                    foreach ($pointagesCompilation as $pointage) {
                        $pointage->setStatus(2);
                        $pointage->setAbsences(json_encode($pointage->getAbsences(), true));
                        $em->persist($pointage);
                    }
                    $this->get('session')->getFlashBag()->add('notice', 'La compilation a été refusée et renvoyée aux assistantes d\'agences.');
                }

                $em->flush();

                return $this->redirectToRoute('nox_intranet_da_manager_pointage_compilation');
            }

            return $this->render('NoxIntranetPointageBundle:Pointage:DAManagerPointagesCompilation.html.twig', array('form' => $form->createView(),
                        'pointagesValides' => getPointagesValides($em, $this->getUsersByDAMAnager($securityName, $em), $this),
                        'formValidationRefus' => $formValidationRefus->createView())
            );
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les directeurs d\'agence/Managers peuvent accéder à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Lis le fichier Excel de la RH et récupère le nom des assistantes RH/DRH.
    function getAssistantesRH($excelRHFile) {
        $objReaderAssistantesRH = new \PHPExcel_Reader_Excel2007();
        $objReaderAssistantesRH->setReadFilter(new AssistantesRHGetter());
        $objPHPExcelAssistantesRH = $objReaderAssistantesRH->load($excelRHFile);

        $assistantesRH = array();
        foreach ($objPHPExcelAssistantesRH->getActiveSheet()->getCellCollection() as $cell) {
            if (!in_array($objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getValue(), $assistantesRH)) {
                $assistantesRH[$objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getValue()] = $objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getValue();
            }
        }
        $assistantesRH['Tristan BESSON'] = 'Tristan BESSON';

        return $assistantesRH;
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante RH/DRH connectée.
    function getUsersByAssistantesRH($excelRHFile, $securityName, $em) {
        $objReaderAssistantesRH = new \PHPExcel_Reader_Excel2007();
        $objReaderAssistantesRH->setReadFilter(new AssistantesRHGetter());
        $objPHPExcelAssistantesRH = $objReaderAssistantesRH->load($excelRHFile);

        $objReaderUsersAssistantesRH = new \PHPExcel_Reader_Excel2007();
        $objPHPExcelUsersAssistantesRH = $objReaderUsersAssistantesRH->load($excelRHFile);
        $usersAssistantesRH = array();
        foreach ($objPHPExcelAssistantesRH->getActiveSheet()->getCellCollection() as $cell) {
            if ($objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getValue() === $securityName) {
                $usersAssistantesRH[$objPHPExcelUsersAssistantesRH->getActiveSheet()->getCell('E' . $objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getRow())->getValue() . ' ' . $objPHPExcelUsersAssistantesRH->getActiveSheet()->getCell('D' . $objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getRow())->getValue()]['firstname'] = $objPHPExcelUsersAssistantesRH->getActiveSheet()->getCell('E' . $objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getRow())->getValue();
                $usersAssistantesRH[$objPHPExcelUsersAssistantesRH->getActiveSheet()->getCell('E' . $objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getRow())->getValue() . ' ' . $objPHPExcelUsersAssistantesRH->getActiveSheet()->getCell('D' . $objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getRow())->getValue()]['lastname'] = $objPHPExcelUsersAssistantesRH->getActiveSheet()->getCell('D' . $objPHPExcelAssistantesRH->getActiveSheet()->getCell($cell)->getRow())->getValue();
            }
        }

        $users = array();
        foreach ($usersAssistantesRH as $user) {
            if (!empty($em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname'])))) {
                $users[$em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getUsername()] = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getFirstname() . ' ' . $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($user['firstname'])), 'lastname' => $user['lastname']))->getLastname();
            }
        }

        return $users;
    }

    // Compile les feuilles de pointages du mois courant validées par les assistantes RH/DRH.
    public function AssistantesRHPointagesCompilationAction(Request $request) {

        // Permet de lire les fichiers Excel.
        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();
        $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";

        // Vérifie que l'utilistateur est un directeur d'agence ou un manager.
        if (in_array($securityName, $this->getAssistantesRH($excelRHFile))) {

            // Initialisation d'une échelle de temps.
            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            for ($i = $this->getMonthAndYear()['year'] - 50; $i < $this->getMonthAndYear()['year'] + 50; $i++) {
                $year[$i] = $i;
            }

            function getPointagesValides($em, $users, $context) {
                $pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $context->getMonthAndYear()['month'], 'year' => $context->getMonthAndYear()['year'], 'status' => 4));
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

                $pointagesCompilation = getPointagesACompile($em, $this->getUsersByAssistantesRH($excelRHFile, $securityName, $em), $formValidationRefus->get('month')->getData(), $formValidationRefus->get('year')->getData());

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
                        'pointagesValides' => getPointagesValides($em, $this->getUsersByAssistantesRH($excelRHFile, $securityName, $em), $this),
                        'formValidationRefus' => $formValidationRefus->createView())
            );
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistantes RH/DRH peuvent accéder à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

}
