<?php

namespace NoxIntranet\UserBundle\Command\MatriceCompetence;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class CompetencesUpdateMailingCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:competencesUpdateMailing')
                ->setDescription('Envoi un mail de demande de maj des compétence au N+1.')
                ->setHelp('Envoi un mail de demande de mise à jour des compétences aux N+1 des collaborateurs dont les compétences ne sont pas renseignées.');
    }

    protected function interact(InputInterface $input, OutputInterface $output) {
        
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln("Envoi des mails...");

        // On appel la fonction d'envoi de mails.
        $competences_update_mailing = $this->getContainer()->get('noxintranet_userbundle.competences_update_mailing');
        $competences_update_mailing->sendUpdateRequests();

        $output->writeln("Fin de l'envoi des mails.");
    }

}
