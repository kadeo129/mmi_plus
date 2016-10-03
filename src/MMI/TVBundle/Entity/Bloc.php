<?php

namespace MMI\TVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bloc
 *
 * @ORM\Table(name="bloc")
 * @ORM\Entity(repositoryClass="MMI\TVBundle\Repository\BlocRepository")
 */
class Bloc
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
     * @var \DateTime
     *
     * @ORM\Column(name="duration", type="datetimetz")
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="slot", type="string", length=255)
     */
    private $slot;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="week_number", type="integer")
     */
    private $weekNumber;


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
     * Set duration
     *
     * @param \DateTime $duration
     *
     * @return Bloc
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set slot
     *
     * @param string $slot
     *
     * @return Bloc
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get slot
     *
     * @return string
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Bloc
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

    /**
     * Set weekNumber
     *
     * @param integer $weekNumber
     *
     * @return Bloc
     */
    public function setWeekNumber($weekNumber)
    {
        $this->weekNumber = $weekNumber;

        return $this;
    }

    /**
     * Get weekNumber
     *
     * @return int
     */
    public function getWeekNumber()
    {
        return $this->weekNumber;
    }
}

