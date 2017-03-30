<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DonneesFormulaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AdministrationBundle\Entity\DonneesFormulaireRepository")
 */
class DonneesFormulaire
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
     * @var integer
     *
     * @ORM\Column(name="IdFormulaire", type="integer")
     */
    private $idFormulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Donnee", type="string", length=255)
     */
    private $donnee;


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
     * Set idFormulaire
     *
     * @param integer $idFormulaire
     *
     * @return DonneesFormulaire
     */
    public function setIdFormulaire($idFormulaire)
    {
        $this->idFormulaire = $idFormulaire;

        return $this;
    }

    /**
     * Get idFormulaire
     *
     * @return integer
     */
    public function getIdFormulaire()
    {
        return $this->idFormulaire;
    }

    /**
     * Set donnee
     *
     * @param string $donnee
     *
     * @return DonneesFormulaire
     */
    public function setDonnee($donnee)
    {
        $this->donnee = $donnee;

        return $this;
    }

    /**
     * Get donnee
     *
     * @return string
     */
    public function getDonnee()
    {
        return $this->donnee;
    }
}

