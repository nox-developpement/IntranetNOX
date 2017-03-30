<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AccueilBundle\MessageAlert;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Doctrine\ORM\EntityManager;

/**
 * Description of MessageAlertListener
 *
 * @author t.besson
 */
class MessageAlertListener {

    // Notre processeur
    protected $messageAlertHTML;
    public $entityManager;

    public function __construct(MessageAlertHTML $messageAlertHTML, EntityManager $entityManager) {
        $this->messageAlertHTML = $messageAlertHTML;
        $this->em = $entityManager;
    }

    public function processMessage(FilterResponseEvent $event) {

        // On teste si la requête est bien la requête principale (et non une sous-requête)
        if (!$event->isMasterRequest()) {
            return;
        }

        // Si le cookie de message déjà vu est présent on ne fait rien.
        if (filter_input(INPUT_COOKIE, 'timerMessageAlert') === 'true') {
            return;
        }

        // On récupère le message d'alerte.
        $em = $this->em;
        $messageAlert = $em->getRepository('NoxIntranetAccueilBundle:MessageAlert')->findOneBySection('Accueil');

        // Si le message d'alert n'existe pas ou si il n'est pas activé on ne fait rien.
        if (empty($messageAlert) || $messageAlert->getStatus() !== true) {
            return;
        }

        // On utilise notre MessageAlertHTML
        $response = $this->messageAlertHTML->displayMessageAlert($event->getResponse(), $messageAlert->getMessage());
        // On met à jour la réponse avec la nouvelle valeur
        $event->setResponse($response);
    }

}
