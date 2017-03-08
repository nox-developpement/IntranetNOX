<?php

namespace NoxIntranet\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\PointageBundle\Entity\Tableau;
use NoxIntranet\PointageBundle\Entity\PointageValide;
use NoxIntranet\PointageBundle\Entity\JustificatifTransportFile;
use ZipArchive;

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
            // On récupére les informations du pointage.
            $month = $request->get('month');
            $year = $request->get('year');
            $data = $request->get('data');
            $signatureCollaborateur = $request->get('signatureCollaborateur');

            // Initialisation de l'entity manager.
            $em = $this->getDoctrine()->getManager();

            // Si le collaborateur du pointage est renseigné...
            if ($request->get('user') !== '' && $request->get('user') !== null) {
                // Si l'Id de son entité est fourni...
                if (is_numeric($request->get('user'))) {
                    $user = $em->find('NoxIntranetPointageBundle:Tableau', $request->get('user'))->getUser(); // On récupére son username depuis l'entité du tableau.
                }
                // Sinon...
                else {
                    $user = $request->get('user'); // On récupére directement l'username.
                }
            }
            // Si le collaborateur n'est pas renseigné...
            else {
                $user = $this->get('security.token_storage')->getToken()->getUser()->getUsername(); // On récupére l'username du collaborateur courant.
            }

            // On récupére les données du pointage si il existe.
            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user, 'month' => $month, 'year' => $year));

            // Si le pointage n'existe pas...
            if (empty($tableData)) {
                // On crée un nouveau pointage.
                $tableData = new Tableau();

                // On attribut les informations.
                $tableData->setUser($user);
                $tableData->setMonth($month);
                $tableData->setYear($year);
                $tableData->setStatus(0);
            }

            // On lui attribut ses données.
            $tableData->setData($data);
            $tableData->setSignatureCollaborateur($signatureCollaborateur);

            // On sauvegarde le pointage en base de données.
            $em->persist($tableData);
            $em->flush();

            $response = new Response($data);
            return $response;
        }
    }

    // Retourne les données liées à l'utilisateur en fonction du mois et de l'année.
    public function ajaxGetDataAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month'); // Le mois du pointage.
            $year = $request->get('year'); // L'année du pointage.          
            $user = $request->get('username'); // On récupére l'entitée de l'utilisateur courant.
            //
            // On récupére le pointage correspondant au mois, à l'année et au collaborateur.
            $em = $this->getDoctrine()->getManager();
            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user, 'month' => $month, 'year' => $year));

            // Si le pointage existe...
            if (!empty($tableData)) {
                // On extrait ses données.
                $data = $tableData->getData();
                $signatureCollaborateur = $tableData->getSignatureCollaborateur();
                $justificatifTransport = $tableData->getJustificatifTransportFile();
                $regularisation = $tableData->getRegularisation();
            }
            // Si le pointage n'existe pas...
            else {
                // On initialise des données nuls.
                $data = null;
                $signatureCollaborateur = null;
                $justificatifTransport = null;
                $regularisation = null;
            }

            // On décode les données sous forme de tableau.
            $dataArray = json_decode($data, true);

            // Si il existe une signature...
            if (!empty($signatureCollaborateur)) {
                $dataArray['signatureCollaborateur'] = $signatureCollaborateur; // On ajoute la signature au tableau des données.
            }

            // Si il existe un justificatif de transport...
            if (!empty($justificatifTransport)) {
                $dataArray['justificatifTransport'] = $justificatifTransport->getId(); // On ajoute l'id du justificatif au tableau des données.
            }

            // Si il existe un texte de régularisation...
            if (!empty($regularisation)) {
                $dataArray['regularisation'] = $regularisation; // On ajoute l'id du justificatif au tableau des données.
            }

            // On encode le tableau de données et on le retourne.
            $stringData = json_encode($dataArray);
            return new Response($stringData);
        }
    }

    // Retourne les données fonction de l'utilisateur, du mois et de l'année.
    public function ajaxGetDataByUsernameAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $username = $request->get('username'); // Le collaborateur du pointage.
            $month = $request->get('month'); // Le mois du pointage.
            $year = $request->get('year'); // L'année du pointage.
            // On récupére le pointage correspondant au mois, à l'année et au collaborateur.
            $em = $this->getDoctrine()->getManager();
            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));

            // Si le pointage existe et qu'il a été validé par le collaborateur.
            if (!empty($tableData) && ($tableData->getStatus() >= 1)) {
                // On extrait ses données.
                $data = $tableData->getData();
                $signatureCollaborateur = $tableData->getSignatureCollaborateur();
                $justificatifTransport = $tableData->getJustificatifTransportFile();
                $regularisation = $tableData->getRegularisation();
            }
            // Si le pointage n'existe pas...
            else {
                // On initialise des données nuls.
                $data = null;
                $signatureCollaborateur = null;
                $justificatifTransport = null;
                $regularisation = null;
            }

            // On décode les données sous forme de tableau.
            $dataArray = json_decode($data, true);

            // Si il existe une signature...
            if (!empty($signatureCollaborateur)) {
                $dataArray['signatureCollaborateur'] = $signatureCollaborateur; // On ajoute la signature au tableau des données.
            }

            // Si il existe un justificatif de transport...
            if (!empty($justificatifTransport)) {
                $dataArray['justificatifTransport'] = $justificatifTransport->getId(); // On ajoute l'id du justificatif au tableau des données.
            }

            // Si il existe un texte de régularisation...
            if (!empty($regularisation)) {
                $dataArray['regularisation'] = $regularisation; // On ajoute l'id du justificatif au tableau des données.
            }

            // On encode le tableau de données et on le retourne.
            $stringData = json_encode($dataArray);
            return new Response($stringData);
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

        function sauvegardePointageValide($username, $month, $year, $absences, $forfaitsDeplacement, $primesPanier, $titreTransport, $titresRepas, $forfaitsDeplacementDetails, $mods, $em) {

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
            $newPointageValide->setForfaitsDeplacementDetails($forfaitsDeplacementDetails);
            $newPointageValide->setMods($mods);
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
            $forfaitsDeplacementDetails = $request->get('forfaitsDeplacementDetails');
            $mods = $request->get('mods');

            sauvegardePointageValide($username, $month, $year, $absences, $forfaitsDeplacement, $primesPanier, $titreTransport, $titresRepas, $forfaitsDeplacementDetails, $mods, $em);
            pointageAssistanteAgenceValidation($username, $month, $year, $this, $em);

            $response = new Response('Ok');
            return $response;
        }
    }

    // Retourne le nombre de pointages des collaborateurs qui n'ont pas encore était validés par l'assistante d'agence en fonction du mois et de l'année.
    public function ajaxGetUnvalidateAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Initialisation des variables.
            $em = $this->getDoctrine()->getManager();
            $securityName = $this->wd_remove_accents(mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8'));
            $month = $request->get('month');
            $year = $request->get('year');
            $userStatus = $request->get('userStatus');
            $manager = $request->get('manager');
            $rhMode = $request->get('rhMode');

            // On récupére la liste des collaborateurs assignés à l'utilisateur en fonction de son grade hiérarchique.
            $users = $this->getUsersByStatus($userStatus, $securityName, $rhMode);

            // On supprime les collaborateurs qui le manager passé en paramètre comme Manager.
            foreach ($users as $username => $name) {
                $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($username);
                if (!(!empty($userHierarchy) && $userHierarchy->getDA() === $manager)) {
                    unset($users[$username]);
                }
            }

            // On récupére tout les tableau de pointages du mois et de l'année courante.
            $pointagesEntity = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findBy(array('month' => $month, 'year' => $year));
            $pointageEnAttenteValidationAA = array(); // Initialisation du tableau des pointages en attente de validation par l'assistant d'agence.
            $pointageValideParCollaborateur = array(); // Initialisation du tableau des pointages validés par le collaborateur.
            //
            // Pour chaque pointage.
            foreach ($pointagesEntity as $pointage) {
                // On récupére l'entité hiérarchique du collaborateur du pointage.
                $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage->getUser());
                // Si le collaborateur est définie dans la hiérarchie, qu'il fait partie de l'établissement désigné et qu'il dépend de l'utilisateur.
                if (!empty($userHierarchy) && $userHierarchy->getDA() === $manager && in_array($pointage->getUser(), array_keys($users))) {
                    // Si le pointage a été validé par le collaborateur mais pas encore par l'assistant d'agence.
                    if ($pointage->getStatus() === '1') {
                        $pointageEnAttenteValidationAA[] = $pointage; // On l'ajout au tableau des pointages en attente de validation par l'assistant d'agence.
                    }
                    // Si le collaborateur est attribué à l'assistant d'agence et que le pointage a au moins été validé par le collaborateur.
                    if ($pointage->getStatus() >= '1') {
                        $pointageValideParCollaborateur[] = $pointage->getUser(); // On ajoute l'username du collaborateur au tableau des pointages validés par le collaborateur.
                    }
                }
            }

            // On récupére les entitées des utilisateurs qui n'ont pas remplis/validé leur pointage.
            $collaborateurSansPointage = array();
            foreach (array_diff(array_keys($users), $pointageValideParCollaborateur) as $collaborateur) {
                $collaborateurEntity = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($collaborateur);
                if (!empty($collaborateurEntity)) {
                    $collaborateurSansPointage[$collaborateur] = $collaborateurEntity->getLastname() . " " . $collaborateurEntity->getFirstname();
                }
            }
            asort($collaborateurSansPointage); // On trie le tableau des collaborateurs sans pointages par ordre alphabétique.

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

    // Retourne le status du pointage en fonction du mois et de l'année.
    public function ajaxGetPointageCompilationStatusAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $securityName = $this->wd_remove_accents(mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8'));
            $em = $this->getDoctrine()->getManager();

            // Récupére le mois et l'année spécifiés par la requête.
            $month = $request->get('month');
            $year = $request->get('year');
            $manager = $request->get('manager');
            $userStatus = $request->get('userStatus');
            $rhMode = $request->get('rhMode');

            // On récupére la liste des collaborateurs qui dépendent de l'utilisateur.
            $users = $this->getUsersByStatus($userStatus, $securityName, $rhMode);

            // Récupére les pointages compilés correspondants aux données fournis.
            $pointageCompile = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findBy(array('month' => $month, 'year' => $year));

            // Si un ou plusieurs pointages compilés existent...
            $status = array();
            if (!empty($pointageCompile)) {
                // ...On récupére le plus petit status.
                foreach ($pointageCompile as $pointage) {
                    $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage->getUser());
                    if (!empty($userHierarchy) && in_array($pointage->getUser(), array_keys($users)) && $userHierarchy->getDA() === $manager) {
                        $status[] = $pointage->getStatus();
                    }
                }
            }
            if (empty($status)) {
                $status[] = 0;
            }

            // On renvoie le status.
            $response = new Response(min($status));
            return $response;
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
            $manager = $request->get('manager');
            $rhMode = $request->get('rhMode');
            $securityName = $this->wd_remove_accents(mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8'));
            $em = $this->getDoctrine()->getManager();

            // On vérifie le status hiérarchique de l'utilisateur et on retourne les pointages valides des collaborateurs associés à l'utilisateur.
            $pointagesValides = $this->getPointagesValides($this->getUsersByStatus($userStatus, $securityName, $rhMode), $month, $year, $manager, 'Final');

            // On vide le dossier avant l'enregistrement.
            foreach (glob($root . "/../web/Pointage/FichierRecap/*") as $file) { // iterate files
                if (is_file($file)) {
                    unlink($file); // delete file
                }
            }

            // Initialisation d'un nouveau fichier Excel.
            $objPHPExcel = \PHPExcel_IOFactory::load($root . '/../web/Pointage/Modele/PointageRecapModele.xlsx');
            $objWorksheet = $objPHPExcel->getSheet(0); // On séléctionne la feuille de totaux comme feuille de travail.

            $rowTotaux = 2; // Initialisation du compteur de ligne des totaux.
            $rowAbsence = 2; // Initialisation du compteur de ligne des absences
            $rowDeplacement = 2; // Initialisation du compteur de ligne des forfaits déplacement.
            $rowCommentaires = 2; // Initialisation du compteur de ligne des commentaires.
            //
            // Pour chaque pointage.
            foreach ($pointagesValides as $pointage) {
                // On récupére l'entité hiérarchique du collaborateur.
                $usersHierarchyEntity = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage['user']);

                // Si le collaborateur est défini dans la hiérarchie et qu'il fait parti de l'établissement courant.
                if (!empty($usersHierarchyEntity)) {
                    $objWorksheet->getCell('A' . $rowTotaux)->setValue($usersHierarchyEntity->getMatricule()); // On écris le matricule.
                    $objWorksheet->getCell('B' . $rowTotaux)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                    $objWorksheet->getCell('C' . $rowTotaux)->setValue($pointage['titresRepas']); // On écris le nombre de titres repas.
                    $objWorksheet->getCell('D' . $rowTotaux)->setValue($pointage['forfaitsDeplacement']); // On écris le montant du forfait de déplacement.
                    $objWorksheet->getCell('E' . $rowTotaux)->setValue($pointage['primesPanier']); // On écris le montant de la primes panier.
                    $objWorksheet->getCell('F' . $rowTotaux)->setValue($pointage['titreTransport']); // On écris le montant du titre de transport.
                    $rowTotaux++; // On passe à la ligne suivante.

                    foreach ($pointage['absences']['matin'] as $key => $absence) {
                        // Si un clé de valeur existe pour l'absence du matin et pour celle de l'après-midi.
                        if (array_key_exists('valeur', $absence) && array_key_exists('valeur', $pointage['absences']['am'][$key])) {
                            // Si il y a des valeurs pour les absences...
                            if ($absence['valeur'] !== '' || $pointage['absences']['am'][$key]['valeur'] !== '') {
                                $objWorksheet->getCell('I' . $rowAbsence)->setValue($usersHierarchyEntity->getMatricule()); // On écris le matricule.
                                $objWorksheet->getCell('J' . $rowAbsence)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                                $objWorksheet->getCell('K' . $rowAbsence)->setValue(str_replace('-', '/', $absence['date'])); // On écris la date.
                                $nbAbsence = 0;
                                $absenceValue = "";
                                if ($absence['valeur'] !== '') {
                                    $nbAbsence = $nbAbsence + 0.5;
                                    if ($absenceValue !== '') {
                                        $absenceValue .= '/' . $absence['valeur'];
                                    } else {
                                        $absenceValue .= $absence['valeur'];
                                    }
                                }
                                if ($pointage['absences']['am'][$key]['valeur'] !== '') {
                                    $nbAbsence = $nbAbsence + 0.5;
                                    if ($absenceValue !== '') {
                                        $absenceValue .= '/' . $pointage['absences']['am'][$key]['valeur'];
                                    } else {
                                        $absenceValue .= $pointage['absences']['am'][$key]['valeur'];
                                    }
                                }
                                $objWorksheet->getCell('L' . $rowAbsence)->setValue(trim($absenceValue)); // On écris la/les valeur(s) d'absence(s).
                                $objWorksheet->getCell('M' . $rowAbsence)->setValue($nbAbsence); // On écris la/les valeur(s) d'absence(s).    
                                $rowAbsence++;
                            }
                            // Si il y a un commentaire...
                            if ($absence['commentaires'] !== '') {
                                $objWorksheet->getCell('P' . $rowCommentaires)->setValue($usersHierarchyEntity->getMatricule()); // On écris le matricule.
                                $objWorksheet->getCell('Q' . $rowCommentaires)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                                $objWorksheet->getCell('R' . $rowCommentaires)->setValue(str_replace('-', '/', $absence['date'])); // On écris la date.
                                $objWorksheet->getCell('S' . $rowCommentaires)->setValue($absence['commentaires']); // On écris la/les valeur(s) d'absence(s).
                                $rowCommentaires++;
                            }
                        }
                    }

                    // On écris les valeurs de forfaits déplacement.
                    $forfaitsDeplacement = !empty($pointage['forfaitsDeplacementDetails']) ? json_decode($pointage['forfaitsDeplacementDetails'], true) : [];
                    foreach ($forfaitsDeplacement as $forfait) {
                        if (!empty($forfait['value'])) {
                            $objWorksheet->getCell('V' . $rowDeplacement)->setValue($usersHierarchyEntity->getMatricule()); // On écris le matricule.
                            $objWorksheet->getCell('W' . $rowDeplacement)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                            $objWorksheet->getCell('X' . $rowDeplacement)->setValue(date('d/m/Y', strtotime($forfait['day']))); // On écris la date.
                            $objWorksheet->getCell('Y' . $rowDeplacement)->setValue($forfait['value']); // On écris la/les valeur(s) d'absence(s).
                            $rowDeplacement++;
                        }
                    }
                }

                // On applique la bonne largeur au colonnes.
                foreach (range('A', 'Y') as $columnID) {
                    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
                }

                // Initialisation d'un tableau de concordance chiffre => string pour les mois.
                $monthString = array(1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novemvre', 12 => 'Décembre');
                $filename = str_replace('/', '_', 'Récapitulatif compilation pointages - ' . $securityName . ' - ' . $manager . ' - ' . $monthString[$month] . ' ' . $year . '.xlsx'); // On génére le nom de fichier.
                $folder = $root . "/../web/Pointage/FichierRecap/"; // On récupére le dossier ou sera enregistré le fichier.
                //
                // On sauvegarde le fichier.
                $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                $objWriter->save($folder . utf8_decode($filename)); // utf8_decode est utilisé pour encoder les accents sur le nom de fichier Windows.   
                $fileURL = $this->get('request')->getSchemeAndHttpHost() . '/Symfony/web/Pointage/FichierRecap/' . $filename; // On récupére l'URL publique du fichier.
            }

            // On retourne sois l'URL du fichier récapitulatif unique sois l'URL de l'archive Zip contenant les différents fichiers récapitulatifs.
            return new Response($fileURL);
        }
    }

    // Retourne la liste des pointage en attente de validation AA en fonction du mois, de l'année, du AA et de l'établissement.
    public function ajaxGetPointageListAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére les variables de la requête.
            $month = $request->get('month');
            $year = $request->get('year');
            $manager = $request->get('manager');
            $rhMode = $request->get('rhMode');

            // Initialisation du tableau des pointages à retourner.
            $pointagesValide = array();

            // On récupére toute la hiérarchie.
            $em = $this->getDoctrine()->getManager();
            $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByDa($manager);

            // On récupére le nom de l'utilisateur.
            $securityContextName = $this->wd_remove_accents(mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8'));

            // Pour chaque entité hiérachique...
            foreach ($userHierarchy as $hierarchy) {
                // Si l'utilisateur courant est le AA, le DA, le RH ou si le mode RH est actif...
                if ($hierarchy->getAa() === $securityContextName || $hierarchy->getDa() === $securityContextName || $hierarchy->getRh() === $securityContextName || $rhMode === 'true') {
                    // On récupére le pointage correspondant au mois, à l'année et au collaborateur.
                    $pointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('month' => $month, 'year' => $year, 'status' => 1, 'user' => $hierarchy->getUsername()));

                    // Si le pointage existe...
                    if (!empty($pointage)) {
                        $pointagesValide[$pointage->getId()] = $hierarchy->getNom() . ' ' . $hierarchy->getPrenom(); // On l'ajoutes aux pointages à retourné.
                    }
                }
            }

            // On retourne la liste des pointages valides.
            return new Response(json_encode($pointagesValide));
        }
    }

    // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année et de l'assistante d'agence.
    public function ajaxGetPointagesCompilationByMonthYearManagerAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month');
            $year = $request->get('year');
            $manager = $request->get('manager');
            $rhMode = $request->get('rhMode');
            $userStatus = $request->get('userStatus');
            $validationStep = $request->get('validationStep');
            $em = $this->getDoctrine()->getManager();

            // Inisialisation des varibables de fonction.
            $securityName = $this->wd_remove_accents(mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8'));

            // On récupére les pointages à retourner en fonction du status de l'utilisateur.
            $pointagesValides = $this->getPointagesValides($this->getUsersByStatus($userStatus, $securityName, $rhMode), $month, $year, $manager, $validationStep);

            // Initialisation du tableau de retour.
            $returnedPointage = array('Pointage' => array(), 'Tableau' => array());

            // Pour chaque pointage valides...
            foreach ($pointagesValides as $pointage) {
                // On récupère son tableau associé.
                $query = $em->createQueryBuilder()
                        ->select('p')
                        ->from('NoxIntranetPointageBundle:Tableau', 'p')
                        ->where('p.month = :month AND p.year = :year AND p.user = :user')
                        ->setParameters(array('month' => $pointage['month'], 'year' => $pointage['year'], 'user' => $pointage['user']))
                        ->getQuery()
                ;
                $tableau = $query->getArrayResult();

                // On ajoute le pointage valide et son tableau au tableau de retour.
                $returnedPointage['Pointage'][] = $pointage;
                $returnedPointage['Tableau'][$pointage['user']] = $tableau[0];
            }

            return new Response(json_encode($returnedPointage));
        }
    }

    // Retourne les collaborateurs qui dépende de l'utilisateur passé en paramêtre en fonction de son status.
    private function getUsersByStatus($status, $securityName, $rhMode) {
        // On récupére les utilisateurs qui ont l'assistante comme supérieur hiérarchique.
        $em = $this->getDoctrine()->getManager();

        // Si le mode RH n'est pas actif...
        if ($rhMode !== 'true') {
            // On récupére les collaborateurs en fonction du status de la compilation
            switch ($status) {
                case 'RH':
                    $requestSearch = 'u.rh = :securityName';
                    break;
                case 'DAManager':
                    $requestSearch = 'u.da = :securityName OR u.rh = :securityName';
                    break;
                case 'Final':
                case 'AA':
                    $requestSearch = 'u.aa = :securityName OR u.da = :securityName OR u.rh = :securityName';
            }

            $qb = $em->createQueryBuilder();
            $qb
                    ->add('select', 'u')
                    ->add('from', 'NoxIntranetPointageBundle:UsersHierarchy u')
                    ->add('where', $requestSearch)
                    ->setParameter('securityName', $securityName);
            $query = $qb->getQuery();
            $usersHierarchie = $query->getResult();
        }

        // Si le mode RH est actif...
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

    // Retourne les pointages valides des collaborateurs de l'utilisateur en fonction du mois, de l'année, de l'etablissement et de l'étape de validation.
    private function getPointagesValides($users, $month, $year, $manager, $validationStep) {

        $em = $this->getDoctrine()->getManager();

        // Initialisation des status des pointages en fonction de l'étape de validation de la compilation.
        $status = array('AA' => 2, 'DAManager' => 3, 'RH' => 4, 'Final' => 5);

        // Retourne les poitages correspondant au mois, à l'année et au status de validation.
        $query = $em->createQueryBuilder()
                ->select('p')
                ->from('NoxIntranetPointageBundle:PointageValide', 'p')
                ->where('p.month = :month AND p.year = :year AND p.status = :status')
                ->setParameters(array('month' => $month, 'year' => $year, 'status' => $status[$validationStep]))
                ->addOrderBy('p.lastname', 'ASC')
                ->addOrderBy('p.firstname', 'ASC')
                ->getQuery()
        ;
        $pointages = $query->getArrayResult();

        // Pour chaque pointages.
        $pointagesValides = array();
        foreach ($pointages as $pointage) {
            // On récuépe l'entité hiérarchique du collaborateur du pointage.
            $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage['user']);
            // Si le collaborateur est définie dans la hiérarchie, qu'il fait partie de l'établissement et que qu'il dépend de l'utilisateur?
            if (!empty($userHierarchy) && $userHierarchy->getDA() === $manager && in_array($pointage['user'], array_keys($users))) {
                $pointage['absences'] = json_decode($pointage['absences'], true);
                $pointage['detailsForfaitDeplacementsUrl'] = $this->generateUrl('nox_intranet_pointage_show_forfaits_deplacement_details', array('month' => $pointage['month'], 'year' => $pointage['year'], 'username' => $pointage['user'], 'readonly' => $validationStep === 'Final' ? 'true' : 'false')); // On génére l'Url d'accès aux détails du forfait déplacement.
                $pointage['detailsModsUrl'] = $this->generateUrl('nox_intranet_pointage_show_mods_details', array('month' => $pointage['month'], 'year' => $pointage['year'], 'username' => $pointage['user'], 'readonly' => $validationStep === 'Final' ? 'true' : 'false')); // On génére l'Url d'accès aux détails du forfait déplacement.
                $pointagesValides[] = $pointage; // On ajoute son pointage à la liste des pointages à retourner.
            }
        }

        return $pointagesValides;
    }

    // Upload un fichier de justificatif de transport et le sauvegarde en base de donnée.
    public function ajaxUploadJustificatifTransportFileAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére le fichier.
            $file = $_FILES;

            // On initialise une nouvelle entitée de fichier.
            $newFile = new JustificatifTransportFile();

            // On applique les attributs du fichier à l'entitée.
            $newFile->setName(addslashes($file['file']['name']));
            $newFile->setType($file['file']['type']);
            $newFile->setSize($file['file']['size']);

            // On récupère le contenu du fichier et on ajoute des slashes pour éviter des erreurs d'écriture.
            $fp = fopen($file['file']['tmp_name'], 'r');
            $content = fread($fp, filesize($file['file']['tmp_name']));
            $escapedContent = addslashes($content);
            fclose($fp);

            // On attribut le contenu du fichier à l'entitée.
            $newFile->setContent($escapedContent);

            // On sauvegarde la nouvelle entitée du fichier en base de données.
            $em = $this->getDoctrine()->getManager();
            $em->persist($newFile);
            $em->flush();

            // On supprime le fichier temporaire du justificatif de transport.
            unlink($file['file']['tmp_name']);
        }

        return new Response($newFile->getId());
    }

    // Associe un justificatif de transport à son pointage.
    public function ajaxSetJustificatifTransportToPointageAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $collaborateur = $request->get('collaborateur'); // L'username du collaborateur.
            $month = $request->get('month'); // Le mois du pointage.
            $year = $request->get('year'); // L'année du pointage.
            $justificatifTransportFileId = $request->get('justificatifTransportFileId'); // L'Id de l'entitée du justificatif de transport à associé au pointage.
            $mois = array(1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre');


            $em = $this->getDoctrine()->getManager();
            // Si le paramètre du collaborateur est l'id de son pointage (Depuis la gestion des pointages par les assistants d'affaires)...
            if (is_numeric($collaborateur)) {
                $pointageCollaborateur = $em->getRepository('NoxIntranetPointageBundle:Tableau')->find($collaborateur); // On récupère le pointage correspondant à l'ID.
                $collaborateurEntitee = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($pointageCollaborateur->getUser()); // On récupére l'entitée du collaborateur par l'username du pointage.
            }
            // Si le paramètre du collaborateur est son username (Depuis le pointage collaborateur)... 
            else {
                $collaborateurEntitee = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($collaborateur); // On récupére l'entitée du collaborateur par son username.
            }
            $justificatifTransportFile = $em->getRepository('NoxIntranetPointageBundle:JustificatifTransportFile')->find($justificatifTransportFileId); // On récupére l'entitée du justificatif de transport en fonction de son Id.
            $justificatifTransportFile->setName('Justificatif de titre de transport ' . $collaborateurEntitee->getLastname() . ' ' . $collaborateurEntitee->getFirstname() . ' ' . $mois[$month] . ' ' . $year . '.' . pathinfo($justificatifTransportFile->getName(), PATHINFO_EXTENSION)); // On renome le justificatif avec le collaborateur et la date du pointage.
            $tableauPointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $collaborateurEntitee->getUsername(), 'month' => $month, 'year' => $year)); // On récupére le tableau de pointage correspondant.
            $tableauPointage->setJustificatifTransportFile($justificatifTransportFile); // On lui associe le justificatif de transport.

            $em->flush(); // On sauvegarde le tableau en base de données.
        }

        return new Response('OK');
    }

    // Suprime un justificatif de titre de transport.
    public function ajaxDeleteJustificatifTransportAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $idJustificatif = $request->get('IdJustificatif'); // Id du justificatif à supprimer.
            // On récupére les entitées du justificatif et du tableau associé.
            $em = $this->getDoctrine()->getManager();
            $justificatif = $em->getRepository('NoxIntranetPointageBundle:JustificatifTransportFile')->find($idJustificatif);
            $tableauPointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneByJustificatifTransportFile($justificatif);

            // On dissocie le justificatif de son tableau et on le supprime.
            $tableauPointage->setJustificatifTransportFile(null);
            $em->remove($justificatif);

            // On sauvegarde les changements en base de données.
            $em->flush();
        }

        return new Response('OK');
    }

    // Permet de transformer une feuille de pointage en tableau Excel et de l'imprimer.
    public function ajaxExportToExcelAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére le contenu du tableau est les cellules qui doivent êtres mergées.
            $tableContent = json_decode($request->get('tableContent'), true);
            $cellWithColspan = $request->get('cellWithColspan');
            $cellWithRowspan = $request->get('cellWithRowspan');

            // On récupére la racine du serveur et on importe le module PHP Excel.
            $root = $this->get('kernel')->getRootDir() . '/..';
            require_once $root . '\vendor\phpexcel\phpexcel\PHPExcel.php';

            // On initialise une nouvelle feuille Excel.
            $objPHPExcel = new \PHPExcel();

            // Pour chaque cellule du tableau de pointage...
            foreach ($tableContent as $cell) {
                // On attribu la valeur de la cellule à la cellule du tableau Excel correspondante.
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($cell['column'], $cell['line'] + 1, $cell['contant']);

                // On aligne horizontalement et verticalement le contenu de la cellule du tableau Excel.
                $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($cell['column'], $cell['line'] + 1)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($cell['column'], $cell['line'] + 1)->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);

                // On applique des bordures, couleur de fond et couleur de texte à la cellule du tableau Excel si besoin.
                $default_border = array(
                    'style' => (!array_key_exists('border', $cell) || $cell['border']) === 'false' ? \PHPExcel_Style_Border::BORDER_NONE : \PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('rgb' => '000000')
                );
                $style_header = array(
                    'borders' => array(
                        'bottom' => $default_border,
                        'left' => $default_border,
                        'top' => $default_border,
                        'right' => $default_border,
                    ),
                    'fill' => array(
                        'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => array_key_exists('color', $cell) ? $cell['color'] : 'E1E0F7'),
                    ),
                    'font' => array(
                        'bold' => true,
                        'color' => array('rgb' => array_key_exists('textColor', $cell) ? $cell['textColor'] : '000000')
                    )
                );
                $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($cell['column'], $cell['line'] + 1)->applyFromArray($style_header);

                // On applique une longueur et une largeur automatique à la cellule du tableau Excel en fonction de son contenu.
                $objPHPExcel->getActiveSheet()->getColumnDimension($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($cell['column'], $cell['line'] + 1)->getColumn())->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getRowDimension($objPHPExcel->getActiveSheet()->getCellByColumnAndRow($cell['column'], $cell['line'] + 1)->getRow())->setRowHeight(-1);
            }

            // On attribut à chaque colonnes la largeur de sa cellule la plus large (pour conserver la bonne taille des cellules lorsqu'elles sont mergés).
            $objPHPExcel->getActiveSheet()->calculateColumnWidths();

            // Pour chaque cellule devant être mergé horizontalement...
            if (!empty($cellWithColspan)) {
                foreach ($cellWithColspan as $cell) {
                    // On merge la cellule avec ses cellules soeurs.
                    // $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($cell['column'], $cell['line'] + 1)
                    $objPHPExcel->getActiveSheet()->mergeCellsByColumnAndRow($cell['column'], $cell['line'] + 1, $cell['column'] + $cell['colspan'], $cell['line'] + 1);
                }
            }

            // Pour chaque cellule devant être mergé verticalement...
            if (!empty($cellWithRowspan)) {
                foreach ($cellWithRowspan as $cell) {
                    $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn($cell['column'])->setAutoSize(false);
                    // On merge la cellule avec ses cellules soeurs.
                    $objPHPExcel->getActiveSheet()->mergeCellsByColumnAndRow($cell['column'], $cell['line'] + 1, $cell['column'], $cell['line'] + 1 + $cell['rowspan']);
                }
            }

            // On sauvegarde le tableau sous forme de fichier Excel 2007.
            $objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);
            $filename = 'Pointage.xlsx';
            $objWriter->save($filename);

            $fileUrl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() . '/' . $filename;

            $response = ['filename' => $filename, 'fileUrl' => $fileUrl];

            return new Response(json_encode($response));
        }
    }

    // Supprime un fichier excel d'export.
    public function ajaxDeleteExcelFileAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $filename = $request->get('filename');

            $root = $this->get('kernel')->getRootDir() . '/..';
            unlink($root . '/web/' . $filename);

            return new Response('Deleted');
        }
    }

    // Génère un fichier CSV et retourne son lien de téléchargement.
    public function ajaxDownloadCSVAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére les données du pointage.
            $affairesData = $request->get('tableData');
            $firstname = $request->get('firstname');
            $lastname = $request->get('lastname');

            // On convertie les données JSON en Array.
            $affairesDataArray = json_decode($affairesData, true);

            // Pour chaques affaire un prépare la ligne CSV.
            $affaires = array();
            foreach ($affairesDataArray as $affaire) {
                $affaires[$affaire['numAffaire']][$affaire['date']] = array('lastname' => $lastname, 'firstname' => $firstname, 'numAffaire' => $affaire['numAffaire'], 'value' => $affaire['value'], 'date' => $affaire['date'], 'comments' => $affaire['comments']);
            }

            // On récupére la racine du serveur web.
            $root = $this->get('kernel')->getRootDir() . '\..\web\\';

            // On génére un chemin pour le fichier CSV.
            $newCSVFile = tempnam($root, '');

            // On ouvre le fichier.
            $newCSVFileHandler = fopen($newCSVFile, 'w+');

            // On injecte les données dans le fichier pour chaques affaires...
            foreach ($affaires as $affaireDate) {
                // Et chaques dates...
                foreach ($affaireDate as $affaire) {
                    fputcsv($newCSVFileHandler, array_map('utf8_decode', array_values($affaire)), ";");
                }
            }

            // On ferme le fichier.
            fclose($newCSVFileHandler);

            // On génére le lien de téléchargement avec le nom du fichier en paramètre.
            $downloadUrl = $this->generateUrl('nox_intranet_pointage_download_csv', array('fileName' => pathinfo($newCSVFile, PATHINFO_BASENAME)));

            // On retourne le chemin du fichier.
            return new Response($downloadUrl);
        }
    }

    // Génère un fichier ZIP contenant les justificatifs des pointages d'une compilation et retourne le lien de téléchargement.
    public function ajaxDownloadJustificatifZipAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére les infos de la compilation.
            $justificatifsZipInfo = $request->get('justificatifsZipInfo');

            // On converti les données JSON en Array.
            $justificatifsZipInfoArray = json_decode($justificatifsZipInfo, true);

            // Initialisation de l'entity manager.
            $em = $this->getDoctrine()->getManager();

            // Initialisation d'une archive ZIP.
            $zipFile = new ZipArchive();

            // On récupére la racine du serveur web.
            $root = $this->get('kernel')->getRootDir() . '\..\web\\';

            // On génére un chemin pour le fichier CSV.
            $newZipFile = tempnam($root, '');

            // Ouverture de l'archive ZIP.
            $zipFile->open($newZipFile, ZipArchive::CREATE);

            // Pour chaques usernames de la compilation...
            foreach ($justificatifsZipInfoArray['usernames'] as $username) {
                // On récupére le pointage associé grâce au mois, année et username.
                $pointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('month' => $justificatifsZipInfoArray['month'], 'year' => $justificatifsZipInfoArray['year'], 'user' => $username));

                // On récupére le collaborateur associé au pointage.
                $collaborateur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($pointage->getUser());

                // Le nom complet du collaborateur (encodé en 'CP850'.
                $collaborateurName = mb_convert_encoding($collaborateur->getLastname() . ' ' . $collaborateur->getFirstname(), 'CP850', mb_detect_encoding($collaborateur->getLastname() . ' ' . $collaborateur->getFirstname()));

                // Si il existe un fichier justificatif de transport associé au pointage.
                if (!empty($pointage->getJustificatifTransportFile())) {
                    // On récupére le fichier de justificatif de transport.
                    $justificatifTransport = $pointage->getJustificatifTransportFile();

                    // Le nom du fichier (encodé en 'CP850').
                    $filename = mb_convert_encoding(stripslashes($justificatifTransport->getName()), 'CP850', mb_detect_encoding($justificatifTransport->getName()));

                    // Le contenu du fichier sous forme de chaîne.
                    $fileContent = stripslashes(stream_get_contents($justificatifTransport->getContent()));

                    // On ajoute le fichier à l'archive dans un dossier au nom du collaborateur.
                    $zipFile->addFromString($collaborateurName . '/' . $filename, $fileContent);
                }

                // On récupére le/les justificatif(s) associé(s) au pointage.
                $justificatifsPointages = $em->getRepository('NoxIntranetPointageBundle:JustificatifFile')->findByTableau($pointage);

                // Pour chaques justificatif...
                foreach ($justificatifsPointages as $justificatif) {
                    // Le nom du fichier (encodé en 'CP850').
                    $filename = mb_convert_encoding($justificatif->getName(), 'CP850', mb_detect_encoding($justificatif->getName()));

                    // Le contenu du fichier sous forme de chaîne.
                    $fileContent = stream_get_contents($justificatif->getContent());

                    // On ajoute le fichier à l'archive dans un dossier au nom du collaborateur.
                    $zipFile->addFromString($collaborateurName . '/' . $filename, $fileContent);
                }
            }

            // On récupére le nombre de fichiers dans l'archive.
            $zipFileCount = $zipFile->numFiles;

            // On ferme l'archive ZIP.
            $zipFile->close();

            // Si l'archive est vide...
            if ($zipFileCount < 1) {
                unlink($newZipFile); // On la supprime.
                return new Response("No files found"); // On retourne un message indiquand qu'il n'y a pas de fichier.
            }

            // On génére le lien de téléchargement avec le nom du fichier en paramètre .
            $downloadUrl = $this->generateUrl('nox_intranet_pointage_download_justificatif_zip', array(
                'fileName' => pathinfo($newZipFile, PATHINFO_BASENAME),
                'manager' => $justificatifsZipInfoArray['manager'],
                'month' => $justificatifsZipInfoArray['month'],
                'year' => $justificatifsZipInfoArray['year']
            ));

            // On retourne le chemin du fichier.
            return new Response($downloadUrl);
        }
    }

    // Sauvegarde les données d'affaire du pointage sous forme de Tableau pour export en CSV.
    public function ajaxSaveNOXIPCSVAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére les données du pointage.
            $CSVData = $request->get('tableData');
            $month = $request->get('month');
            $year = $request->get('year');
            $em = $this->getDoctrine()->getManager();

            // Si le type du paramètre username est un nombre...
            if (is_numeric($request->get('username'))) {
                // On récupére l'entité du collaborateur grace à son Id.
                $tableau = $em->getRepository('NoxIntranetPointageBundle:Tableau')->find($request->get('username'));
                $username = $tableau->getUser();
                $user = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($username);
            }
            // Si le type du paramètre username est une chaine...
            else {
                // On récupére l'entité du collaborateur grace à son Username.
                $username = $request->get('username');
                $user = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($username);
            }

            // On récupére les entitées du collaborateur, sa hiérachie et le tableau correspondant.  
            $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($username);
            $tableau = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));

            // Si le collaborateur fait partie de NOX IP...
            if (strpos($userHierarchy->getEtablissement(), 'INDUSTRIE') !== false && strpos($userHierarchy->getEtablissement(), 'PROCESS') !== false) {
                // On convertie les données JSON en Array.
                $affairesDataArray = json_decode($CSVData, true);

                // Pour chaques affaire un prépare la ligne CSV.
                $affaires = array();
                foreach ($affairesDataArray as $affaire) {
                    $affaires[$affaire['numAffaire']][$affaire['date']] = array('lastname' => $user->getLastname(), 'firstname' => $user->getFirstname(), 'numAffaire' => $affaire['numAffaire'], 'value' => $affaire['value'], 'date' => $affaire['date'], 'comments' => $affaire['comments']);
                }

                // On attribut les données CSV au collaborateur et on sauvegarde en base de données.
                $tableau->setCSVData($affaires);
                $em->flush();
            }

            // On retourne le chemin du fichier.
            return new Response('Saved');
        }
    }

    // Sauvegarde les changement de valeurs des modulations.
    public function ajaxSaveModsEditionAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Variables de la requête.
            $month = $request->get('month');
            $year = $request->get('year');
            $username = $request->get('user');
            $date = $request->get('date');
            $value = $request->get('value');

            // On récupére l'entité du pointage en fonction du mois, de l'année et de l'username.
            $em = $this->getDoctrine()->getManager();
            $pointage = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findOneBy(array('month' => $month, 'year' => $year, 'user' => $username));

            // On récupére les forfaits déplacement sous forme de tableau.
            $modulationArray = json_decode($pointage->getMods(), true);

            // On récupére la clé correspondant à la date.
            $key = array_search($date, array_column($modulationArray, 'day'));

            // Changement de la valeur.
            $modulationArray[$key]['value'] = $value;

            // On met à jour la base de données.
            $pointage->setMods(json_encode($modulationArray));
            $em->flush();

            return new Response('Ok');
        }
    }

    // Sauvegarde les changements de valeurs de forfaits deplacement.
    public function ajaxSaveForfaitsDeplacementEditionAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Variables de la requête.
            $month = $request->get('month');
            $year = $request->get('year');
            $username = $request->get('user');
            $date = $request->get('date');
            $value = $request->get('value');

            // On récupére l'entité du pointage en fonction du mois, de l'année et de l'username.
            $em = $this->getDoctrine()->getManager();
            $pointage = $em->getRepository('NoxIntranetPointageBundle:PointageValide')->findOneBy(array('month' => $month, 'year' => $year, 'user' => $username));

            // On récupére les forfaits déplacement sous forme de tableau.
            $forfaitsDeplacementArray = json_decode($pointage->getForfaitsDeplacementDetails(), true);

            // On récupére la clé correspondant à la date.
            $key = array_search($date, array_column($forfaitsDeplacementArray, 'day'));

            // Changement de la valeur.
            $forfaitsDeplacementArray[$key]['value'] = $value;

            // On met à jour la base de données.
            $pointage->setForfaitsDeplacementDetails(json_encode($forfaitsDeplacementArray));
            $em->flush();

            return new Response('Ok');
        }
    }

    // Sauvegarde la régularisation.
    public function ajaxSaveRegularisationAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére les informations du pointage.
            $month = $request->get('month');
            $year = $request->get('year');
            $regularisationText = $request->get('regularisationText');

            // Initialisation de l'entity manager.
            $em = $this->getDoctrine()->getManager();

            // Si l'Id de l'entité du collaborateur est fourni...
            if (is_numeric($request->get('user'))) {
                $user = $em->find('NoxIntranetPointageBundle:Tableau', $request->get('user'))->getUser(); // On récupére son username depuis l'entité du tableau.
            }
            // Sinon...
            else {
                $user = $request->get('user'); // On récupére directement l'username.
            }

            // On récupére les données du pointage si il existe.
            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user, 'month' => $month, 'year' => $year));

            // On sauvegarde la valeur de régularisation en base de données.
            $tableData->setRegularisation($regularisationText);
            $em->flush();

            Return new Response('Saved');
        }
    }

    // Retourne la liste des managers pour la gestion des pointages en fonction du mode RH.
    public function ajaxGestionPointageSetRHModeAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére les variables de la requête.
            $rhMode = $request->get('rhMode');

            // On récupére le nom de l'utilisateur.
            $securityContextName = $this->wd_remove_accents(mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8'));

            // Initialisation de l'entity manager.
            $em = $this->getDoctrine()->getManager();

            // Initialisation de la liste des managers à retourner.
            $managers = array();

            // Si le mode RH est activé...
            if ($rhMode === 'true') {
                // On récupére toute les entitées de hiérarchie.
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll() as $userHierarchy) {
                    $managers[$userHierarchy->getDA()] = $userHierarchy->getDA();
                }
            }
            // Sinon...
            else {
                // On récupére toutes les entitées de hiérachie qui on le collaborateur courant pour AA.
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByAa($securityContextName) as $userHierarchy) {
                    $managers[$userHierarchy->getDA()] = $userHierarchy->getDA();
                }
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByDa($securityContextName) as $userHierarchy) {
                    $managers[$userHierarchy->getDA()] = $userHierarchy->getDA();
                }
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByRh($securityContextName) as $userHierarchy) {
                    $managers[$userHierarchy->getDA()] = $userHierarchy->getDA();
                }
            }

            // Trie du tableau de retour.
            asort($managers);

            // On retourne le tableau des managers.
            return new Response(json_encode($managers));
        }
    }

    // Retourne une chaîne de caractère sans accents.
    private function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

    // Retourne la liste des managers pour la compilation des pointages en fonction du mode RH.
    public function ajaxCompilationPointageSetRHModeAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére les variables de la requête.
            $rhMode = $request->get('rhMode');
            $validationStep = $request->get('validationStep');

            // On récupére le nom de l'utilisateur.
            $securityContextName = $this->wd_remove_accents(mb_strtoupper($this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname(), 'UTF-8'));

            // Initialisation de l'entity manager.
            $em = $this->getDoctrine()->getManager();

            // Initialisation de la liste des managers à retourner.
            $managers = array();

            // Si le mode RH est activé...
            if ($rhMode === 'true') {
                // On récupére toute les entitées de hiérarchie.
                foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll() as $hierarchy) {
                    $managers[$hierarchy->getDA()] = $hierarchy->getDA(); // On ajoute le DA au tableau des DA.
                }
            }
            // Sinon...
            else {
                // On récupére toutes les entitées de hiérachie du domaine de l'utilisateur.
                switch ($validationStep) {
                    case 'Final':
                    case 'AA':
                        foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByAa($securityContextName) as $hierarchy) {
                            $managers[$hierarchy->getDA()] = $hierarchy->getDA(); // On ajoute le DA au tableau des DA.
                        }
                        foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByDa($securityContextName) as $hierarchy) {
                            $managers[$hierarchy->getDA()] = $hierarchy->getDA(); // On ajoute le DA au tableau des DA.
                        }
                        foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByRh($securityContextName) as $hierarchy) {
                            $managers[$hierarchy->getDA()] = $hierarchy->getDA(); // On ajoute le DA au tableau des DA.
                        }
                        break;
                    case 'DAManager':
                        foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByDa($securityContextName) as $hierarchy) {
                            $managers[$hierarchy->getDA()] = $hierarchy->getDA(); // On ajoute le DA au tableau des DA.
                        }
                        foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByRh($securityContextName) as $hierarchy) {
                            $managers[$hierarchy->getDA()] = $hierarchy->getDA(); // On ajoute le DA au tableau des DA.
                        }
                        break;
                    case 'RH':
                        foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByRh($securityContextName) as $hierarchy) {
                            $managers[$hierarchy->getDA()] = $hierarchy->getDA(); // On ajoute le DA au tableau des DA.
                        }
                        break;
                }
            }

            // Trie du tableau de retour.
            sort($managers);

            // On retourne le tableau des managers.
            return new Response(json_encode($managers));
        }
    }

    // Génére un fichier Excel qui résume la compilation en fonction du mois, de l'année, et de l'établissement séléctionné.
    public function ajaxGenerateExcelArchiveRecapAction(Request $request) {
        // On récupére le module PHP de traitement des fichiers Excel.
        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir());
        require_once $root . '\..\vendor\phpexcel\phpexcel\PHPExcel.php';

        $etablissement = $request->get('etablissement');
        $month = $request->get('month');
        $year = $request->get('year');

        $em = $this->getDoctrine()->getManager();
        $collaborateurs = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByEtablissement($etablissement);

        $pointages = array();
        foreach ($collaborateurs as $collaborateur) {
            // Retourne les poitages correspondant au mois, à l'année et au status de validation.
            $query = $em->createQueryBuilder()
                    ->select('p')
                    ->from('NoxIntranetPointageBundle:PointageValide', 'p')
                    ->where('p.month = :month AND p.year = :year AND p.status = :status AND p.user = :user')
                    ->setParameters(array('month' => $month, 'year' => $year, 'status' => 5, 'user' => $collaborateur->getUsername()))
                    ->addOrderBy('p.lastname', 'ASC')
                    ->addOrderBy('p.firstname', 'ASC')
                    ->getQuery()
            ;
            if (array_key_exists(0, $query->getArrayResult())) {
                $pointages[] = $query->getArrayResult()[0];
            }
        }

        foreach ($pointages as $key => $pointage) {

            $pointages[$key]['absences'] = json_decode($pointage['absences'], true);
        }

        // On vide le dossier avant l'enregistrement.
        foreach (glob($root . "/../web/Pointage/FichierRecap/*") as $file) { // iterate files
            if (is_file($file)) {
                unlink($file); // delete file
            }
        }

        // Initialisation d'un nouveau fichier Excel.
        $objPHPExcel = \PHPExcel_IOFactory::load($root . '/../web/Pointage/Modele/PointageRecapModele.xlsx');
        $objWorksheet = $objPHPExcel->getSheet(0); // On séléctionne la feuille de totaux comme feuille de travail.

        $rowTotaux = 2; // Initialisation du compteur de ligne des totaux.
        $rowAbsence = 2; // Initialisation du compteur de ligne des absences.
        $rowDeplacement = 2; // Initialisation du compteur de ligne des forfaits déplacement.
        $rowCommentaires = 2; // Initialisation du compteur de ligne des commentaires.
        //
        // Pour chaque pointage.
        foreach ($pointages as $pointage) {
            // On récupére l'entité hiérarchique du collaborateur.
            $usersHierarchyEntity = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($pointage['user']);

            // Si le collaborateur est défini dans la hiérarchie et qu'il fait parti de l'établissement courant.
            if (!empty($usersHierarchyEntity)) {
                $objWorksheet->getCell('A' . $rowTotaux)->setValue($usersHierarchyEntity->getMatricule()); // On écris le matricule.
                $objWorksheet->getCell('B' . $rowTotaux)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                $objWorksheet->getCell('C' . $rowTotaux)->setValue($pointage['titresRepas']); // On écris le nombre de titres repas.
                $objWorksheet->getCell('D' . $rowTotaux)->setValue($pointage['forfaitsDeplacement']); // On écris le montant du forfait de déplacement.
                $objWorksheet->getCell('E' . $rowTotaux)->setValue($pointage['primesPanier']); // On écris le montant de la primes panier.
                $objWorksheet->getCell('F' . $rowTotaux)->setValue($pointage['titreTransport']); // On écris le montant du titre de transport.
                $rowTotaux++; // On passe à la ligne suivante.

                foreach ($pointage['absences']['matin'] as $key => $absence) {
                    // Si un clé de valeur existe pour l'absence du matin et pour celle de l'après-midi.
                    if (array_key_exists('valeur', $absence) && array_key_exists('valeur', $pointage['absences']['am'][$key])) {
                        if ($absence['valeur'] !== '' || $pointage['absences']['am'][$key]['valeur'] !== '') {
                            $objWorksheet->getCell('I' . $rowAbsence)->setValue($usersHierarchyEntity->getMatricule()); // On écris le matricule.
                            $objWorksheet->getCell('J' . $rowAbsence)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                            $objWorksheet->getCell('K' . $rowAbsence)->setValue(str_replace('-', '/', $absence['date'])); // On écris la date.
                            $nbAbsence = 0;
                            $absenceValue = "";
                            if ($absence['valeur'] !== '') {
                                $nbAbsence = $nbAbsence + 0.5;
                                if ($absenceValue !== '') {
                                    $absenceValue .= '/' . $absence['valeur'];
                                } else {
                                    $absenceValue .= $absence['valeur'];
                                }
                            }
                            if ($pointage['absences']['am'][$key]['valeur'] !== '') {
                                $nbAbsence = $nbAbsence + 0.5;
                                if ($absenceValue !== '') {
                                    $absenceValue .= '/' . $pointage['absences']['am'][$key]['valeur'];
                                } else {
                                    $absenceValue .= $pointage['absences']['am'][$key]['valeur'];
                                }
                            }
                            $objWorksheet->getCell('L' . $rowAbsence)->setValue(trim($absenceValue)); // On écris la/les valeur(s) d'absence(s).
                            $objWorksheet->getCell('M' . $rowAbsence)->setValue($nbAbsence); // On écris la/les valeur(s) d'absence(s).
                            $rowAbsence++; // On passe à la ligne.
                        }
                        // Si il y a un commentaire...
                        if ($absence['commentaires'] !== '') {
                            $objWorksheet->getCell('P' . $rowCommentaires)->setValue($usersHierarchyEntity->getMatricule()); // On écris le matricule.
                            $objWorksheet->getCell('Q' . $rowCommentaires)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                            $objWorksheet->getCell('R' . $rowCommentaires)->setValue(str_replace('-', '/', $absence['date'])); // On écris la date.
                            $objWorksheet->getCell('S' . $rowCommentaires)->setValue($absence['commentaires']); // On écris la/les valeur(s) d'absence(s).
                            $rowCommentaires++;
                        }
                    }
                }
            }

            // On écris les valeurs de forfaits déplacement.
            $forfaitsDeplacement = !empty($pointage['forfaitsDeplacementDetails']) ? json_decode($pointage['forfaitsDeplacementDetails'], true) : [];
            foreach ($forfaitsDeplacement as $forfait) {
                if (!empty($forfait['value'])) {
                    $objWorksheet->getCell('V' . $rowDeplacement)->setValue($usersHierarchyEntity->getMatricule()); // On écris le matricule.
                    $objWorksheet->getCell('W' . $rowDeplacement)->setValue($pointage['lastname'] . ' ' . $pointage['firstname']); // On écris le NOM+Prénom.
                    $objWorksheet->getCell('X' . $rowDeplacement)->setValue(date('d/m/Y', strtotime($forfait['day']))); // On écris la date.
                    $objWorksheet->getCell('Y' . $rowDeplacement)->setValue($forfait['value']); // On écris la/les valeur(s) d'absence(s).
                    $rowDeplacement++;
                }
            }
        }

        // On applique la bonne largeur au colonnes.
        foreach (range('A', 'Y') as $columnID) {
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }

        // Initialisation d'un tableau de concordance chiffre => string pour les mois.
        $monthString = array(1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novemvre', 12 => 'Décembre');
        $filename = str_replace('/', '_', 'Récapitulatif compilation pointages [' . $etablissement . '][' . $monthString[$month] . ' ' . $year . '].xlsx'); // On génére le nom de fichier.
        $folder = $root . "/../web/Pointage/FichierRecap/"; // On récupére le dossier ou sera enregistré le fichier.
        //
        // On sauvegarde le fichier.
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save($folder . utf8_decode($filename)); // utf8_decode est utilisé pour encoder les accents sur le nom de fichier Windows.   
        //
        // On génére et retourne le liens de téléchargement du fichier.
        $downloadUrl = $this->generateUrl('nox_intranet_pointage_archives_compilation_export_excel', array('filepath' => base64_encode($folder . $filename)));
        return new Response($downloadUrl);
    }

}
