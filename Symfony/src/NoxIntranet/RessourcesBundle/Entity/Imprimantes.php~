<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Imprimantes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\ImprimantesRepository")
 */
class Imprimantes {

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
     * @ORM\Column(name="agence", type="string", length=255)
     */
    private $agence;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin", type="string", length=255)
     */
    private $chemin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable = true)
     */
    private $ip;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cheminPilote", type="string", length=255, nullable = true)
     */
    private $cheminPilote;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nomReseau", type="string", length=255, nullable = true)
     */
    private $nomReseau;
    
    /**
     * @var string
     *
     * @ORM\Column(name="fileLPR", type="string", length=255, nullable = true)
     */
    private $fileLPR;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set agence
     *
     * @param string $agence
     *
     * @return Imprimantes
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
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Imprimantes
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
     * @return Imprimantes
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
     * Set script
     *
     * @param string $script
     *
     * @return Imprimantes
     */
    public function setScript($script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Imprimantes
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Imprimantes
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set cheminPilote
     *
     * @param string $cheminPilote
     *
     * @return Imprimantes
     */
    public function setCheminPilote($cheminPilote)
    {
        $this->cheminPilote = $cheminPilote;

        return $this;
    }

    /**
     * Get cheminPilote
     *
     * @return string
     */
    public function getCheminPilote()
    {
        return $this->cheminPilote;
    }

    /**
     * Set nomReseau
     *
     * @param string $nomReseau
     *
     * @return Imprimantes
     */
    public function setNomReseau($nomReseau)
    {
        $this->nomReseau = $nomReseau;

        return $this;
    }

    /**
     * Get nomReseau
     *
     * @return string
     */
    public function getNomReseau()
    {
        return $this->nomReseau;
    }

    /**
     * Set fileLPR
     *
     * @param string $fileLPR
     *
     * @return Imprimantes
     */
    public function setFileLPR($fileLPR)
    {
        $this->fileLPR = $fileLPR;

        return $this;
    }

    /**
     * Get fileLPR
     *
     * @return string
     */
    public function getFileLPR()
    {
        return $this->fileLPR;
    }
}
