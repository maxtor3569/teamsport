<?php

// src/Sportimimi/userBundle/Entity/Place.php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="place")
 */
class Place {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")

     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $placeName;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $type; //stadium, club etc..

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $district;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $phoneContact;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $contactName;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $capacity;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $website;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $alias;
	
	/**
	* @ORM\Column(type="float",nullable=true)
	*/
	private $latitude;
	
	/**
	* @ORM\Column(type="float",nullable=true)
	*/
	private $longitude;
	
    /**
     *  @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToMany(targetEntity="Profile", mappedBy="places")
     */
    protected $profile;

    /**
     *  @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToMany(targetEntity="Category", mappedBy="places")
     */
    protected $sports;

    /**
     * @ORM\OneToMany(targetEntity="PlaceCurrentlyPlay", mappedBy="place")
     */
    private $placeCurrentlyPlay;
    
     /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="mainLocationRelation")
     */
    private $teamMainLocation;
    /**
     * @ORM\OneToMany(targetEntity="News", mappedBy="place")
     */
    private $news;

    public function getPlaceName() {
        return $this->placeName;
    }

    public function setPlaceName($name) {
        $this->placeName = $name;
    }

    public function getAlias() {
        $this->alias = str_replace(" ", "-", $this->placeName);
        return $this->alias;
    }

    public function getPrice() {
        return $this->price;
    }
    
    public function getWebsite() {
        return $this->website;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function getPhoneContact() {
        return $this->phoneContact;
    }

    public function getcontactName() {
        return $this->contactName;
    }

    public function getDistrict() {
        return $this->district;
    }

    public function getType() {
        return $this->type;
    }

    public function addProfile(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->profile[] = $profile;
        return $this;
    }

    public function getProfile() {
        return $this->profile;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getLatitude() {
        return $this->latitude;
    }
    public function getLongitude() {
        return $this->longitude;
    }
    
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }
     public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    public function __toString()
    {
        return $this->getPlaceName();
    }

}
