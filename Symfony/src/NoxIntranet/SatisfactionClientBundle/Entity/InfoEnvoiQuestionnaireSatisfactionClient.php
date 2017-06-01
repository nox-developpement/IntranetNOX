<?php

namespace NoxIntranet\SatisfactionClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoEnvoiQuestionnaireSatisfactionClient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\SatisfactionClientBundle\Entity\InfoEnvoiQuestionnaireSatisfactionClientRepository")
 */
class InfoEnvoiQuestionnaireSatisfactionClient
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
     * @ORM\Column(name="EmailClient", type="string", length=255)
     */
    private $emailClient;
    
    /**
     * @var string
     *
     * @ORM\Column(name="EmailCA", type="string", length=255)
     */
    private $emailCA;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CA", type="string", length=255)
     */
    private $CA;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnvoi", type="date")
     */
    private $dateEnvoi;

    /**
     * @var string
     *
     * @ORM\Column(name="Client", type="string", length=255)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="Emetteur", type="string", length=255)
     */
    private $emetteur;
    

    /**
     * @var string
     *
     * @ORM\Column(name="NumAffaire", type="string", length=255)
     */
    private $numAffaire;
    
    /**
     * @var string
     *
     * @ORM\Column(name="EmailEmetteur", type="string", length=255)
     */
    private $emailEmetteur;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleAffaire", type="string", length=255)
     */
    private $intituleAffaire;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CleEnvoiQuestioSatisfClient", type="string", length=255)
     */
    private $cleEnvoiQuestioSatisfClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Agence", type="string", length=255)
     */
    private $agence;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function __construct() {
    $this->setDateEnvoi(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
    }
    
    public function __toString() {
        return $this->emailEmetteur;
    }
    
    /**
     * Set emailClient
     *
     * @param string $emailClient
     *
     * @return InfoEnvoiQuestionnaireSatisfactionClient
     */
    public function setEmailClient($emailClient)
    {
        $this->emailClient = $emailClient;

        return $this;
    }
    
    /**
     * Get emailClient
     *
     * @return string
     */
    public function getEmailClient()
    {
        return $this->emailClient;
    }
    
    /**
     * Set cA
     *
     * @param string $cA
     *
     * @return InfoEnvoiQuestionnaireSatisfactionClient
     */
    public function setCA($cA) {
        $this->CA = $cA;

        return $this;
    }

    /**
     * Get cA
     *
     * @return string
     */
    public function getCA() {
        return $this->CA;
    }
    
    /**
     * Set emailCA
     *
     * @param string $emailCA
     *
     * @return InfoEnvoiQuestionnaireSatisfactionClient
     */
    public function setEmailCA($emailCA)
    {
        $this->emailCA = $emailCA;

        return $this;
    }

    /**
     * Get emailCA
     *
     * @return string
     */
    public function getEmailCA()
    {
        return $this->emailCA;
    }
    
    /**
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return InfoEnvoiQuestionnaireSatisfactionClient
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return InfoEnvoiQuestionnaireSatisfactionClient
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    
    /**
     * Set emetteur
     *
     * @param string $emetteur
     *
     * @return InfoEnvoiQuestionnaireSatisfactionClient
     */
    public function setEmetteur($emetteur)
    {
        $this->emetteur = $emetteur;

        return $this;
    }

    /**
     * Get emetteur
     *
     * @return string
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }
    
    /**
     * Set emailEmetteur
     *
     * @param string $emailEmetteur
     *
     * @return InfoEnvoiQuestionnaireSatisfactionClient
     */
    public function setEmailEmetteur($emailEmetteur)
    {
        $this->emailEmetteur = $emailEmetteur;

        return $this;
    }

    /**
     * Get emailEmetteur
     *
     * @return string
     */
    public function getEmailEmetteur()
    {
        return $this->emailEmetteur;
    }
    

    /**
     * Set numAffaire
     *
     * @param string $numAffaire
     *
     * @return InfoEnvoiQuestionnaireSatisfactionClient
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
     * @return InfoEnvoiQuestionnaireSatisfactionClient
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
     * Set agence
     *
     * @param string $agence
     *
     * @return InfoEnvoiQuestionnaireSatisfactionClient
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
     * Set CleEnvoiQuestioSatisfClient
     *
     * @param string $cleEnvoiQuestioSatisfClient
     *
     * @return InfoEffectuerFicheEvaluationST
     */
    public function setCleEnvoiQuestioSatisfClient($cleEnvoiQuestioSatisfClient)
    {
        $this->cleEnvoiQuestioSatisfClient = $cleEnvoiQuestioSatisfClient;

        return $this;
    }

    /**
     * Get cleEnvoiQuestioSatisfClient
     *
     * @return string
     */
    public function getCleEnvoiQuestioSatisfClient()
    {
        return $this->cleEnvoiQuestioSatisfClient;
    }
    

    
}

