<?php

namespace NoxIntranet\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\PointageBundle\Entity\Tableau;
use NoxIntranet\PointageBundle\Entity\PointageValide;

class PointageAjaxController extends Controller {

    // Retourne les jours et la date correspondante en fonction du mois et de l'année passés en paramètres.
    public function ajaxSetDateAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $frenchDays = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');

            $month = $request->get('month');
            $year = $request->get('year');
            $date = '01-' . $month . '-' . $year;
            $end_date = date('t', strtotime('01-' . $month . '-' . $year)) . '-' . $month . '-' . $year;

            $monthDates = array();
            $i = 0;
            while (strtotime($date) <= strtotime($end_date)) {
                $monthDates[$i] = $frenchDays[date('w', strtotime($date))] . ' ' . date('d', strtotime($date));
                $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
                $i++;
            }

            $response = new Response(json_encode($monthDates));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
    }

    // Retourne les jours et la date correspondante en fonction du mois et de l'année de la feuille de pointage passé en paramètres.
    public function ajaxSetDateByPointageNumberAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $frenchDays = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');

            $pointageNumber = $request->get('pointageNumber');

            $em = $this->getDoctrine()->getManager();
            $table = $em->getRepository('NoxIntranetPointageBundle:Tableau')->find($pointageNumber);

            $month = $table->getMonth();
            $year = $table->getYear();
            $username = $table->getUser();

            $date = '01-' . $month . '-' . $year;
            $end_date = date('t', strtotime('01-' . $month . '-' . $year)) . '-' . $month . '-' . $year;

            $monthDates = array();
            $i = 0;
            while (strtotime($date) <= strtotime($end_date)) {
                $monthDates[$i] = $frenchDays[date('w', strtotime($date))] . ' ' . date('d', strtotime($date));
                $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
                $i++;
            }

            $response['dates'] = $monthDates;
            $response['month'] = $month;
            $response['year'] = $year;
            $response['username'] = $username;

            return new Response(json_encode($response));
        }
    }

    // Sauvegarde le contenu des cellules du tableau en fonction de l'utilisateur et de la date.
    public function ajaxSaveDataAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month');
            $year = $request->get('year');
            $data = $request->get('data');
            $signatureCollaborateur = $request->get('signatureCollaborateur');

            $em = $this->getDoctrine()->getManager();

            if ($request->get('user') !== '' && $request->get('user') !== null) {
                $user = $request->get('user');
            } else {
                $user = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
            }

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user, 'month' => $month, 'year' => $year));

            if (empty($tableData)) {
                $tableData = new Tableau();

                $tableData->setUser($user);
                $tableData->setMonth($month);
                $tableData->setYear($year);
                $tableData->setStatus(0);
            }

            $tableData->setData($data);
            $tableData->setSignatureCollaborateur($signatureCollaborateur);

            $em->persist($tableData);
            $em->flush();

            $response = new Response($data);
            return $response;
        }
    }

    // Retourne les données liées à l'utilisateur en fonction du mois et de l'année.
    public function ajaxGetDataAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month');
            $year = $request->get('year');

            $em = $this->getDoctrine()->getManager();
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user->getUsername(), 'month' => $month, 'year' => $year));

            if (!empty($tableData)) {
                $data = $tableData->getData();
                $signatureCollaborateur = $tableData->getSignatureCollaborateur();
            } else {
                $data = null;
                $signatureCollaborateur = null;
            }

            $dataArray = json_decode($data, true);

            $dataArray['signatureCollaborateur'] = $signatureCollaborateur;

            $stringData = json_encode($dataArray);

            $response = new Response($stringData);
            return $response;
        }
    }

    // Retourne les données liées à l'ensemble des utilisateurs en fonction du mois et de l'année.
    public function ajaxGetDataAdministratifAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month');
            $year = $request->get('year');

            $em = $this->getDoctrine()->getManager();

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findBy(array('month' => $month, 'year' => $year));

            if (!empty($tableData)) {
                foreach ($tableData as $table) {
                    $data[] = $table->getData();
                }
            } else {
                $data = null;
            }

            $response = new Response(json_encode($data));
            return $response;
        }
    }

    // Retourne les mois en fonction de l'utilisateur
    public function ajaxGetMonthByUserAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $username = $request->get('username');
            $months = array();

            $query = $em->createQuery('
                SELECT 
                    p
                FROM 
                    NoxIntranetPointageBundle:Tableau p
                WHERE 
                    p.user = :username AND p.status >= :statusNumber
                ORDER BY 
                    p.user ASC
            ')
                    ->setParameters(['username' => $username, 'statusNumber' => '1']);
            $pointages = $query->getResult();

            if (!empty($pointages)) {
                foreach ($pointages as $pointage) {
                    $monthNum = $pointage->getMonth();
                    $dateObj = \DateTime::createFromFormat('!m', $monthNum);
                    $frenchDate = array('January' => 'Janvier', 'February' => 'Février', 'March' => 'Mars', 'April' => 'Avril', 'May' => 'Mai', 'June' => 'Juin', 'July' => 'Juillet', 'August' => 'Août', 'September' => 'Septembre', 'October' => 'Octobre', 'November' => 'Novembre', 'December' => 'Décembre');
                    $monthName = $frenchDate[$dateObj->format('F')]; // March
                    if (!in_array($monthName, $months)) {
                        $months[$pointage->getMonth()] = $monthName;
                    }
                }
            }

            return new Response(json_encode($months));
        }
    }

    // Retourne les années en fonction de l'utilisateur et du mois.
    public function ajaxGetYearByMonthAndUserAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $username = $request->get('username');
            $month = $request->get('month');
            $years = array();

            $query = $em->createQuery('
                SELECT 
                    p
                FROM 
                    NoxIntranetPointageBundle:Tableau p
                WHERE 
                    p.user = :username AND p.status >= :statusNumber AND p.month = :month
                ORDER BY 
                    p.user ASC
            ')
                    ->setParameters(['username' => $username, 'statusNumber' => '1', 'month' => $month]);
            $pointages = $query->getResult();

            if (!empty($pointages)) {
                foreach ($pointages as $pointage) {
                    if (!in_array($pointage->getYear(), $years)) {
                        $years[$pointage->getYear()] = $pointage->getYear();
                    }
                }
            }

            return new Response(json_encode($years));
        }
    }

    // Retourne la liste d'utilisateurs en fonction du paramètre username.
    public function ajaxGetUsersByUsernameAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            // Permet de lire les fichiers Excel.
            include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

            // Inisialisation des varibables de fonction.
            $em = $this->getDoctrine()->getManager();
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";
            $username = $request->get('username');

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

            $users = $em->getRepository("NoxIntranetUserBundle:User")->createQueryBuilder('o')
                    ->where("CONCAT(CONCAT(o.firstname, ' '), o.lastname) LIKE :critere AND o.username IN (:users)")
                    ->setParameters(array('critere' => "%" . $username . "%", 'users' => array_keys(getUsersByAssistante($excelRHFile, $securityName, $em))))
                    ->getQuery()
                    ->getResult();

            $listeUsers = array();
            foreach ($users as $user) {
                $listeUsers[$user->getUsername()] = $user->getFirstname() . ' ' . $user->getLastname();
            }

            return new Response(json_encode($listeUsers));
        }
    }

    // Retourne les données fonction de l'utilisateur, du mois et de l'année.
    public function ajaxGetDataByUsernameAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $username = $request->get('username');
            $month = $request->get('month');
            $year = $request->get('year');

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));

            if (!empty($tableData) && ($tableData->getStatus() >= 1)) {
                $data = $tableData->getData();
                $signatureCollaborateur = $tableData->getSignatureCollaborateur();
            } else {
                $data = null;
                $signatureCollaborateur = null;
            }

            $dataArray = json_decode($data, true);

            $dataArray['signatureCollaborateur'] = $signatureCollaborateur;

            $stringData = json_encode($dataArray);

            $response = new Response($stringData);
            return $response;
        }
    }

    // Retourne le status du pointage en fonction de l'utilisateur, du mois et de l'année.
    public function ajaxGetPointageStatusAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            if ($request->get('username') === '') {
                $username = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
            } else {
                $username = $request->get('username');
            }

            $month = $request->get('month');
            $year = $request->get('year');

            $pointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));

            if (!empty($pointage)) {
                $status = $pointage->getStatus();
                if ($status === '2') {
                    $pointageCompile = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));
                    $status = $pointageCompile->getStatus();
                }
            } else {
                $status = null;
            }

            $response = new Response($status);
            return $response;
        }
    }

    // Valide la feuille de pointage pour la compilation par agence.
    public function ajaxAssistanteValidationAction(Request $request) {

        // Valide le pointage du collaborateur par l'assistante d'agence
        function pointageAssistanteAgenceValidation($username, $month, $year, $context, $em) {
            $pointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));

            $pointage->setStatus(2);
            $em->persist($pointage);
            $em->flush();

            $context->get('session')->getFlashBag()->add('notice', 'Le pointage a été validé.');
        }

        function sauvegardePointageValide($username, $month, $year, $absences, $forfaitsDeplacement, $primesPanier, $titreTransport, $titresRepas, $em) {

            $user = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($username);

            $newPointageValide = new PointageValide();

            $newPointageValide->setUser($username);
            $newPointageValide->setFirstname($user->getFirstname());
            $newPointageValide->setLastname($user->getLastname());
            $newPointageValide->setMonth($month);
            $newPointageValide->setYear($year);
            $newPointageValide->setAbsences($absences);
            $newPointageValide->setForfaitsdeplacement($forfaitsDeplacement);
            $newPointageValide->setPrimespanier($primesPanier);
            $newPointageValide->setTitreTransport($titreTransport);
            $newPointageValide->setTitresRepas($titresRepas);
            $newPointageValide->setStatus(2);

            $em->persist($newPointageValide);
            $em->flush();
        }

        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $username = $request->get('username');
            $month = $request->get('month');
            $year = $request->get('year');
            $absences = $request->get('absences');
            $forfaitsDeplacement = $request->get('forfaitsDeplacement');
            $primesPanier = $request->get('primesPanier');
            $titreTransport = $request->get('titreTransport');
            $titresRepas = $request->get('titresRepas');

            sauvegardePointageValide($username, $month, $year, $absences, $forfaitsDeplacement, $primesPanier, $titreTransport, $titresRepas, $em);
            pointageAssistanteAgenceValidation($username, $month, $year, $this, $em);

            $response = new Response('Ok');
            return $response;
        }
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

    // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année et de l'assistante d'agence.
    public function ajaxGetAssistanceAgencePointageCompilationByMonthAndYearAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $month = $request->get('month');
            $year = $request->get('year');

            // Permet de lire les fichiers Excel.
            include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

            // Inisialisation des varibables de fonction.
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $em = $this->getDoctrine()->getManager();
            $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";

            // Retourne les pointages valides des collaborateurs de l'assistante d'agence.
            function getPointagesValides($em, $users, $month, $year) {
                //$pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $month, 'year' => $year));

                $query = $em->createQueryBuilder()
                        ->select('p')
                        ->from('NoxIntranetPointageBundle:PointageValide', 'p')
                        ->where('p.month = :month AND p.year = :year AND p.status = :status')
                        ->setParameters(array('month' => $month, 'year' => $year, 'status' => 2))
                        ->getQuery()
                ;
                $pointagesValides = $query->getArrayResult();

                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    if (in_array($pointage['user'], array_keys($users))) {
                        $pointage['absences'] = json_decode($pointage['absences'], true);
                        $pointages[] = $pointage;
                    }
                }

                return $pointages;
            }

            return new Response(json_encode(getPointagesValides($em, $this->getUsersByAssistante($excelRHFile, $securityName, $em), $month, $year)));
        }
    }

    // Sauvegarde les modification sur les pointages en base de données.
    public function ajaxSaveCompilationDataAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $username = $request->get('username');
            $month = $request->get('month');
            $year = $request->get('year');
            $input = $request->get('input');
            $value = $request->get('value');

            $em = $this->getDoctrine()->getManager();
            $setter = "set" . ucwords($input);

            $compilation = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));
            $compilation->$setter($value);
            $em->persist($compilation);
            $em->flush();

            return new Response('Ok');
        }
    }

    // Sauvegarde les modification sur les absences de pointages en base de données.
    public function ajaxSaveCompilationAbsencesAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $username = $request->get('username');
            $month = $request->get('month');
            $year = $request->get('year');
            $date = $request->get('date');
            $data = $request->get('data');
            $value = $request->get('value');

            $em = $this->getDoctrine()->getManager();

            $compilation = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));

            $abscences = json_decode($compilation->getAbsences(), true);

            var_dump($abscences);

            if ($data !== 'commentaires') {
                foreach ($abscences[$data] as $key => $abscence) {
                    if ($abscence['date'] === $date) {
                        $abscences[$data][$key]['valeur'] = $value;
                    }
                }
            } else {
                foreach ($abscences['matin'] as $key => $abscence) {
                    if ($abscence['date'] === $date) {
                        $abscences['matin'][$key]['commentaires'] = $value;
                    }
                }
            }

            $compilation->setAbsences(json_encode($abscences, true));

            $em->persist($compilation);
            $em->flush();

            return new Response('Ok');
        }
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante d'agence connectée.
    function getUsersByDAManager($excelRHFile, $securityName, $em) {
        $objReaderAssistantes = new \PHPExcel_Reader_Excel2007();
        $objReaderAssistantes->setReadFilter(new DAManagerGetter());
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

    // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année et du directeur d'agence/manager.
    public function ajaxGetDAManagerPointageCompilationByMonthAndYearAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $month = $request->get('month');
            $year = $request->get('year');

            // Permet de lire les fichiers Excel.
            include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

            // Inisialisation des varibables de fonction.
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $em = $this->getDoctrine()->getManager();
            $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";

            // Retourne les pointages valides des collaborateurs du directeur d'agence/manager.
            function getPointagesValides($em, $users, $month, $year) {
                //$pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $month, 'year' => $year));

                $query = $em->createQueryBuilder()
                        ->select('p')
                        ->from('NoxIntranetPointageBundle:PointageValide', 'p')
                        ->where('p.month = :month AND p.year = :year AND p.status = :status')
                        ->setParameters(array('month' => $month, 'year' => $year, 'status' => 3))
                        ->getQuery()
                ;
                $pointagesValides = $query->getArrayResult();

                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    if (in_array($pointage['user'], array_keys($users))) {
                        $pointage['absences'] = json_decode($pointage['absences'], true);
                        $pointages[] = $pointage;
                    }
                }

                return $pointages;
            }

            return new Response(json_encode(getPointagesValides($em, $this->getUsersByDAManager($excelRHFile, $securityName, $em), $month, $year)));
        }
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

    // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année et du directeur d'agence/manager.
    public function ajaxGetAssistantesRHPointageCompilationByMonthAndYearAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $month = $request->get('month');
            $year = $request->get('year');

            // Permet de lire les fichiers Excel.
            include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

            // Inisialisation des varibables de fonction.
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $em = $this->getDoctrine()->getManager();
            $excelRHFile = "C:/wamp/www/Symfony/Validation Manager WF RF MAJ NR 300516.xlsx";

            // Retourne les pointages valides des collaborateurs du directeur d'agence/manager.
            function getPointagesValides($em, $users, $month, $year) {
                //$pointagesValides = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $month, 'year' => $year));

                $query = $em->createQueryBuilder()
                        ->select('p')
                        ->from('NoxIntranetPointageBundle:PointageValide', 'p')
                        ->where('p.month = :month AND p.year = :year AND p.status = :status')
                        ->setParameters(array('month' => $month, 'year' => $year, 'status' => 4))
                        ->getQuery()
                ;
                $pointagesValides = $query->getArrayResult();

                $pointages = array();
                foreach ($pointagesValides as $pointage) {
                    if (in_array($pointage['user'], array_keys($users))) {
                        $pointage['absences'] = json_decode($pointage['absences'], true);
                        $pointages[] = $pointage;
                    }
                }

                return $pointages;
            }

            return new Response(json_encode(getPointagesValides($em, $this->getUsersByAssistantesRH($excelRHFile, $securityName, $em), $month, $year)));
        }
    }

    // Retourne le status du pointage en fonction du mois et de l'année.
    public function ajaxGetPointageCompilationStatusAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $month = $request->get('month');
            $year = $request->get('year');

            $pointageCompile = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findOneBy(array('month' => $month, 'year' => $year));

            if (!empty($pointageCompile)) {
                $status = $pointageCompile->getStatus();
            } else {
                $status = null;
            }

            $response = new Response($status);
            return $response;
        }
    }

    public function ajaxGetAffairesByNumberAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Récupére le terme de la recherche.
            $search = $request->get('search');

            // Récupére le fichier contenant les affaires.
            $file = $this->get('kernel')->getRootDir() . "\..\GX_DB\Affaires.csv";

            // Initialise le tableau des affaires.
            $affaires = array();

            // Place le numéro et le nom des affaires dans un tableau
            $row = 1;
            if (($handle = fopen($file, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $row++;
                    if (array_key_exists(0, $data) && strstr($data[0], $search) !== FALSE) {
                        $affaires[$row]['numAffaire'] = utf8_encode($data[0]);
                        if (array_key_exists(1, $data)) {
                            $affaires[$row]['nomAffaire'] = utf8_encode($data[1]);
                        }
                    }
                }
                fclose($handle);
            }

            return new Response(json_encode($affaires, true));
        }
    }

}
