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
     * @ORM\OneToMany(targetEntity="MMI\TVBundle\Entity\Bloc", mappedBy="grid", cascade={"remove"})
     */
    private $blocs;

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->blocs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bloc
     *
     * @param \MMI\TVBundle\Entity\Bloc $bloc
     *
     * @return Grid
     */
    public function addBloc(\MMI\TVBundle\Entity\Bloc $bloc)
    {
        $this->blocs[] = $bloc;

        return $this;
    }

    /**
     * Remove bloc
     *
     * @param \MMI\TVBundle\Entity\Bloc $bloc
     */
    public function removeBloc(\MMI\TVBundle\Entity\Bloc $bloc)
    {
        $this->blocs->removeElement($bloc);
    }

    /**
     * Get blocs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBlocs()
    {
        return $this->blocs;
    }
}
