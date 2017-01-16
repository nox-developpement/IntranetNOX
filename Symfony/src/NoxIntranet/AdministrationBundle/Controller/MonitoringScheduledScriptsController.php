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
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

/**
 * Description of MonitoringScheduledScripts
 *
 * @author t.besson
 */
class MonitoringScheduledScriptsController extends Controller {

    public function scheduledScriptsMonitoringPanelAction() {
        // On récupère tous les monitorings existants.
        $em = $this->getDoctrine()->getManager();
        $monitoredScripts = $em->getRepository('NoxIntranetAdministrationBundle:ScriptMonitoring')->findAll();

        // Initialisation d'un nouveau monitoring.
        $newScriptMonitoring = new ScriptMonitoring();
        
        // Génération du formulaire d'ajout de monitoring.
        $formAddScriptBuilder = $this->get('form.factory')->createNamedBuilder('addScript', 'form', $newScriptMonitoring);
        $formAddScriptBuilder
                ->add('scriptName', TextType::class, array(
                    'label' => "Nom du script"
                ))
                ->add('iterationTime', TimeType::class, array(
                    'hours' => range(1, 48),
                    'with_minutes' => false,
                    'label' => "Durée d'itération"
                ))
                ->add('add', SubmitType::class, array(
                    'label' => 'Ajouter'
        ));
        $formAddScript = $formAddScriptBuilder->getForm();
        
        

        return $this->render('NoxIntranetAdministrationBundle:ScriptMonitoring:scriptMonitoring.html.twig', array('formAddScript' => $formAddScript->createView(), 'monitoredScripts' => $monitoredScripts));
    }

}
