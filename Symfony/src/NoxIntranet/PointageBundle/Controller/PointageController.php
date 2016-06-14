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

        $form = $this->createFormBuilder($tableData)
                ->add('Valider', SubmitType::class)
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $tableData->setStatus(1);

            $em->persist($tableData);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Le pointage a été validé.');

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
    function getAssistantesAgence($excelRHFile) {
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

        return $assistantes;
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante d'agence connectée.
    function getUsersByAssistante($excelRHFile, $securityName, $em) {
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
        if (in_array($securityName, $this->getAssistantesAgence($excelRHFile))) {

            $date = '01-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];
            $end_date = $this->getMonthAndYear()['days'] . '-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];

            $monthDates = array();

            $i = 0;
            while (strtotime($date) <= strtotime($end_date)) {
                $monthDates[$i] = strtotime($date);
                $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
                $i++;
            }

            $form = $this->createFormBuilder()
                    ->add('User', ChoiceType::class, array(
                        'choices' => $this->getUsersByAssistante($excelRHFile, $securityName, $em),
                        'choices_as_values' => false,
                        'attr' => array(
                            'size' => 5
                        )
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

            $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
            $formToCheckPointage = $this->createFormBuilder()
                    ->add('Pointage', EntityType::class, array(
                        'class' => 'NoxIntranetPointageBundle:Tableau',
                        'query_builder' => function (EntityRepository $er) use ($excelRHFile, $securityName, $em) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.status = '1' AND u.user IN (:users)")
                                    ->orderBy('u.user', 'ASC')
                                    ->setParameter('users', array_keys($this->getUsersByAssistante($excelRHFile, $securityName, $em)));
                        },
                        'choice_label' => function($tableau) use ($em, $month) {
                            return $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($tableau->getUser())->getFirstname() . ' ' . $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($tableau->getUser())->getLastname() . ' (' . $month[$tableau->getMonth()] . ' ' . $tableau->getYear() . ')';
                        },
                        'attr' => array(
                            'size' => 5
                        )
                    ))
                    ->getForm();

            return $this->render('NoxIntranetPointageBundle:Pointage:assistantesAgenceGestionPointages.html.twig', array('form' => $form->createView(), 'monthDates' => $monthDates,
                        'currentMonth' => $this->getMonthAndYear()['month'], 'currentYear' => $this->getMonthAndYear()['year'],
                        'formToCheckPointage' => $formToCheckPointage->createView()));
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistantes d\'agence peuvent accéder  à cette espace.');
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
        if (in_array($securityName, $this->getAssistantesAgence($excelRHFile))) {

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


            $formValidationRefus = $this->createFormBuilder()
                    ->add('Compilation', SubmitType::class)
                    ->getForm();

            $formValidationRefus->handleRequest($request);

            if ($formValidationRefus->isValid()) {

                $pointagesCompilation = getPointagesACompile($em, $this->getUsersByAssistante($excelRHFile, $securityName, $em), $form->get('Month')->getData(), $form->get('Year')->getData());

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
                        'nbPointageNonValide' => getNbPointagesNonValides($em, $this->getUsersByAssistante($excelRHFile, $securityName, $em), $this),
                        'pointagesValides' => getPointagesValides($em, $this->getUsersByAssistante($excelRHFile, $securityName, $em), $this),
                        'formValidation' => $formValidationRefus->createView()
                            )
            );
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistantes d\'agence peuvent accéder  à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Lis le fichier Excel de la RH et récupère le nom des directeur d'agences et manager.
    function getDAManager($excelRHFile) {
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
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante d'agence connectée.
    function getUsersByDAManager($excelRHFile, $securityName, $em) {
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
    }

    // Compile les feuilles de pointages du mois courant validées par les assistantes.
    public function DAManagerPointagesCompilationAction(Request $request) {

        // Permet de lire les fichiers Excel.
        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();
        $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";

        // Vérifie que l'utilistateur est un directeur d'agence ou un manager.
        if (in_array($securityName, $this->getDAManager($excelRHFile))) {

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

            $formValidationRefus = $this->createFormBuilder()
                    ->add('Compilation', SubmitType::class)
                    ->add('Refus', SubmitType::class)
                    ->getForm();

            $formValidationRefus->handleRequest($request);

            if ($formValidationRefus->isValid()) {

                $pointagesCompilation = getPointagesACompile($em, $this->getUsersByDAManager($excelRHFile, $securityName, $em), $form->get('Month')->getData(), $form->get('Year')->getData());

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
                        'pointagesValides' => getPointagesValides($em, $this->getUsersByDAMAnager($excelRHFile, $securityName, $em), $this),
                        'formValidationRefus' => $formValidationRefus->createView())
            );
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les directeurs d\'agence/Managers peuvent accéder  à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

}
