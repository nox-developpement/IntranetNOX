<?php

namespace NoxIntranet\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\PointageBundle\Entity\Tableau;
use NoxIntranet\PointageBundle\Entity\TableauCompilation;
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

    // Affiche l'inteface de visualisation/correction/validation des pointages des collaborateurs en fonction de l'assistante d'agence.
    public function assistantesAgenceGestionPointageAction(Request $request) {

        // Permet de lire les fichiers Excel.
        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        // Inisialisation des varibables de fonction.
        $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
        $em = $this->getDoctrine()->getManager();
        $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";

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

        // Vérifie que l'utilistateur est une assistante d'agence.
        if (in_array($securityName, getAssistantesAgence($excelRHFile))) {

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
                        'choices' => getUsersByAssistante($excelRHFile, $securityName, $em),
                        'choices_as_values' => false,
                        'placeholder' => 'Selectionnez un utilisateur',
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

            $formToCheckPointage = $this->createFormBuilder()
                    ->add('Pointage', EntityType::class, array(
                        'class' => 'NoxIntranetPointageBundle:Tableau',
                        'query_builder' => function (EntityRepository $er) use ($excelRHFile, $securityName, $em) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.status = '1' AND u.user IN (:users)")
                                    ->orderBy('u.user', 'ASC')
                                    ->setParameter('users', array_keys(getUsersByAssistante($excelRHFile, $securityName, $em)));
                        },
                        'choice_label' => function($tableau) use ($em) {
                            return $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($tableau->getUser())->getFirstname() . ' ' . $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($tableau->getUser())->getLastname();
                        },
                        'placeholder' => 'Pointage à valider',
                        'attr' => array(
                            'size' => 5
                        )
                    ))
                    ->getForm();

            $formValidationCompilation = $this->get('form.factory')->createNamedBuilder('formValidationCompilation')
                    ->add('Validation', SubmitType::class)
                    ->getForm();

            if ($request->request->has('formValidationCompilation')) {
                if ($formValidationCompilation->isValid()) {
                    $this->get('session')->getFlashBag()->add('notice', 'Les pointages ont été compilés.');

                    $this->redirectToRoute('nox_intranet_assistantes_agence_gestion_pointage');
                }
            }

            return $this->render('NoxIntranetPointageBundle:Pointage:gestionPointage.html.twig', array('form' => $form->createView(), 'monthDates' => $monthDates,
                        'currentMonth' => $this->getMonthAndYear()['month'], 'currentYear' => $this->getMonthAndYear()['year'],
                        'formToCheckPointage' => $formToCheckPointage->createView(), 'formValidationCompilation' => $formValidationCompilation->createView()));
        } else {
            $this->get('session')->getFlashBag()->add('noticeErreur', 'Seul les assistantes d\'agence peuvent accéder  à cette espace.');
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

    // Compile les feuilles de pointages du mois courant validées par les assistantes.
    public function compilationPointageAssistanteAction(Request $request) {
        $em = $em = $this->getDoctrine()->getManager();

        $month = array('1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
        for ($i = $this->getMonthAndYear()['year'] - 50; $i < $this->getMonthAndYear()['year'] + 50; $i++) {
            $year[$i] = $i;
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
                ->add('Choisir', SubmitType::class)
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $tableauCompilation = $em->getRepository('NoxIntranetPointageBundle:TableauCompilation')->findOneBy(array('month' => $form->get('Month')->getData(), 'year' => $form->get('Year')->getData()));

            $pointagesAValider = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findBy(array('status' => '2', 'month' => $this->getMonthAndYear()['month'], 'year' => $this->getMonthAndYear()['year']));

            $project = array();
            $nbColumn = 0;

            foreach ($pointagesAValider as $pointage) {
                $project = array_merge(json_decode($pointage->getData(), true)['project'], $project);
                $nbColumn = $nbColumn + json_decode($pointage->getData(), true)['nbProject'];
//$this->get('session')->getFlashBag()->add('notice', $nbProjet);
            }

            if (empty($tableauCompilation)) {
                $tableauCompilation = new TableauCompilation();
                $tableauCompilation->setMonth($form->get('Month')->getData());
                $tableauCompilation->setYear($form->get('Year')->getData());
                $tableauCompilation->setProject(json_encode($project));
                $tableauCompilation->setNbColumn($nbColumn);
                $tableauCompilation->setStatus('En attente');
                $em->persist($tableauCompilation);
                $this->get('session')->getFlashBag()->add('notice', 'Les pointage de ' . $month[$form->get('Month')->getData()] . ' ' . $form->get('Year')->getData() . ' on été compilés');
            } else if ($tableauCompilation->getStatus() === 'Refusé') {
                $tableauCompilation->setProject(json_encode($project));
                $tableauCompilation->setNbColumn($nbColumn);
                $tableauCompilation->setStatus('En attente');
                $em->persist($tableauCompilation);
                $this->get('session')->getFlashBag()->add('notice', 'Les pointage de ' . $month[$form->get('Month')->getData()] . ' ' . $form->get('Year')->getData() . ' on été compilés');
            } else {
                $this->get('session')->getFlashBag()->add('noticeErreur', 'Impossible de compiler, la compilation est en attente de validation ou a déjà été validés.');
            }

            $em->flush();

            $this->redirectToRoute('nox_intranet_pointage_compilation');
        }

        $formCompilationRefus = $this->createFormBuilder()
                ->add('CompilationRefus', EntityType::class, array(
                    'class' => 'NoxIntranetPointageBundle:TableauCompilation'
                ))
                ->getForm();

        return $this->render('NoxIntranetPointageBundle:Pointage:compilationPointage.html.twig', array('form' => $form->createView(), 'formCompilationRefus' => $formCompilationRefus->createView()));
    }

}
