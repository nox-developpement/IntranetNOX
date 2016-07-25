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
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExcelReadingController extends Controller {

    public function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

    public function readXlsAction() {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

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

        $workbook = new \PHPExcel;

        $sheet = $workbook->getActiveSheet();

        $sheet->setCellValue('A1', 'Test ajout de valeur');

        $objWriter = new \PHPExcel_Writer_PDF($workbook);
        $objWriter->save($root . "../testRendu.pdf");

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
    
    public function consulterSuiviTermineAction(Request $request, $agence) {
        $em = $this->getDoctrine()->getManager();

        $suivis = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findBy(array('statut' => 'Cloturé'), array('nom' => 'ASC'));

        $agences['Toutes'] = 'Toutes';

        foreach ($suivis as $suivi) {
            if (!in_array($suivi->getAgence(), $agences)) {
                $agences[$suivi->getAgence()] = $suivi->getAgence();
            }
        }

        $formAgence = $this->get('form.factory')->createNamedBuilder('formSelectionAgence', 'form', $agences)
                ->add('Agences', ChoiceType::class, array(
                    'choices' => $agences,
                    'data' => $agence
                ))
                ->getForm();

        if ($agence != "Toutes") {


            $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                    ->add('Suivi', EntityType::class, array(
                        'class' => 'NoxIntranetRessourcesBundle:Suivis',
                        'query_builder' => function (EntityRepository $er) use ($agence) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.agence = '" . $agence . "' AND u.statut = 'Cloturé'")
                                    ->orderBy('u.nom', 'ASC');
                        },
                        'choice_label' => 'Nom',
                    ))
                    ->add('Consulter', 'submit')
                    ->getForm();
        } else {
            $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                    ->add('Suivi', EntityType::class, array(
                        'class' => 'NoxIntranetRessourcesBundle:Suivis',
                        'query_builder' => function (EntityRepository $er) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.statut = 'Cloturé'")
                                    ->orderBy('u.nom', 'ASC');
                        },
                        'choice_label' => 'Nom',
                    ))
                    ->add('Consulter', 'submit')
                    ->getForm();
        }

        if ($request->request->has('formSelectionSuivi')) {

            $formSelectionSuivi->handleRequest($request);

            if ($formSelectionSuivi->isValid()) {

                if ($formSelectionSuivi->get('Consulter')->isClicked()) {

                    $IdSuivi = $formSelectionSuivi['Suivi']->getData()->getId();

                    $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_consultation', array('IdSuivi' => $IdSuivi));
                }
            }
        }

        if ($request->request->has('formSelectionAgence')) {

            $formAgence->handleRequest($request);

            if ($formAgence->isValid()) {

                return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_termine', array('agence' => $formAgence['Agences']->getData()));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig', array('formSelectionSuivi' => $formSelectionSuivi->createView(), 'formSelectionAgence' => $formAgence->createView()));
    }

    public function suiviTermineAction(Request $request, $IdSuivi, $version) {
        $em = $this->getDoctrine()->getManager();

        $emChampDonnees = $this->getDoctrine()->getManager();

        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        $modele = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->find($suivi->getIdModele());

        $liaisons = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($modele->getId());

        $champsViews = array();

// Génération du formulaire de séléction de la version du suivi

        if ($version !== '') {
            $IdDonneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi, 'version' => $version));
        } else {
            $IdDonneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));
        }

        $formSelectionVersionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionVersionSuivi', 'form')
                ->add('version', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:DonneesSuivi',
                    'query_builder' => function (EntityRepository $er) use ($IdSuivi) {
                        return $er->createQueryBuilder('u')
                                ->where("u.idSuivi = '" . $IdSuivi . "'")
                                ->orderBy('u.version', 'DESC');
                    },
                    'choice_label' => function($value) {
                        return "v" . $value->getVersion();
                    },
                    'data' => $IdDonneesSuivi
                ))
                ->getForm();
////////////////////////////////////////////////////////////////////////////////////////////////
// Génération du formulaire de complétion du suivi
        $formBuilder = $this->get('form.factory')->createNamedBuilder('formDonneesSuivi', 'form');

        foreach ($liaisons as $liaison) {
            $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($liaison->getIdChamp());

            if ($champ->getType() === 'Texte') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), TextType::class);
            } else if ($champ->getType() === 'Nombre') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), NumberType::class, array(
                    'attr' => array(
                        'pattern' => '[0-9]'
                    )
                ));
            } else if ($champ->getType() === 'Données') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), EntityType::class, array(
                    'class' => 'NoxIntranetAdministrationBundle:DonneesFormulaire',
                    'query_builder' => function (EntityRepository $er) use ($champ) {
                        return $er->createQueryBuilder('u')
                                        ->where("u.idFormulaire = '" . $champ->getId() . "'")
                                        ->orderBy('u.donnee', 'ASC');
                    },
                    'choice_label' => 'Donnee'
                ));
            }
        }

        $formBuilder->add('Generate', SubmitType::class);

        $formSuivi = $formBuilder->getForm();

        if ($version !== '') {

            $donneeSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi, 'version' => $version));

            $donneesVersion = $donneeSuivi->getDonnees();

            foreach ($donneesVersion as $key => $value) {
                if ($donneesVersion[$key]['Type'] === 'entity') {
                    $emChampDonnees->persist($value['Data']);
                    $formSuivi->get($key)->setData($value['Data']);
                    $emChampDonnees->remove($value['Data']);
                } else {
                    $formSuivi->get($key)->setData($value['Data']);
                }
            }
        } else {

            $donneeSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));

            $donneesVersion = $donneeSuivi->getDonnees();

            $version = $donneeSuivi->getVersion();

            foreach ($donneesVersion as $key => $value) {
                if ($donneesVersion[$key]['Type'] === 'entity') {
                    $emChampDonnees->persist($value['Data']);
                    $formSuivi->get($key)->setData($value['Data']);
                    $emChampDonnees->remove($value['Data']);
                } else {
                    $formSuivi->get($key)->setData($value['Data']);
                }
            }
        }



////////////////////////////////////////////////////////////////////////////////////////////////
// Traitement du formulaire de séléction de la version du suivi
        if ($request->request->has('formSelectionVersionSuivi')) {
            $formSelectionVersionSuivi->handleRequest($request);

            if ($formSelectionVersionSuivi->isValid()) {

                if ($formSelectionVersionSuivi['version']->getData() !== null) {
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_consultation', array('IdSuivi' => $IdSuivi, 'version' => $formSelectionVersionSuivi['version']->getData()->getVersion()));
                } else {
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_consultation', array('IdSuivi' => $IdSuivi));
                }
            }
        }
////////////////////////////////////////////////////////////////////////////////////////////////
// Traitement du formulaire de complétion du suivi
        if ($request->request->has('formDonneesSuivi')) {
            $formSuivi->handleRequest($request);

            if ($formSuivi->isValid()) {

                if ($formSuivi->get('Generate')->isClicked()) {

                    include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

                    $objReader = new \PHPExcel_Reader_Excel2007();
                    $objPHPExcel = $objReader->load($modele->getChemin() . "/" . pathinfo($modele->getChemin(), PATHINFO_FILENAME) . '.xlsx');
                    $sheet = $objPHPExcel->getSheet(0);

                    $donneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneByIdSuivi($IdSuivi)->getDonnees();

                    foreach ($donneesSuivi as $donne) {
                        if ($donne['Type'] === 'entity') {
                            $sheet->setCellValue($donne['Position'], $donne['Data']->getDonnee());
                        } else {
                            $sheet->setCellValue($donne['Position'], $donne['Data']);
                        }
                    }

                    $writer = new \PHPExcel_Writer_Excel2007($objPHPExcel);

                    $fichierVersion = $suivi->getNom() . "_v" . $version;

                    $fichier = $fichierVersion . ".xlsx";

                    $chemin = $root . '\web\ExcelGenerate\\';

                    $writer->save($chemin . $fichier);

                    $response = new Response();
                    $response->setContent(file_get_contents($chemin . $fichier));
                    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
                    $response->headers->set('Content-disposition', 'filename=' . $fichier);

                    unlink($chemin . $fichier);

                    return $response;
                }
            }
        }
//////////////////////////////////////////////////////////////////////////////////////////////// 

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireconsultation.html.twig', array(
                    'formDonneesSuivi' => $formSuivi->createView(), 'champsViews' => $champsViews, 'suivi' => $suivi->getNom(),
                    'formSelectionVersionSuivi' => $formSelectionVersionSuivi->createView(),
        ));
    }

}
