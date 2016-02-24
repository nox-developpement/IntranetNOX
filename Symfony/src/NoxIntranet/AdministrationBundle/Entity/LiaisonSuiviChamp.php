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
     * @ORM\Column(name="Colonne", type="string", length=255)
     */
    private $colonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ligne", type="integer", length=255)
     */
    private $ligne;

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
     * Set colonne
     *
     * @param string $colonne
     *
     * @return LiaisonSuiviChamp
     */
    public function setColonne($colonne) {
        $this->colonne = $colonne;

        return $this;
    }

    /**
     * Get colonne
     *
     * @return string
     */
    public function getColonne() {
        return $this->colonne;
    }

    /**
     * Set ligne
     *
     * @param string $ligne
     *
     * @return LiaisonSuiviChamp
     */
    public function setLigne($ligne) {
        $this->ligne = $ligne;

        return $this;
    }

    /**
     * Get ligne
     *
     * @return string
     */
    public function getLigne() {
        return $this->ligne;
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

}
