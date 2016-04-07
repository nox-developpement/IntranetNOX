<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\RessourcesBundle\ExtractionGX;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

/**
 * Description of ExtractionGXListener
 *
 * @author t.besson
 */
class ExtractionGXListener {

    protected $extractionGX;
    protected $container;

    public function __construct(ExtractionGX $extractionGX, Container $container) {
        $this->extractionGX = $extractionGX;
        $this->container = $container;
    }

    public function processExtractionGX() {
        $request = $this->container->get('request');
        $currentController = $request->get('_controller');

        if ($currentController === 'NoxIntranet\RessourcesBundle\Controller\ExcelReadingController::creationSuiviChoixClientAction') {
            $this->extractionGX->extractionGXData();
        }
    }

}
