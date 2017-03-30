<?php

namespace NoxIntranet\AdministrationBundle\ServicesFunction;

use DateTime;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of newPHPClass
 *
 * @author t.besson
 */
class CheckScheduledTasksExecution {

    public function __construct(ContainerInterface $container) {
        $this->em = $container->get('doctrine')->getEntityManager();
        $this->templating = $container->get('templating');
        $this->mailer = $container->get('mailer');
    }

    public function checkScheduledTasksExecution($emailToAlert) {
        // On récupère tous les monitorings existants.
        $em = $this->em;
        $monitoredScripts = $em->getRepository('NoxIntranetAdministrationBundle:ScriptMonitoring')->findBy(array(), array('scriptName' => 'ASC'));

        // Pour chaques scripts...
        foreach ($monitoredScripts as $script) {
            // On récupére le statut du script.
            $statut = $this->getScriptStatus($script->getScriptName(), $script->getIterationTime());

            // Si il y a une erreur...
            if ($statut['Statut'] === 'Erreur') {
                $this->sendAlertMail($emailToAlert, $script, $statut); // On envoi un mail d'alert.
            }
        }
    }

    private function sendAlertMail($emailToAlert, $script, $statut) {
        $message = \Swift_Message::newInstance()
                ->setSubject("Alert: Erreur d'exécution du script " . $script->getScriptName())
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($emailToAlert)
                ->setBody(
                $this->templating->render(
                        'Emails/MonitoringScripts/alertScriptError.html.twig', array('script' => $script, 'statut' => $statut)
                ), 'text/html'
                )
        ;
        $this->mailer->send($message);
    }

    // Retourne un tableau contenant les informations de la dernière exécution du script.
    private function getScriptStatus($scriptName, $iterationTime) {
        // On exécute le script de récupération de la dernière date d'exécution du script et on place le résultat dans la variable $result.
        $result = array();
        exec('cscript //Nologo ./scripts/getScheduledTasks.vbs ' . $scriptName, $result);

        // On récupére la dernière date d'execution dans le résultat sous forme de chaîne.
        $lastIterationTime = $result[0];

        // On récupére le résultat de la dernière exécution.
        $lastTaskResult = $result[1];

        // On convertie la chaîne en DateTime.
        $lastIterationDateTime = DateTime::createFromFormat('j/m/Y H:i:s', $lastIterationTime);

        // On calcule le DateTime de la prochaine itération.
        $nextIterationDateTime = DateTime::createFromFormat('j/m/Y H:i:s', $lastIterationTime)->modify('+ ' . $iterationTime . ' hour');

        // On récupére le DateTime courant.
        $now = new DateTime();

        // Si le code de retour est égale à '267009'...
        if ($lastTaskResult === '267009') {
            $statut['Statut'] = 'En cours';
        }
        // Si le DateTime courant est plus petit que le DateTime de la prochaine itération ou si le code de retour est différent de 0...
        else if ($now > $nextIterationDateTime || $lastTaskResult !== '0') {
            $statut['Statut'] = 'Erreur';
        } else {
            $statut['Statut'] = 'OK';
        }

        // On ajoute la dernière date d'exécution et le dernier code de retour au tableau.
        $statut['lastIteration'] = $lastIterationDateTime;
        $statut['lastTaskResult'] = $lastTaskResult;

        // On retourne le tableau de statut.
        return $statut;
    }

}
