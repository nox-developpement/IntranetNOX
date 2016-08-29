<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PropositionPrestation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\PropositionPrestationRepository")
 */
class PropositionPrestation {

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
     * @ORM\Column(name="DA2", type="string", length=255)
     */
    private $dA2;

    /**
     * @var string
     *
     * @ORM\Column(name="CleDemande", type="string", length=255)
     */
    private $cleDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=255)
     */
    private $status;

    /**
     * @var text
     *
     * @ORM\Column(name="Echanges", type="text", nullable=true)
     */
    private $echanges;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dA2
     *
     * @param string $dA2
     *
     * @return PropositionPrestation
     */
    public function setDA2($dA2) {
        $this->dA2 = $dA2;

        return $this;
    }

    /**
     * Get dA2
     *
     * @return string
     */
    public function getDA2() {
        return $this->dA2;
    }

    /**
     * Set cleDemande
     *
     * @param string $cleDemande
     *
     * @return PropositionPrestation
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
     * Set status
     *
     * @param string $status
     *
     * @return PropositionPrestation
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
        $this->setStatus("Attente validation DA2");
    }

    /**
     * Set echanges
     *
     * @param string $echanges
     *
     * @return PropositionPrestation
     */
    public function setEchanges($echanges) {
        $this->echanges = $echanges;

        return $this;
    }

    /**
     * Get echanges
     *
     * @return string
     */
    public function getEchanges() {
        return $this->echanges;
    }

}
