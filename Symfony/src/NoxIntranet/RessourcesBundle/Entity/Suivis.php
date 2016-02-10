<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivis
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\SuivisRepository")
 */
class Suivis
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Agence", type="string", length=255)
     */
    private $agence;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumeroGX", type="integer", length=255)
     */
    private $numeroGX;

    /**
     * @var string
     *
     * @ORM\Column(name="Profil", type="string", length=255)
     */
    private $profil;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Suivis
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set agence
     *
     * @param string $agence
     *
     * @return Suivis
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
     * Set numeroGX
     *
     * @param string $numeroGX
     *
     * @return Suivis
     */
    public function setNumeroGX($numeroGX)
    {
        $this->numeroGX = $numeroGX;

        return $this;
    }

    /**
     * Get numeroGX
     *
     * @return string
     */
    public function getNumeroGX()
    {
        return $this->numeroGX;
    }

    /**
     * Set profil
     *
     * @param string $profil
     *
     * @return Suivis
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
    }
}

