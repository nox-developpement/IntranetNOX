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
use NoxIntranet\AdministrationBundle\Entity\DonneesFormulaire;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

/**
 * Description of ExcelReadingController
 *
 * @author t.besson
 */
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

    public function creationSuiviChoixClientAction(Request $request, $IdSuivi) {
        $em = $this->getDoctrine()->getManager();

        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        $formClient = $this->get('form.factory')->createNamedBuilder('formClient', 'form', $suivi)
                ->add('noClient', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:AA_Client',
                    'choice_label' => 'Nom_Client'
                ))
                ->add('Choisir', SubmitType::class)
                ->getForm();

        $formClientAdr = $this->get('form.factory')->createNamedBuilder('formClientAdr', 'form')
                ->add('Telephone', TextType::class)
                ->add('Fax', TextType::class)
                ->add('Email', TextType::class)
                ->add('Code_Postal', IntegerType::class)
                ->add('Nom_Ville', TextType::class)
                ->add('Nom_Pays', TextType::class)
                ->getForm();

        if ($request->request->has('formSelectionSuivi')) {
            $formClient->handleRequest($request);

            if ($formClient->isValid()) {

                if ($formClient['Choisir']->isClicked()) {
                    $suivi->setNoClient($form['noClient']->getData()->getNClient());
                }

//            if ($form['Créer']->isClicked()) {
//                $newClient = new Donnees_Client();
//                $newClient->setNom($form['Nom']->getData());
//                $newClient->setAdresse($form['Adresse']->getData());
//                $newClient->setFax($form['Fax']->getData());
//
//                $em->persist($newClient);
//                $em->flush();
//
//                $suivi->setIdClient($newClient->getId());
//
//                $request->getSession()->getFlashBag()->add('notice', 'Nouveau client ajouté.');
//            }

                $em->persist($suivi);
                $em->flush();

                return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_infos', array('IdSuivi' => $IdSuivi));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixclient.html.twig', array('formClient' => $formClient->createView(), 'formClientAdr' => $formClientAdr->createView()));
    }

    public function ajaxClientGetterAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $listeClients = array();

        if ($request->isXmlHttpRequest()) {
            $critere = $request->get('critere');

            $clients = $em->getRepository("NoxIntranetRessourcesBundle:AA_Client")->createQueryBuilder('o')
                    ->where('o.nomClient LIKE :critere')
                    ->setParameter('critere', "%" . $critere . "%")
                    ->getQuery()
                    ->getResult();

            foreach ($clients as $client) {
                $listeClients[$client->getId()] = $client->getNomClient();
            }
        }

        $response = new Response(json_encode($listeClients));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
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

            return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_client');
        }

        $form->handleRequest($request);

        if ($form->isValid()) {
            $suivi->setIdModele($form['IdModele']->getData()->getId());

            $em->persist($suivi);
            $em->flush();

            return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_client', array('IdSuivi' => $IdSuivi));
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig', array('form' => $form->createView(), 'profil' => $profil));
    }

    public function creationSuiviInfosAction(Request $request, $IdSuivi) {
        $em = $this->getDoctrine()->getManager();

        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        $form = $this->get('form.factory')->createBuilder('form', $suivi)
                ->add('Marche', TextType::class)
                ->add('NoCommande', TextType::class)
                ->add('NoClient', TextType::class)
                ->add('Commune', TextType::class)
                ->add('Objet', TextType::class)
                ->add('NoINGEDIABEP', TextType::class)
                ->add('Estimatif', TextType::class)
                ->add('Valider', SubmitType::class)
                ->getForm();

        $form->handleRequest($request);

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationinfos.html.twig', array('form' => $form->createView()));
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
                        ->add('Editer', SubmitType::class, array(
                            'disabled' => true
                        ))
                        ->add('Supprimer', SubmitType::class, array(
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
                        ->add('Editer', SubmitType::class)
                        ->add('Supprimer', SubmitType::class)
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

                    $donneesAssocies = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findByIdSuivi($formSelectionSuivi['Suivi']->getData()->getId());

                    foreach ($donneesAssocies as $donne) {
                        $em->remove($donne);
                    }

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
                        if ($suivi->getIdClient() === null) {
                            return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_client', array('IdSuivi' => $IdSuivi));
                        } else {
                            return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
                        }
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

    public function editionSuiviEnCoursAction(Request $request, $IdSuivi, $version) {

        $root = $this->get('kernel')->getRootDir() . '\..';

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
                ->add('Supprimer', SubmitType::class)
                ->getForm();
////////////////////////////////////////////////////////////////////////////////////////////////
// Génération du formulaire de selection du client
        $formSelectionCreationClient = $this->get('form.factory')->createNamedBuilder('formSelectionCreationClient', 'form')
                ->add('version', EntityType::class, array(
                    'class' => 'NoxIntranetAdministrationBundle:Donnees_Client',
                    'choice_label' => 'Nom',
                ))
                ->add('Supprimer', SubmitType::class)
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
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), TextType::class, array(
                    'attr' => array(
                        'class' => 'champFormulaireRemplissageSuivi'
                    )
                ));
            } else if ($champ->getType() === 'Nombre') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), NumberType::class, array(
                    'invalid_message' => 'Veuillez renseigner une valeur de type %type% pour le champ %nom%.',
                    'invalid_message_parameters' => array('%type%' => $champ->getType(), '%nom%' => $champ->getNom()),
                    'attr' => array(
                        'class' => 'champFormulaireRemplissageSuivi',
                        'pattern' => '^[-+]?[0-9]*\.?[0-9]+$'
                    )
                ));
            } else if ($champ->getType() === 'Données') {
                if ($champ->getAjoutDonnees() === true) {
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
                        'placeholder' => 'Autre',
                        'choice_label' => 'Donnee',
                        'empty_data' => null,
                        'required' => false,
                        'attr' => array(
                            'class' => 'champFormulaireRemplissageSuivi'
                        )
                    ));

                    $champsViews[$champ->getNom() . 'newData']['Nom'] = 'Autre ' . $champ->getNom();
                    $champsViews[$champ->getNom() . 'newData']['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())) . 'newData';
                    $champsViews[$champ->getNom() . 'newData']['Type'] = 'Texte';
                    $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())) . 'newData', TextType::class, array(
                        'required' => false,
                        'attr' => array(
                            'class' => 'newData champFormulaireRemplissageSuivi'
                        ),
                    ));
                } else {
                    $donneesChamp = $em->getRepository('NoxIntranetAdministrationBundle:DonneesFormulaire')->findByIdFormulaire($champ->getId());

                    if (!empty($donneesChamp)) {
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
                            'choice_label' => 'Donnee',
                            'empty_data' => null,
                            'required' => false,
                            'attr' => array(
                                'class' => 'champFormulaireRemplissageSuivi'
                            )
                        ));
                    }
                }
            }
        }

        if ($version !== '') {
            $formBuilder->add('Generate', SubmitType::class);
        } else {
            $formBuilder->add('Generate', SubmitType::class, array(
                'disabled' => true
            ));
        }

        $formBuilder->add('Save', SubmitType::class);

        $formSuivi = $formBuilder->getForm();

        if ($version != null) {

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
        }

////////////////////////////////////////////////////////////////////////////////////////////////
// Génération du formulaire de cloturation du suivi
        $donnees_suivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));

        if (!empty($donnees_suivi)) {
            $formCloturationSuivi = $this->get('form.factory')->createNamedBuilder('formCloturationSuivi', 'form')
                    ->add('Cloturer', SubmitType::class)
                    ->getForm();
        } else {
            $formCloturationSuivi = $this->get('form.factory')->createNamedBuilder('formCloturationSuivi', 'form')
                    ->add('Cloturer', SubmitType::class, array(
                        'disabled' => true
                    ))
                    ->getForm();
        }
////////////////////////////////////////////////////////////////////////////////////////////////
// Traitement du formulaire de séléction de la version du suivi
        if ($request->request->has('formSelectionVersionSuivi')) {
            $formSelectionVersionSuivi->handleRequest($request);

            if ($formSelectionVersionSuivi->isValid()) {

                if ($formSelectionVersionSuivi->get('Supprimer')->isClicked()) {
                    $em->remove($formSelectionVersionSuivi['version']->getData());
                    $em->flush();

                    $donnees_suivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));
                    if ($donnees_suivi !== null) {
                        $version = $donnees_suivi->getVersion();
                    } else {
                        $version = '';
                    }

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi, 'version' => $version));
                }

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

            try {
                $formSuivi->handleRequest($request);
            } catch (Exception $ex) {
                echo 'test';
            }


            if ($formSuivi->isValid()) {

                if ($formSuivi->get('Save')->isClicked()) {

                    $donnees_suivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));
                    if ($donnees_suivi !== null) {
                        $version = $donnees_suivi->getVersion() + 0.1;
                    } else {
                        $version = 1.0;
                    }

                    $i = 0;

                    $vide = false;

                    foreach ($formSuivi->getData() as $key => $data) {

                        if ($vide) {
                            $newData = new DonneesFormulaire();

                            if (!empty($em->getRepository('NoxIntranetAdministrationBundle:DonneesFormulaire')->findOneBy(array('idFormulaire' => $liaisons[$i]->getIdChamp(), 'donnee' => $data)))) {
                                $request->getSession()->getFlashBag()->add('noticeErreur', 'Le choix ' . $data . ' existe déjà !');

                                return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig', array(
                                            'formDonneesSuivi' => $formSuivi->createView(), 'champsViews' => $champsViews, 'suivi' => $suivi->getNom(),
                                            'formSelectionVersionSuivi' => $formSelectionVersionSuivi->createView(), 'formCloturationSuivi' => $formCloturationSuivi->createView()
                                ));
                            }
                            $newData->setIdFormulaire($liaisons[$i]->getIdChamp());
                            $newData->setDonnee($data);

                            $em->persist($newData);
                            $em->flush();

                            $donnees[$previousKey]['Data'] = $newData;
                            $donnees[$previousKey]['Type'] = 'entity';
                            $donnees[$previousKey]['Position'] = $liaisons[$i]->getCoordonneesDonnees();
                            $vide = false;
                            $i++;
                        } else {
                            if ($data === null) {
                                if ($formSuivi[$key]->getConfig()->getType()->getName() === 'entity') {
                                    $vide = true;
                                    $previousKey = $key;
                                }
                            } else {
                                $donnees[$key]['Data'] = $data;
                                $donnees[$key]['Type'] = $formSuivi[$key]->getConfig()->getType()->getName();
                                $donnees[$key]['Position'] = $liaisons[$i]->getCoordonneesDonnees();
                                $i++;
                            }
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

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi, 'version' => $version));
                }


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
// Traitement du formulaire de cloturation de suivi
        if ($request->request->has('formCloturationSuivi')) {
            $formCloturationSuivi->handleRequest($request);

            if ($formCloturationSuivi->isValid()) {

                $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);
                $suivi->setStatut('Cloturé');

                $em->persist($suivi);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Le suivi a été cloturé.');

                return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_termine');
            }
        }
////////////////////////////////////////////////////////////////////////////////////////////////

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig', array(
                    'formDonneesSuivi' => $formSuivi->createView(), 'champsViews' => $champsViews, 'suivi' => $suivi->getNom(),
                    'formSelectionVersionSuivi' => $formSelectionVersionSuivi->createView(), 'formCloturationSuivi' => $formCloturationSuivi->createView()
        ));
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
                                    ->where("u.agence ='" . $agence . "' AND u.statut = 'Cloturé'")
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
