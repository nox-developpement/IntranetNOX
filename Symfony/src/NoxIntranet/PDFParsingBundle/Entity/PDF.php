<?php

namespace NoxIntranet\PDFParsingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * PDF
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\PDFParsingBundle\Entity\PDFRepository")
 */
class PDF implements JsonSerializable {

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
     * @ORM\Column(name="Chemin", type="string", length=255)
     */
    private $chemin;

    /**
     * @var string
     *
     * @ORM\Column(name="Lien", type="string", length=255)
     */
    private $lien;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Author", type="string", length=255, nullable=true)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="Subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="Keywords", type="string", length=255, nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="Pages", type="string", length=255, nullable=true)
     */
    private $pages;

    /**
     * @var string
     *
     * @ORM\Column(name="dateEnvoi", type="string", length=255)
     */
    private $dateEnvoi;

    /**
     * @var string
     *
     * @ORM\Column(name="Sha1", type="text")
     */
    private $sha1;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set chemin
     *
     * @param string $chemin
     *
     * @return PDF
     */
    public function setChemin($chemin) {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin() {
        return $this->chemin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return PDF
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
     * Set title
     *
     * @param string $title
     *
     * @return PDF
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return PDF
     */
    public function setAuthor($author) {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return PDF
     */
    public function setSubject($subject) {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return PDF
     */
    public function setKeywords($keywords) {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords() {
        return $this->keywords;
    }

    /**
     * Set pages
     *
     * @param string $pages
     *
     * @return PDF
     */
    public function setPages($pages) {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return string
     */
    public function getPages() {
        return $this->pages;
    }

    /**
     * Set dateEnvoi
     *
     * @param string $dateEnvoi
     *
     * @return PDF
     */
    public function setDateEnvoi($dateEnvoi) {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return string
     */
    public function getDateEnvoi() {
        return $this->dateEnvoi;
    }

    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return PDF
     */
    public function setLien($lien) {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien() {
        return $this->lien;
    }

    public function jsonSerialize() {
        return array(
            "Chemin" => $this->chemin,
            "Lien" => $this->lien,
            "Nom" => $this->nom,
            "Title" => $this->title,
            "Author" => $this->author
        );
    }

    /**
     * Set sha1
     *
     * @param string $sha1
     *
     * @return PDF
     */
    public function setSha1($sha1) {
        $this->sha1 = $sha1;

        return $this;
    }

    /**
     * Get sha1
     *
     * @return string
     */
    public function getSha1() {
        return $this->sha1;
    }

}
