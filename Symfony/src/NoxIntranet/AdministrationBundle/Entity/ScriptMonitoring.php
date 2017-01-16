<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var \DateTime
     *
     * @ORM\Column(name="IterationTime", type="time")
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

}
