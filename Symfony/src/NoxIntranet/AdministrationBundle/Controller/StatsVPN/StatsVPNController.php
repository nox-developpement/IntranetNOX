<?php

namespace NoxIntranet\AdministrationBundle\Controller\StatsVPN;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use DateTime;

use Symfony\Component\HttpFoundation\Response;

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
                    "label" => "Voir Stat",


                ))
                ->add("Export", SubmitType::class, array(
                    "label" => "Export",


                ))
        ;
        $formUploadVPN = $formUploadVPNBuilder->getForm();




        // Traitement du formulaire.
        $formUploadVPN->handleRequest($request);
        if ($formUploadVPN->isValid()) {
            if ($formUploadVPN->get('Upload')->isClicked()) {

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

            }else if ($formUploadVPN->get('Export')->isClicked()) {
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
                return $this->redirectToRoute("nox_intranet_vpn_export");
            }

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

        return $this->render("NoxIntranetAdministrationBundle:StatsVPN:statsVPN.html.twig", array('statsDataByUsers' => $statsDataByUsers, 'statsDataByMonths' => $statsDataByMonths, 'idToName' => $idToName, 'graphiqueDatas' => $graphiqueDatas, 'graphiqueDatasGlobal' => $graphiqueDatasGlobal ));
    }



    public function exportVPNExcelAction(Request $request) {

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


        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir());
        // Initialisation d'un nouveau fichier Excel.
        $objPHPExcel = new \PHPExcel();
        $objWorkStat = $objPHPExcel->getActiveSheet();


        // Creation de contenu //

        $objWorkStat->setCellValue('A1', 'Nombre de Connexions Global');
        // Fusion de cellule
        $objPHPExcel->getActiveSheet()->mergeCells('A1:E1');
        $objPHPExcel->getActiveSheet()->mergeCells('A2:E2');
        // Apliquer des styles
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->applyFromArray(
        array(
            'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
           )
        );

        // Ecriture des en-têtes de colonnes.
        $objWorkStat->setCellValue('A3', '0');
        $objWorkStat->setCellValue('B3', '1-5');
        $objWorkStat->setCellValue('C3', '6-10');
        $objWorkStat->setCellValue('D3', '11-20');
        $objWorkStat->setCellValue('E3', '20 et plus');
        $objPHPExcel->getActiveSheet()->getStyle('A3:E3')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A3:E3')->getFont()->setSize(12);
        $objPHPExcel->getActiveSheet()->getStyle('A3:E3')->getAlignment()->applyFromArray(
            array(
                'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            )
        );
        $objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getDefaultStyle()->getFont()->setSize(12);

        // Valeur de la colonnes A
        foreach ($graphiqueDatasGlobal["0"]["Users"] as $key => $mail){
            $arrayName[] =  $idToName[$mail]["name"];  
        }
        $columnArray = array_chunk($arrayName, 1);
        $objPHPExcel->getActiveSheet()->fromArray($columnArray, NULL, 'A4');

        // Valeur de la colonnes B
        foreach ($graphiqueDatasGlobal["1-5"]["Users"] as $key => $mail){
            if (isset($idToName[$mail]["name"])) {
               $arrayNameCol2[] =  $idToName[$mail]["name"];
            }else{
                $arrayNameCol2[] =  $mail;
            }
 
        }
        $columnArrayCol2 = array_chunk($arrayNameCol2, 1);
        $objPHPExcel->getActiveSheet()->fromArray($columnArrayCol2, NULL, 'B4');

        // Valeur de la colonnes C
        foreach ($graphiqueDatasGlobal["6-10"]["Users"] as $key => $mail){
            if (isset($idToName[$mail]["name"])) {
               $arrayNameCol3[] =  $idToName[$mail]["name"];
            }else{
                $arrayNameCol3[] =  $mail;
            }
 
        }
        $columnArrayCol3 = array_chunk($arrayNameCol3, 1);
        $objPHPExcel->getActiveSheet()->fromArray($columnArrayCol3, NULL, 'C4');

        // Valeur de la colonnes D
        foreach ($graphiqueDatasGlobal["11-20"]["Users"] as $key => $mail){
            if (isset($idToName[$mail]["name"])) {
               $arrayNameCol4[] =  $idToName[$mail]["name"];
            }else{
                $arrayNameCol4[] =  $mail;
            }
 
        }
        $columnArrayCol4 = array_chunk($arrayNameCol4, 1);
        $objPHPExcel->getActiveSheet()->fromArray($columnArrayCol4, NULL, 'D4');

        // Valeur de la colonnes E
        foreach ($graphiqueDatasGlobal["+20"]["Users"] as $key => $mail){
            if (isset($idToName[$mail]["name"])) {
               $arrayNameCol5[] =  $idToName[$mail]["name"];
            }else{
                $arrayNameCol5[] =  $mail;
            }
 
        }
        $columnArrayCol5 = array_chunk($arrayNameCol5, 1);
        $objPHPExcel->getActiveSheet()->fromArray($columnArrayCol5, NULL, 'E4');



        // On redimensionne les colonnes.
        foreach (range('A', 'E') as $columnID) {
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }




// ----------------------------------EXPORT PDF FILE----------------------------------------  

        // Chemin d'accès de la librairie
        $rendererName = \PHPExcel_Settings::PDF_RENDERER_TCPDF;
        $rendererLibrary = 'tcpdf';
        $rendererLibraryPath = dirname(__FILE__).'/../../../../../vendor/tecnickcom/' . $rendererLibrary;

        // Verif de la Connexion a la librairie 
        if (!\PHPExcel_Settings::setPdfRenderer(
            $rendererName,
            $rendererLibraryPath
            )) {
            die(
                'Please set the $rendererName and $rendererLibraryPath values' .PHP_EOL.' as appropriate for your directory structure'
            );
        }

        $objWriter = new \PHPExcel_Writer_PDF($objPHPExcel);
        $filename = tempnam('', '');
        $objWriter->save($filename);

        $stream_file = file_get_contents($filename);

        // On supprime le fichier.
        unlink($filename);

        // On retourne le téléchargement du fichier.
        $response = new Response();
        $response->setContent($stream_file);

        // Modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="Connexion_Global.pdf"');

        return $response;

// ----------------------------------EXPORT EXCEL FILE----------------------------------------

        // $objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);
        // $filename = tempnam('', '');
        // $objWriter->save($filename);

        // // On récupére le fichier sous forme de stream.
        // $stream_file = file_get_contents($filename);

        // // On supprime le fichier.
        // unlink($filename);

        // // On retourne le téléchargement du fichier.
        // $response = new Response();
        // $response->setContent($stream_file);

        // // Modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        // $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // $response->headers->set('Content-disposition', "filename='Compilation_modulations.xlsx'");

        // // Chemin d'accès de la librairie
        // $rendererName = \PHPExcel_Settings::PDF_RENDERER_MPDF;
        // $rendererLibrary = 'mPDF5.4';
        // $rendererLibraryPath = dirname(__FILE__).'/../../../libraries/PDF/' . $rendererLibrary;


        // return $response;


    }





}
