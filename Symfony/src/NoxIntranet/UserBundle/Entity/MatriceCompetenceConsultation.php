<?php

namespace NoxIntranet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatriceCompetenceConsultation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\UserBundle\Entity\MatriceCompetenceConsultationRepository")
 */
class MatriceCompetenceConsultation
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
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="consultation_date", type="datetime")
     */
    private $consultationDate;


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
     * Set username
     *
     * @param string $username
     *
     * @return MatriceCompetenceConsultation
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set consultationDate
     *
     * @param \DateTime $consultationDate
     *
     * @return MatriceCompetenceConsultation
     */
    public function setConsultationDate($consultationDate)
    {
        $this->consultationDate = $consultationDate;

        return $this;
    }

    /**
     * Get consultationDate
     *
     * @return \DateTime
     */
    public function getConsultationDate()
    {
        return $this->consultationDate;
    }
}

