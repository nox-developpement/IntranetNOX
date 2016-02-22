<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\Profils;
use NoxIntranet\AdministrationBundle\Entity\Fichier_Suivi;
use NoxIntranet\AdministrationBundle\Entity\Formulaires;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Description of AdministrationAffairesController
 *
 * @author t.besson
 */
class AdministrationAffairesController extends Controller {

    function getDirContents($dir, &$results = array()) {
        $results = glob($dir);

        return $results;
    }

    function delete_directory($dir) {
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {

                    if (is_dir($dir . $file)) {
                        if (!@rmdir($dir . $file)) { // Empty directory? Remove it
                            delete_directory($dir . $file . '/'); // Not empty? Delete the files inside it
                        }
                    } else {
                        @unlink($dir . $file);
                    }
                }
            }
            closedir($handle);

            rmdir($dir);
        }
    }

    public function administrationAffairesAccueilAction(Request $request, $dossier) {

        $em = $this->getDoctrine()->getManager();

        // Génération formulaire d'ajout de profil
        $profils = $em->getRepository('NoxIntranetRessourcesBundle:Profils')->findBy(array(), array('nom' => 'ASC'));

        $nouveauProfil = new Profils();

        $formAjoutProfil = $this->get('form.factory')->createNamedBuilder('formAjoutProfil', 'form', $nouveauProfil)
                ->add('Nom', TextType::class)
                ->add('Ajouter', 'submit')
                ->getForm();
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération formulaire de suppresion de profil
        $profilASupprimer = new Profils();

        $formSuppresionProfil = $this->get('form.factory')->createNamedBuilder('formSuppresionProfil', 'form', $profilASupprimer)
                ->add('Nom', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.nom', 'ASC');
                    },
                    'choice_label' => 'Nom',
                ))
                ->add('Supprimer', 'submit')
                ->getForm();
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération formulaire ajout de fichier
        $formAjoutFichier = $this->get('form.factory')->createNamedBuilder('formAjoutFichier', 'form')
                ->add('file', FileType::class)
                ->add('Profil', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'placeholder' => 'Selectionnez un profil',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.nom', 'ASC');
                    },
                    'choice_label' => 'Nom',
                ))
                ->add('Ajouter', 'submit')
                ->getForm();
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération formulaire d'ajout de champ
        $nouveauChamp = new Formulaires();

        $formAjoutChamp = $this->get('form.factory')->createNamedBuilder('formAjoutChamp', 'form', $nouveauChamp)
                ->add('Nom', TextType::class)
                ->add('Type', ChoiceType::class, array(
                    'choices' => array(
                        'texte' => 'Texte',
                        'nombre' => 'Nombre',
                        'donnees' => 'Données'
                    ),
                ))
                ->add('Ajouter', SubmitType::class)
                ->getForm();
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération formulaire de suppression de champ
        $formSuppresionChamp = $this->get('form.factory')->createNamedBuilder('formSuppresionChamp', 'form')
                ->add('Nom', EntityType::class, array(
                    'class' => 'NoxIntranetAdministrationBundle:Formulaires',
                    'choice_label' => 'Nom'
                ))
                ->add('Supprimer', SubmitType::class)
                ->getForm();
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération formulaire de séléction du suivi  
        $path = 'C:/wamp/www/Symfony/web/uploads/AssistantAffaires/FeuillesSuivis/';

        $idSuivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findOneByChemin('C:\wamp\www\Symfony\web\uploads\AssistantAffaires\FeuillesSuivis\\' . $dossier);

        $formSelectionDossier = $this->get('form.factory')->createNamedBuilder('formSelectionDossier', 'form')
                ->add('dossiers', EntityType::class, array(
                    'placeholder' => 'Selectionnez un suivi',
                    'class' => 'NoxIntranetAdministrationBundle:Fichier_Suivi',
                    'choice_label' => function($value) {
                        return pathinfo($value->getChemin(), PATHINFO_BASENAME) . ' - ' . $value->getProfil();
                    },
                    'data' => $idSuivi
                ))
                ->add('Supprimer', SubmitType::class)
                ->getForm();
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération formulaire de séléction de la version du suivi
        if ($dossier !== "") {

            $fichiersVersion = scandir($path . $dossier);
            foreach ($fichiersVersion as $fichier) {
                if (!is_dir($path . $fichier)) {
                    $versions[$path . $dossier . "/" . $fichier] = $fichier;
                }
            }

            if (isset($versions)) {
                end($versions);
                $key = key($versions);
            } else {
                $versions = array();
                $key = "";
            }

            $formSelectionVersion = $this->get('form.factory')->createNamedBuilder('formSelectionVersion', 'form', $versions)
                    ->add('versions', ChoiceType::class, array(
                        'choices' => $versions,
//                        'choice_label' => function ($value) {
//                            return $value;
//                        },
                        'data' => $key
                    ))
                    ->add('Editer', SubmitType::class)
                    ->add('Supprimer', SubmitType::class)
                    ->getForm();
        } else {
            $formSelectionVersion = $this->get('form.factory')->createNamedBuilder('formSelectionVersion', 'form')
                    ->add('versions', ChoiceType::class, array(
                        'placeholder' => 'Veuillez séléctionner un suivi.'
                    ))
                    ->add('Editer', SubmitType::class)
                    ->add('Supprimer', SubmitType::class)
                    ->getForm();
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire d'ajout de profil
        if ($request->request->has('formAjoutProfil')) {

            $formAjoutProfil->handleRequest($request);

            if ($formAjoutProfil->isValid()) {

                if ($em->getRepository('NoxIntranetRessourcesBundle:Profils')->findOneByNom($formAjoutProfil['Nom']->getData()) == null) {
                    $nouveauProfil->setNom($formAjoutProfil['Nom']->getData());
                    $em->persist($nouveauProfil);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Le profil ' . $formAjoutProfil['Nom']->getData() . ' a été créé.');

                    return $this->redirectToRoute('nox_intranet_administration_affaires');
                } else {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Le profil ' . $formAjoutProfil['Nom']->getData() . 'existe déjà !');
                }
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de suppression de profil
        if ($request->request->has('formSuppresionProfil')) {

            $formSuppresionProfil->handleRequest($request);

            if ($formSuppresionProfil->isValid()) {

                $em->remove($formSuppresionProfil['Nom']->getData());
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Le profil ' . $formSuppresionProfil['Nom']->getData()->getNom() . ' a été supprimé.');

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire d'ajout de fichier
        if ($request->request->has('formAjoutFichier')) {

            $formAjoutFichier->handleRequest($request);

            if ($formAjoutFichier->isValid()) {

                $dir = "C:\wamp\www\Symfony\web\uploads\AssistantAffaires\FeuillesSuivis\\";

                $file = $formAjoutFichier['file']->getData();

                $extension = $file->guessExtension();

                if ($extension === 'xlsx') {
                    if (!is_dir($dir . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))) {
                        $em = $this->getDoctrine()->getManager();

                        $folderName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                        $file->move($dir . $folderName, $file->getClientOriginalName());

                        $fichier_suivi = new Fichier_Suivi();

                        $fichier_suivi->setChemin($dir . $folderName);
                        $fichier_suivi->setProfil($formAjoutFichier['Profil']->getData()->getNom());

                        $em->persist($fichier_suivi);
                        $em->flush();

                        $request->getSession()->getFlashBag()->add('notice', 'Le fichier ' . $file->getClientOriginalName() . ' a été ajouté.');

                        return $this->redirectToRoute('nox_intranet_administration_affaires');
                    } else {
                        $request->getSession()->getFlashBag()->add('noticeErreur', 'Un suivi associé à un fichier de même nom existe déjà !');
                    }
                } else {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Le fichier doit être un fichier Excel (.xlsx) !');
                }



                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire d'ajout de champ
        if ($request->request->has('formAjoutChamp')) {

            $formAjoutChamp->handleRequest($request);

            if ($formAjoutChamp->isValid()) {

                if ($em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->findByNom($formAjoutChamp['Nom']->getData()) == null) {
                    $nouveauChamp->setNom($formAjoutChamp['Nom']->getData());
                    $nouveauChamp->setType($formAjoutChamp['Type']->getData());

                    $em->persist($nouveauChamp);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formAjoutChamp['Nom']->getData() . ' à été ajouté.');
                } else {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Un champ portant le même nom existe déjà !');
                }

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de suppression de champ
        if ($request->request->has('formSuppressionChamp')) {

            $formSuppresionChamp->handleRequest($request);

            if ($formSuppresionChamp->isValid()) {

                $em->remove($formSuppresionChamp->getData());

                $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formSuppresionChamp->getData()->getNom() . ' à été supprimé.');

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de séléction du suivi
        if ($request->request->has('formSelectionDossier')) {
            $formSelectionDossier->handleRequest($request);

            if ($formSelectionDossier->isValid()) {
                if ($formSelectionDossier->get('Supprimer')->isClicked()) {
                    $em->remove($formSelectionDossier['dossiers']->getData());
                    $em->flush();
                    $this->delete_directory($formSelectionDossier['dossiers']->getData()->getChemin() . '/');
                    $request->getSession()->getFlashBag()->add('notice', 'Le suivi ' . pathinfo($formSelectionDossier['dossiers']->getData()->getChemin(), PATHINFO_BASENAME) . ' a été supprimé.');
                    return $this->redirectToRoute('nox_intranet_administration_affaires');
                }

                if ($formSelectionDossier['dossiers']->getData() !== null) {
                    return $this->redirectToRoute('nox_intranet_administration_affaires', array('dossier' => pathinfo($formSelectionDossier['dossiers']->getData()->getChemin(), PATHINFO_BASENAME)));
                }

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de séléction de la version du suivi
        if ($request->request->has('formSelectionVersion')) {
            $formSelectionVersion->handleRequest($request);

            if ($formSelectionVersion->isValid()) {

                var_dump($formSelectionVersion['versions']->getData());

                if ($formSelectionVersion['versions']->getData() !== null) {
                    if ($formSelectionVersion->get('Editer')->isClicked()) {
                        return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('file' => $formSelectionVersion['versions']->getData()));
                    }
                    if ($formSelectionVersion->get('Supprimer')->isClicked()) {

                        $fileNumber = count(array_diff(scandir($path . $dossier), array(".", "..")));

                        if ($fileNumber === 1) {
                            $suivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findOneByChemin("C:\wamp\www\Symfony\web\uploads\AssistantAffaires\FeuillesSuivis\\" . $dossier);
                            $em->remove($suivi);
                            $em->flush();
                            unlink($formSelectionVersion['versions']->getData());
                            rmdir("C:\wamp\www\Symfony\web\uploads\AssistantAffaires\FeuillesSuivis\\" . $dossier);
                            $request->getSession()->getFlashBag()->add('notice', 'Le fichier ' . pathinfo($formSelectionVersion['versions']->getData(), PATHINFO_BASENAME) . ' et le suivi associé ont été supprimé.');
                            return $this->redirectToRoute('nox_intranet_administration_affaires');
                        } else {
                            $request->getSession()->getFlashBag()->add('notice', 'Le fichier ' . pathinfo($formSelectionVersion['versions']->getData(), PATHINFO_BASENAME) . ' a été supprimé.');
                            unlink($formSelectionVersion['versions']->getData());
                        }

                        return $this->redirectToRoute('nox_intranet_administration_affaires', array('dossier' => $dossier));
                    }
                }

                $request->getSession()->getFlashBag()->add('noticeErreur', 'Veuillez séléctionner un suivi valide !');
                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération de l'affichage
        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig', array(
                    'formAjoutProfil' => $formAjoutProfil->createView(), 'profils' => $profils, 'formSuppresionProfil' => $formSuppresionProfil->createView(),
                    'formAjoutFichier' => $formAjoutFichier->createView(), 'formSelectionDossier' => $formSelectionDossier->createView(),
                    'formSelectionVersion' => $formSelectionVersion->createView(), 'formAjoutChamp' => $formAjoutChamp->createView(),
                    'formSuppressionChamp' => $formSuppresionChamp->createView()
        ));
        ////////////////////////////////////////////////////////////////////////////////////////////////
    }

    public function administrationAffairesEditionAction($file) {

        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        $filename = pathinfo($file, PATHINFO_FILENAME);

        // Chargement du fichier Excel
        $objReader = new \PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objReader->load($file);

        $sheet = $objPHPExcel->getSheet(0);

        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig', array('sheet' => $sheet, 'filename' => $filename, 'file' => $file));
    }

    public function administrationAffaireSauvegardeModificationAction(Request $request, $filename) {

        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        $cookies = $request->cookies;

        if ($cookies->get('editionCellules') == true) {


            $cellules = json_decode($cookies->get('cellules'));


            $workbook = new \PHPExcel;

            $sheet = $workbook->getActiveSheet();
//
//            $response = new Response();
//            $response->setStatusCode(Response::HTTP_OK);
//            $response->headers->set('Content-Type', 'text/html');

            foreach ($cellules as $cellule) {
                if (array_key_exists(0, $cellule) && array_key_exists(1, $cellule) && array_key_exists(2, $cellule)) {
                    $sheet->setCellValue($cellule[1] . $cellule[0], $cellule[2]);
//                    $response->setContent($response->getContent() . " Coordonnes: " . $cellule[1] . $cellule[0] . " Valeur: " . $cellule[2]);
                }
            }

            $writer = new \PHPExcel_Writer_Excel2007($workbook);

            $version = null;

            if (preg_match('/([_][v][0-9]+)/', pathinfo($filename, PATHINFO_BASENAME), $version)) {

                $versionNombre = null;
                preg_match('/([0-9]+)/', $version[0], $versionNombre);
                $versionSauvegarde = '_v' . ($versionNombre[0] + 1);

                $path = pathinfo($filename);
                $fichier = preg_replace('/([_][v][0-9]+)/', $versionSauvegarde . ".xlsx", $path['filename']);
            } else {
                $path = pathinfo($filename);
                $fichier = $path['filename'] . "_v1.xlsx";
            }

            $writer->save(pathinfo($filename, PATHINFO_DIRNAME) . "/" . $fichier);

            $cookies->remove('editionCellules');
            $cookies->remove('cellules');

            $request->getSession()->getFlashBag()->add('notice', 'Le fichier à été sauvegardé sous le nom ' . $fichier);

            return $this->redirectToRoute('nox_intranet_administration_affaires');

//            return new Response(var_dump($version) . ',' . var_dump($versionNombre) . ',' . var_dump($versionSauvegarde));
//            return $response->send();
        } else {
            $request->getSession()->getFlashBag()->add('noticeErreur', 'Erreur lors de la sauvegarde !');

            return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('filename' => $filename));
        }
    }

}
