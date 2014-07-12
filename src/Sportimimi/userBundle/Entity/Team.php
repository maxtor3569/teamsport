<?php

// src/Sportimimi/userBundle/Entity/Team.php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="team")
 */
class Team {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *  @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToMany(targetEntity="Profile", mappedBy="teams")
     */
    protected $profile; //members of the team

    /**
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="leader")
     * @ORM\JoinColumn(name="leader_id", referencedColumnName="id")

     */
    protected $leader; //leader of the team

    /**
     * @ORM\OneToMany(targetEntity="Image",mappedBy="team")
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id")
     */
    private $document;

    /**
     * @ORM\ManyToMany(targetEntity="Match", inversedBy="teams")
     * @ORM\JoinTable(name="team_match")
     */
    protected $matchs;

    /**
     * @ORM\ManyToOne(targetEntity="Category",inversedBy="profile")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\OneToMany(targetEntity="Position",mappedBy="team")
     */
    private $positions;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)

     */
    private $alias;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $mainLocation;
    
    /**
     * @ORM\ManyToOne(targetEntity="Place",inversedBy="teamMainLocation")
     * @ORM\JoinColumn(name="mainLocation_id", referencedColumnName="id", nullable=true)
     */
    private $mainLocationRelation;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $victory = 0;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $defeat = 0;

    /**
     * @ORM\OneToMany(targetEntity="InvitationTeam",mappedBy="team")
     */
    private $invitations_team_receive;

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
        $this->alias = str_replace(" ", "_", $name);
    }

    public function addProfile(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->profile[] = $profile;
        return $this;
    }

    public function getProfile() {
        return $this->profile;
    }

    //CATEGORY
    public function getCategory() {
        return $this->category;
    }

    public function setCategory(\Sportimimi\userBundle\Entity\Category $category) {
        $this->category = $category;
    }

    //LEADER	
    public function setLeader(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->leader = $profile;
    }

    public function getLeader() {
        return $this->leader;
    }

    public function removeProfile(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->profile->removeElement($profile);
        $profile->removeTeam($this);
    }

    public function getAlias() {
        return $this->alias;
    }

    // Main location
    public function getMainLocation() {
        return $this->mainLocation;
    }

    // set location
    public function setMainLocation($location) {
        $this->mainLocation = $location;
    }

    //Match

    public function addMatch(\Sportimimi\userBundle\Entity\Match $match) {
        $this->matchs[] = $match;
        return $this;
    }

    public function getMatchs() {
        return $this->matchs;
    }

    public function getVictory() {
        return $this->victory;
    }

    public function getDefeat() {
        return $this->defeat;
    }

    //POSITIONS
    public function getPositions() {
        return $this->positions;
    }

    public function getDocument() {
        return $this->document;
    }

    //PLACES
    public function setMainLocationRelation($place) {
       $this->mainLocationRelation = $place;
    }

    public function getMainLocationRelation() {
        return $this->mainLocationRelation;
    }
}
