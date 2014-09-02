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

}
