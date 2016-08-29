<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DonneesSuivi
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\DonneesSuiviRepository")
 */
class DonneesSuivi {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSuivi", type="integer")
     */
    private $idSuivi;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string")
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="Version", type="float")
     */
    private $version;

    /**
     * @var array
     *
     * @ORM\Column(name="Donnees", type="array")
     */
    private $donnees;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idSuivi
     *
     * @param integer $idSuivi
     *
     * @return DonneesSuivi
     */
    public function setIdSuivi($idSuivi) {
        $this->idSuivi = $idSuivi;

        return $this;
    }

    /**
     * Get idSuivi
     *
     * @return integer
     */
    public function getIdSuivi() {
        return $this->idSuivi;
    }

    /**
     * Set version
     *
     * @param integer $version
     *
     * @return DonneesSuivi
     */
    public function setVersion($version) {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Set donnees
     *
     * @param array $donnees
     *
     * @return DonneesSuivi
     */
    public function setDonnees($donnees) {
        $this->donnees = $donnees;

        return $this;
    }

    /**
     * Get donnees
     *
     * @return array
     */
    public function getDonnees() {
        return $this->donnees;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return DonneesSuivi
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

}
