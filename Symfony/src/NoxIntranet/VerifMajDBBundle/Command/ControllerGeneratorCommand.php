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

namespace NoxIntranet\VerifMajDBBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class ControllerGeneratorCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:verifmajdb')
                ->setDescription('Renvoi la liste des mise à jour la base de données utilisateurs.')
                ->setHelp('Cette commande indique les mise à jour utilisateur disponible pour la base de données.')
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output) {

        $output->writeln(array(
            'Vérification des mise à jours utilisateur dispnible...'
        ));
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $majDB = $this->getContainer()->get('noxintranet_administration.majuserdb');

        $listeUsers = $majDB->verifMajUserDB();

        $newUsers = $listeUsers['new'];

        $output->writeln("<div id='newUsers'>");

        $output->writeln("<h3>");

        $output->writeln("Utilisateurs à ajouter");

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

        $output->writeln("Utilisateurs à supprimer");

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