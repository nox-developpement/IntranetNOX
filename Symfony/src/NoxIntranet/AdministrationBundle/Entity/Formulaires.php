<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulaires
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AdministrationBundle\Entity\FormulairesRepository")
 */
class Formulaires {

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
     * @ORM\Column(name="Type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="Profil", type="string", length=255)
     */
    private $profil;

    /**
     * @var string
     *
     * @ORM\Column(name="AjoutDonnees", type="boolean", nullable=true)
     */
    private $ajoutDonnees;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Formulaires
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Formulaires
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set profil
     *
     * @param string $profil
     *
     * @return Formulaires
     */
    public function setProfil($profil) {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string
     */
    public function getProfil() {
        return $this->profil;
    }


    /**
     * Set ajoutDonnees
     *
     * @param boolean $ajoutDonnees
     *
     * @return Formulaires
     */
    public function setAjoutDonnees($ajoutDonnees)
    {
        $this->ajoutDonnees = $ajoutDonnees;

        return $this;
    }

    /**
     * Get ajoutDonnees
     *
     * @return boolean
     */
    public function getAjoutDonnees()
    {
        return $this->ajoutDonnees;
    }
}
