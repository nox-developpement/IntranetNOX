<?php

namespace NoxIntranet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recrutement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\UserBundle\Entity\RecrutementRepository")
 */
class Recrutement
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=255)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement", type="string", length=255)
     */
    private $etablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="contrat", type="string", length=255)
     */
    private $contrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_embauche", type="date")
     */
    private $dateEmbauche;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_profile", type="text", nullable=true)
     */
    private $commentaireProfile;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Recrutement
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Recrutement
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Recrutement
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return Recrutement
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     *
     * @return Recrutement
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set contrat
     *
     * @param string $contrat
     *
     * @return Recrutement
     */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return string
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set dateEmbauche
     *
     * @param \DateTime $dateEmbauche
     *
     * @return Recrutement
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get dateEmbauche
     *
     * @return \DateTime
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set commentaireProfile
     *
     * @param string $commentaireProfile
     *
     * @return Recrutement
     */
    public function setCommentaireProfile($commentaireProfile)
    {
        $this->commentaireProfile = $commentaireProfile;

        return $this;
    }

    /**
     * Get commentaireProfile
     *
     * @return string
     */
    public function getCommentaireProfile()
    {
        return $this->commentaireProfile;
    }
}
