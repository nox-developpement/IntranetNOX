<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * ScriptMonitoring
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AdministrationBundle\Entity\ScriptMonitoringRepository")
 */
class ScriptMonitoring {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=255, unique=true)
     */
    private $scriptName;

    /**
     * @var integer
     *
     * @ORM\Column(name="IterationTime", type="integer")
     */
    private $iterationTime;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set scriptName
     *
     * @param string $scriptName
     *
     * @return ScriptMonitoring
     */
    public function setScriptName($scriptName) {
        $this->scriptName = $scriptName;

        return $this;
    }

    /**
     * Get scriptName
     *
     * @return string
     */
    public function getScriptName() {
        return $this->scriptName;
    }

    /**
     * Set iterationTime
     *
     * @param \DateTime $iterationTime
     *
     * @return ScriptMonitoring
     */
    public function setIterationTime($iterationTime) {
        $this->iterationTime = $iterationTime;

        return $this;
    }

    /**
     * Get iterationTime
     *
     * @return \DateTime
     */
    public function getIterationTime() {
        return $this->iterationTime;
    }

    // Retourne un tableau contenant les informations de la dernière éxecution du script.
    public function getStatut() {
        // On récupére le nom du script et son temps d'itération.
        $scriptName = $this->scriptName;
        $iterationTime = $this->iterationTime;

        // On exécute le script de récupération de la dernière date d'éxecution du script et on place le résultat dans la variable $result.
        $result = array();
        exec('cscript //Nologo ../scripts/getScheduledTasks.vbs ' . $scriptName, $result);

        // On récupére la dernière date d'execution dans le résultat sous forme de chaîne.
        $lastIterationTime = $result[0];

        // On récupére le résultat de la dernière éxecution.
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

        // On ajoute la dernière date d'éxecution et le dernier code de retour au tableau.
        $statut['lastIteration'] = $lastIterationDateTime;
        $statut['lastTaskResult'] = $lastTaskResult;

        // On retourne le tableau de statut.
        return $statut;
    }

}
