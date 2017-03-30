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

/**
 * Description of checkScheduletTasksExecution
 *
 * @author t.besson
 */
class checkScheduledTasksExecutionCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:check_scheduled_tasks_execution')
                ->setDescription('Vérifie la bonne exécution des scripts planifiés.')
                ->setHelp('Cette commande permet de vérifier la bonne exécution des scripts planifiés et envoie une alert email dans le cas contraire.')
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output) {
        
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $monitoringScriptContainer = $this->getContainer()->get('noxintranet_administration.script_monitoring');
        $monitoringScriptContainer->checkScheduledTasksExecution('t.besson@groupe-nox.com');

        $output->writeln('Hello World');
    }

}
