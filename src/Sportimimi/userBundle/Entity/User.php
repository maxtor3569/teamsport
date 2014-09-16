<?php

// src/Sportimimi/userBundle/Entity/User.php

namespace Sportimimi\userBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
//Serialize entity for rest.
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ExclusionPolicy("all")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\OneToOne(targetEntity="Profile", mappedBy="user", cascade={"all"})
     * @Expose
     */
    private $profile;

    /**
     * @ORM\ManyToMany(targetEntity="Sportimimi\userBundle\Entity\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastActive;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $newsletter;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Expose
     */
    private $imei;

    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    protected $facebook_id;

    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebook_access_token;

    /** @ORM\Column(name="google_id", type="string", length=255, nullable=true) */
    protected $google_id;

    /** @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) */
    protected $google_access_token;

    /** @ORM\Column(name="yahoo_id", type="string", length=255, nullable=true) */
    protected $yahoo_id;

    /** @ORM\Column(name="yahoo_access_token", type="string", length=255, nullable=true) */
    protected $yahoo_access_token;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
	/**
     * Set Email
     *
     * @param \Sportimimi\userBundle\Entity\User 
     * @return User
     */
	public function setEmail($email)
	{
	    $email = is_null($email) ? '' : $email;
	    parent::setEmail($email);
	    $this->setUsername($email);

        return $this;
	}

    /**
     * Set profile
     *
     * @param \Sportimimi\userBundle\Entity\Profile $profile
     * @return User
     */
    public function setProfile(Profile $profile = null)
    {
        $this->profile = $profile;
        $profile->setUser($this);

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

    public function setLastActive($dateActive)
    {
        $this->lastActive = $dateActive;
    }

    /**
     * @param mixed $newsletter
     *
     * @return $this
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    public function getImei()
    {
        return $this->imei;
    }

    public function setImei($imei)
    {
        $this->imei = $imei;
    }

    /**
     * @param mixed $facebook_access_token
     *
     * @return $this
     */
    public function setFacebookAccessToken($facebook_access_token)
    {
        $this->facebook_access_token = $facebook_access_token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    /**
     * @param mixed $facebook_id
     *
     * @return $this
     */
    public function setFacebookId($facebook_id)
    {
        $this->facebook_id = $facebook_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * @param mixed $google_access_token
     *
     * @return $this
     */
    public function setGoogleAccessToken($google_access_token)
    {
        $this->google_access_token = $google_access_token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }

    /**
     * @param mixed $google_id
     *
     * @return $this
     */
    public function setGoogleId($google_id)
    {
        $this->google_id = $google_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * @param mixed $yahoo_access_token
     *
     * @return $this
     */
    public function setYahooAccessToken($yahoo_access_token)
    {
        $this->yahoo_access_token = $yahoo_access_token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYahooAccessToken()
    {
        return $this->yahoo_access_token;
    }

    /**
     * @param mixed $yahoo_id
     *
     * @return $this
     */
    public function setYahooId($yahoo_id)
    {
        $this->yahoo_id = $yahoo_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYahooId()
    {
        return $this->yahoo_id;
    }
}
