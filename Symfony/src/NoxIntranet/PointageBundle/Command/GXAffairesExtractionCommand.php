<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\PointageBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

// Commande qui xxtrait les affaires de la base de données SQL Server de GX et la copie dans la base de données de l'intranet.
class GXAffairesExtractionCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:gxaffairesextraction')
                ->setDescription('Extrait les affaires de la base de données SQL Server de GX et la copie dans la base de données de l\'intranet.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln('Mis à jours des affaires GX...');

        // On récupére le service.
        $gxAffairesExtractionService = $this->getContainer()->get('noxintranet_pointagebundle.gxaffairesextraction');

        // On execute la fonction d'extraction des affaires.
        $gxAffairesExtractionService->gxAffairesExtraction();

        $output->writeln('Mis à jours terminé.');
    }

}
