<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\RessourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use NoxIntranet\RessourcesBundle\Entity\Suivis;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;

/**
 * Description of ExcelReadingController
 *
 * @author t.besson
 */
class ExcelReadingController extends Controller {

    public function readXlsAction() {

        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        $rendererName = \PHPExcel_Settings::PDF_RENDERER_TCPDF;
        $rendererLibrary = 'tcpdf';
        $rendererLibraryPath = $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel/Writer/PDF/' . $rendererLibrary;

        if (!\PHPExcel_Settings::setPdfRenderer(
                        $rendererName, $rendererLibraryPath
                )) {
            die(
                    'Please set the $rendererName and $rendererLibraryPath values' .
                    PHP_EOL .
                    ' as appropriate for your directory structure'
            );
        }

//        $objReader = new \PHPExcel_Reader_Excel2007();
//        $objPHPExcel = $objReader->load("C:\wamp\www\Classeur1.xlsx");
//
////        $objWriter = new \PHPExcel_Writer_PDF($objPHPExcel);
////        $objWriter->save("C:/wamp/www/05featuredemo.pdf");
//        $sheet = $objPHPExcel->getSheet(0);
////
////        echo '<table border="1">';
////
////        // On boucle sur les lignes
////        foreach ($sheet->getRowIterator() as $row) {
////
////            echo '<tr>';
////
////            // On boucle sur les cellule de la ligne
////            foreach ($row->getCellIterator() as $cell) {
////                echo '<td>';
////                print_r($cell->getValue());
////                echo '</td>';
////            }
////
////            echo '</tr>';
////        }
////        echo '</table>';
//
//        $rows = $sheet->getRowIterator();

        $workbook = new \PHPExcel;

        $sheet = $workbook->getActiveSheet();

        $sheet->setCellValue('A1', 'Test ajout de valeur');

        $objWriter = new \PHPExcel_Writer_PDF($workbook);
        $objWriter->save("C:/wamp/www/testRendu.pdf");

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaire.html.twig');
    }

    public function generateExcelFileAction() {

        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        $workbook = new \PHPExcel;

        $sheet = $workbook->getActiveSheet();

        $sheet->setCellValue('A1', '5');

        $sheet->setCellValue('B1', '10');

        $sheet->setCellValue('C1', '=');

        $sheet->setCellValue('D1', $sheet->getCell('A1')->getValue() + $sheet->getCell('B1')->getValue());

        $writer = new \PHPExcel_Writer_Excel2007($workbook);

        $fichier = "ExcelFile.xlsx";

        $writer->save("ExcelGenerate/" . $fichier);

        $chemin = "ExcelGenerate/"; // emplacement de votre fichier .pdf

        $response = new Response();
        $response->setContent(file_get_contents($chemin . $fichier));
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        $response->headers->set('Content-disposition', 'filename=' . $fichier);

        unlink($chemin . $fichier);

        return $response;
    }

    public function accueilAssistantAffaireAction() {
        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireaccueil.html.twig');
    }

    public function creationSuiviAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $serveurs = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findBy(array(), array('agence' => 'ASC'));

        $suivi = new Suivis();

        $form = $this->get('form.factory')->createBuilder('form', $suivi)
                ->add('Nom', 'text')
                ->add('Agence', 'text')
                ->add('NumeroGX', 'integer')
                ->add('Profil', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.nom', 'ASC');
                    },
                    'choice_label' => 'Nom',
                ))
                ->add('Créer', 'submit')
                ->getForm();

        $form->handleRequest($request);

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig', array('form' => $form->createView()));
    }

}
