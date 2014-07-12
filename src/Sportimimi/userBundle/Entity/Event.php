<?php

// src/Sportimimi/userBundle/Entity/Event.php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class Event {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *  @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToMany(targetEntity="Profile", mappedBy="events")
     */
    protected $profile;

    /**
     *  @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToMany(targetEntity="Category", mappedBy="events", cascade={"all"})
     */
    protected $categories;

    /**
     * @ORM\OneToMany(targetEntity="Image",mappedBy="event")
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id")
     */
    private $document;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     * @Assert\NotBlank()
     */
    protected $nameResponsable;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $mobileResponsable;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $emailResponsable;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $dateEventStart;

    /**
     * @ORM\Column(type="date",nullable=true)
     */
    protected $dateEventEnd;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $location;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $timeStart;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $timeEnd;

    public function __construct() {
        $this->profile = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDateEventStart() {
        return $this->dateEventStart;
    }

    public function setDateEventStart($date) {
        $this->dateEventStart = $date;
    }

    public function getDateEventEnd() {
        return $this->dateEventEnd;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getTimeStart() {
        return $this->timeStart;
    }

    public function setTimeStart($time) {
        $this->timeStart = $time;
    }

    // PROFILE FUNCTION
    //Add a profile to a event
    public function addProfile(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->profile[] = $profile;
        return $this;
    }

    //Remove a profile to a event
    public function removeProfile(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->profile->removeElement($profile);
    }

    //get list of profile in this event
    public function getProfile() {
        return $this->profile;
    }

    // CATEGORY FUNCTIONS
    public function getCategories() {
        return $this->categories;
    }

    public function addCategory(\Sportimimi\userBundle\Entity\Category $category) {
        $this->categories[] = $category;
        return $this;
    }

    // DOCUMENT
    public function getDocument() {
        return $this->document;
    }

    public function getnameResponsable() {

        return $this->nameResponsable;
    }

    public function setnameResponsable($name) {

        $this->nameResponsable = $name;
    }

    public function getmobileResponsable() {

        return $this->mobileResponsable;
    }

    public function setmobileResponsable($mobile) {

        $this->mobileResponsable = $mobile;
    }

    public function getemailResponsable() {

        return $this->emailResponsable;
    }

    public function setemailResponsable($email) {

        $this->emailResponsable = $email;
    }

}
