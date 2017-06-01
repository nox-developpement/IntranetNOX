<?php

namespace NoxIntranet\SatisfactionClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoEffectuerFicheEvaluationST
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\SatisfactionClientBundle\Entity\InfoEffectuerFicheEvaluationSTRepository")
 */
class InfoEffectuerFicheEvaluationST
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
     * @ORM\Column(name="Agence", type="string", length=255)
     */
    private $agence;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Evaluateur", type="string", length=255)
     */
    private $evaluateur;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEvaluation", type="date")
     */
    private $dateEvaluation;

    /**
     * @var string
     *
     * @ORM\Column(name="NumAffaire", type="string", length=255)
     */
    private $numAffaire;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleAffaire", type="string", length=255)
     */
    private $intituleAffaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="SiretST", type="integer")
     */
    private $siretST;
    
    /**
     * @var string
     *
     * @ORM\Column(name="DenominationSocialeST", type="string", length=255)
     */
    private $denominationSocialeST;
    
    /**
     * @var string
     *
     * @ORM\Column(name="NomST", type="string", length=255)
     */
    private $nomST;

    /**
     * @var string
     *
     * @ORM\Column(name="CleFicheEvaluationST", type="string", length=255)
     */
    private $cleEffectuerFicheEvaluationST;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CA", type="string", length=255)
     */
    private $cA;

    /**
     * @var string
     *
     * @ORM\Column(name="CQ", type="string", length=255, nullable=true)
     */
    private $cQ;

    /**
     * @var string
     *
     * @ORM\Column(name="RQ", type="string", length=255, nullable=true)
     */
    private $rQ;

    /**
     * @var string
     *
     * @ORM\Column(name="RP", type="string", length=255, nullable=true)
     */
    private $rP;
    
    /**
     * @var string
     *
     * @ORM\Column(name="EmailCA", type="string", length=255)
     */
    private $emailCA;


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
     * Set evaluateur
     *
     * @param string $evaluateur
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setEvaluateur($evaluateur) {
        $this->evaluateur = $evaluateur;

        return $this;
    }

    /**
     * Get evaluateur
     *
     * @return string
     */
    public function getEvaluateur() {
        return $this->evaluateur;
    }
    
    /**
     * Set nomST
     *
     * @param string $nomST
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setNomST($nomST) {
        $this->nomST = $nomST;

        return $this;
    }

    /**
     * Get nomST
     *
     * @return string
     */
    public function getNomST() {
        return $this->nomST;
    }

    /**
     * Set cleEffectuerFicheEvaluationST
     *
     * @param string $cleEffectuerFicheEvaluationST
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setCleEffectuerFicheEvaluationST($cleEffectuerFicheEvaluationST)
    {
        $this->cleEffectuerFicheEvaluationST = $cleEffectuerFicheEvaluationST;

        return $this;
    }

    /**
     * Get cleEffectuerFicheEvaluationST
     *
     * @return string
     */
    public function getCleEffectuerFicheEvaluationST()
    {
        return $this->cleEffectuerFicheEvaluationST;
    }
    

    /**
     * Set agence
     *
     * @param string $agence
     *
     * @return InfoEffectuerFicheEvaluationST
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
     * Set denominationSocialeST
     *
     * @param string $denominationSocialeST
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setDenominationSocialeST($denominationSocialeST)
    {
        $this->denominationSocialeST = $denominationSocialeST;

        return $this;
    }

    /**
     * Get denominationSocialeST
     *
     * @return string
     */
    public function getDenominationSocialeST()
    {
        return $this->denominationSocialeST;
    }

    
    /**
     * Set dateEvaluation
     *
     * @param \DateTime $dateEvaluation
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setDateEvaluation($dateEvaluation)
    {
        $this->dateEvaluation = $dateEvaluation;

        return $this;
    }

    /**
     * Get dateEvaluation
     *
     * @return \DateTime
     */
    public function getDateEvaluation()
    {
        return $this->dateEvaluation;
    }
    
    public function __construct() {
    $this->setDateEvaluation(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
    }

    /**
     * Set numAffaire 
     *
     * @param string $numAffaire
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setNumAffaire($numAffaire)
    {
        $this->numAffaire = $numAffaire;

        return $this;
    }

    /**
     * Get numAffaire
     *
     * @return string
     */
    public function getNumAffaire()
    {
        return $this->numAffaire;
    }

    /**
     * Set intituleAffaire
     *
     * @param string $intituleAffaire
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setIntituleAffaire($intituleAffaire)
    {
        $this->intituleAffaire = $intituleAffaire;

        return $this;
    }

    /**
     * Get intituleAffaire
     *
     * @return string
     */
    public function getIntituleAffaire()
    {
        return $this->intituleAffaire;
    }

    /**
     * Set siretST
     *
     * @param integer $siretST
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setSiretST($siretST)
    {
        $this->siretST = $siretST;

        return $this;
    }

    /**
     * Get siretST
     *
     * @return integer
     */
    public function getSiretST()
    {
        return $this->siretST;
    }

    /**
     * Set cleAuteur
     *
     * @param string $cleAuteur
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setCleAuteur($cleAuteur)
    {
        $this->cleAuteur = $cleAuteur;

        return $this;
    }

    /**
     * Get cleAuteur
     *
     * @return string
     */
    public function getCleAuteur()
    {
        return $this->cleAuteur;
    }
    
    
    /**
     * Set cA
     *
     * @param string $cA
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setCA($cA) {
        $this->cA = $cA;

        return $this;
    }

    /**
     * Get cA
     *
     * @return string
     */
    public function getCA() {
        return $this->cA;
    }

    /**
     * Set cQ
     *
     * @param string $cQ
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setCQ($cQ)
    {
        $this->cQ = $cQ;

        return $this;
    }

    /**
     * Get cQ
     *
     * @return string
     */
    public function getCQ()
    {
        return $this->cQ;
    }

    /**
     * Set rQ
     *
     * @param string $rQ
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setRQ($rQ)
    {
        $this->rQ = $rQ;

        return $this;
    }

    /**
     * Get rQ
     *
     * @return string
     */
    public function getRQ()
    {
        return $this->rQ;
    }

    /**
     * Set rP
     *
     * @param string $rP
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setRP($rP)
    {
        $this->rP = $rP;

        return $this;
    }

    /**
     * Get rP
     *
     * @return string
     */
    public function getRP()
    {
        return $this->rP;
    }
    
    /**
     * Set emailCA
     *
     * @param string $emailCA
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setEmailCA($emailCA) {
        $this->emailCA = $emailCA;

        return $this;
    }

    /**
     * Get emailCA
     *
     * @return string
     */
    public function getEmailCA() {
        return $this->emailCA;
    }
}

