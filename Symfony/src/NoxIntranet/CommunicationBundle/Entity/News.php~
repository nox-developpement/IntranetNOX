<?php

namespace NoxIntranet\CommunicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\CommunicationBundle\Entity\NewsRepository")
 */
class News {

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
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255, nullable=false)
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;

    public function __construct() {
        $this->date = new \Datetime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }
    
    public function getNews() {
        return "Titre : ".$this->titre." || Date de publication : ".$this->date->format('d-m-Y à H:i:s')." || Auteur : ".$this->auteur;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return News
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return News
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return News
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date->format('d-m-Y à H:i:s');
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return News
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

}
