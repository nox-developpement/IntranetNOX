<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * MAJAuto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AdministrationBundle\Entity\MAJAutoRepository")
 * @UniqueEntity("name")
 */
class MAJAuto
{
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="commands", type="string", length=255)
     */
    private $commands;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastrun", type="datetime", nullable=true)
     */
    private $lastrun;

    /**
     * @var integer
     *
     * @ORM\Column(name="intervaltime", type="integer")
     */
    private $intervaltime;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return MAJAuto
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set commands
     *
     * @param string $commands
     *
     * @return MAJAuto
     */
    public function setCommands($commands)
    {
        $this->commands = $commands;

        return $this;
    }

    /**
     * Get commands
     *
     * @return string
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * Set lastrun
     *
     * @param \DateTime $lastrun
     *
     * @return MAJAuto
     */
    public function setLastrun($lastrun)
    {
        $this->lastrun = $lastrun;

        return $this;
    }

    /**
     * Get lastrun
     *
     * @return \DateTime
     */
    public function getLastrun()
    {
        return $this->lastrun;
    }

    /**
     * Set intervaltime
     *
     * @param integer $intervaltime
     *
     * @return MAJAuto
     */
    public function setIntervaltime($intervaltime)
    {
        $this->intervaltime = $intervaltime;

        return $this;
    }

    /**
     * Get intervaltime
     *
     * @return integer
     */
    public function getIntervaltime()
    {
        return $this->intervaltime;
    }
}
