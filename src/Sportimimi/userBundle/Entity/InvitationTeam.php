<?php
// src/Sportimimi/userBundle/Entity/InvitationTeam.php

namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="invitation_profile_team")
 */
class InvitationTeam 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @ORM\ManyToOne(targetEntity="Profile",inversedBy="invitations_team_send")
	 * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    private $profile;

	/**
     * @ORM\ManyToOne(targetEntity="Team",inversedBy="invitations_team_receive")
	 * @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     */
    private $team;
	  /**
     * @ORM\Column(type="integer",nullable=true)
     */
	
	// 0 : Waiting
	// 1 : accept
	// 2 : Refused
	// 3 : Ignore
	protected $status;
	
	public function getId()
	{
		return $this->id;
	}
	
	
	public function setProfile(\Sportimimi\userBundle\Entity\Profile $profile)
	{
		$this->profile = $profile;
	
	}
	
	public function setTeam(\Sportimimi\userBundle\Entity\Team $team)
	{
		$this->team = $team;
	
	}
	
	public function getProfile()
	{
		return $this->profile;
	}
	
	public function getTeam()
	{
		return $this->team;
	}
	
	public function getStatus()
	{
		return $this->status;
	}
	public function setStatus($status)
	{
		$this->status = $status;
	}
}
