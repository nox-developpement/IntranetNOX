<?php

namespace NoxIntranet\SupportSIBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DemandeMaterielRevivalCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:demandeMaterielRevival')
                ->setDescription("Envoi un email de relance pour les demandes de matériels qui n'ont pas encore était validées.")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        // Récupération du service de rappel de demande de matériel.
        $demandeMaterielRevivalService = $this->getContainer()->get('nox_intranet_support_si.demande_materiel_revival');

        // Execution de la fonction de vérification des demandes de matériel.
        $demandeMaterielRevivalService->checkDemandeMaterielDuration();
    }

}
