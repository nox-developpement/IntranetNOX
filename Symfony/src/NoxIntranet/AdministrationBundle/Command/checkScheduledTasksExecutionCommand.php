<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class checkScheduledTasksExecutionCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:check_scheduled_tasks_execution')
                ->setDescription('Vérifie la bonne exécution des scripts planifiés.')
                ->setHelp('Cette commande permet de vérifier la bonne exécution des scripts planifiés et envoie une alert email dans le cas contraire.')
                ->addArgument("emailTo", InputArgument::REQUIRED, "L'email vers lequel envoyer les éventuels alert d'erreur d'exécution de script.")
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output) {
        
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        // Service de checking d'exécution des script.
        $monitoringScriptContainer = $this->getContainer()->get('noxintranet_administration.script_monitoring');

        $output->writeln("Vérification des scripts...");

        // Vérification de la bonne exécution des scripts.
        $monitoringScriptContainer->checkScriptsExecution($input->getArgument("emailTo"));

        $output->writeln("Vérification terminée.");
    }

}
