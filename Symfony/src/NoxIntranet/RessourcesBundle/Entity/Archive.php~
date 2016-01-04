<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archive
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\ArchiveRepository")
 */
class Archive
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
     * @ORM\Column(name="agence", type="string", length=255)
     */
    private $agence;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;
    
    /**
     * @var string
     *
     * @ORM\Column(name="chemin", type="string", length=255)
     */
    private $chemin;


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
     * Set agence
     *
     * @param string $agence
     *
     * @return Archive
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return string
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return Archive
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Archive
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }
}
