<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AA_Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\AA_ClientRepository")
 */
class AA_Client
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
     * @ORM\Column(name="N_Client", type="integer")
     */
    private $nClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Client", type="string", length=255)
     */
    private $nomClient;


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
     * Set nClient
     *
     * @param integer $nClient
     *
     * @return AA_Client
     */
    public function setNClient($nClient)
    {
        $this->nClient = $nClient;

        return $this;
    }

    /**
     * Get nClient
     *
     * @return integer
     */
    public function getNClient()
    {
        return $this->nClient;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     *
     * @return AA_Client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }
}

