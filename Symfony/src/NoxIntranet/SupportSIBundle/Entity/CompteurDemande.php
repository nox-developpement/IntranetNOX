<?php

namespace NoxIntranet\SupportSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompteurDemande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\SupportSIBundle\Entity\CompteurDemandeRepository")
 */
class CompteurDemande
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
     * @ORM\Column(name="compteur", type="integer")
     */
    private $compteur;
    
    /**
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set compteur
     *
     * @param integer $compteur
     *
     * @return CompteurDemande
     */
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }

    /**
     * Get compteur
     *
     * @return integer
     */
    public function getCompteur()
    {
        return $this->compteur;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return CompteurDemande
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
