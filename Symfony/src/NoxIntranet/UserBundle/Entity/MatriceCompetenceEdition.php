<?php

namespace NoxIntranet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatriceCompetenceEdition
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\UserBundle\Entity\MatriceCompetenceEditionRepository")
 */
class MatriceCompetenceEdition
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
     * @ORM\Column(name="edition_date", type="datetime")
     */
    private $editionDate;


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
     * @return MatriceCompetenceEdition
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
     * Set editionDate
     *
     * @param \DateTime $editionDate
     *
     * @return MatriceCompetenceEdition
     */
    public function setEditionDate($editionDate)
    {
        $this->editionDate = $editionDate;

        return $this;
    }

    /**
     * Get editionDate
     *
     * @return \DateTime
     */
    public function getEditionDate()
    {
        return $this->editionDate;
    }
}

