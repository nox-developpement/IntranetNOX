<?php

namespace NoxIntranet\SupportSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeMateriel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\SupportSIBundle\Entity\DemandeMaterielRepository")
 */
class DemandeMateriel {

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
     * @ORM\Column(name="MailSuperieur", type="string", length=255)
     */
    private $mailSuperieur;

    /**
     * @var string
     *
     * @ORM\Column(name="CleDemande", type="string", length=255)
     */
    private $cleDemande;

    /**
     * @var array
     *
     * @ORM\Column(name="Message", type="array")
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;
    
    /**
     * @var date
     *
     * @ORM\Column(name="dateDemande", type="date")
     */
    private $date;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set mailSuperieur
     *
     * @param string $mailSuperieur
     *
     * @return DemandeMateriel
     */
    public function setMailSuperieur($mailSuperieur) {
        $this->mailSuperieur = $mailSuperieur;

        return $this;
    }

    /**
     * Get mailSuperieur
     *
     * @return string
     */
    public function getMailSuperieur() {
        return $this->mailSuperieur;
    }

    /**
     * Set cleDemande
     *
     * @param string $cleDemande
     *
     * @return DemandeMateriel
     */
    public function setCleDemande($cleDemande) {
        $this->cleDemande = $cleDemande;

        return $this;
    }

    /**
     * Get cleDemande
     *
     * @return string
     */
    public function getCleDemande() {
        return $this->cleDemande;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return DemandeMateriel
     */
    public function setMessage($message) {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return DemandeMateriel
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DemandeMateriel
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
