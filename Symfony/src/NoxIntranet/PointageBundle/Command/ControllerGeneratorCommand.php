<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerGeneratorCommand
 *
 * @author t.besson
 */

namespace NoxIntranet\PointageBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class ControllerGeneratorCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:rhhierarchieextraction')
                ->setDescription('Lis le PDF de hiérarchie de la RH et extrait les informations en base de données.')
                ->setHelp('Récupère la hiérarchie de la RH.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

        $parseRH = $this->getContainer()->get('noxintranet_pointagebundle.extractrhdata');

        $parseRH->extractRHHierarchieData();

        $output->writeln('La base de données hiérarchique de la RH a été mise à jours.');
    }

}
