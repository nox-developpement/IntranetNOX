<?php

namespace NoxIntranet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use DateTime;

/**
 * @ORM\Entity(repositoryClass="NoxIntranet\UserBundle\Entity\UserRepository")
 */
class User implements UserInterface, \Serializable {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(name="local", type="boolean")
     */
    private $local;

    /**
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @ORM\Column(name="roles", type="array")
     */
    protected $roles = array();

    /**
     * @ORM\Column(name="agence", type="string", length=255, nullable=true)
     */
    private $agence;

    /**
     * @ORM\Column(name="lastActivity", type="datetime", nullable=true)
     */
    private $lastActivity;

    // Les getters et setters
    public function getUsername() {
        return $this->username;
    }

    public function getLocal() {
        return $this->local;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getUser() {

        $users = $this->username . " ";

        foreach ($this->roles as $role) {
            if ($role == "ROLE_ADMIN") {
                $users = $users . "<Admin>";
            }
            if ($role == "ROLE_PUBLICATEUR") {
                $users = $users . "<Publicateur>";
            }
        }

        return $users;
    }

    public function getRole() {
        foreach ($this->roles as $role) {
            if ($role == "ROLE_ADMIN") {
                $users = $users . "<Admin>";
            }
            if ($role == "ROLE_PUBLICATEUR") {
                $users = $users . "<Publicateur>";
            }
        }
    }

    public function eraseCredentials() {
        
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Set local
     *
     * @param string $local
     *
     * @return User
     */
    public function setLocal($local) {
        $this->local = $local;

        return $this;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return User
     */
    public function setRoles($roles) {
        $this->roles = $roles;

        return $this;
    }

    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->local,
            // see section on salt below
            $this->salt,
            serialize($this->roles),
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
                $this->id,
                $this->username,
                $this->password,
                $this->local,
                // see section on salt below
                $this->salt,
                $roles,
                ) = unserialize($serialized);
        $this->roles = unserialize($roles);
    }

    public function __construct() {
        $this->password = "default";
        $this->local = false;
        $this->salt = md5(uniqid(null, true));
        $this->roles = array('ROLE_USER');
    }

    /**
     * Set agence
     *
     * @param string $agence
     *
     * @return User
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
     * Set fullname
     *
     * @param string $fullname
     *
     * @return User
     */
    public function setFullname($fullname) {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname() {
        return $this->fullname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set lastActivity
     *
     * @param \DateTime $lastActivity
     *
     * @return User
     */
    public function setLastActivity($lastActivity) {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return \DateTime
     */
    public function getLastActivity() {
        return $this->lastActivity;
    }

    public function isActiveNow() {
        $this->setLastActivity(new DateTime());
    }

}
