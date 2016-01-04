<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use NoxIntranet\RessourcesBundle\Entity\Imprimantes;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of AdministrationImprimantesController
 *
 * @author t.besson
 */
class AdministrationImprimantesController extends Controller {

    public function administrationImprimantesAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $imprimantes = $em->getRepository('NoxIntranetRessourcesBundle:Imprimantes')->findBy(array(), array('agence' => 'ASC'));

        $imprimante = new Imprimantes();

        $form = $this->get('form.factory')->createBuilder('form', $imprimante)
                ->add('agence', 'text')
                ->add('nom', 'text')
                ->add('type', 'choice', array(
                    'choices' => array('imp' => 'Imprimante', 'tra' => 'Traceur'),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('nomReseau', 'text')
                ->add('ip', 'text')
                ->add('cheminPilote', 'text')
                ->add('fileLPR', 'text')
                ->add('ajouter', 'submit')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $imprimantesAgence = $em->getRepository('NoxIntranetRessourcesBundle:Imprimantes')->findByAgence($form['agence']->getData());
            $imprimanteNom = $form['nom']->getData();

            foreach ($imprimantesAgence as $imprimanteAgence) {
                if ($imprimanteAgence != null && $imprimanteAgence->getNom() == $imprimanteNom) {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Les drivers sont déjà disponible pour cette imprimante !');
                    return $this->render('NoxIntranetAdministrationBundle:AdministrationImprimantes:administrationimprimantes.html.twig', array('form' => $form->createView(), 'imprimantes' => $imprimantes));
                }
            }

            if ($form['type']->getData() != 'imp') {
                if ($form['nomReseau']->getData() != null && $form['ip']->getData() != null && $form['cheminPilote']->getData() != null && $form['fileLPR']->getData() != null) {

                    $imprimante->setChemin('C:/wamp/www/Symfony/web/scriptsImprimantes/' . $form['nom']->getData() . '(' . $form['agence']->getData() . ').cmd');
                    $em->persist($imprimante);
                    $em->flush();
                    $this->creationBat();
                } else {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Veuillez remplir tous les champs !');
                    return $this->render('NoxIntranetAdministrationBundle:AdministrationImprimantes:administrationimprimantes.html.twig', array('form' => $form->createView(), 'imprimantes' => $imprimantes));
                }
            } else {
                $imprimante->setChemin('C:/wamp/www/Symfony/web/scriptsImprimantes/PrinterDriverInstaller.exe');
            }

            $request->getSession()->getFlashBag()->add('notice', 'Imprimante bien enregistrée.');

            return $this->redirectToRoute('nox_intranet_imprimantes');
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationImprimantes:administrationimprimantes.html.twig', array('form' => $form->createView(), 'imprimantes' => $imprimantes));
    }

    public function suppressionImprimanteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $imprimante = $em->getRepository('NoxIntranetRessourcesBundle:Imprimantes')->find($id);

        if ($imprimante->getType() == 'tra') {
            unlink($imprimante->getChemin());
        }

        $em->remove($imprimante);

        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'L\'imprimante ' . $imprimante->getNom() . ' a été supprimée.');

        return $this->redirectToRoute('nox_intranet_administration_imprimantes');
    }

    public function clearFolder($folder) {
        // 1 ouvrir le dossier
        $dossier = opendir($folder);
        //2)Tant que le dossier est aps vide
        while ($fichier = readdir($dossier)) {
            //3) Sans compter . et ..
            if ($fichier != "." && $fichier != ".." && $fichier != "PrinterDriverInstaller.exe") {
                //On selectionne le fichier et on le supprime
                $Vidage = $folder . $fichier;
                unlink($Vidage);
            }
        }
        //Fermer le dossier vide
        closedir($dossier);
    }

    public function creationBat() {
        $this->clearFolder('C:/wamp/www/Symfony/web/scriptsImprimantes/');

        $em = $this->getDoctrine()->getManager();

        $imprimantes = $em->getRepository('NoxIntranetRessourcesBundle:Imprimantes')->findBy(array('type' => 'tra'), array('agence' => 'ASC'));

        foreach ($imprimantes as $imprimante2) {

            $ip = $imprimante2->getIp();
            $nom = $imprimante2->getNom();
            $nomReseau = $imprimante2->getNomReseau();
            $pilote = $imprimante2->getCheminPilote();
            $lpr = $imprimante2->getFileLPR();

            $scriptBat = fopen('C:/wamp/www/Symfony/web/scriptsImprimantes/' . $imprimante2->getNom() . '(' . $imprimante2->getAgence() . ').cmd', 'a+');

            fputs($scriptBat, '@echo off');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'set AdresseIP=' . $ip);
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'set Imprimante=' . $nom);
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'set Nom=' . $nomReseau);
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'set Pilote=' . $pilote);
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'set fileLPR=' . $lpr);
            fputs($scriptBat, "\n");
            fputs($scriptBat, "echo Creation d'un port d'impression TCP/IP a l'adresse %AdresseIP%");
            fputs($scriptBat, "\n");
            fputs($scriptBat, "set CLEPORT='HKLM\System\CurrentControlSet\Control\Print\Monitors\Standard TCP/IP Port\Ports'");
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v Protocol /t REG_DWORD /d 0x00000002 /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v Version /t REG_DWORD /d 0x00000001 /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v HostName /t REG_SZ /d "" /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v IPAddress /t REG_SZ /d %AdresseIP% /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v PortMonMibPortIndex /t REG_DWORD /d 0x00000001 /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v HWAddress /t REG_SZ /d "" /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v PortNumber /t REG_DWORD /d 0x00000203 /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v "SNMP Community" /t REG_SZ /d Public /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v "SNMP Enabled" /t REG_DWORD /d 0x00000000 /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v "SNMP Index" /t REG_DWORD /d 0x00000001 /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v Queue /t REG_SZ /d %fileLPR% /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'REG ADD %CLEPORT%\TCP_%AdresseIP% /v "Double Spool" /t REG_DWORD /d 0x00000000 /f > NUL');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'net stop spooler');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'net start spooler');
            fputs($scriptBat, "\n");
            fputs($scriptBat, "echo Installation de l'imprimante %Nom% sur le port TCP_%AdresseIP%. Veuillez patienter...");
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'rundll32 printui.dll,PrintUIEntry /if /f "%Pilote%" /b "%Nom%" /r TCP_%AdresseIP% /m "%Imprimante%"');
            fclose($scriptBat);
        }
    }

}
