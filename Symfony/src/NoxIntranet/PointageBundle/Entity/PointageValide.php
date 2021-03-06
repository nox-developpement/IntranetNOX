<?php

namespace NoxIntranet\PointageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointageValide
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\PointageBundle\Entity\PointageValideRepository")
 */
class PointageValide {

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
     * @ORM\Column(name="User", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="Firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="Lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Month", type="string", length=255)
     */
    private $month;

    /**
     * @var string
     *
     * @ORM\Column(name="Year", type="string", length=255)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="Absences", type="text")
     */
    private $absences;

    /**
     * @var string
     *
     * @ORM\Column(name="ForfaitsDeplacement", type="string", length=255)
     */
    private $forfaitsDeplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="ForfaitsDeplacementDetails", type="text", nullable=true)
     */
    private $forfaitsDeplacementDetails;

    /**
     * @var string
     *
     * @ORM\Column(name="Mods", type="text", nullable=true)
     */
    private $mods;

    /**
     * @var string
     *
     * @ORM\Column(name="PrimesPanier", type="string", length=255)
     */
    private $primesPanier;

    /**
     * @var string
     *
     * @ORM\Column(name="TitreTransport", type="string", length=255)
     */
    private $titreTransport;

    /**
     * @var string
     *
     * @ORM\Column(name="TitresRepas", type="string", length=255)
     */
    private $titresRepas;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=255)
     */
    private $status;

    /**
     * @var text
     *
     * @ORM\Column(name="regularisation", type="text", nullable=true)
     */
    private $regularisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalMods", type="integer", nullable=true)
     */
    private $totalMods;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return PointageValide
     */
    public function setUser($user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return PointageValide
     */
    public function setMonth($month) {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string
     */
    public function getMonth() {
        return $this->month;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return PointageValide
     */
    public function setYear($year) {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear() {
        return $this->year;
    }

    /**
     * Set absences
     *
     * @param string $absences
     *
     * @return PointageValide
     */
    public function setAbsences($absences) {
        $this->absences = $absences;

        return $this;
    }

    /**
     * Get absences
     *
     * @return string
     */
    public function getAbsences() {
        return $this->absences;
    }

    /**
     * Set forfaitsDeplacement
     *
     * @param string $forfaitsDeplacement
     *
     * @return PointageValide
     */
    public function setForfaitsDeplacement($forfaitsDeplacement) {
        $this->forfaitsDeplacement = $forfaitsDeplacement;

        return $this;
    }

    /**
     * Get forfaitsDeplacement
     *
     * @return string
     */
    public function getForfaitsDeplacement() {
        return $this->forfaitsDeplacement;
    }

    /**
     * Set primesPanier
     *
     * @param string $primesPanier
     *
     * @return PointageValide
     */
    public function setPrimesPanier($primesPanier) {
        $this->primesPanier = $primesPanier;

        return $this;
    }

    /**
     * Get primesPanier
     *
     * @return string
     */
    public function getPrimesPanier() {
        return $this->primesPanier;
    }

    /**
     * Set titreTransport
     *
     * @param string $titreTransport
     *
     * @return PointageValide
     */
    public function setTitreTransport($titreTransport) {
        $this->titreTransport = $titreTransport;

        return $this;
    }

    /**
     * Get titreTransport
     *
     * @return string
     */
    public function getTitreTransport() {
        return $this->titreTransport;
    }

    /**
     * Set titresRepas
     *
     * @param string $titresRepas
     *
     * @return PointageValide
     */
    public function setTitresRepas($titresRepas) {
        $this->titresRepas = $titresRepas;

        return $this;
    }

    /**
     * Get titresRepas
     *
     * @return string
     */
    public function getTitresRepas() {
        return $this->titresRepas;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return PointageValide
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return PointageValide
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return PointageValide
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set forfaitsDeplacementDetails
     *
     * @param string $forfaitsDeplacementDetails
     *
     * @return PointageValide
     */
    public function setForfaitsDeplacementDetails($forfaitsDeplacementDetails) {
        $this->forfaitsDeplacementDetails = $forfaitsDeplacementDetails;

        return $this;
    }

    /**
     * Get forfaitsDeplacementDetails
     *
     * @return string
     */
    public function getForfaitsDeplacementDetails() {
        return $this->forfaitsDeplacementDetails;
    }

    /**
     * Set mods
     *
     * @param string $mods
     *
     * @return PointageValide
     */
    public function setMods($mods) {
        $this->mods = $mods;

        return $this;
    }

    /**
     * Get mods
     *
     * @return string
     */
    public function getMods() {
        return $this->mods;
    }

    /**
     * Set regularisation
     *
     * @param string $regularisation
     *
     * @return PointageValide
     */
    public function setRegularisation($regularisation) {
        $this->regularisation = $regularisation;

        return $this;
    }

    /**
     * Get regularisation
     *
     * @return string
     */
    public function getRegularisation() {
        return $this->regularisation;
    }

    /**
     * Set totalMods
     *
     * @param integer $totalMods
     *
     * @return PointageValide
     */
    public function setTotalMods($totalMods) {
        $this->totalMods = $totalMods;

        return $this;
    }

    /**
     * Get totalMods
     *
     * @return integer
     */
    public function getTotalMods() {
        return $this->totalMods;
    }

}
