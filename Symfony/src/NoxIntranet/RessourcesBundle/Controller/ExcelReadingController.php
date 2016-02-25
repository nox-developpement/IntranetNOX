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
use NoxIntranet\RessourcesBundle\Entity\DonneesSuivi;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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

        $Fichier_Suivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findByProfil($profil);

        if (!empty($Fichier_Suivi)) {
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
        } else {
            $request->getSession()->getFlashBag()->add('noticeErreur', 'Il n\'y a aucun modèle disponible pour ce profil de suivi !');

            return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_en_cours');
        }

        $form->handleRequest($request);

        if ($form->isValid()) {
            $suivi->setIdModele($form['IdModele']->getData()->getId());

            $em->persist($suivi);
            $em->flush();

            return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig', array('form' => $form->createView(), 'profil' => $profil));
    }

    public function editionSuiviEnCoursAction(Request $request, $IdSuivi, $version) {
        $em = $this->getDoctrine()->getManager();

        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        $modele = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->find($suivi->getIdModele());

        $liaisons = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($modele->getId());

        $champsViews = array();

        function wd_remove_accents($str, $charset = 'utf-8') {
            $str = htmlentities($str, ENT_NOQUOTES, $charset);

            $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
            $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
            $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

            return $str;
        }

        // Génération du formulaire de séléction de la version du suivi

        if ($version !== '') {
            $IdDonneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi, 'version' => $version));
        } else {
            $IdDonneesSuivi = null;
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
                    'placeholder' => 'Nouvelle version',
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
                $champsViews[$champ->getNom()]['Champ'] = wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $formBuilder->add(wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), TextType::class);
            } else if ($champ->getType() === 'Nombre') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $formBuilder->add(wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), NumberType::class);
            }
        }

        $formBuilder->add('Generate', SubmitType::class);
        $formBuilder->add('Save', SubmitType::class);

        $formSuivi = $formBuilder->getForm();

        if ($version != null) {

            $donneeSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi, 'version' => $version));

            $donneesVersion = $donneeSuivi->getDonnees();

            foreach ($donneesVersion as $key => $value) {
                $formSuivi->get($key)->setData($value);
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de séléction de la version du suivi
        if ($request->request->has('formSelectionVersionSuivi')) {
            $formSelectionVersionSuivi->handleRequest($request);

            if ($formSelectionVersionSuivi->isValid()) {

                if ($formSelectionVersionSuivi['version']->getData() !== null) {
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi, 'version' => $formSelectionVersionSuivi['version']->getData()->getVersion()));
                } else {
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
                }
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de complétion du suivi
        if ($request->request->has('formDonneesSuivi')) {
            $formSuivi->handleRequest($request);

            $donnees_suivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));
            if ($donnees_suivi !== null) {
                $version = $donnees_suivi->getVersion() + 0.1;
            } else {
                $version = 1.0;
            }

            if ($formSuivi->isValid()) {

                if ($formSuivi->get('Save')->isClicked()) {

                    $donnees_existantes = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findByIdSuivi($IdSuivi);

                    foreach ($formSuivi->getData() as $key => $data) {
                        $donnees[$key] = $data;
                    }

                    foreach ($donnees_existantes as $donnee_existante) {
                        if (empty(array_diff_assoc($donnee_existante->getDonnees(), $donnees))) {
                            $request->getSession()->getFlashBag()->add('notice', 'Le suivi ' . $suivi->getNom() . ' n\'a pas été sauvegardé car ses donnéees son identiques à la version ' . $donnee_existante->getVersion() . '.');
                            return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
                        }
                    }

                    $NewDonneesSuivi = new DonneesSuivi();

                    $NewDonneesSuivi->setIdSuivi($IdSuivi);
                    $NewDonneesSuivi->setNom($suivi->getNom() . "_v" . $version);
                    $NewDonneesSuivi->setDonnees($donnees);
                    $NewDonneesSuivi->setVersion($version);

                    $em->persist($NewDonneesSuivi);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Le suivi ' . $suivi->getNom() . ' a été sauvegardé sous le nom ' . $suivi->getNom() . "_v" . $version . '.');

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
                }


                if ($formSuivi->get('Generate')->isClicked()) {

                    include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

                    $objReader = new \PHPExcel_Reader_Excel2007();
                    $objPHPExcel = $objReader->load($modele->getChemin() . "/" . pathinfo($modele->getChemin(), PATHINFO_FILENAME) . '.xlsx');
                    $sheet = $objPHPExcel->getSheet(0);

                    foreach ($liaisons as $liaison) {
                        $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($liaison->getIdChamp());
                        $sheet->setCellValue($liaison->getCoordonneesDonnees(), $formSuivi[wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()))]->getData());
                    }

                    $writer = new \PHPExcel_Writer_Excel2007($objPHPExcel);

                    $fichierVersion = $suivi->getNom() . "_v" . $version;

                    $fichier = $fichierVersion . ".xlsx";

                    $chemin = 'C:\wamp\www\Symfony\web\ExcelGenerate\\';

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

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig', array(
                    'formDonneesSuivi' => $formSuivi->createView(), 'champsViews' => $champsViews, 'suivi' => $suivi->getNom(),
                    'formSelectionVersionSuivi' => $formSelectionVersionSuivi->createView()
        ));
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
