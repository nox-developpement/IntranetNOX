<?php

namespace NoxIntranet\AdministrationBundle\Controller\StatsVPN;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use DateTime;

class StatsVPNController extends Controller {

    public function uploadVPNLogsAction(Request $request) {
        $formUploadVPNBuilder = $this->createFormBuilder();
        $formUploadVPNBuilder
                ->add("File", FileType::class, array(
                    "attr" => array(
                        "accept" => ".zip"
                    )
                ))
                ->add("Upload", SubmitType::class)
        ;

        $formUploadVPN = $formUploadVPNBuilder->getForm();

        $formUploadVPN->handleRequest($request);
        if ($formUploadVPN->isValid()) {
            // On récupére le fichier.
            $file = $formUploadVPN->get("File")->getData();

            // Si le fichier n'est pas de type .zip...
            if ($file->getMimeType() !== "application/zip") {
                // On redirige vers le formulaire d'upload avec un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', "Le fichier doit être de type \".zip\".");
                return $this->redirectToRoute("nox_intranet_vpn_stats_upload");
            }

            // On déplace le fichier dans le dossier web.
            $file->move(".", "VPNFiles.zip");

            return $this->redirectToRoute("nox_intranet_vpn_stats");
            //var_dump($file->getMimeType());
        }

        return $this->render("NoxIntranetAdministrationBundle:StatsVPN:uploadVPNFiles.html.twig", array("formUploadVPN" => $formUploadVPN->createView()));
    }

    public function statsVPNCalculationAction() {
        $VPNFilesFolder = "./VPNFiles/";

        // On extrait l'archive contenant les fichiers de statistiques VPN.
        $zip = new \ZipArchive();
        $zip->open("./VPNFiles.zip");
        $zip->extractTo($VPNFilesFolder);
        $zip->close();

        // On supprime l'archive.
        unlink("./VPNFiles.zip");

        // Tableau contenant les données pour les statistiques.
        $statsDataByUsers = array();
        $statsDataByMonths = array();

        // Pour chaques fichier extrait...
        foreach (scandir($VPNFilesFolder) as $file) {
            // On récupére le chemin et l'extension du fichier.
            $filePath = $VPNFilesFolder . $file;
            $extension = pathinfo($filePath, PATHINFO_EXTENSION);

            // Si le fichier est de type Excel...
            if ($extension === "xlsx" || $extension === "xls") {
                // On récupére son chemin et on quitte la boucle.
                $gestion_effectif_file = $filePath;
                break;
            }
        }

        // Chargement de la feuille excel.
        $objPHPExcel = \PHPExcel_IOFactory::load($gestion_effectif_file);
        $objWorksheet = $objPHPExcel->getActiveSheet();

        // Initialisation du tableau de conversion d'ID VPN en nom d'utilisateur.
        $idToName = array();

        // Pour chaques lignes du fichier Excel de gestion d'effectif...
        foreach ($objWorksheet->getRowIterator() as $rowIndex => $row) {
            // Récupération du nom d'utilisateur et de l'ID VPN.
            $name = $objWorksheet->getCell("A" . $rowIndex)->getValue();
            $id = $objWorksheet->getCell("B" . $rowIndex)->getValue();

            // Association du nom d'utilisateur et de l'ID VPN.
            $idToName[$id] = $name;
        }

        // Suppression du fichier d'effectifs.
        unlink($gestion_effectif_file);

        // Pour chaques fichiers du dossier de VPN...
        foreach (scandir($VPNFilesFolder) as $file) {
            // On récupére le chemin et l'extension du fichier.
            $filePath = $VPNFilesFolder . $file;
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

                // Fermeture de l'archive.
                $zip->close();

                // Suppression des variables d'archive et de fichier CSV.
                unset($statsFileHandler);
                unset($zip);

                // Suppression de l'archive.
                unlink($filePath);
            }
        }

        // Suppression du dossier des fichiers de statistiques VPN.
        rmdir($VPNFilesFolder);

        // On ajoute les ID manquant au tableau des statistiques par mois.
        foreach ($idToName as $id => $name) {
            foreach ($statsDataByMonths as $month => $users) {
                if (!array_key_exists($id, $users)) {
                    $statsDataByMonths[$month][$id] = null;
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
                    $graphiqueDatas[$month]["+20"]["Count"] ++;
                    $graphiqueDatas[$month]["+20"]["Users"][] = $user;
                }
            }
        }

        return $this->render("NoxIntranetAdministrationBundle:StatsVPN:statsVPN.html.twig", array('statsDataByUsers' => $statsDataByUsers, 'statsDataByMonths' => $statsDataByMonths, 'idToName' => $idToName, 'graphiqueDatas' => $graphiqueDatas));
    }

}
