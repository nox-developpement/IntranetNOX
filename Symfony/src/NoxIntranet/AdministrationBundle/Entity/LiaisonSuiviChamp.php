<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LiaisonSuiviChamp
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AdministrationBundle\Entity\LiaisonSuiviChampRepository")
 */
class LiaisonSuiviChamp {

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
     * @ORM\Column(name="IdSuivi", type="integer", length=255)
     */
    private $idSuivi;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdChamp", type="integer")
     */
    private $idChamp;

    /**
     * @var string
     *
     * @ORM\Column(name="CoordonneesLabel", type="string", length=255)
     */
    private $coordonneesLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="CoordonneesDonnees", type="string", length=255)
     */
    private $coordonneesDonnees;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idChamp
     *
     * @param integer $idChamp
     *
     * @return LiaisonSuiviChamp
     */
    public function setIdChamp($idChamp) {
        $this->idChamp = $idChamp;

        return $this;
    }

    /**
     * Get idChamp
     *
     * @return integer
     */
    public function getIdChamp() {
        return $this->idChamp;
    }

    /**
     * Set idSuivi
     *
     * @param integer $idSuivi
     *
     * @return LiaisonSuiviChamp
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
     * Set coordonneesLabel
     *
     * @param string $coordonneesLabel
     *
     * @return LiaisonSuiviChamp
     */
    public function setCoordonneesLabel($coordonneesLabel) {
        $this->coordonneesLabel = $coordonneesLabel;

        return $this;
    }

    /**
     * Get coordonneesLabel
     *
     * @return string
     */
    public function getCoordonneesLabel() {
        return $this->coordonneesLabel;
    }

    /**
     * Set coordonneesDonnees
     *
     * @param string $coordonneesDonnees
     *
     * @return LiaisonSuiviChamp
     */
    public function setCoordonneesDonnees($coordonneesDonnees) {
        $this->coordonneesDonnees = $coordonneesDonnees;

        return $this;
    }

    /**
     * Get coordonneesDonnees
     *
     * @return string
     */
    public function getCoordonneesDonnees() {
        return $this->coordonneesDonnees;
    }

}
