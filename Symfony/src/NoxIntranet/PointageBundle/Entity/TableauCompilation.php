<?php

namespace NoxIntranet\PointageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TableauCompilation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\PointageBundle\Entity\TableauCompilationRepository")
 */
class TableauCompilation {

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
     * @ORM\Column(name="Month", type="string", length=255)
     */
    private $month;

    /**
     * @var string
     *
     * @ORM\Column(name="Year", type="string", length=255)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="Project", type="text")
     */
    private $project;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbColumn", type="integer")
     */
    private $nbColumn;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=255)
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
     * Set month
     *
     * @param string $month
     *
     * @return TableauCompilation
     */
    public function setMonth($month) {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string
     */
    public function getMonth() {
        return $this->month;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return TableauCompilation
     */
    public function setYear($year) {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear() {
        return $this->year;
    }

    /**
     * Set project
     *
     * @param string $project
     *
     * @return TableauCompilation
     */
    public function setProject($project) {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string
     */
    public function getProject() {
        return $this->project;
    }

    /**
     * Set nbColumn
     *
     * @param integer $nbColumn
     *
     * @return TableauCompilation
     */
    public function setNbColumn($nbColumn) {
        $this->nbColumn = $nbColumn;

        return $this;
    }

    /**
     * Get nbColumn
     *
     * @return integer
     */
    public function getNbColumn() {
        return $this->nbColumn;
    }


    /**
     * Set status
     *
     * @param string $status
     *
     * @return TableauCompilation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
