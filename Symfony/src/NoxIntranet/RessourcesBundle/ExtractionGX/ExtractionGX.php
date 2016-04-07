<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExtractionGX
 *
 * @author t.besson
 */

namespace NoxIntranet\RessourcesBundle\ExtractionGX;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class ExtractionGX {

    protected $container;

    public function __construct(Container $container) {
        $this->container = $container;
    }

    public function extractionGXData() {
        $root = str_replace('\\', '/', $this->container->getParameter('kernel.root_dir')) . '/..';
        exec($root . '\scripts\Export_GX.bat');
    }

}
