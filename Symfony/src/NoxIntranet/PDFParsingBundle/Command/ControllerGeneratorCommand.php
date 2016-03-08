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

class ControllerGeneratorCommand extends ContainerAwareCommand {

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
        $parsePDF = $this->getContainer()->get('noxintranet_pdfparsing.parsepdf');

        $pdfs = $parsePDF->parsePDF();

        $fileToDelete = glob('C:/wamp/www/Symfony/web/ImagePDF/*');
        foreach ($fileToDelete as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }

        if ($pdfs != null) {
            foreach ($pdfs as $pdf) {
                exec("convert \"C:/wamp/www" . $pdf['lien'] . "[0]\" -resize 200x200 -strip -interlace line \"C:/wamp/www/Symfony/web/ImagePDF/" . pathinfo($pdf['lien'], PATHINFO_FILENAME) . ".png\"");
                $output->writeln("Nom : " . $pdf['nom']);
                $output->writeln("Chemin : " . $pdf['lien']);
                $output->writeln("Date : " . $pdf['dateEnvoi']);
                $output->write("Propriétés : ");
                if (array_key_exists('proprietes', $pdf)) {
                    foreach ($pdf['proprietes'] as $propriete) {
                        $output->write($propriete . " ");
                    }
                }
            }
        }
    }

}
