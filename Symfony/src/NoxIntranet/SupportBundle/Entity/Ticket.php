<?php

namespace NoxIntranet\SupportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use NoxIntranet\UserBundle\Entity\User;

/**
 * Ticket
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\SupportBundle\Entity\TicketRepository")
 */
class Ticket {

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
     * @ORM\Column(name="objet", type="string", length=255, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date", nullable=false)
     */
    private $dateAjout;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255, nullable=false)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Ticket
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Ticket
     */
    public function setContenu($contenu) {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu() {
        return $this->contenu;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Ticket
     */
    public function setDateAjout($dateAjout) {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout() {
        return $this->dateAjout->format('d-m-Y à H:i:s');
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Ticket
     */
    public function setAuteur($auteur) {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur() {
        return $this->auteur;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Ticket
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

    public function __construct() {
        $this->dateAjout = new \Datetime();
        $this->status = "En attente";
    }

}
