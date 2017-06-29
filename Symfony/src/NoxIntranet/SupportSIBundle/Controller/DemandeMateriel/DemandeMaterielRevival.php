<?php

namespace NoxIntranet\SupportSIBundle\Controller\DemandeMateriel;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use DateTime;
use DateInterval;

class DemandeMaterielRevival {

    /**
     * 
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em, ContainerInterface $container) {
        $this->em = $em;
        $this->container = $container;
    }

    /**
     * 
     * Vérifie la date de dernière intervention sur une demande de matériel et envoi un rappel au valideur si la dernière intervention date de plus de 7 jours.
     * 
     */
    public function checkDemandeMaterielDuration() {
        // Récupération des demandes de matériel en cours.
        $em = $this->em;
        $demandesMateriel = $em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findAll();

        // Date actuel.
        $now = new DateTime();

        // Pour chaques demandes de matériel...
        foreach ($demandesMateriel as $demande) {
            // On ajoute 7 jours à la date de création/actualisation de la demande.
            $revivalDate = $demande->getDate()->add(new DateInterval("P7D"));

            // Si la demande date de plus de 7 jours...
            if ($revivalDate < $now) {
                // On met à jour la date de demande.
                $demande->setDate($now);

                // On envoi un mail de rappel au valideur.
                $this->sendRevivalMail($demande);
            }
        }

        // Sauvegarde des changements en base de données.
        $em->flush();
    }

    /**
     * 
     * Envoi un mail de rappel de validation de demande de matériel en fonction du status de la demande.
     * 
     * @param DemandeMateriel $demande Entitée de demande de matériel.
     */
    private function sendRevivalMail($demande) {
        $em = $this->em;
        $container = $this->container;

        // Données de la demande.
        $demande_message = $demande->getMessage();

        // Si le status de la demande est la validation par la DSI.
        if ($demande->getStatus() === "DSI") {
            // Récupère l'adresse du helpdesk.
            $adresseHelpdesk = $em->getRepository('NoxIntranetAdministrationBundle:Helpdesk')->findOneBySection('Helpdesk')->getEmail();

            // Génére l'email de demande pour la DSI et l'envoie.
            $message = \Swift_Message::newInstance()
                    ->setSubject('Rappel: Demande de matériel/logiciel ' . $demande_message['demandeur'])
                    ->setFrom('intranet@groupe-nox.com')
                    ->setTo($adresseHelpdesk)
                    ->setBody(
                    $container->get('templating')->render(
                            'Emails/demandeMaterielDSI.html.twig', array('materielCheckbox' => $demande_message['materielCheckbox'], 'materiel' => $demande_message['materiel'], 'logicielCheckbox' => $demande_message['logicielCheckbox'], 'demandeur' => $demande_message['demandeur'], 'agence' => $demande_message['agence'],
                        'numOrdre' => $demande_message['numOrdre'], 'logiciel' => $demande_message['logiciel'], 'date' => $demande_message['date'], 'cle' => $demande_message['cle'], 'raison' => $demande_message['raison']
                            )
                    ), 'text/html'
            );
            $container->get('mailer')->send($message);

            echo "Envoi de la demande de " . $demande_message['demandeur'] . " à " . $adresseHelpdesk . " => OK\n";
        }
        // Si le status de la demande est la validation par le supérieur hiérarchique.
        else if ($demande->getStatus() === "SupérieurHiérarchique") {
            // Mail du supérieur hiérachique à qui le rappel est envoyé.
            $mailSuperieur = $demande->getMailSuperieur();

            // On envoi un email au supérieur hiérachique pour demander la confirmation d'achat.
            $messageHelpdesk = \Swift_Message::newInstance()
                    ->setSubject('Rappel: Demande de matériel/logiciel ' . $demande_message['demandeur'])
                    ->setFrom('intranet@groupe-nox.com')
                    ->setTo($mailSuperieur)
                    ->setBody(
                    $container->get('templating')->render(
                            'Emails/demandeMateriel.html.twig', array('donneesMessage' => $demande_message, 'prixEstime' => !empty($demande_message['prixEstime']) ? $demande_message['prixEstime'] : null, 'cle' => $demande->getCleDemande())
                    ), 'text/html'
            );
            $container->get('mailer')->send($messageHelpdesk);

            echo "Envoi de la demande de " . $demande_message['demandeur'] . " à " . $mailSuperieur . " => OK\n";
        }
    }

}
