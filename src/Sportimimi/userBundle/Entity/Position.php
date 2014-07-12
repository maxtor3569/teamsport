<?php

// src/Sportimimi/userBundle/Entity/Position.php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="position")
 * @ORM\HasLifecycleCallbacks
 */
class Position {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")

     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Profile",inversedBy="positions")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    protected $profile;

    /**
     * @ORM\ManyToOne(targetEntity="Team",inversedBy="positions")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     */
    protected $team;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    protected $topPos = 0;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    protected $leftPos = 0;

    public function getName() {
        return $this->name;
    }

    public function setProfile(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->profile = $profile;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setTeam(\Sportimimi\userBundle\Entity\Team $team) {
        $this->team = $team;
    }

    public function getTeam() {
        return $this->team;
    }

    public function setTopPos($pos) {
        $this->topPos = $pos;
    }

}
