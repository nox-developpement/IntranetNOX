<?php

namespace NoxIntranet\UserBundle\Controller\MatriceCompetence;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Doctrine\ORM\EntityManager;

class UpdateMatriceCompetenceController extends Controller {

    // Initialise le container de service.
    public function __construct(Container $container, EntityManager $em) {
        $this->container = $container;
        $this->em = $em;
    }

    public function getMatriceCompetenceData() {
        // Racine du bundle User.
        $root = $this->get('kernel')->getRootDir() . '/../src/NoxIntranet/UserBundle/Resources/public/MatriceCompetence';

        // Initialisation de l'objet Excel du fichier de matrice.
        $objReader = new \PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objReader->load($root . "/Matrice_Competence.xlsx");
        $sheet = $objPHPExcel->getActiveSheet();

        // Lettres des colonnes de compétence.
        $letters = array();
        $letter = 'J';
        while ($letter !== 'DB') {
            $letters[] = $letter++;
        }

        // Tableau de liaison donnée/colonne dans le fichier de matrice.
        $columns = array(
            'Nom' => 'D',
            'Prenom' => 'E',
            'Date_Naissance' => 'F',
            'Date_Anciennete' => 'G',
            'Statut' => 'H',
            'Poste' => 'I',
            'Competences' => $letters
        );


        // On récupère les matrices à mettre à jour dans le tableau.
        $matricesToUpdate = $this->getUpdatedMatrices();

        // Pour chaques lignes du tableau...
        $rowIterator = $sheet->getRowIterator();
        foreach ($rowIterator as $row) {
            // Si il n'y a plus de matrice à mettre à jour...
            if (empty($matricesToUpdate)) {
                echo "BREAK";
                break; // On quitte la boucle.
            }

            // On récupère l'index de la ligne.
            $rowIndex = $row->getRowIndex();

            // On lis le nom et le prénom de la ligne.
            $rowNom = str_replace('-', ' ', mb_strtoupper($this->wd_remove_accents(trim($sheet->getCell("D" . $rowIndex)->getValue())), 'UTF-8'));
            $rowPrenom = str_replace('-', ' ', mb_strtoupper($this->wd_remove_accents(trim($sheet->getCell("E" . $rowIndex)->getValue())), 'UTF-8'));

            // Si le nom et le prénom de la ligne correspondent à ceux du collaborateurs...
            if (isset($matricesToUpdate[$rowNom][$rowPrenom])) {
                // Entitée de la matrice de compétence.
                $matrice_competence = $matricesToUpdate[$rowNom][$rowPrenom];

                // On remplace les informations du collaborateur.
                $sheet->setCellValue($columns['Date_Naissance'] . $rowIndex, \PHPExcel_Shared_Date::PHPToExcel($matrice_competence->getDateNaissance()));
                $sheet->setCellValue($columns['Date_Anciennete'] . $rowIndex, \PHPExcel_Shared_Date::PHPToExcel($matrice_competence->getDateAnciennete()));
                $sheet->setCellValue($columns['Statut'] . $rowIndex, $matrice_competence->getStatut());
                $sheet->setCellValue($columns['Poste'] . $rowIndex, $matrice_competence->getPoste());

                // Pour chaques colonne de compétence du tableau...
                foreach ($columns['Competences'] as $column) {
                    // On récupère le nom de la compétence...
                    $competence = $sheet->getCell($column . "3")->getValue();

                    // Si la compétence est égale à la compétence principale du collaborateur...
                    if ($competence === $matrice_competence->getCompetencePrincipale()) {
                        $sheet->getCell($column . $rowIndex)->setValue("1"); // On ajoute un "1" dans la cellule.
                    } else if (in_array($competence, $matrice_competence->getCompetencesSecondaires())) {
                        $sheet->getCell($column . $rowIndex)->setValue("*"); // On ajoute un "*" dans la cellule.
                    } else {
                        $sheet->getCell($column . $rowIndex)->setValue(""); // On vide la cellule.
                    }
                }

                // On indique que la matrice a été mise à jour.
                //$matrice_competence->setIsUpdated(true);
                // On supprime la matrice du tableau des matrices à modifier.
                unset($matricesToUpdate[$rowNom][$rowPrenom]);
            }
        }

        // Sauvegarde des modifications en base de donnée.
        $this->em->flush();

        // Ecriture et sauvegarde du fichier Excel.
        $objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->setPreCalculateFormulas(false);
        $objWriter->save($root . "/Matrice_Competence2.xlsx");

        // Nettoyage des variables.
        unset($objPHPExcel);
        unset($objWriter);
    }

    // Retourne une chaine de charactère sans accent.
    private function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

    // Retourne les matrices qui doivent êter mise à jour.
    private function getUpdatedMatrices() {
        // On récupère toutes les matrices qui ne sont pas à jour.
        $em = $this->em;
        $updatedMatrices = $em->getRepository('NoxIntranetUserBundle:MatriceCompetence')->findByIsUpdated(false);

        // Initialisation du tableau de retour.
        $dataToUpdate = array();

        // Pour chaques matrices...
        foreach ($updatedMatrices as $matrice) {
            // On récupère le collaborateur associé.
            $collaborateur = $matrice->getUser();

            // On extrait ses nom et prénom nettoyé.
            $nom_collaborateur = str_replace('-', ' ', mb_strtoupper($this->wd_remove_accents($collaborateur->getLastname()), 'UTF-8'));
            $prenom_collaborateur = str_replace('-', ' ', mb_strtoupper($this->wd_remove_accents($collaborateur->getFirstname()), 'UTF-8'));

            // On ajoute la matrice, le nom et le prénom au tableau de retour.
            $dataToUpdate[$nom_collaborateur][$prenom_collaborateur] = $matrice;
        }

        return $dataToUpdate;
    }

}
