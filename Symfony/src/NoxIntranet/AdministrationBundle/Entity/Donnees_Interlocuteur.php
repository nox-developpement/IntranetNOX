<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Donnees_Interlocuteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AdministrationBundle\Entity\Donnees_InterlocuteurRepository")
 */
class Donnees_Interlocuteur {

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
     * @ORM\Column(name="IdClient", type="integer")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Portable", type="string", length=255)
     */
    private $portable;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     *
     * @return Donnees_Interlocuteur
     */
    public function setEMail($eMail) {
        $this->email = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string
     */
    public function getEMail() {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Donnees_Interlocuteur
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Donnees_Interlocuteur
     */
    public function setFax($fax) {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Set portable
     *
     * @param string $portable
     *
     * @return Donnees_Interlocuteur
     */
    public function setPortable($portable) {
        $this->portable = $portable;

        return $this;
    }

    /**
     * Get portable
     *
     * @return string
     */
    public function getPortable() {
        return $this->portable;
    }


    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Donnees_Interlocuteur
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return integer
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
