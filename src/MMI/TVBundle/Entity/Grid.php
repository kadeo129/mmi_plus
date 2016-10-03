<?php

namespace MMI\TVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grid
 *
 * @ORM\Table(name="grid")
 * @ORM\Entity(repositoryClass="MMI\TVBundle\Repository\GridRepository")
 */
class Grid
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="week", type="integer")
     */
    private $week;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set week
     *
     * @param integer $week
     *
     * @return Grid
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     * @return int
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Grid
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }
}
