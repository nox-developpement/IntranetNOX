<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use NoxIntranet\RessourcesBundle\Entity\Archive;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\AdministrationBundle\Controller\AdministrationArchivesController;

/**
 * Description of AdministrationArchives
 *
 * @author t.besson
 */
class AdministrationArchivesController extends Controller {

    public function clearFolder($folder) {
        // 1 ouvrir le dossier
        $dossier = opendir($folder);
        //2)Tant que le dossier est aps vide
        while ($fichier = readdir($dossier)) {
            //3) Sans compter . et ..
            if ($fichier != "." && $fichier != ".." && $fichier != "Deconnexion.bat") {
                //On selectionne le fichier et on le supprime
                $Vidage = $folder . $fichier;
                unlink($Vidage);
            }
        }
        //Fermer le dossier vide
        closedir($dossier);
    }

    public function creationBat() {
        
        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';
        
        $this->clearFolder($root . '/web/scriptsArchives/');

        $em = $this->getDoctrine()->getManager();

        $archives = $em->getRepository('NoxIntranetRessourcesBundle:Archive')->findBy(array(), array('agence' => 'ASC'));

        foreach ($archives as $archive2) {
            $scriptBat = fopen($root . '/web/scriptsArchives/' . $archive2->getAgence() . '.bat', 'a+');

            fputs($scriptBat, 'net use /persistent:no');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'net use r: /delete /y');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'net use r: ' . $archive2->getLien());

            fclose($scriptBat);
        }
    }

    public function administrationArchiveAction(Request $request) {
        
        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $em = $this->getDoctrine()->getManager();

        $archives = $em->getRepository('NoxIntranetRessourcesBundle:Archive')->findBy(array(), array('agence' => 'ASC'));

        $archive = new Archive();

        $form = $this->get('form.factory')->createBuilder('form', $archive)
                ->add('agence', 'text')
                ->add('lien', 'text')
                ->add('ajouter', 'submit')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $archiveAgence = $em->getRepository('NoxIntranetRessourcesBundle:Archive')->findByAgence($form['agence']->getData());
            $archiveLien = $em->getRepository('NoxIntranetRessourcesBundle:Archive')->findByLien($form['lien']->getData());

            if ($archiveAgence != null || $archiveLien != null) {
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Cette archive existe déjà !');
                return $this->render('NoxIntranetAdministrationBundle:AdministrationArchives:accueilarchives.html.twig', array('form' => $form->createView(), 'archives' => $archives));
            }

            $archive->setChemin($root . '/web/scriptsArchives/' . $form['agence']->getData() . '.bat');
            $em->persist($archive);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice'
                    , 'Archive bien enregistrée.');

            $archives = $em->getRepository('NoxIntranetRessourcesBundle:Archive')->findBy(array(), array('agence' => 'ASC'));

            $this->creationBat();

            return $this->redirectToRoute('nox_intranet_archives');
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationArchives:accueilarchives.html.twig', array('form' => $form->createView(), 'archives' => $archives));
    }

    public function suppressionArchiveAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $archive = $em->getRepository('NoxIntranetRessourcesBundle:Archive')->find($id);

        $em->remove($archive);

        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'L\'archive ' . $archive->getAgence() . ' a été supprimée.');

        $this->creationBat();

        return $this->redirectToRoute('nox_intranet_administration_archives');
    }

}
