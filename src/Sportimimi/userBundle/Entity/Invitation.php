<?php
// src/Sportimimi/userBundle/Entity/Invitation.php

namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="invitation")
 */
class Invitation 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @ORM\ManyToOne(targetEntity="Profile",inversedBy="invitations_send")
	 * @ORM\JoinColumn(name="profile_id_send", referencedColumnName="id", onDelete="SET NULL")
     */
    private $profile_send;

	/**
     * @ORM\ManyToOne(targetEntity="Profile",inversedBy="invitations_receive")
	 * @ORM\JoinColumn(name="profile_id_receive", referencedColumnName="id", onDelete="SET NULL")
     */
    private $profile_receive;
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
	
	
	public function setProfileSend(\Sportimimi\userBundle\Entity\Profile $profile)
	{
		$this->profile_send = $profile;
	
	}
	
	public function setProfileReceive(\Sportimimi\userBundle\Entity\Profile $profile)
	{
		$this->profile_receive = $profile;
	
	}
	
	public function getProfile_send()
	{
		return $this->profile_send;
	}
	
	public function getProfile_receive()
	{
		return $this->profile_receive;
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
