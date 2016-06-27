<?php

namespace NoxIntranet\PointageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersHierarchy
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\PointageBundle\Entity\UsersHierarchyRepository")
 */
class UsersHierarchy
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="AA", type="string", length=255)
     */
    private $aA;

    /**
     * @var string
     *
     * @ORM\Column(name="DA", type="string", length=255)
     */
    private $dA;

    /**
     * @var string
     *
     * @ORM\Column(name="RH", type="string", length=255)
     */
    private $rH;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return UsersHierarchy
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return UsersHierarchy
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set aA
     *
     * @param string $aA
     *
     * @return UsersHierarchy
     */
    public function setAA($aA)
    {
        $this->aA = $aA;

        return $this;
    }

    /**
     * Get aA
     *
     * @return string
     */
    public function getAA()
    {
        return $this->aA;
    }

    /**
     * Set dA
     *
     * @param string $dA
     *
     * @return UsersHierarchy
     */
    public function setDA($dA)
    {
        $this->dA = $dA;

        return $this;
    }

    /**
     * Get dA
     *
     * @return string
     */
    public function getDA()
    {
        return $this->dA;
    }

    /**
     * Set rH
     *
     * @param string $rH
     *
     * @return UsersHierarchy
     */
    public function setRH($rH)
    {
        $this->rH = $rH;

        return $this;
    }

    /**
     * Get rH
     *
     * @return string
     */
    public function getRH()
    {
        return $this->rH;
    }
}

