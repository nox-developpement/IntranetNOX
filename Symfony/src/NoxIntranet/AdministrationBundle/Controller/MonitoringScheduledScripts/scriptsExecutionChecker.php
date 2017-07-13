<?php

namespace NoxIntranet\AdministrationBundle\Controller\MonitoringScheduledScripts;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;

class scriptsExecutionChecker {

    protected $em;
    protected $container;

    public function __construct(EntityManager $em, Container $container) {
        $this->em = $em;
        $this->container = $container;
    }

    /**
     * 
     * Vérifie la bonne exécution des scripts planifiés et envoi un mail d'alerte dans le cas contraire.
     * 
     * @param String $emailTo L'email du destinataire de l'alerte.
     */
    public function checkScriptsExecution() {
        // Racine du serveur.
        $server_root = $this->container->get('kernel')->getRootDir();

        // On récupére tous les scripts monitorés.
        $scriptsMonitoring = $this->em->getRepository("NoxIntranetAdministrationBundle:ScriptMonitoring")->findAll();

        // Pour chaques scripts...
        foreach ($scriptsMonitoring as $script) {
            // On récupére son statut.
            $statuts = $script->getStatut($server_root);

            // Si l'execution du script à rencontré une erreur...
            if ($statuts['Statut'] === "Erreur") {
                // On envoi un mail d'alerte.
                $this->sendScriptErrorAlert($script);
            }
        }
    }

    /**
     * 
     * Envoi un mail qui indique qu'un script ne s'exécute pas correctement.
     * 
     * @param ScriptMonitoring $script L'entité de monitoring sur script dont l'exécution a échoué.
     * @param String $emailTo L'email du destinataire de l'alerte.
     */
    private function sendScriptErrorAlert($script) {
        // Adresse mail de l'administrateur de l'intranet.
        $intranet_administrator_mail = $this->container()->getParameter("intranet_admin_email");

        echo "Envoi d'une alert pour le script " . $script->getScriptname() . " à " . $intranet_administrator_mail . ".\n";

        // Préparation du mail.
        $message = new \Swift_Message("Erreur d'exécution du script: " . $script->getScriptName());
        $message
                ->setFrom(array('intranet@groupe-nox.com' => "Intranet Script Monitoring"))
                ->setTo($intranet_administrator_mail)
                ->setBody(
                        $this->container->get("templating")->render(
                                'Emails/MonitoringScripts/scriptErrorAlert.html.twig', array('script' => $script)
                        ), 'text/html'
                )
        ;

        // Envoi du mail.
        $this->container->get('mailer')->send($message);
    }

}
