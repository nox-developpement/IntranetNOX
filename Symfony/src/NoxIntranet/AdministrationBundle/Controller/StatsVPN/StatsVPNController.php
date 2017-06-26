<?php

namespace NoxIntranet\AdministrationBundle\Controller\StatsVPN;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use DateTime;

class StatsVPNController extends Controller {

    public function uploadVPNLogs(Request $request) {
        
    }

    public function statsVPNCalculationAction() {
        // Dossier des fichiers de statistiques des VPN.
        $vpnStatsFilesFolder = "C:/Users/t.besson/Downloads/Stats VPN";

        // Tableau contenant les données pour les statistiques.
        $statsDataByUsers = array();
        $statsDataByMonths = array();

        $objPHPExcel = \PHPExcel_IOFactory::load($vpnStatsFilesFolder . "/201706-GestionEffectif-ExportVPN.xlsx");
        $objWorksheet = $objPHPExcel->getActiveSheet();

        $idToName = array();

        foreach ($objWorksheet->getRowIterator() as $rowIndex => $row) {
            $name = $objWorksheet->getCell("B" . $rowIndex)->getValue();
            $id = $objWorksheet->getCell("B" . $rowIndex)->getValue();

            $idToName[$id] = $name;

            $statsDataByMonths["01"][$id] = null;
            $statsDataByMonths["02"][$id] = null;
            $statsDataByMonths["03"][$id] = null;
            $statsDataByMonths["04"][$id] = null;
            $statsDataByMonths["05"][$id] = null;
            $statsDataByMonths["06"][$id] = null;
        }

        // Pour chaques fichiers du dossier de VPN...
        foreach (scandir($vpnStatsFilesFolder) as $file) {
            // On récupére le chemin et l'extension du fichier.
            $filePath = $vpnStatsFilesFolder . "/" . $file;
            $extension = pathinfo($filePath, PATHINFO_EXTENSION);

            // Si c'est un fichier zip...
            if ($extension === "zip") {
                // On ouvre l'archive.
                $zip = new \ZipArchive();
                $zip->open($filePath);

                // On récupére le fichier de journal de connection.
                $statsFileHandler = $zip->getStream("Statistiques_acces.csv");

                // Pour chaque lignes du fichier CSV...
                while (($data = fgetcsv($statsFileHandler, 0, ";")) !== FALSE) {
                    // Si l'utilisateur n'est pas le System et qu'il s'agit d'une connexion...
                    if ($data[2] !== "System" && !empty($data[8])) {
                        // Récupération de la date.
                        $date = DateTime::createFromFormat("Y-m-d H:i:s", $data[0]);
                        $annee = $date->format("Y");
                        $mois = $date->format("m");

                        // On ajoute l'utilisateur au tableau.
                        $statsDataByUsers[$data[2]]["Utilisateur"] = $data[2];

                        // On ajoute la date de connexion au tableau par utilisateurs.
                        $statsDataByUsers[$data[2]]["Connexions"]["Dates"][] = $date;
                        $statsDataByUsers[$data[2]]["Connexions"]["Annees"][$annee]["Dates"][] = $date;
                        $statsDataByUsers[$data[2]]["Connexions"]["Annees"][$annee]["Mois"][$mois]["Dates"][] = $date;

                        // On ajoute la date au tableau par mois.
                        $statsDataByMonths[$mois][$data[2]][] = $date;
                    }
                }
            }
        }

        $graphiqueDatas = array();

        foreach ($statsDataByMonths as $month => $monthData) {
            $graphiqueDatas[$month]["0"]["Count"] = 0;
            $graphiqueDatas[$month]["1-5"]["Count"] = 0;
            $graphiqueDatas[$month]["6-10"]["Count"] = 0;
            $graphiqueDatas[$month]["11-20"]["Count"] = 0;
            $graphiqueDatas[$month]["+20"]["Count"] = 0;

            foreach ($monthData as $user => $userData) {
                $count = count($userData);

                if ($count === 0) {
                    $graphiqueDatas[$month]["0"]["Count"] ++;
                    $graphiqueDatas[$month]["0"]["Users"][] = $user;
                } else if ($count > 1 && $count <= 5) {
                    $graphiqueDatas[$month]["1-5"]["Count"] ++;
                    $graphiqueDatas[$month]["1-5"]["Users"][] = $user;
                } else if ($count > 5 && $count <= 10) {
                    $graphiqueDatas[$month]["6-10"]["Count"] ++;
                    $graphiqueDatas[$month]["6-10"]["Users"][] = $user;
                } else if ($count > 10 && $count <= 20) {
                    $graphiqueDatas[$month]["11-20"]["Count"] ++;
                    $graphiqueDatas[$month]["11-20"]["Users"][] = $user;
                } else if ($count > 20) {
                    $graphiqueDatas[$month]["+20"] ++;
                    $graphiqueDatas[$month]["+20"]["Users"][] = $user;
                }
            }
        }

        asort($statsDataByUsers);
        //asort($statsDataByMonths);

        $numberToMonth = array("01" => "Janvier", "02" => "Février", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Août", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre");

        return $this->render("NoxIntranetAdministrationBundle:StatsVPN:statsVPN.html.twig", array('statsDataByUsers' => $statsDataByUsers, 'statsDataByMonths' => $statsDataByMonths, 'numberToMonth' => $numberToMonth, 'idToName' => $idToName, 'graphiqueDatas' => $graphiqueDatas));
    }

}
