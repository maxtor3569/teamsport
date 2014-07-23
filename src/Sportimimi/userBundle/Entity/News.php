<?php

// src/Sportimimi/userBundle/Entity/News.php

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
 * @ORM\Table(name="news")
 * @ExclusionPolicy("all") 
 */
class News {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(name="dateCreated", type="integer", nullable=true)
     * @Expose
     */
    private $dateCreated;

    /**
     * @ORM\Column(type="string",length=1000)
     * @Assert\NotBlank()
     * @Expose
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="news")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * @Type("Sportimimi\userBundle\Entity\Profile")
     * @Expose

     */
    protected $profile;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="news")
     */
    protected $comments;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Expose
     */
    protected $doingSports;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="news")
     * @ORM\JoinColumn(name="sport_id", referencedColumnName="id",nullable=true)
     * @Expose
     */
    protected $sport;

    /**
     * @ORM\ManyToOne(targetEntity="Place", inversedBy="news")
     * @ORM\JoinColumn(name="place_id", referencedColumnName="id",nullable=true)
     * @Expose
     */
    private $place;

    /**
     *  @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToMany(targetEntity="Profile", mappedBy="playingTogether")
     */
    protected $participants;

	public function setPlace(\Sportimimi\userBundle\Entity\Place $place) {

        $this->place = $place;
    }

    public function getPlace() {

        return $this->place;
    }

    public function getDoingSports() {
        return $this->doingSports;
    }

    public function setDoingSports($value) {
        $this->doingSports = $value;
    }

    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        return $this->content = $content;
    }

    public function setName($name) {
        return $this->name = $name;
    }

    public function getProfile() {
        return $this->profile;
    }

    public function setProfile(\Sportimimi\userBundle\Entity\Profile $author) {
        return $this->profile = $author;
    }

    public function setDateCreated($date) {
        $this->dateCreated = $date;
    }

    public function getDateCreated() {
        return date('d/m/Y h:m ', $this->dateCreated);
    }

    public function getSport() {
        return $this->sport;
    }

    public function setSport(\Sportimimi\userBundle\Entity\Category $sport) {
        $this->sport = $sport;
    }

    public function getId() {
        return $this->id;
    }

    public function getParticipants() {
        return $this->participants;
    }

    //Add a profile to a event
    public function addParticipant(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->participants[] = $profile;
        return $this;
    }
    public function removeParticipant(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->participants->removeElement($profile);
        $profile->removePlayNews($this);
    }

    public function addComment(\Sportimimi\userBundle\Entity\Comment $comment) {
        $this->comments[] = $comment;
        return $this;
    }

    public function getComments() {
        return $this->comments;
    }

}
