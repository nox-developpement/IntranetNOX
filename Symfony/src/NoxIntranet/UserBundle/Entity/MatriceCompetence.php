<?php

namespace NoxIntranet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * MatriceCompetence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\UserBundle\Entity\MatriceCompetenceRepository")
 */
class MatriceCompetence implements JsonSerializable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="NoxIntranet\UserBundle\Entity\User", inversedBy="matriceCompetence", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="Societe", type="string", length=255)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="Etablissement", type="string", length=255)
     */
    private $etablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="Matricule", type="string", length=255)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Anciennete", type="date", nullable=true)
     */
    private $dateAnciennete;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut", type="string", length=255, nullable=true)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="Poste", type="string", length=255, nullable=true)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="Competence_Principale", type="string", length=255, nullable=true)
     */
    private $competencePrincipale;

    /**
     * @var array
     *
     * @ORM\Column(name="Competences_Secondaires", type="array", nullable=true)
     */
    private $competencesSecondaires;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return MatriceCompetence
     */
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Set dateAnciennete
     *
     * @param \DateTime $dateAnciennete
     *
     * @return MatriceCompetence
     */
    public function setDateAnciennete($dateAnciennete) {
        $this->dateAnciennete = $dateAnciennete;

        return $this;
    }

    /**
     * Get dateAnciennete
     *
     * @return \DateTime
     */
    public function getDateAnciennete() {
        return $this->dateAnciennete;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return MatriceCompetence
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
     * Set poste
     *
     * @param string $poste
     *
     * @return MatriceCompetence
     */
    public function setPoste($poste) {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste() {
        return $this->poste;
    }

    /**
     * Set competencePrincipale
     *
     * @param string $competencePrincipale
     *
     * @return MatriceCompetence
     */
    public function setCompetencePrincipale($competencePrincipale) {
        $this->competencePrincipale = $competencePrincipale;

        return $this;
    }

    /**
     * Get competencePrincipale
     *
     * @return string
     */
    public function getCompetencePrincipale() {
        return $this->competencePrincipale;
    }

    /**
     * Set competencesSecondaires
     *
     * @param array $competencesSecondaires
     *
     * @return MatriceCompetence
     */
    public function setCompetencesSecondaires($competencesSecondaires) {
        $this->competencesSecondaires = $competencesSecondaires;

        return $this;
    }

    /**
     * Get competencesSecondaires
     *
     * @return array
     */
    public function getCompetencesSecondaires() {
        return $this->competencesSecondaires;
    }

    /**
     * Set user
     *
     * @param \NoxIntranet\UserBundle\Entity\User $user
     *
     * @return MatriceCompetence
     */
    public function setUser(\NoxIntranet\UserBundle\Entity\User $user) {
        $this->user = $user;

        // On lie la matrice de compétence au collaborateur.
        $user->setMatriceCompetence($this);

        return $this;
    }

    /**
     * Get user
     *
     * @return \NoxIntranet\UserBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return MatriceCompetence
     */
    public function setSociete($societe) {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete() {
        return $this->societe;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     *
     * @return MatriceCompetence
     */
    public function setEtablissement($etablissement) {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string
     */
    public function getEtablissement() {
        return $this->etablissement;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return MatriceCompetence
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return MatriceCompetence
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * 
     * @return type
     */
    public function jsonSerialize() {
        $date_naissance = !empty($this->dateNaissance) ? $this->dateNaissance->format("d/m/Y") : $this->dateNaissance;
        $date_anciennete = !empty($this->dateAnciennete) ? $this->dateAnciennete->format("d/m/Y") : $this->dateAnciennete;

        return array(
            'user' => $this->user,
            'societe' => $this->societe,
            'etablissement' => $this->etablissement,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'date_naissance' => $date_naissance,
            'date_anciennete' => $date_anciennete,
            'statut' => $this->statut,
            'poste' => $this->poste,
            'competence_principale' => $this->competencePrincipale,
            'competences_secondaires' => $this->competencesSecondaires
        );
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return MatriceCompetence
     */
    public function setMatricule($matricule) {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule() {
        return $this->matricule;
    }

}
