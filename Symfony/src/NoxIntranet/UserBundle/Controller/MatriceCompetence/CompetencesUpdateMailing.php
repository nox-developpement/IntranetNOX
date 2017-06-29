<?php

namespace NoxIntranet\UserBundle\Controller\MatriceCompetence;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;

class CompetencesUpdateMailing {

    public function __construct(ContainerInterface $container, EntityManagerInterface $em) {
        $this->container = $container;
        $this->em = $em;
    }

    /**
     * Liste les collaborateur dont la matrice de compétence n'est pas remplis et envoi un mail de demande de remplissage à leur N+1.
     */
    public function sendUpdateRequests() {
        $em = $this->em;
        $container = $this->container;

        // On récupére l'ensemble des collaborateurs.
        $collaborateurs = $em->getRepository('NoxIntranetUserBundle:User')->findAll();

        // Initialisation du tableau d'association des collaborateurs à leur N+1.
        $n1_collaborateurs_list = array();

        // Pour chaques collaborateurs...
        foreach ($collaborateurs as $collaborateur) {
            // On récupére la hiérarchie et la matrice de compétence associées.
            $hierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($collaborateur->getUsername());
            $matrice_competence = $em->getRepository('NoxIntranetUserBundle:MatriceCompetence')->findOneByUser($collaborateur);

            // Si il existe une hiérarchie et que la matrice de compétence est inexistante ou imcomplète...
            if (!empty($hierarchy) && (empty($matrice_competence) || $matrice_competence->getCompetencePrincipale() === null)) {
                // On récupére le N+1.
                $n1 = $container->get('noxintranet.hierarchy_helper')->getUserEntityFromCanonicalName($hierarchy->getDA());

                // Si il existe un N+1...
                if (!empty($n1)) {
                    // On ajoute le collaborateur à la liste du N+1;
                    $n1_collaborateurs_list[$n1->getUsername()]['N+1'] = $n1;
                    $n1_collaborateurs_list[$n1->getUsername()]['Collaborateurs'][] = $collaborateur;
                }
            }
        }

        // Pour chaques N+1...
        foreach ($n1_collaborateurs_list as $n1) {
            // On envoi un mail de demande de complétion des matrices des collaborateurs.
            $this->sendUpdateRequestMail($n1);
        }
    }

    /**
     * 
     * Envoi un mail au N+1 contenant la liste des collaborateurs dont la matrice de compétence doit être remplie.
     * 
     * @param Array $n1_list Tableau contenant les entitées des collaborateur et l'entitée du N+1.
     */
    private function sendUpdateRequestMail($n1_list) {
        $container = $this->container;

        // Génération du mail du N+1;
        $n1_mail = $n1_list['N+1']->getUsername() . "@groupe-nox.com";

        // Génération du mail.
        $message = new \Swift_Message('Matrice de compétences');
        $message
                ->setFrom('intranet@groupe-nox.com')
                ->setTo($n1_mail)
                ->setBody(
                        $container->get('templating')->render(
                                'Emails/MatriceCompetences/competences_update_request.html.twig', array('N1' => $n1_list['N+1'], 'Collaborateurs' => $n1_list['Collaborateurs'])
                        ), 'text/html'
                )
        ;

        echo "Envoi d'une demande à " . $n1_mail;

        // Envoi du mail.
        $container->get('mailer')->send($message);

        echo " => OK.\n";
    }

    /**
     * 
     * Envoi un mail de demande de complétion des compétences au N+1 du collaborateur passé en paramêtre. 
     * 
     * @param UserEntity $user Entitée du collaborateur dont les compétences doivent être complétés.
     * @param UserEntity $n1 Entitée du N+1 du collaborateur.
     */
    public function sendNewUserUpdateRequestMail($user, $n1) {
        $container = $this->container;

        // Génération du mail du N+1;
        $n1_mail = $n1->getUsername() . "@groupe-nox.com";

        // Génération du mail.
        $message = new \Swift_Message('Matrice de compétences');
        $message
                ->setFrom(array("intranet@groupe-nox.com" => "Direction des Ressources Humaines"))
                ->setTo($n1_mail)
                ->setBody(
                        $container->get('templating')->render(
                                'Emails/MatriceCompetences/new_user_update_competences_request.html.twig', array('user' => $user)
                        ), 'text/html'
                )
        ;

        echo "Envoi d'une demande à " . $n1_mail;

        // Envoi du mail.
        $container->get('mailer')->send($message);

        echo " => OK.\n";
    }

}
