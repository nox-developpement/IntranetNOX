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

namespace NoxIntranet\PDFParsingBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class PDFParsingCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:pdfparsing')
                ->setDescription('Parcour les PDF et places leurs metadatas en base de données.')
                ->setHelp('Mise à jours des metadatas des PDF.')
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output) {
        $output->writeln(array(
            'Parcours des PDF et extraction des metadatas en base de données.'
        ));
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        // Récupération du service de parsing des fichiers PDF.
        $parsePDF = $this->getContainer()->get('noxintranet_pdfparsing.parsepdf');

        // Appel de la fonction de parsing des PDF.
        $parsePDF->parsePDF();
    }

}
