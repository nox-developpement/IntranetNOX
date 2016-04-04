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

namespace NoxIntranet\AccueilBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class ControllerGeneratorCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:accueilrandomimage')
                ->setDescription('Choisi une image au hasard parmis celle de la banque d\'images et la place dans l\'édito de la page d\'accueil.')
                ->setHelp('Place une image aléatoire sur la page d\'accueil.')
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output) {

        $output->writeln(array(
            'Selection d\'une image au hasard.'
        ));
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

        $imageAleatoire = $this->getContainer()->get('noxintranet_accueil.accueilrandomimage');

        $imageAleatoire->selectAndReplaceRandomImage();
    }

}
