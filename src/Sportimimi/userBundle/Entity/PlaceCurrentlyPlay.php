<?php

// src/Sportimimi/userBundle/Entity/PlaceCurrentlyPlay.php
//This is a entity to save all record of players played in which place...

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="PlaceCurrentlyPlay")
 */
class PlaceCurrentlyPlay {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")

     */
    protected $id;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="finish_at", type="string")
     */
    protected $finishAt;

    /**
     * @ORM\ManyToOne(targetEntity="Profile",inversedBy="placeCurrentlyPlay")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    protected $profile;

    /**
     * @ORM\ManyToOne(targetEntity="Place",inversedBy="placeCurrentlyPlay")
     * @ORM\JoinColumn(name="place_id", referencedColumnName="id")
     */
    protected $place;

    public function __construct() {
        $this->createdAt = new \DateTime('now');
    }

    public function setFinishAt($finish) {
        $this->finishAt = $finish;
    }

    public function setPlace(\Sportimimi\userBundle\Entity\Place $place) {
        $this->place = $place;
    }

    public function setProfile(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->profile = $profile;
    }

    public function getPlace() {
        return $this->place;
    }

}
