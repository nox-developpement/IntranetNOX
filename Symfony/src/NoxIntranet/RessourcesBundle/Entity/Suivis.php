<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivis
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\SuivisRepository")
 */
class Suivis {

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
     * @ORM\Column(name="NumeroGX", type="integer")
     */
    private $numeroGX;

    /**
     * @var string
     *
     * @ORM\Column(name="Profil", type="string", length=255)
     */
    private $profil;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdModele", type="integer", nullable=true)
     */
    private $idModele;

    /**
     * @var string
     *
     * @ORM\Column(name="Commune", type="string", length=255, nullable=true)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="Marche", type="string", length=255, nullable=true)
     */
    private $marche;

    /**
     * @var string
     *
     * @ORM\Column(name="NoCommande", type="string", length=255, nullable=true)
     */
    private $nocommande;

    /**
     * @var string
     *
     * @ORM\Column(name="NoClient", type="string", length=255, nullable=true)
     */
    private $noclient;

    /**
     * @var string
     *
     * @ORM\Column(name="Objet", type="string", length=255, nullable=true)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="NoINGEDIABEP", type="string", length=255, nullable=true)
     */
    private $noINGEDIABEP;

    /**
     * @var string
     *
     * @ORM\Column(name="Estimatif", type="string", length=255, nullable=true)
     */
    private $estimatif;

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
     * @return Suivis
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
     * Set agence
     *
     * @param string $agence
     *
     * @return Suivis
     */
    public function setAgence($agence) {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return string
     */
    public function getAgence() {
        return $this->agence;
    }

    /**
     * Set numeroGX
     *
     * @param string $numeroGX
     *
     * @return Suivis
     */
    public function setNumeroGX($numeroGX) {
        $this->numeroGX = $numeroGX;

        return $this;
    }

    /**
     * Get numeroGX
     *
     * @return string
     */
    public function getNumeroGX() {
        return $this->numeroGX;
    }

    /**
     * Set profil
     *
     * @param string $profil
     *
     * @return Suivis
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
     * Set statut
     *
     * @param string $statut
     *
     * @return Suivis
     */
    public function setStatut($statut) {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut() {
        return $this->statut;
    }

    /**
     * Set idModele
     *
     * @param integer $idModele
     *
     * @return Suivis
     */
    public function setIdModele($idModele) {
        $this->idModele = $idModele;

        return $this;
    }

    /**
     * Get idModele
     *
     * @return integer
     */
    public function getIdModele() {
        return $this->idModele;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return Suivis
     */
    public function setCommune($commune) {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune() {
        return $this->commune;
    }

    /**
     * Set marche
     *
     * @param string $marche
     *
     * @return Suivis
     */
    public function setMarche($marche) {
        $this->marche = $marche;

        return $this;
    }

    /**
     * Get marche
     *
     * @return string
     */
    public function getMarche() {
        return $this->marche;
    }

    /**
     * Set nocommande
     *
     * @param string $nocommande
     *
     * @return Suivis
     */
    public function setNocommande($nocommande) {
        $this->nocommande = $nocommande;

        return $this;
    }

    /**
     * Get nocommande
     *
     * @return string
     */
    public function getNocommande() {
        return $this->nocommande;
    }

    /**
     * Set noclient
     *
     * @param string $noclient
     *
     * @return Suivis
     */
    public function setNoclient($noclient) {
        $this->noclient = $noclient;

        return $this;
    }

    /**
     * Get noclient
     *
     * @return string
     */
    public function getNoclient() {
        return $this->noclient;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Suivis
     */
    public function setObjet($objet) {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet() {
        return $this->objet;
    }

    /**
     * Set noINGEDIABEP
     *
     * @param string $noINGEDIABEP
     *
     * @return Suivis
     */
    public function setNoINGEDIABEP($noINGEDIABEP) {
        $this->noINGEDIABEP = $noINGEDIABEP;

        return $this;
    }

    /**
     * Get noINGEDIABEP
     *
     * @return string
     */
    public function getNoINGEDIABEP() {
        return $this->noINGEDIABEP;
    }

    /**
     * Set estimatif
     *
     * @param string $estimatif
     *
     * @return Suivis
     */
    public function setEstimatif($estimatif) {
        $this->estimatif = $estimatif;

        return $this;
    }

    /**
     * Get estimatif
     *
     * @return string
     */
    public function getEstimatif() {
        return $this->estimatif;
    }

}
