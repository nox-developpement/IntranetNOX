<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\AdministrationBundle\Entity\ScriptMonitoring;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of MonitoringScheduledScripts
 *
 * @author t.besson
 */
class MonitoringScheduledScriptsController extends Controller {

    // Affiche la liste des scripts planifié avec leurs statuts et permet d'en ajouter d'autres.
    public function scheduledScriptsMonitoringPanelAction(Request $request) {
        // On récupère tous les monitorings existants.
        $em = $this->getDoctrine()->getManager();
        $monitoredScripts = $em->getRepository('NoxIntranetAdministrationBundle:ScriptMonitoring')->findBy(array(), array('scriptName' => 'ASC'));

        // Initialisation d'un nouveau monitoring.
        $newScriptMonitoring = new ScriptMonitoring();

        // Génération du formulaire d'ajout de monitoring.
        $formAddScriptBuilder = $this->get('form.factory')->createNamedBuilder('addScript', 'form', $newScriptMonitoring);
        $formAddScriptBuilder
                ->add('scriptName', TextType::class, array(
                    'label' => "Nom du script"
                ))
                ->add('iterationTime', IntegerType::class, array(
                    'attr' => array(
                        'min' => 1,
                        'max' => 48
                    ),
                    'label' => "Fréquence d'itération"
                ))
                ->add('add', SubmitType::class, array(
                    'label' => 'Ajouter'
        ));
        $formAddScript = $formAddScriptBuilder->getForm();

        $formAddScript->handleRequest($request);
        if ($formAddScript->isValid()) {
            // On exécute le script de récupération de la dernière date d'exécution du script et on place le résultat dans la variable $result.
            $result = array();
            exec('cscript //Nologo ../scripts/getScheduledTasks.vbs ' . $newScriptMonitoring->getScriptName(), $result);

            // Si le résultat du script est différent de '0' (false)...
            if ($result[0] !== '0') {
                // On sauvegarde l'entitée en base de données.
                $em->persist($newScriptMonitoring);
                $em->flush();

                // On affiche un message de confirmation et on redirige vers l'affichage du monitoring.
                $request->getSession()->getFlashBag()->add('notice', 'La surveillance du script ' . $newScriptMonitoring->getScriptName() . ' a été paramétré.');
                return $this->redirectToRoute('nox_intranet_monitoring_scheduled_scripts');
            }

            // On retourne un message d'erreur si le script n'est pas trouvé.
            $request->getSession()->getFlashBag()->add('noticeErreur', "Il n'existe pas de script avec ce nom.");
        }

        return $this->render('NoxIntranetAdministrationBundle:ScriptMonitoring:scriptMonitoring.html.twig', array('formAddScript' => $formAddScript->createView(), 'monitoredScripts' => $monitoredScripts));
    }

}
