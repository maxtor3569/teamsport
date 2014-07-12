<?php

// src/Sportimimi/userBundle/Entity/Match.php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="matchs")
 */
class Match {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")

     */
    protected $id;

    /**
     *  @var \Doctrine\Common\Collections\ArrayCollection
     *  @ORM\ManyToMany(targetEntity="Team", mappedBy="matchs")
     */
    private $teams;

    /**
     * @ORM\OneToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="winner_id", referencedColumnName="id")
     */
    protected $winner = null;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $score = null;

    public function getId() {
        return $this->id;
    }

    //Add a profile to a event
    public function addTeam(\Sportimimi\userBundle\Entity\Team $team) {
        $this->teams[] = $team;
        return $this;
    }

    public function getTeams() {
        return $this->teams;
    }

    public function getWinner() {
        return $this->winner;
    }

    public function setWinner(\Sportimimi\userBundle\Entity\Team $team) {
        $this->winner = $team;
    }

}
