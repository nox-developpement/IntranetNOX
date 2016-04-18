<?php

namespace NoxIntranet\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageAlert
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AccueilBundle\Entity\MessageAlertRepository")
 */
class MessageAlert {

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
     * @ORM\Column(name="Section", type="string", length=255)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Status", type="boolean")
     */
    private $status;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set section
     *
     * @param string $section
     *
     * @return MessageAlert
     */
    public function setSection($section) {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string
     */
    public function getSection() {
        return $this->section;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return MessageAlert
     */
    public function setMessage($message) {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return MessageAlert
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus() {
        return $this->status;
    }

}
