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

            // Pour convertir les jours en Français.
            $frenchDays = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');

            // Récupére les date du premier et dernier jours du mois en fonction du mois et de l'année.
            $month = $request->get('month');
            $year = $request->get('year');
            $date = '01-' . $month . '-' . $year;
            $end_date = date('t', strtotime('01-' . $month . '-' . $year)) . '-' . $month . '-' . $year;

            // Récupére les jours fériés Français.
            $joursFeries = $this->getPublicHoliday($year);

            // Récupére les dates française pour tous les jours du mois et vérifie si le jours est férié.
            $monthDates = array();
            $i = 0;
            while (strtotime($date) <= strtotime($end_date)) {
                $monthDates[$i]['date'] = $frenchDays[date('w', strtotime($date))] . ' ' . date('d', strtotime($date));

                if (in_array(strtotime($date), $joursFeries)) {
                    $monthDates[$i]['ferie'] = true;
                } else {
                    $monthDates[$i]['ferie'] = false;
                }
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

            // Récupére les jours fériés Français.
            $joursFeries = $this->getPublicHoliday($year);

            $monthDates = array();
            $i = 0;
            while (strtotime($date) <= strtotime($end_date)) {
                $monthDates[$i]['date'] = $frenchDays[date('w', strtotime($date))] . ' ' . date('d', strtotime($date));
                if (in_array(strtotime($date), $joursFeries)) {
                    $monthDates[$i]['ferie'] = true;
                } else {
                    $monthDates[$i]['ferie'] = false;
                }
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

            if (!empty($signatureCollaborateur)) {
                $dataArray['signatureCollaborateur'] = $signatureCollaborateur;
            }

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

            // Si le nom n'est pas spécifié...
            if ($request->get('username') === '') {
                // ...On récupére celui de l'utilisateur courant.
                $username = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
            }
            // Sinon on utilise le nom spécifié par la requête Ajax.
            else {
                $username = $request->get('username');
            }

            // Récupére le mois et l'année spécifiés par la requête.
            $month = $request->get('month');
            $year = $request->get('year');

            // Récupére le pointage correspondant aux données fournis.
            $pointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));

            // Si le pointage existe...
            if (!empty($pointage)) {
                // ...On récupére sont status.
                $status = $pointage->getStatus();

                // Si le status est égale à 2...
                if ($status === '2') {
                    //On récupére le status du pointage compilé correspondant.
                    $pointageCompile = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));
                    $status = $pointageCompile->getStatus();
                }
            }
            // Sinon le status est déclaré nul.
            else {
                $status = null;
            }

            // On renvoie le status.
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

    // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année et de l'assistante d'agence.
    public function ajaxGetAssistanceAgencePointageCompilationByMonthAndYearAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $month = $request->get('month');
            $year = $request->get('year');

            // Inisialisation des varibables de fonction.
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $em = $this->getDoctrine()->getManager();

            // Retourne les pointages valides des collaborateurs de l'assistante d'agence.
            function getPointagesValides($em, $users, $month, $year) {
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

            return new Response(json_encode(getPointagesValides($em, $this->getUsersByAssistante($securityName, $em), $month, $year)));
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

            if ($data !== 'commentaires') {
                foreach ($abscences[$data] as $key => $abscence) {
                    if ($abscence['date'] === str_replace('/', '-', $date)) {
                        $abscences[$data][$key]['valeur'] = $value;
                    }
                }
            } else {
                foreach ($abscences['matin'] as $key => $abscence) {
                    if ($abscence['date'] === str_replace('/', '-', $date)) {
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
    function getUsersByDAManager($securityName, $em) {
        // On récupére les utilisateurs qui ont l'assistante comme supérieur hiérarchique.
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

    // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année et du directeur d'agence/manager.
    public function ajaxGetDAManagerPointageCompilationByMonthAndYearAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $month = $request->get('month');
            $year = $request->get('year');

            // Inisialisation des varibables de fonction.
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $em = $this->getDoctrine()->getManager();

            // Retourne les pointages valides des collaborateurs du directeur d'agence/manager.
            function getPointagesValides($em, $users, $month, $year) {
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

            return new Response(json_encode(getPointagesValides($em, $this->getUsersByDAManager($securityName, $em), $month, $year)));
        }
    }

    // Lis le fichier Excel et retourne la liste des collaborateur qui dépendent de l'assistante RH/DRH connectée.
    function getUsersByAssistantesRH($securityName, $em) {

        // On récupére les utilisateurs qui ont l'assistante comme supérieur hiérarchique.
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

    // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année et du directeur d'agence/manager.
    public function ajaxGetAssistantesRHPointageCompilationByMonthAndYearAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $month = $request->get('month');
            $year = $request->get('year');

            // Inisialisation des varibables de fonction.
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $em = $this->getDoctrine()->getManager();

            // Retourne les pointages valides des collaborateurs du directeur d'agence/manager.
            function getPointagesValides($em, $users, $month, $year) {
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

            return new Response(json_encode(getPointagesValides($em, $this->getUsersByAssistantesRH($securityName, $em), $month, $year)));
        }
    }

    // Retourne le status du pointage en fonction du mois et de l'année.
    public function ajaxGetPointageCompilationStatusAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            // Récupére le mois et l'année spécifiés par la requête.
            $month = $request->get('month');
            $year = $request->get('year');

            // Récupére les pointages compilés correspondants aux données fournis.
            $pointageCompile = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $month, 'year' => $year));

            // Si un ou plusieurs pointages compilés existent...
            if (!empty($pointageCompile)) {

                // ...On récupére le plus petit status.
                $status = 5;
                foreach ($pointageCompile as $pointage) {
                    if ($pointage->getStatus() <= $status) {
                        $status = $pointage->getStatus();
                    }
                }
            }
            // Sinon le status est déclaré nul.
            else {
                $status = null;
            }

            // On renvoie le status.
            $response = new Response($status);
            return $response;
        }
    }

    // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année et du directeur d'agence/manager.
    public function ajaxGetCompilationsValideByMonthAndYearAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $month = $request->get('month');
            $year = $request->get('year');

            // Inisialisation des varibables de fonction.
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $em = $this->getDoctrine()->getManager();

            // Retourne les pointages valides des collaborateurs du directeur d'agence/manager.
            function getPointagesValides($em, $users, $month, $year) {
                $query = $em->createQueryBuilder()
                        ->select('p')
                        ->from('NoxIntranetPointageBundle:PointageValide', 'p')
                        ->where('p.month = :month AND p.year = :year AND p.status = :status')
                        ->setParameters(array('month' => $month, 'year' => $year, 'status' => 5))
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

            return new Response(json_encode(getPointagesValides($em, $this->getUsersByAssistantesRH($securityName, $em), $month, $year)));
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
