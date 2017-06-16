<?php

namespace NoxIntranet\PointageBundle\ExtractRHHierarchie;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use NoxIntranet\PointageBundle\Entity\UsersHierarchy;

class NoxIntranetExtractRHHierarchie extends Controller {

    // Initialise le container de service.
    public function __construct(Container $container) {
        $this->container = $container;
    }

    // Extrait les informations hiérachique de la RH en base de données.
    function extractRHHierarchieData() {

        // Récupère le chemin d'instalation de Symfony.
        $root = $this->container->getParameter('kernel.root_dir') . '\..';

        // Initialise le manager de base de données.
        $em = $this->getDoctrine()->getManager();

        // On récupére le fichier de hiérarchie depuis le SharePoint de Laurent Morisseau.
        file_put_contents($root . '/web/uploads/FichierHierarchieRH/HierarchieRH.xlsx', fopen("https://noxingenierie-my.sharepoint.com/personal/l_morisseau_groupe-nox_com/_layouts/15/download.aspx?docid=184616442030a4a6d8cd9b17a0fb1d49c&authkey=Ad7IJouU8hNjIhh7c8xZpe4", 'r'));

        // Chemin du fichier de management hiérarchique de la RH.
        $fichierRH = $root . '/web/uploads/FichierHierarchieRH/HierarchieRH.xlsx';

        // Initialise la lecture du fichier Excel.
        $objReaderAssistantes = new \PHPExcel_Reader_Excel2007();
        $objPHPExcelAssistantes = $objReaderAssistantes->load($fichierRH);
        $objWorksheet = $objPHPExcelAssistantes->getActiveSheet();

        // Ouverture du fichier de débugage.
        $file = 'listUsername.txt';
        $filehandller = fopen($file, 'w+');

        // On récupére tous les collaborateurs de la base de données de l'intranet et on place leur entité, nom et prénom (nettoyé des accents et tirés et mis en minuscule) dans un tableau
        $DBUsers = array();
        foreach ($em->getRepository('NoxIntranetUserBundle:User')->findAll() as $user) {
            $DBUsers[$user->getUsername()]['firstname'] = strtolower(str_replace('-', ' ', $this->wd_remove_accents($user->getFirstname())));
            $DBUsers[$user->getUsername()]['lastname'] = strtolower(str_replace('-', ' ', $this->wd_remove_accents($user->getLastname())));
            $DBUsers[$user->getUsername()]['entity'] = $user;
        }

        // Pour chaque cellule non vide du tableau...
        foreach ($objPHPExcelAssistantes->getActiveSheet()->getCellCollection() as $cell) {
            // ...Si la cellule est la première de la ligne et que la ligne est au moins la 5ème.
            if ($objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getColumn() === 'A' && $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow() > 1) {
                // On récupère le numéro de la ligne.
                $rowIndex = $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow();

                // On récupére l'utilisateur associé dans la base de données utilisateur si il existe.
                //$userDB = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($objWorksheet->getCell('E' . $rowIndex)->getValue())), 'lastname' => $objWorksheet->getCell('D' . $rowIndex)->getValue()));
                $userDB = $this->findUserInDB($objWorksheet->getCell('E' . $rowIndex)->getValue(), $objWorksheet->getCell('D' . $rowIndex)->getValue(), $DBUsers);

                // Si l'utilisateur n'est pas trouvé dans la base de donnée de l'intranet on écris son nom dans le fichier de débugage.
                if (empty($userDB)) {
                    fwrite($filehandller, ucfirst(strtolower($objWorksheet->getCell('E' . $rowIndex)->getValue())) . ' ' . $objWorksheet->getCell('D' . $rowIndex)->getValue() . "\n");
                    echo strtolower($objWorksheet->getCell('E' . $rowIndex)->getValue()) . ' ' . $objWorksheet->getCell('D' . $rowIndex)->getValue() . "\n";
                }

                // Si l'utilisateur existe dans la base de données utilisateurs.
                if (!empty($userDB)) {
                    // On crée une nouvelle entité à mettre en base de données.
                    $newUser = new UsersHierarchy();
                    $newUser->setNom($userDB->getLastname());
                    $newUser->setPrenom($userDB->getFirstname());
                    $newUser->setUsername($userDB->getUsername());

                    // On vérifie la nullité des cellules du personnel de la RH.
                    // Si la case d'Assistante agence n'est pas vide.
                    if (trim($objWorksheet->getCell('F' . $rowIndex)->getValue(), " ") !== "-" && trim($objWorksheet->getCell('F' . $rowIndex)->getValue(), " ") !== '') {
                        $newUser->setAA(trim($objWorksheet->getCell('F' . $rowIndex)->getValue(), "  ")); // On attribut la valeur de la case d'assistante agence comme assistante d'agence.
                    }
                    // Sinon si la case de Directeur d'agence n'est pas nul.
                    elseif (trim($objWorksheet->getCell('G' . $rowIndex)->getValue(), " ") !== "-" && trim($objWorksheet->getCell('G' . $rowIndex)->getValue(), " ") !== '') {
                        $newUser->setAA(trim($objWorksheet->getCell('G' . $rowIndex)->getValue(), "  ")); // On attribut la valeur de la case de directeur d'agence comme assistante d'agence.
                    }
                    // Sinon si la case d'Assistante RH n'est pas nul.
                    elseif (trim($objWorksheet->getCell('H' . $rowIndex)->getValue(), " ") !== "-" && trim($objWorksheet->getCell('H' . $rowIndex)->getValue(), " ") !== '') {
                        $newUser->setAA(trim($objWorksheet->getCell('H' . $rowIndex)->getValue(), "  ")); // On attribut la valeur de la case d'assistante RH comme assistante d'agence.
                    }
                    // Sinon.
                    else {
                        $newUser->setAA(trim($objWorksheet->getCell('I' . $rowIndex)->getValue(), "  ")); // On attribut la valeur de la case de N+2 comme assistante d'agence.
                    }

                    // Si la case de Directeur d'agence n'est pas nul.
                    if (trim($objWorksheet->getCell('G' . $rowIndex)->getValue(), " ") !== "-" && trim($objWorksheet->getCell('G' . $rowIndex)->getValue(), " ") !== '') {
                        $newUser->setDA(trim($objWorksheet->getCell('G' . $rowIndex)->getValue(), "  ")); // On attribut la valeur de la case de directeur d'agence comme directeur d'agence.
                    }
                    // Sinon la case Assistante RH n'est pas nul.
                    else if (trim($objWorksheet->getCell('H' . $rowIndex)->getValue(), " ") !== "-" && trim($objWorksheet->getCell('H' . $rowIndex)->getValue(), " ") !== '') {
                        $newUser->setDA(trim($objWorksheet->getCell('H' . $rowIndex)->getValue(), "  ")); // On attribut la valeur de la case de d'assistante RH comme directeur d'agence.
                    }
                    // Sinon.
                    else {
                        $newUser->setDA(trim($objWorksheet->getCell('I' . $rowIndex)->getValue(), "  ")); // On attribut la valeur de la case de N+2 comme directeur d'agence.
                    }

                    // On attribut la valeur de la case d'assistante RH comme assistante RH.
                    $newUser->setRH(trim($objWorksheet->getCell('H' . $rowIndex)->getValue(), "  "));

                    // On attribut la valeur de la case de N+2 comme N+2.
                    $newUser->setN2(trim($objWorksheet->getCell('I' . $rowIndex)->getValue(), "  "));

                    // On attribut la valeur de la case de Matricule comme matricule.
                    $newUser->setMatricule(trim($objWorksheet->getCell('A' . $rowIndex)->getValue(), "  "));

                    // On attribut l'agence.
                    $newUser->setEtablissement(trim($objWorksheet->getCell('C' . $rowIndex)->getValue(), "  "));

                    // On attribut l'agence.
                    $newUser->setSociete(trim($objWorksheet->getCell('B' . $rowIndex)->getValue(), "  "));

                    ///////////////////////////////////////////////////////////////////
                    /* Cette portion sert à appeler le service d'envoi de mail de demande de complétion de la matrice de compétence 
                      si le collaborateur viens d'être ajouté au fichier de hiérarchie. */
                    if ($this->isNewUser($userDB)) {
                        // On récupére l'entitée du N+1.
                        $n1 = $this->container->get('noxintranet.hierarchy_helper')->getUserEntityFromCanonicalName($newUser->getDA());

                        // Si l'entitée du N+1 est trouvée...
                        if (!empty($n1)) {
                            // Appel du service d'envoi de mail au N+1.
                            $update_mailing_service = $this->container->get('noxintranet_userbundle.competences_update_mailing');
                            $update_mailing_service->sendNewUserUpdateRequestMail($userDB, $n1);
                        }
                    }
                    ///////////////////////////////////////////////////////////////////

                    $em->persist($newUser);
                }
            }
        }

        // Fermeture du fichier de débugage.
        fclose($filehandller);

        // On truncate la table des hiérarchie pour la vider et remettre les Id à zéro.
        $connection = $em->getConnection();
        $platform = $connection->getDatabasePlatform();
        $connection->executeUpdate($platform->getTruncateTableSQL('users_hierarchy', true));

        // On supprime les entités existantes et on ajoute les nouvelles en base de données.
        $em->flush();
    }

    // Trouve l'entité utilisateur associé au Nom et au prénom passé en paramètres.
    private function findUserInDB($firstname, $lastname, $DBUsers) {
        // On supprime les accents et tirés du nom et du prénom et on les met en minuscule.
        $cleanFirstname = trim(strtolower(str_replace('-', ' ', $this->wd_remove_accents($firstname))));
        $cleanLastname = trim(strtolower(str_replace('-', ' ', $this->wd_remove_accents($lastname))));

        // Pour chaque collaborateur de la base de données...
        foreach ($DBUsers as $user) {
            // Si le nom et le prénom du collaborateur correspond à ceux passés en paramètres...
            if ($user['firstname'] === $cleanFirstname && $user['lastname'] === $cleanLastname) {
                return $user['entity']; // On retourne l'entitée du collaborateur.
            }
        }
    }

    private function isNewUser($userEntity) {
        $em = $this->getDoctrine()->getManager();

        $user_hierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($userEntity->getUsername());

        return empty($user_hierarchy);
    }

    // Supprime les accents d'une chaîne de caractère.
    private function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

}
