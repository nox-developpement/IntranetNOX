<?php

namespace NoxIntranet\AdministrationBundle\Controller\StatsVPN;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use DateTime;

class StatsVPNController extends Controller {

    /**
     * 
     * Formulaire permettant l'upload d'un ZIP contenant les fichiers de statistiques VPN.
     * 
     * @param Request $request Request contenant les données du formulaire.
     * @return View
     */
    public function uploadVPNLogsAction(Request $request) {
        // Génération du formulaire d'upload.
        $formUploadVPNBuilder = $this->createFormBuilder();
        $formUploadVPNBuilder
                ->add("File", FileType::class, array(
                    "attr" => array(
                        "accept" => ".zip"
                    )
                ))
                ->add("Upload", SubmitType::class, array(
                    "label" => "Envoyer"
                ))
        ;
        $formUploadVPN = $formUploadVPNBuilder->getForm();

        // Traitement du formulaire.
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
        }

        return $this->render("NoxIntranetAdministrationBundle:StatsVPN:uploadVPNFiles.html.twig", array("formUploadVPN" => $formUploadVPN->createView()));
    }

    /**
     * 
     * Lis les fichier de statistiques VPN, calcules les degrés d'utilisation par les utilisateurs et retourne une vue d'affichage des statistiques.
     * 
     * @return View
     */
    public function statsVPNCalculationAction(Request $request) {
        $VPNFilesFolder = "./VPNFiles/";

        // On ouvre l'archive contenant les fichiers de statistiques VPN.
        $zip = new \ZipArchive();
        $isOpen = $zip->open("./VPNFiles.zip");

        // Si l'ouverture de l'archive a échoué...
        if ($isOpen !== true) {
            // On redirige vers le formulaire d'upload.
            return $this->redirectToRoute("nox_intranet_vpn_stats_upload");
        }

        // On extrait l'archive.
        $zip->extractTo($VPNFilesFolder);
        $zip->close();

        // On supprime l'archive.
        unlink("./VPNFiles.zip");

        // Tableau contenant les données pour les statistiques.
        $statsDataByUsers = array();
        $statsDataByMonths = array();
        $statsDataGlobal = array();

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
            $name = trim($objWorksheet->getCell("A" . $rowIndex)->getValue());
            $date_creation_vpn = date("d/m/Y", \PHPExcel_Shared_Date::ExcelToPHP($objWorksheet->getCell("C" . $rowIndex)->getValue()));
            $id = trim($objWorksheet->getCell("B" . $rowIndex)->getValue());

            // Association du nom d'utilisateur et de l'ID VPN.
            $idToName[$id] = array('name' => $name, 'date_creation_vpn' => $date_creation_vpn);
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
                    if (!empty($data[8])) {
                        // On récupére l'utilisateur.
                        $user = substr($data[8], 26, 13);

                        // Récupération de la date.
                        $date = DateTime::createFromFormat("Y-m-d H:i:s", $data[0]);
                        $annee = $date->format("Y");
                        $mois = $date->format("m");

                        // On ajoute l'utilisateur au tableau.
                        $statsDataByUsers[$user]["Utilisateur"] = $user;

                        // On ajoute la date de connexion au tableau par utilisateurs.
                        $statsDataByUsers[$user]["Connexions"]["Dates"][] = $date;
                        $statsDataByUsers[$user]["Connexions"]["Annees"][$annee]["Dates"][] = $date;
                        $statsDataByUsers[$user]["Connexions"]["Annees"][$annee]["Mois"][$mois]["Dates"][] = $date;

                        // On ajoute la date au tableau par mois.
                        $statsDataByMonths[$mois][$user][] = $date;

                        // On ajoute la date au tableau global.
                        $statsDataGlobal[$user][] = $date;
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

        // Si le dossier des fichiers de statistiques VPN n'est pas vide...
        if (count(scandir($VPNFilesFolder)) !== 2) {
            // Pour chaques fichier du dossier...
            foreach (scandir($VPNFilesFolder) as $file) {
                // On supprime le fichier.
                if ($file !== "." && $file !== "..") {
                    unlink($VPNFilesFolder . $file);
                }
            }

            // Suppression du dossier des fichiers de statistiques VPN.
            rmdir($VPNFilesFolder);

            // On redirige vers le formulaire d'upload avec un message d'erreur.
            $request->getSession()->getFlashBag()->add('noticeErreur', "L'archive ne contient pas de fichier de statistique VPN valide.");
            return $this->redirectToRoute("nox_intranet_vpn_stats_upload");
        }

        // Suppression du dossier des fichiers de statistiques VPN.
        rmdir($VPNFilesFolder);

        // On ajoute les ID manquant au tableau des statistiques par mois et des statistiques global.
        foreach ($idToName as $id => $name) {
            foreach ($statsDataByMonths as $month => $users) {
                if (!array_key_exists($id, $users)) {
                    $statsDataByMonths[$month][$id] = array();
                }
            }
            if (!array_key_exists($id, $statsDataGlobal)) {
                $statsDataGlobal[$id] = array();
            }
        }

        // Initialisation des tableau des données de sortie graphique.
        $graphiqueDatas = array();
        $graphiqueDatasGlobal = array();

        // Pour chaques mois...
        foreach ($statsDataByMonths as $month => $monthData) {
            // Initialisation des compteur.
            $graphiqueDatas[$month]["0"]["Count"] = 0;
            $graphiqueDatas[$month]["1-5"]["Count"] = 0;
            $graphiqueDatas[$month]["6-10"]["Count"] = 0;
            $graphiqueDatas[$month]["11-20"]["Count"] = 0;
            $graphiqueDatas[$month]["+20"]["Count"] = 0;

            // Pour chaques utilisateurs...
            foreach ($monthData as $user => $userData) {
                // On compte le nombre de connexion.
                $count = count($userData);

                // On incrémente le compteur correspondant.
                if ($count === 0) {
                    $graphiqueDatas[$month]["0"]["Count"] ++;
                    $graphiqueDatas[$month]["0"]["Users"][] = $user;
                } else if ($count > 0 && $count <= 5) {
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

            // Pour chaques tranches de fréquence d'utilisation...
            foreach ($graphiqueDatas[$month] as $tranche => $data) {
                // On trie le tableau en fonction des ID de VPN.
                sort($graphiqueDatas[$month][$tranche]["Users"]);
            }
        }

        // Initialisation des compteur.
        $graphiqueDatasGlobal["0"]["Count"] = 0;
        $graphiqueDatasGlobal["1-5"]["Count"] = 0;
        $graphiqueDatasGlobal["6-10"]["Count"] = 0;
        $graphiqueDatasGlobal["11-20"]["Count"] = 0;
        $graphiqueDatasGlobal["+20"]["Count"] = 0;

        // Pour chaques utilisateurs...
        foreach ($statsDataGlobal as $user => $data) {
            // On compte le nombre de connexion.
            $count = count($data);

            // On incrémente le compteur correspondant.
            if ($count === 0) {
                $graphiqueDatasGlobal["0"]["Count"] ++;
                $graphiqueDatasGlobal["0"]["Users"][] = $user;
            } else if ($count > 0 && $count <= 5) {
                $graphiqueDatasGlobal["1-5"]["Count"] ++;
                $graphiqueDatasGlobal["1-5"]["Users"][] = $user;
            } else if ($count > 5 && $count <= 10) {
                $graphiqueDatasGlobal["6-10"]["Count"] ++;
                $graphiqueDatasGlobal["6-10"]["Users"][] = $user;
            } else if ($count > 10 && $count <= 20) {
                $graphiqueDatasGlobal["11-20"]["Count"] ++;
                $graphiqueDatasGlobal["11-20"]["Users"][] = $user;
            } else if ($count > 20) {
                $graphiqueDatasGlobal["+20"]["Count"] ++;
                $graphiqueDatasGlobal["+20"]["Users"][] = $user;
            }
        }

        // Trie des tableau par ID de VPN.
        sort($graphiqueDatasGlobal["0"]["Users"]);
        sort($graphiqueDatasGlobal["1-5"]["Users"]);
        sort($graphiqueDatasGlobal["6-10"]["Users"]);
        sort($graphiqueDatasGlobal["11-20"]["Users"]);
        sort($graphiqueDatasGlobal["+20"]["Users"]);

        return $this->render("NoxIntranetAdministrationBundle:StatsVPN:statsVPN.html.twig", array('statsDataByUsers' => $statsDataByUsers, 'statsDataByMonths' => $statsDataByMonths, 'idToName' => $idToName, 'graphiqueDatas' => $graphiqueDatas, 'graphiqueDatasGlobal' => $graphiqueDatasGlobal));
    }

}
