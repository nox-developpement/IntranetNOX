<?php

namespace NoxIntranet\PointageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JustificatifFile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\PointageBundle\Entity\JustificatifFileRepository")
 */
class JustificatifFile {

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="blob")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="NoxIntranet\PointageBundle\Entity\Tableau")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tableau;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return JustificatifFile
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return JustificatifFile
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return JustificatifFile
     */
    public function setSize($size) {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return JustificatifFile
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set tableau
     *
     * @param \NoxIntranet\PointageBundle\Entity\Tableau $tableau
     *
     * @return JustificatifFile
     */
    public function setTableau(\NoxIntranet\PointageBundle\Entity\Tableau $tableau) {
        $this->tableau = $tableau;

        return $this;
    }

    /**
     * Get tableau
     *
     * @return \NoxIntranet\PointageBundle\Entity\Tableau
     */
    public function getTableau() {
        return $this->tableau;
    }

}
