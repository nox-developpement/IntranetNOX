<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AccueilBundle\CompteurVues;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

/**
 * Description of CompteurVuesListener
 *
 * @author t.besson
 */
class CompteurVuesListener {

    protected $compteurVuesIncrementation;
    protected $container;

    public function __construct(CompteurVuesIncrementation $compteurVuesIncrementation, Container $container) {
        $this->compteurVuesIncrementation = $compteurVuesIncrementation;
        $this->container = $container;
    }

    public function processCompteurVues() {
        $request = $this->container->get('request');
        $currentController = $request->get('_controller');

        $cookieCompteur = filter_input(INPUT_COOKIE, 'visite_intranet');

        if ($currentController !== 'NoxIntranet\AccueilBundle\Controller\AccueilController::majCommunicationAction' && (!isset($cookieCompteur) || $cookieCompteur === null)) {
            $this->compteurVuesIncrementation->incrementationCompteurVues();
        }
    }

}
