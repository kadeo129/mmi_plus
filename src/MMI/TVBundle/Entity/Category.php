<?php

namespace MMI\TVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="MMI\TVBundle\Repository\CategoryRepository")
 */
class Category
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="MMI\TVBundle\Entity\Video", mappedBy="category", cascade={"remove"}, orphanRemoval=true)
     */
    private $videos;

    /**
     * @ORM\OneToMany(targetEntity="MMI\TVBundle\Entity\Bloc", mappedBy="category", cascade={"remove"})
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
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->videos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->blocs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add video
     *
     * @param \MMI\TVBundle\Entity\Video $video
     *
     * @return Category
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
     * Add bloc
     *
     * @param \MMI\TVBundle\Entity\Bloc $bloc
     *
     * @return Category
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
