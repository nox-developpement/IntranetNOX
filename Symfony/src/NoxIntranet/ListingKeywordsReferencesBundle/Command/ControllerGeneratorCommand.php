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

namespace NoxIntranet\ListingKeywordsReferencesBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class ControllerGeneratorCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:listingkeywordsreferences')
                ->setDescription('Ecris en base de donnée le nombre d\'itérations de chaque mot clé des pdf de la section Références.')
                ->setHelp('Cette commande met à jour les mots clé de la section Références.')
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output) {

        $output->writeln(array(
            'Vérification du nombre d\'itérations des mots clés des pdf de la section Références.'
        ));
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $getKeywordsReferences = $this->getContainer()->get('noxintranet_ressources.putkeywordsnumber');

        $keywordsListe = $getKeywordsReferences->putKeywordsNumber();

        foreach ($keywordsListe as $nom => $nombre) {
            $output->write($nom . " : ");
            $output->writeln($nombre);
        }
    }

}
