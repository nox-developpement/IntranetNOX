<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerGeneratorCommand
 *
 * @author t.lassiaz
 */

namespace NoxIntranet\MajDBBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class ControllerGeneratorCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:majdb')
                ->setDescription('Met à jour la base de données utilisateurs.')
                ->setHelp('Cette commande met à jours la base de données utilisateur en ajoutant les utilisateurs non présent en base de donnée à partir du fichier users.csv présent dans la racine du dossier Symfony.')
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output) {

        $output->writeln(array(
            'Mise à jour de la base de données utilisateur en cours...'
        ));
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $majDB = $this->getContainer()->get('noxintranet_administration.majuserdb');

        $listeUsers = $majDB->majUserDB();

        $newUsers = $listeUsers['new'];

        $output->writeln("<div id='newUsers'>");

        $output->writeln("<h3>");

        $output->writeln("Utilisateurs ajouté");

        $output->writeln("</h3>");

        $output->writeln("<p>");

        if ($newUsers != null) {
            foreach ($newUsers as $user) {
                $output->writeln($user);
                $output->writeln("<br>");
            }
        }


        $output->writeln("</p>");

        $output->writeln("</div>");

        $deleteUsers = $listeUsers['delete'];

        $output->writeln("<div id='deleteUsers'>");

        $output->writeln("<h3>");

        $output->writeln("Utilisateurs supprimé");

        $output->writeln("</h3>");

        $output->writeln("<p>");


        if ($deleteUsers != null) {
            foreach ($deleteUsers as $user) {
                $output->writeln($user);
                $output->writeln("<br>");
            }
        }


        $output->writeln("</p>");

        $output->writeln("</div>");
    }

}
