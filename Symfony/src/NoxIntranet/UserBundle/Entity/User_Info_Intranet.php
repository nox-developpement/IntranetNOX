<?php

namespace NoxIntranet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_Info_Intranet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\UserBundle\Entity\User_Info_IntranetRepository")
 */
class User_Info_Intranet
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
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="text")
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="competance_principale", type="string", length=255)
     */
    private $competancePrincipale;

    /**
     * @var string
     *
     * @ORM\Column(name="competance_secondaire", type="text")
     */
    private $competanceSecondaire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="local", type="boolean")
     */
    private $local;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastActivity", type="datetime", nullable=true)
     */
    private $lastActivity;

    /**
     * @var string
     *
     * @ORM\Column(name="LastViewebPage", type="text", nullable=true)
     */
    private $lastViewebPage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="HasReadCharteInformatique", type="boolean")
     */
    private $hasReadCharteInformatique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CharteInformationReadingDate", type="date", nullable=true)
     */
    private $charteInformationReadingDate;


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
     * Set username
     *
     * @param string $username
     *
     * @return User_Info_Intranet
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User_Info_Intranet
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set competancePrincipale
     *
     * @param string $competancePrincipale
     *
     * @return User_Info_Intranet
     */
    public function setCompetancePrincipale($competancePrincipale)
    {
        $this->competancePrincipale = $competancePrincipale;

        return $this;
    }

    /**
     * Get competancePrincipale
     *
     * @return string
     */
    public function getCompetancePrincipale()
    {
        return $this->competancePrincipale;
    }

    /**
     * Set competanceSecondaire
     *
     * @param string $competanceSecondaire
     *
     * @return User_Info_Intranet
     */
    public function setCompetanceSecondaire($competanceSecondaire)
    {
        $this->competanceSecondaire = $competanceSecondaire;

        return $this;
    }

    /**
     * Get competanceSecondaire
     *
     * @return string
     */
    public function getCompetanceSecondaire()
    {
        return $this->competanceSecondaire;
    }

    /**
     * Set local
     *
     * @param boolean $local
     *
     * @return User_Info_Intranet
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return boolean
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User_Info_Intranet
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastActivity
     *
     * @param \DateTime $lastActivity
     *
     * @return User_Info_Intranet
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return \DateTime
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }

    /**
     * Set lastViewebPage
     *
     * @param string $lastViewebPage
     *
     * @return User_Info_Intranet
     */
    public function setLastViewebPage($lastViewebPage)
    {
        $this->lastViewebPage = $lastViewebPage;

        return $this;
    }

    /**
     * Get lastViewebPage
     *
     * @return string
     */
    public function getLastViewebPage()
    {
        return $this->lastViewebPage;
    }

    /**
     * Set hasReadCharteInformatique
     *
     * @param boolean $hasReadCharteInformatique
     *
     * @return User_Info_Intranet
     */
    public function setHasReadCharteInformatique($hasReadCharteInformatique)
    {
        $this->hasReadCharteInformatique = $hasReadCharteInformatique;

        return $this;
    }

    /**
     * Get hasReadCharteInformatique
     *
     * @return boolean
     */
    public function getHasReadCharteInformatique()
    {
        return $this->hasReadCharteInformatique;
    }

    /**
     * Set charteInformationReadingDate
     *
     * @param \DateTime $charteInformationReadingDate
     *
     * @return User_Info_Intranet
     */
    public function setCharteInformationReadingDate($charteInformationReadingDate)
    {
        $this->charteInformationReadingDate = $charteInformationReadingDate;

        return $this;
    }

    /**
     * Get charteInformationReadingDate
     *
     * @return \DateTime
     */
    public function getCharteInformationReadingDate()
    {
        return $this->charteInformationReadingDate;
    }
}
