<?php

namespace NoxIntranet\AdministrationBundle\Controller\AdministrationAssistantAffaire\Modeles;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ModelesController extends Controller {

    // Supprime le contenu d'un dossier.
    public function delTree($dir) {
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }

    // Supprime le dossier et le fichier d'un modèle et supprime le modèle de la base de données.
    function deleteModeleAction($IDModele, Request $request) {

        // On récupére le modèle en fonction de l'ID passé en paramètre.
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->find($IDModele);

        // On supprime le dossier correspondant au chemin du modèle.
        $this->delTree($modele->getChemin());

        // On supprime le modèle de la base de donnée.
        $em->remove($modele);
        $em->flush();

        // On affiche un message de confirmation.
        $request->getSession()->getFlashBag()->add('notice', 'Le modèle ' . pathinfo($modele->getChemin(), PATHINFO_BASENAME) . ' a été supprimé.');

        // On redirige vers l'administration de l'assistant d'affaire catégorie 'modeles'.
        return $this->redirectToRoute('nox_intranet_administration_affaires', array('section' => 'modeles'));
    }

    public function administrationAffairesEditionAction(Request $request, $file, $profil) {

//        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';
//
//        $em = $this->getDoctrine()->getManager();
//
//        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';
//
//        $filename = pathinfo($file, PATHINFO_FILENAME);
//
//        // Chargement du fichier Excel
//        $objReader = new \PHPExcel_Reader_Excel2007();
//        $objPHPExcel = $objReader->load($file);
//
//        $sheet = $objPHPExcel->getSheet(0);
//
//        $writer = new \PHPExcel_Writer_Excel2007($objPHPExcel);
//
//        exec("soffice --headless --convert-to pdf --outdir \"" . $root . "/web/ExcelToPDF\" \"" . $file . "\"");
//
//        $pdf = $root . "/web/ExcelToPDF/" . $filename . ".pdf";
//
//        $imagePDFChemin = $root . "/web/ImagePDF/" . $filename . ".png";
//
//        exec("convert \"" . $pdf . "[0]\" -strip \"" . $imagePDFChemin . "\"");
//
//        $imagePDFLien = "http://" . $_SERVER['HTTP_HOST'] . "/Symfony/web/ImagePDF/" . $filename . ".png";
//
//        $suivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findOneByChemin(str_replace('/', '\\', pathinfo($file, PATHINFO_DIRNAME)));
//
//        $liaisonsSuivi = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($suivi->getId());
//
//        $requette = null;
//
//        foreach ($liaisonsSuivi as $liaison) {
//            $requette = $requette . " AND u.id != '" . $liaison->getIdChamp() . "'";
//        }
//
//        $newLiaisonSuiviChamp = new LiaisonSuiviChamp();
//
//        // Génération du formulaire de positionnement des champ
//        if (!empty($em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->findByProfil($profil))) {
//            $formPlacementChamp = $this->get('form.factory')->createNamedBuilder('formPlacementChamp', 'form', $newLiaisonSuiviChamp)
//                    ->add('IdChamp', EntityType::class, array(
//                        'class' => 'NoxIntranetAdministrationBundle:Formulaires',
//                        'choice_label' => 'Nom',
//                        'query_builder' => function (EntityRepository $er) use ($profil, $requette) {
//
//                            return $er->createQueryBuilder('u')
//                                    ->where("u.profil = '" . $profil . "'" . $requette)
//                                    ->orderBy('u.nom', 'ASC');
//                        },
//                    ))
//                    ->add('CoordonneesDonnees', TextType::class)
//                    ->add('Placer', SubmitType::class)
//                    ->getForm();
//        } else {
//            $formPlacementChamp = $this->get('form.factory')->createNamedBuilder('formPlacementChamp', 'form', $newLiaisonSuiviChamp)
//                    ->add('IdChamp', EntityType::class, array(
//                        'class' => 'NoxIntranetAdministrationBundle:Formulaires',
//                        'choice_label' => 'Nom',
//                        'query_builder' => function (EntityRepository $er) use ($profil) {
//                            return $er->createQueryBuilder('u')
//                                    ->where("u.profil = '" . $profil . "'")
//                                    ->orderBy('u.nom', 'ASC');
//                        },
//                        'disabled' => true,
//                        'placeholder' => 'Il n\'y a aucun champ à ajouter.'
//                    ))
//                    ->add('CoordonneesDonnees', TextType::class, array(
//                        'disabled' => true,
//                    ))
//                    ->add('Placer', SubmitType::class, array(
//                        'disabled' => true
//                    ))
//                    ->getForm();
//        }
//        ////////////////////////////////////////////////////////////////////////
//        // Génération du formulaire de suppression des champs
//        $suivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findOneByChemin(str_replace('/', '\\', pathinfo($file, PATHINFO_DIRNAME)));
//
//        if (!empty($em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($suivi->getId()))) {
//            $formSuppresionPositionChamp = $this->get('form.factory')->createNamedBuilder('formSuppresionPositionChamp', 'form')
//                    ->add('IdChamp', EntityType::class, array(
//                        'class' => 'NoxIntranetAdministrationBundle:LiaisonSuiviChamp',
//                        'choice_label' => function($value) use ($em) {
//                            return $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($value->getIdChamp())->getNom() . ' - ' . $value->getCoordonneesDonnees();
//                        },
//                    ))
//                    ->add('Supprimer', SubmitType::class)
//                    ->getForm();
//        } else {
//            $formSuppresionPositionChamp = $this->get('form.factory')->createNamedBuilder('formSuppresionPositionChamp', 'form')
//                    ->add('IdChamp', EntityType::class, array(
//                        'class' => 'NoxIntranetAdministrationBundle:LiaisonSuiviChamp',
//                        'choice_label' => null,
//                        'disabled' => true,
//                        'placeholder' => 'Il n\'y a aucun champ à supprimer.',
//                    ))
//                    ->add('Supprimer', SubmitType::class, array(
//                        'disabled' => true
//                    ))
//                    ->getForm();
//        }
//        ////////////////////////////////////////////////////////////////////////
//        // Traitement du formulaire de positionnement des champ
//        if ($request->request->has('formPlacementChamp')) {
//            $formPlacementChamp->handleRequest($request);
//
//            if ($formPlacementChamp->isValid()) {
//
//                $suivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findOneByChemin(str_replace('/', '\\', pathinfo($file, PATHINFO_DIRNAME)));
//                $liaisonsSuivi = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($suivi->getId());
//
//                if ($liaisonsSuivi != null) {
//                    foreach ($liaisonsSuivi as $liaisonSuivi) {
//                        if ($liaisonSuivi->getIdChamp() === $formPlacementChamp['IdChamp']->getData()->getId()) {
//                            $anciennePositionDonnees = $liaisonSuivi->getCoordonneesDonnees();
//                            $em->remove($liaisonSuivi);
//                        }
//                    }
//                    $em->flush();
//                }
//
//                $liaisonPositionIdentique = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findOneBy(array('idSuivi' => $suivi->getId(), 'coordonneesDonnees' => $formPlacementChamp['CoordonneesDonnees']->getData()));
//
//                if (!empty($liaisonPositionIdentique)) {
//                    $sheet->setCellValue($liaisonPositionIdentique->getCoordonneesDonnees(), null);
//                    $em->remove($liaisonPositionIdentique);
//                    $em->flush();
//
//                    $request->getSession()->getFlashBag()->add('notice', 'Le champ précédemment situé à la position (' . $liaisonPositionIdentique->getCoordonneesDonnees() . ') a été supprimé.');
//                }
//
//                $newLiaisonSuiviChamp->setIdSuivi($suivi->getId());
//                $newLiaisonSuiviChamp->setIdChamp($formPlacementChamp['IdChamp']->getData()->getId());
//                $newLiaisonSuiviChamp->setCoordonneesDonnees($formPlacementChamp['CoordonneesDonnees']->getData());
//                $em->persist($newLiaisonSuiviChamp);
//                $em->flush();
//
//                if (isset($anciennePositionDonnees)) {
//                    $sheet->getCell($anciennePositionDonnees)->setValue(null);
//                    $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formPlacementChamp['IdChamp']->getData()->getNom() .
//                            ' a été ajouté à la position (' . $formPlacementChamp['CoordonneesDonnees']->getData() . "), il remplace le champ " . $formPlacementChamp['IdChamp']->getData()->getNom() . " précédent.");
//                } else {
//                    $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formPlacementChamp['IdChamp']->getData()->getNom() .
//                            ' a été ajouté à la position (' . $formPlacementChamp['CoordonneesDonnees']->getData() . ").");
//                }
//
//                $sheet->setCellValue($formPlacementChamp['CoordonneesDonnees']->getData(), 'Données: ' . $formPlacementChamp['IdChamp']->getData()->getNom());
//                $writer->save($file);
//
//                return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('profil' => $profil, 'file' => $file));
//            }
//        }
//        ////////////////////////////////////////////////////////////////////////
//        // Traitement du formulaire des suppression de la position des champs
//        if ($request->request->has('formSuppresionPositionChamp')) {
//            $formSuppresionPositionChamp->handleRequest($request);
//
//            if ($formSuppresionPositionChamp->isValid()) {
//
//                $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($formSuppresionPositionChamp['IdChamp']->getData()->getIdChamp());
//
//                $modele = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->find($formSuppresionPositionChamp['IdChamp']->getData()->getIdSuivi());
//
//                $suivis = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByIdModele($modele->getId());
//
//                foreach ($suivis as $suivi) {
//
//                    $donneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findByIdSuivi($suivi->getId());
//
//                    foreach ($donneesSuivi as $donne) {
//                        $em->remove($donne);
//                    }
//                }
//
//                $sheet->setCellValue($formSuppresionPositionChamp['IdChamp']->getData()->getCoordonneesDonnees(), null);
//                $writer->save($file);
//
//                $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $champ->getNom() . ' a été supprimé de la position ' . $formSuppresionPositionChamp['IdChamp']->getData()->getCoordonneesDonnees());
//
//                $em->remove($formSuppresionPositionChamp['IdChamp']->getData());
//                $em->flush();
//
//                return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('profil' => $profil, 'file' => $file));
//            }
//        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig');
//                ,array(
//                    'filename' => $filename, 'file' => $file, 'formPlacementChamp' => $formPlacementChamp->createView(),
//                    'formSuppresionPositionChamp' => $formSuppresionPositionChamp->createView(), 'imagePDF' => $imagePDFLien));
    }

}
