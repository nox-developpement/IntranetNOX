<?php

namespace NoxIntranet\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AccueilBundle\Entity\CompteurRepository")
 */
class Compteur
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
     * @ORM\Column(name="Compteur", type="string", length=255)
     */
    private $compteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Vue", type="string", length=255)
     */
    private $vue;


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
     * Set compteur
     *
     * @param string $compteur
     *
     * @return Compteur
     */
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }

    /**
     * Get compteur
     *
     * @return string
     */
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set vue
     *
     * @param string $vue
     *
     * @return Compteur
     */
    public function setVue($vue)
    {
        $this->vue = $vue;

        return $this;
    }

    /**
     * Get vue
     *
     * @return string
     */
    public function getVue()
    {
        return $this->vue;
    }
}

