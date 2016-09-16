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
                        ->addOrderBy('p.lastname', 'ASC')
                        ->addOrderBy('p.firstname', 'ASC')
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

    // Retourne le nombre de pointages des collaborateurs qui n'ont pas encore était validés par l'assistante d'agence en fonction du mois et de l'année.
    public function ajaxGetUnvalidateAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Initialisation des variables.
            $em = $this->getDoctrine()->getManager();
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $month = $request->get('month');
            $year = $request->get('year');
            $userStatus = $request->get('userStatus');

            // On récupére la liste des collaborateurs assignés à l'utilisateur en fonction de son grade hiérarchique.
            switch ($userStatus) {
                case 'AA':
                    $users = $this->getUsersByAssistante($securityName, $em);
                    break;
                case 'DAManager':
                    $users = $this->getUsersByDAManager($securityName, $em);
                    break;
                case 'RH':
                    $users = $this->getUsersByAssistantesRH($securityName, $em);
                    break;
                case 'roleRH':
                    $usersHierarchyEntity = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();
                    $users = array();
                    // On récupére tous les utilisateurs.
                    foreach ($usersHierarchyEntity as $user) {
                        $users[$user->getUsername()] = $user->getPrenom() . ' ' . $user->getNom();
                    }
                    break;
            }


            // On récupére tout les tableau de pointages du mois et de l'année courante.
            $pointagesEntity = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findBy(array('month' => $month, 'year' => $year));
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

            return new Response(json_encode(array('pointageEnAttenteValidationAA' => $pointageEnAttenteValidationAA, 'collaborateurSansPointage' => $collaborateurSansPointage)));
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
                        ->addOrderBy('p.lastname', 'ASC')
                        ->addOrderBy('p.firstname', 'ASC')
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
                        ->addOrderBy('p.lastname', 'ASC')
                        ->addOrderBy('p.firstname', 'ASC')
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

    // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année et du directeur d'agence/manager/RH.
    public function ajaxGetCompilationsValideByMonthAndYearAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $month = $request->get('month');
            $year = $request->get('year');
            $userStatus = $request->get('userStatus');

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
                        ->addOrderBy('p.lastname', 'ASC')
                        ->addOrderBy('p.firstname', 'ASC')
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

            // On vérifie le status hiérarchique de l'utilisateur et on retourne les pointages valides et non validés des collaborateurs associés à l'utilisateur.
            if ($userStatus === 'RH') {
                $pointagesValides = getPointagesValides($em, $this->getUsersByAssistantesRH($securityName, $em), $month, $year);
                //$pointageNonValide = getNbPointagesNonValides($em, $this->getUsersByAssistantesRH($securityName, $em), $this);
            } elseif ($userStatus === 'DAManager') {
                $pointagesValides = getPointagesValides($em, $this->getUsersByDAManager($securityName, $em), $month, $year);
                //$pointageNonValide = getNbPointagesNonValides($em, $this->getUsersByDAManager($securityName, $em), $this);
            }
            // Si l'utilisateur ne fait pas partie du tableau hiérarchique mais a le rôle RH.
            else {
                // On récupére tous les utilisateurs.
                $userStatus = 'roleRH';
                $usersHierarchyEntity = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();
                $users = array();
                // On récupére tous les utilisateurs.
                foreach ($usersHierarchyEntity as $user) {
                    $users[$user->getUsername()] = $user->getPrenom() . ' ' . $user->getNom();
                }
                $pointagesValides = getPointagesValides($em, $users, $month, $year);
                //$pointageNonValide = getNbPointagesNonValides($em, $users, $month, $year);
            }

            return new Response(json_encode(getPointagesValides($em, $pointagesValides, $month, $year)));
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

    // Génére un fichier Excel qui résume la compilation en fonction du mois, de l'année, et de l'utilisateur séléctionné.
    public function generateExcelRecapAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            // On récupére le module PHP de traitement des fichiers Excel.
            $root = str_replace('\\', '/', $this->get('kernel')->getRootDir());
            require_once $root . '\..\vendor\phpexcel\phpexcel\PHPExcel.php';

            // Inisialisation des varibables de fonction.
            $month = $request->get('month');
            $year = $request->get('year');
            $userStatus = $request->get('userStatus');
            $securityName = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();
            $em = $this->getDoctrine()->getManager();

            // Retourne les pointages valides des collaborateurs du directeur d'agence/manager.
            function getPointagesValides($em, $users, $month, $year) {
                $query = $em->createQueryBuilder()
                        ->select('p')
                        ->from('NoxIntranetPointageBundle:PointageValide', 'p')
                        ->where('p.month = :month AND p.year = :year AND p.status = :status')
                        ->setParameters(array('month' => $month, 'year' => $year, 'status' => 5))
                        ->addOrderBy('p.lastname', 'ASC')
                        ->addOrderBy('p.firstname', 'ASC')
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

            // On vérifie le status hiérarchique de l'utilisateur et on retourne les pointages valides et non validés des collaborateurs associés à l'utilisateur.
            if ($userStatus === 'RH') {
                $pointagesValides = getPointagesValides($em, $this->getUsersByAssistantesRH($securityName, $em), $month, $year);
                //$pointageNonValide = getNbPointagesNonValides($em, $this->getUsersByAssistantesRH($securityName, $em), $this);
            } elseif ($userStatus === 'DAManager') {
                $pointagesValides = getPointagesValides($em, $this->getUsersByDAManager($securityName, $em), $month, $year);
                //$pointageNonValide = getNbPointagesNonValides($em, $this->getUsersByDAManager($securityName, $em), $this);
            }
            // Si l'utilisateur ne fait pas partie du tableau hiérarchique mais a le rôle RH.
            else {
                // On récupére tous les utilisateurs.
                $userStatus = 'roleRH';
                $usersHierarchyEntity = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();
                $users = array();
                // On récupére tous les utilisateurs.
                foreach ($usersHierarchyEntity as $user) {
                    $users[$user->getUsername()] = $user->getPrenom() . ' ' . $user->getNom();
                }
                $pointagesValides = getPointagesValides($em, $users, $month, $year);
                //$pointageNonValide = getNbPointagesNonValides($em, $users, $month, $year);
            }

            // On récupére les établissements des collaborateurs des pointages valides.
            $etablissements = array();
            foreach ($pointagesValides as $pointage) {
                $usersHierarchyEntity = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage['user']);
                if (!empty($usersHierarchyEntity)) {
                    $etablissements[$usersHierarchyEntity->getEtablissement()] = $usersHierarchyEntity->getEtablissement();
                }
            }

            // Si il y a plus d'1 agence on initisalise un tableau qui contiendras les chemins des fichiers générés.
            if (count($etablissements) > 1) {
                $filesPaths = array();
            }

            // On vide le dossier avant l'enregistrement.
            foreach (glob($root . "/../web/Pointage/FichierRecap/*") as $file) { // iterate files
                if (is_file($file)) {
                    unlink($file); // delete file
                }
            }

            foreach ($etablissements as $etablissement) {

                // Initialisation d'un nouveau fichier Excel.
                $objPHPExcel = \PHPExcel_IOFactory::load($root . '/../web/Pointage/Modele/PointageRecapModele.xlsx');

                $rowTotaux = 2; // Initialisation du compteur de ligne des totaux.
                $rowAbsence = 2; // Initialisation du compteur de ligne des absences.
                // Pour chaque pointage.
                foreach ($pointagesValides as $pointage) {
                    // On récupére l'entité hiérarchique du collaborateur.
                    $usersHierarchyEntity = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage['user']);
                    // Si le collaborateur est défini dans la hiérarchie et qu'il fait parti de l'établissement courant.
                    if (!empty($usersHierarchyEntity) && $etablissement === $usersHierarchyEntity->getEtablissement()) {
                        $objWorksheetTotaux = $objPHPExcel->getSheet(1); // On séléctionne la feuille de totaux comme feuille de travail.
                        $objWorksheetTotaux->getCell('A' . $rowTotaux)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                        $objWorksheetTotaux->getCell('B' . $rowTotaux)->setValue($pointage['titresRepas']); // On écris le nombre de titres repas.
                        $objWorksheetTotaux->getCell('C' . $rowTotaux)->setValue($pointage['forfaitsDeplacement']); // On écris le montant du forfait de déplacement.
                        $objWorksheetTotaux->getCell('D' . $rowTotaux)->setValue($pointage['primesPanier']); // On écris le montant de la primes panier.
                        $objWorksheetTotaux->getCell('E' . $rowTotaux)->setValue($pointage['titreTransport']); // On écris le montant du titre de transport.
                        $rowTotaux++; // On passe à la ligne suivante.

                        $objWorksheetAbsence = $objPHPExcel->getSheet(0); // On séléctionne la feuille des absences comme feuille de travail.
                        foreach ($pointage['absences']['matin'] as $key => $absence) {
                            $objWorksheetAbsence->getCell('A' . $rowAbsence)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                            $objWorksheetAbsence->getCell('B' . $rowAbsence)->setValue(str_replace('-', '/', $absence['date'])); // On écris la date.
                            // Si un clé de valeur existe pour l'absence du matin.
                            if (array_key_exists('valeur', $absence)) {
                                $objWorksheetAbsence->getCell('C' . $rowAbsence)->setValue($absence['valeur']); // On écris la valeur d'absence du matin.
                            }
                            // Si un clé de valeur existe pour l'absence de l'après-midi.
                            if (array_key_exists('valeur', $pointage['absences']['am'][$key])) {
                                $objWorksheetAbsence->getCell('D' . $rowAbsence)->setValue($pointage['absences']['am'][$key]['valeur']); // On écris la valeur d'absence de l'après-midi.
                            }
                            $objWorksheetAbsence->getCell('E' . $rowAbsence)->setValue($absence['commentaires']); // On écris le commentaire.
                            $rowAbsence++;
                        }
                    }
                }

                // Initialisation d'un tableau de concordance chiffre => string pour les mois.
                $monthString = array(1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novemvre', 12 => 'Décembre');
                $filename = str_replace('/', '_', 'Récapitulatif compilation pointages - ' . $securityName . ' - ' . $etablissement . ' - ' . $monthString[$month] . ' ' . $year . '.xlsx'); // On génére le nom de fichier.
                $folder = $root . "/../web/Pointage/FichierRecap/"; // On récupére le dossier ou sera enregistré le fichier.
                // On sauvegarde le fichier.
                $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                $objWriter->save($folder . utf8_decode($filename)); // utf8_decode est utilisé pour encoder les accents sur le nom de fichier Windows.   
                $objPHPExcel->disconnectWorksheets();
                unset($objWriter, $objPHPExcel);
                $fileURL = $this->get('request')->getSchemeAndHttpHost() . '/Symfony/web/Pointage/FichierRecap/' . $filename; // On récupére l'URL publique du fichier.
                // Si il y a plus d'1 établissement on ajoute fichier généré au tableau des fichiers.
                if (count($etablissements) > 1) {
                    $filesPaths[] = $folder . $filename;
                }
            }

            // Si il y a plus d'1 établissement on génére un fichier Zip qui contient les différents fichier récapitulatifs.
            if (count($etablissements) > 1) {
                $filename = 'Récapitulatif compilation pointages - ' . $securityName . ' - ' . $monthString[$month] . ' ' . $year . '.zip'; // Nom du fichier.
                $file = $folder . utf8_decode($filename); // Chemin du fichier Zip.

                $this->ZipGenerator($file, $filesPaths); // Génération du fichier Zip.

                $fileURL = $this->get('request')->getSchemeAndHttpHost() . '/Symfony/web/Pointage/FichierRecap/' . $filename; // On récupére l'URL publique du fichier.
            }

            // On retourne sois l'URL du fichier récapitulatif unique sois l'URL de l'archive Zip contenant les différents fichiers récapitulatifs.
            return new Response($fileURL);
        }
    }

    private function ZipGenerator($filepath, $files) {
        // On crée une nouvelle archive Zip.
        $zipFile = new \ZipArchive();
        $zipFile->open($filepath, \ZipArchive::CREATE); // Génération du fichier.
        // Pour chaques fichiers.
        foreach ($files as $file) {
            $filename = iconv('UTF-8', 'IBM850', basename($file)); // On récupére et encode le nom du fichier depuis son chemin.
            $zipFile->addFile(utf8_decode($file), $filename); // On ajoute le fichier dans l'archive.
        }
        $zipFile->close(); // On ferme l'archive.
    }

}
