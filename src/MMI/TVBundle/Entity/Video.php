<?php

namespace MMI\TVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="MMI\TVBundle\Repository\VideoRepository")
 */
class Video
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duration", type="datetimetz")
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="poster", type="string", length=255)
     */
    private $poster;

    /**
     * @ORM\ManyToOne(targetEntity="MMI\TVBundle\Entity\Category", inversedBy="videos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="MMI\TVBundle\Entity\Bloc", cascade={"persist"}, inversedBy="videos")
     * @ORM\JoinColumn(name="bloc",referencedColumnName="id", onDelete="CASCADE")
     */
    private $blocs;

    /**
     * @ORM\ManyToOne(targetEntity="MMI\TVBundle\Entity\User", inversedBy="videos")
     * @ORM\JoinColumn(name="user",referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

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
     * Set title
     *
     * @param string $title
     *
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Video
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     *
     * @return Video
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
     * Set description
     *
     * @param string $description
     *
     * @return Video
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Video
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set poster
     *
     * @param string $poster
     *
     * @return Video
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set category
     *
     * @param \MMI\TVBundle\Entity\Category $category
     *
     * @return Video
     */
    public function setCategory(\MMI\TVBundle\Entity\Category $category)
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
     * Constructor
     */
    public function __construct()
    {
        $this->blocs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date       = new \Datetime();
    }

    /**
     * Add bloc
     *
     * @param \MMI\TVBundle\Entity\Bloc $bloc
     *
     * @return Video
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

    /**
     * Set user
     *
     * @param \MMI\TVBundle\Entity\User $user
     *
     * @return Video
     */
    public function setUser(\MMI\TVBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MMI\TVBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
