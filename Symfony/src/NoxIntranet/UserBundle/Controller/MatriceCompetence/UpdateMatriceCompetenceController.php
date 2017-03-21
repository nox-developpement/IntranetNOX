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

    public function getMatriceCompetenceData($userId) {
        $em = $this->em;
        $user = $em->getRepository('NoxIntranetUserBundle:User')->find($userId);

        $matrice_competence = $em->getRepository('NoxIntranetUserBundle:MatriceCompetence')->findOneByUser($user);

        // Racine du bundle User.
        $root = $this->get('kernel')->getRootDir() . '/../src/NoxIntranet/UserBundle/Resources/public/MatriceCompetence';

        // Initialisation de l'objet Excel du fichier de matrice.
        $objReader = new \PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objReader->load($root . "/Matrice_Competence.xlsx");
        $sheet = $objPHPExcel->getActiveSheet();

        // On récupère le nom et le prénom du collaborateur.
        $nom = str_replace('-', ' ', mb_strtoupper($this->wd_remove_accents($user->getLastname()), 'UTF-8'));
        $prenom = str_replace('-', ' ', mb_strtoupper($this->wd_remove_accents($user->getFirstname()), 'UTF-8'));

        $columns = array(
            'Nom' => 'D',
            'Prenom' => 'E',
            'Date_Naissance' => 'F',
            'Date_Anciennete' => 'G',
            'Statut' => 'H',
            'Poste' => 'I',
            'Competences' => range('J', 'DA')
        );

        // Pour chaques lignes du tableau...
        $rowIterator = $sheet->getRowIterator();
        foreach ($rowIterator as $row) {
            // On récupère l'index de la ligne.
            $rowIndex = $row->getRowIndex();

            // On lis le nom et le prénom de la ligne.
            $rowNom = str_replace('-', ' ', mb_strtoupper($this->wd_remove_accents(trim($sheet->getCell("D" . $rowIndex)->getValue())), 'UTF-8'));
            $rowPrenom = str_replace('-', ' ', mb_strtoupper($this->wd_remove_accents(trim($sheet->getCell("E" . $rowIndex)->getValue())), 'UTF-8'));

            // Si le nom et le prénom de la ligne correspondent à ceux du collaborateurs...
            if ($rowNom === $nom && $rowPrenom === $prenom) {

                $sheet->setCellValue($columns['Date_Naissance'] . $rowIndex, \PHPExcel_Shared_Date::PHPToExcel($matrice_competence->getDateNaissance()));
                $sheet->setCellValue($columns['Date_Anciennete'] . $rowIndex, \PHPExcel_Shared_Date::PHPToExcel($matrice_competence->getDateAnciennete()));
                $sheet->setCellValue($columns['Statut'] . $rowIndex, $matrice_competence->getStatut());
                $sheet->setCellValue($columns['Poste'] . $rowIndex, $matrice_competence->getPoste());

                foreach ($columns['Competences'] as $column) {
                    $competence = $sheet->getCell($column . "3");

                    if ($competence === $matrice_competence->getCompetencePrincipale()) {
                        $sheet->setCellValue($column . $rowIndex, "1");
                    }
                }

                break;
            }
        }
        $objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->setPreCalculateFormulas(false);
        $objWriter->save($root . "/Matrice_Competence2.xlsx");

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

}
