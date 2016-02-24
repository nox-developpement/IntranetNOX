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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TexteType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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


        if ($form->isValid()) {

            if ($em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByNom($form['Nom']->getData()) == null) {
                if ($em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByNumeroGX($form['NumeroGX']->getData()) == null) {
                    $suivi->setNom($form['Nom']->getData());
                    $suivi->setAgence($form['Agence']->getData());
                    $suivi->setNumeroGX($form['NumeroGX']->getData());
                    $suivi->setProfil($form['Profil']->getData()->getNom());
                    $suivi->setIdModele(null);
                    $suivi->setStatut('En cours');

                    $em->persist($suivi);
                    $em->flush();

                    $IdSuivi = $suivi->getId();

                    $request->getSession()->getFlashBag()->add('notice', 'Le suivi ' . $form['Nom']->getData() . ' a été créé.');

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_modele', array('IdSuivi' => $IdSuivi));
                } else {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Le numéro GX ' . $form['NumeroGX']->getData() . ' est déjà attribué !');
                }
            } else {
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Le nom ' . $form['Nom']->getData() . ' est déjà attribué !');
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig', array('form' => $form->createView()));
    }

    public function creationSuiviChoixModeleAction(Request $request, $IdSuivi) {
        $em = $this->getDoctrine()->getManager();

        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        $profil = $suivi->getProfil();

        $form = $this->get('form.factory')->createBuilder('form', $suivi)
                ->add('IdModele', EntityType::class, array(
                    'class' => 'NoxIntranetAdministrationBundle:Fichier_Suivi',
                    'query_builder' => function (EntityRepository $er) use ($profil) {
                        return $er->createQueryBuilder('u')
                                ->where("u.profil = '" . $profil . "'")
                                ->orderBy('u.chemin', 'ASC');
                    },
                    'choice_label' => function($value) {
                        return pathinfo($value->getChemin(), PATHINFO_FILENAME);
                    }
                ))
                ->add('Choisir', 'submit')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $suivi->setIdModele($form['IdModele']->getData()->getId());

            $em->persist($suivi);
            $em->flush();

            return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig', array('form' => $form->createView(), 'profil' => $profil));
    }

    public function editionSuiviEnCoursAction(Request $request, $IdSuivi) {

        $em = $this->getDoctrine()->getManager();

        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        $modele = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->find($suivi->getIdModele());

        $liaisons = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($modele->getId());

        $formBuilder = $this->get('form.factory')->createBuilder('form');

        $champsViews = array();

        foreach ($liaisons as $liaison) {
            $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($liaison->getIdChamp());

            if ($champ->getType() === 'Texte') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = preg_replace('/\s+/', '', $champ->getNom());
                $formBuilder->add(preg_replace('/\s+/', '', $champ->getNom()), TexteType::class);
            } else if ($champ->getType() === 'Nombre') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = preg_replace('/\s+/', '', $champ->getNom());
                $formBuilder->add(preg_replace('/\s+/', '', $champ->getNom()), NumberType::class);
            }
        }

        $formBuilder->add('Generate', SubmitType::class);

        $formSuivi = $formBuilder->getForm();

        $formSuivi->handleRequest($request);

        if ($formSuivi->isValid()) {

            include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

            $objReader = new \PHPExcel_Reader_Excel2007();
            $objPHPExcel = $objReader->load($modele->getChemin() . "/" . pathinfo($modele->getChemin(), PATHINFO_FILENAME) . '.xlsx');
            $sheet = $objPHPExcel->getSheet(0);

            foreach ($liaisons as $liaison) {
                $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($liaison->getIdChamp());

                $sheet->setCellValue($liaison->getCoordonneesDonnees(), $formSuivi[preg_replace('/\s+/', '', $champ->getNom())]->getData());
            }

            $writer = new \PHPExcel_Writer_Excel2007($objPHPExcel);

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

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig', array('form' => $formSuivi->createView(), 'champsViews' => $champsViews, 'suivi' => $suivi->getNom()));
    }

    public function consulterSuiviAction(Request $request, $agence) {

        $em = $this->getDoctrine()->getManager();

        $suivis = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findBy(array('statut' => 'En cours'), array('nom' => 'ASC'));

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

            $nbSuivi = count($em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findBy(array('statut' => 'En cours', 'agence' => $agence)));

            if ($nbSuivi === 0) {
                $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                        ->add('Suivi', EntityType::class, array(
                            'class' => 'NoxIntranetRessourcesBundle:Suivis',
                            'query_builder' => function (EntityRepository $er) use ($agence) {
                                return $er->createQueryBuilder('u')
                                        ->where("u.agence ='" . $agence . "' AND u.statut = 'En cours'")
                                        ->orderBy('u.nom', 'ASC');
                            },
                            'disabled' => true,
                            'choice_label' => 'Nom',
                        ))
                        ->add('Editer', 'submit', array(
                            'disabled' => true
                        ))
                        ->add('Supprimer', 'submit', array(
                            'disabled' => true
                        ))
                        ->getForm();
            } else {
                $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                        ->add('Suivi', EntityType::class, array(
                            'class' => 'NoxIntranetRessourcesBundle:Suivis',
                            'query_builder' => function (EntityRepository $er) use ($agence) {
                                return $er->createQueryBuilder('u')
                                        ->where("u.agence ='" . $agence . "' AND u.statut = 'En cours'")
                                        ->orderBy('u.nom', 'ASC');
                            },
                            'choice_label' => 'Nom',
                        ))
                        ->add('Editer', 'submit')
                        ->add('Supprimer', 'submit')
                        ->getForm();
            }
        } else {

            $nbSuivi = count($em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByStatut('En cours'));

            if ($nbSuivi === 0) {
                $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                        ->add('Suivi', EntityType::class, array(
                            'class' => 'NoxIntranetRessourcesBundle:Suivis',
                            'query_builder' => function (EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                        ->where("u.statut = 'En cours'")
                                        ->orderBy('u.nom', 'ASC');
                            },
                            'disabled' => true,
                            'choice_label' => 'Nom',
                        ))
                        ->add('Editer', 'submit', array(
                            'disabled' => true
                        ))
                        ->add('Supprimer', 'submit', array(
                            'disabled' => true
                        ))
                        ->getForm();
            } else {
                $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                        ->add('Suivi', EntityType::class, array(
                            'class' => 'NoxIntranetRessourcesBundle:Suivis',
                            'query_builder' => function (EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                        ->where("u.statut = 'En cours'")
                                        ->orderBy('u.nom', 'ASC');
                            },
                            'choice_label' => 'Nom',
                        ))
                        ->add('Editer', 'submit')
                        ->add('Supprimer', 'submit')
                        ->getForm();
            }
        }

        if ($request->request->has('formSelectionSuivi')) {

            $formSelectionSuivi->handleRequest($request);

            if ($formSelectionSuivi->isValid()) {

                if ($formSelectionSuivi->get('Supprimer')->isClicked()) {

                    $em->remove($formSelectionSuivi['Suivi']->getData());
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Le suivi ' . $formSelectionSuivi['Suivi']->getData()->getNom() . ' a été supprimé.');

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_en_cours');
                }

                if ($formSelectionSuivi->get('Editer')->isClicked()) {

                    $IdSuivi = $formSelectionSuivi['Suivi']->getData()->getId();

                    $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

                    if ($suivi->getIdModele() === null) {
                        return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_modele', array('IdSuivi' => $IdSuivi));
                    } else {
                        return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
                    }
                }
            }
        }

        if ($request->request->has('formSelectionAgence')) {

            $formAgence->handleRequest($request);

            if ($formAgence->isValid()) {

                return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_en_cours', array('agence' => $formAgence['Agences']->getData()));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireedition.html.twig', array('formSelectionSuivi' => $formSelectionSuivi->createView(), 'formAgence' => $formAgence->createView()));
    }

    public function consulterSuiviTermineAction(Request $request, $agence) {
        $em = $this->getDoctrine()->getManager();

        $suivis = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findBy(array(), array('nom' => 'ASC'));

        $agences['Toutes'] = 'Toutes';

        foreach ($suivis as $suivi) {
            if (!in_array($suivi->getAgence(), $agences)) {
                $agences[$suivi->getAgence()] = $suivi->getAgence();
            }
        }

        $formAgence = $this->get('form.factory')->createBuilder('form', $agences)
                ->add('Agences', ChoiceType::class, array(
                    'choices' => $agences,
                    'data' => $agence
                ))
                ->getForm();

        $formAgence->handleRequest($request);

        if ($formAgence->isValid()) {

            return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_termine', array('agence' => $formAgence['Agences']->getData()));
        }

        if ($agence != "Toutes") {
            $form = $this->get('form.factory')->createBuilder('form', $suivis)
                    ->add('Suivi', EntityType::class, array(
                        'class' => 'NoxIntranetRessourcesBundle:Suivis',
                        'query_builder' => function (EntityRepository $er) use ($agence) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.agence ='" . $agence . "' AND u.statut = 'Terminé'")
                                    ->orderBy('u.nom', 'ASC');
                        },
                        'choice_label' => 'Nom',
                    ))
                    ->add('Consulter', 'submit')
                    ->getForm();
        } else {
            $form = $this->get('form.factory')->createBuilder('form', $suivis)
                    ->add('Suivi', EntityType::class, array(
                        'class' => 'NoxIntranetRessourcesBundle:Suivis',
                        'query_builder' => function (EntityRepository $er) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.statut = 'Terminé'")
                                    ->orderBy('u.nom', 'ASC');
                        },
                        'choice_label' => 'Nom',
                    ))
                    ->add('Consulter', 'submit')
                    ->getForm();
        }

        $form->handleRequest($request);

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig', array('form' => $form->createView(), 'formAgence' => $formAgence->createView()));
    }

}
