<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\Profils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use NoxIntranet\AdministrationBundle\Entity\Formulaires;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

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

    public function administrationAffairesAccueilAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $profils = $em->getRepository('NoxIntranetRessourcesBundle:Profils')->findBy(array(), array('nom' => 'ASC'));

        $nouveauProfil = new Profils();

        $formAjoutProfil = $this->get('form.factory')->createNamedBuilder('formAjoutProfil', 'form', $nouveauProfil)
                ->add('Nom', TextType::class)
                ->add('Ajouter', 'submit')
                ->getForm();

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

        $formulaireAjout = new Formulaires();

        $listeFichiers = $this->getDirContents('C:\wamp\www\Symfony\web\uploads\AssistantAffaires\FeuillesSuivis\*.xlsx');

        foreach ($listeFichiers as $fichier) {
            $nomFichier[basename($fichier)] = basename($fichier);
        }

        $formAjoutFormulaire = $this->get('form.factory')->createNamedBuilder('formAjoutFormulaire', 'form', $formulaireAjout)
                ->add('Type', ChoiceType::class, array(
                    'choices' => $listeFichiers,
                    'choices_as_values' => true,
                    'choice_label' => function($value) use ($nomFichier) {
                        return $nomFichier[basename($value)];
                    },
                ))
                ->add('Editer', 'submit')
                ->getForm();

        $formAjoutFichier = $this->get('form.factory')->createNamedBuilder('formAjoutFichier', 'form')
                ->add('file', FileType::class)
                ->add('Ajouter', 'submit')
                ->getForm();

//        $formulaireSuppression = new Formulaires();
//        $formSuppresionFormulaire = $this->get('form.factory')->createNamedBuilder('formSuppressionFormulaire', 'form', $formulaireSuppression)
//                ->add('Nom', EntityType::class, array(
//                    'class' => 'NoxIntranetAdministrationBundle:Formulaires',
//                    'query_builder' => function (EntityRepository $er) {
//                        return $er->createQueryBuilder('u')
//                                ->orderBy('u.nom', 'ASC');
//                    },
//                    'choice_label' => 'Nom',
//                ))
//                ->add('Supprimer', 'submit')
//                ->getForm();

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

        if ($request->request->has('formSuppresionProfil')) {

            $formSuppresionProfil->handleRequest($request);

            if ($formSuppresionProfil->isValid()) {

                $em->remove($formSuppresionProfil['Nom']->getData());
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Le profil ' . $formSuppresionProfil['Nom']->getData()->getNom() . ' a été supprimé.');

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }

        if ($request->request->has('formAjoutFichier')) {

            $formAjoutFichier->handleRequest($request);

            if ($formAjoutFichier->isValid()) {

                $dir = "C:\wamp\www\Symfony\web\uploads\AssistantAffaires\FeuillesSuivis\\";

                $file = $formAjoutFichier['file']->getData();

                $extension = $file->guessExtension();

                if ($extension === 'xlsx') {
                    $folderName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                    $file->move($dir . $folderName, $file->getClientOriginalName());

                    $request->getSession()->getFlashBag()->add('notice', 'Le fichier ' . $file->getClientOriginalName() . ' a été ajouté.');

                    return $this->redirectToRoute('nox_intranet_administration_affaires');
                }

                $request->getSession()->getFlashBag()->add('noticeErreur', 'Le fichier doit être un fichier Excel (.xlsx) !');

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }

        if ($request->request->has('formAjoutFormulaire')) {

            $formAjoutFormulaire->handleRequest($request);

            if ($formAjoutFormulaire->isValid()) {

                return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('filename' => basename($formAjoutFormulaire['Type']->getData())));
            }
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig', array('formAjoutProfil' => $formAjoutProfil->createView(), 'profils' => $profils, 'formSuppresionProfil' => $formSuppresionProfil->createView(),
                    'formAjoutFormulaire' => $formAjoutFormulaire->createView(), 'formAjoutFichier' => $formAjoutFichier->createView()));
    }

    public function administrationAffairesEditionAction($filename) {

        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        $file = "C:\wamp\www\Symfony\web\uploads\AssistantAffaires\FeuillesSuivis\\" . $filename;

        // Chargement du fichier Excel
        $objReader = new \PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objReader->load($file);

        $sheet = $objPHPExcel->getSheet(0);

        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig', array('sheet' => $sheet, 'filename' => $filename));
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

            if (preg_match('/([_][v][0-9]+)/', $filename, $version)) {
                preg_match('/([_][v][0-9]+)/', $filename, $version);

                $versionNombre = null;
                preg_match('/([0-9]+)/', $filename, $versionNombre);
                $versionSauvegarde = $versionNombre[0] + 1;

                $path = pathinfo($filename);
                $fichier = preg_replace('/([0-9]+)/', $versionSauvegarde . ".xlsx", $path['filename']);
            } else {
                $path = pathinfo($filename);
                $fichier = $path['filename'] . "_v1.xlsx";
            }

            $writer->save("C:\wamp\www\Symfony\web\uploads\AssistantAffaires\FeuillesSuivis\\" . $fichier);

            $cookies->remove('editionCellules');
            $cookies->remove('cellules');

            $request->getSession()->getFlashBag()->add('notice', 'Le fichier à été sauvegardé sous le nom ' . $fichier);

            return $this->redirectToRoute('nox_intranet_administration_affaires');

//            return $response->send();
        } else {
            $request->getSession()->getFlashBag()->add('noticeErreur', 'Erreur lors de la sauvegarde !');

            return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('filename' => $filename));
        }
    }

}
