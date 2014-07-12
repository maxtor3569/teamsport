<?php
// src/Sportimimi/userBundle/Entity/Skills.php

namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="skills")
 */
class Skills 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/** @ORM\OneToOne(targetEntity="Profile") */
	private $profile;
	
	/**
     * @ORM\Column(type="integer")
	*/
	protected $agility = 0;
	/**
     * @ORM\Column(type="integer")
	*/
	protected $speed = 0;
	
	/**
     * @ORM\Column(type="integer")
	*/
	protected $stamina = 0;
	/**
     * @ORM\Column(type="integer")
	*/
	protected $strength = 0;
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
	
	public function getStrength()
    {
        return $this->strength;
    }
	public function setStrength($strength)
    {
        $this->strength = $strength;
    }
	
	public function getAgility()
    {
        return $this->agility;
    }
	
	public function setAgility($agility)
    {
        $this->agility = $agility;
    }
	
	public function getSpeed()
    {
        return $this->speed;
    }
	public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
	public function getStamina()
    {
        return $this->stamina;
    }
	
	public function setStamina($stamina)
    {
        $this->stamina = $stamina;
    }
    /**
     * Set profile
     *
     * @param \Sportimimi\userBundle\Entity\Profile $profile
     * @return User
     */
    public function setProfile(\Sportimimi\userBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \Sportimimi\userBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
