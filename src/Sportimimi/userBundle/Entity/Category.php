<?php

// src/Sportimimi/userBundle/Entity/Category.php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
//Serialize entity for rest.
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;
use JMS\Serializer\Annotation\Type;

/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 * @ExclusionPolicy("all")
 */
class Category {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")

     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */
    private $nom;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Expose
     */
    private $nameVn;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $order;

    /**
     * @ORM\ManyToMany(targetEntity="Profile", mappedBy="sports", cascade={"remove"})
     */
    protected $profile;

    /**
     * @ORM\ManyToMany(targetEntity="Event", inversedBy="categories")
     * @ORM\JoinTable(name="categories_events")
     */
    private $events;

    /**
     * @ORM\OneToMany(targetEntity="Level",mappedBy="category", cascade={"remove"})
     */
    private $levels;

    /**
     * @ORM\ManyToMany(targetEntity="Place", inversedBy="sports")
     * @ORM\JoinTable(name="place_category")
     */
    protected $places;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $imgSrc;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $classIcons;

    /**
     * @ORM\OneToMany(targetEntity="News",mappedBy="sport", cascade={"remove"})
     */
    private $news;
    /**
     * @ORM\OneToMany(targetEntity="Team",mappedBy="category", cascade={"remove"})
     */
    private $teams;
    public function getImgSrc() {

        return $this->imgSrc;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getNameVn() {
        return $this->nameVn;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Category
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function addEvent(\Sportimimi\userBundle\Entity\Event $event) {
        $this->events[] = $event;
        return $this;
    }

    public function getLevels() {
        return $this->levels;
    }
    public function getClassIcons() {
        return $this->classIcons;
    }
    public function getTeams() {
        return $this->teams;
    }   
    public function getProfiles() {
        return $this->profile;
    }
    public function getEvents() {
        return $this->events;
    }

    public function __toString()
    {
        return $this->getNom();
    }
}
