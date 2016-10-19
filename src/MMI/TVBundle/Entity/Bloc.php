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
     * @var time
     *
     * @ORM\Column(name="duration", type="time")
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="slot", type="string", length=255)
     */
    private $slot;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToMany(targetEntity="MMI\TVBundle\Entity\Video", mappedBy="blocs", cascade={"remove"})
     */
    private $videos;

    /**
     * @ORM\ManyToOne(targetEntity="MMI\TVBundle\Entity\Category", inversedBy="blocs")
     * @ORM\JoinColumn(name="category", referencedColumnName="id", onDelete="CASCADE")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="MMI\TVBundle\Entity\Grid", inversedBy="blocs")
     * @ORM\JoinColumn(name="grid", referencedColumnName="id", onDelete="CASCADE")
     */
    private $grid;

    /**
     * @var int
     *
     * @ORM\Column(name="day", type="integer")
     */
    private $day;

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
     * @param boolean $status
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
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->videos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add video
     *
     * @param \MMI\TVBundle\Entity\Video $video
     *
     * @return Bloc
     */
    public function addVideo(\MMI\TVBundle\Entity\Video $video)
    {
        $this->videos[] = $video;

        return $this;
    }

    /**
     * Remove video
     *
     * @param \MMI\TVBundle\Entity\Video $video
     */
    public function removeVideo(\MMI\TVBundle\Entity\Video $video)
    {
        $this->videos->removeElement($video);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Set category
     *
     * @param \MMI\TVBundle\Entity\Category $category
     *
     * @return Bloc
     */
    public function setCategory(\MMI\TVBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \MMI\TVBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set grid
     *
     * @param \MMI\TVBundle\Entity\Grid $grid
     *
     * @return Bloc
     */
    public function setGrid(\MMI\TVBundle\Entity\Grid $grid = null)
    {
        $this->grid = $grid;

        return $this;
    }

    /**
     * Get grid
     *
     * @return \MMI\TVBundle\Entity\Grid
     */
    public function getGrid()
    {
        return $this->grid;
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
     * Set day
     *
     * @param integer $day
     *
     * @return Bloc
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return integer
     */
    public function getDay()
    {
        return $this->day;
    }
}
