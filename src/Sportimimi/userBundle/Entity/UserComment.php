<?php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * UserComment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserComment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    use TimestampableEntity;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="userComments")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    protected $profile;

    /**
     * @ORM\ManyToOne(targetEntity="Profile")
     * @ORM\JoinColumn(name="postedBy", referencedColumnName="id")
     */
    protected $postedBy;

    /**
     * @var UserRating
     * @ORM\ManyToOne(targetEntity="UserRating", cascade={"persist", "remove"})
     */
    protected $rate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return UserComment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $postedBy
     *
     * @return $this
     */
    public function setPostedBy($postedBy)
    {
        $this->postedBy = $postedBy;
        if ($this->getRate()) $this->getRate()->setRatedBy($postedBy);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostedBy()
    {
        return $this->postedBy;
    }

    /**
     * @param mixed $profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        if ($this->getRate()) $this->getRate()->setProfile($profile);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param UserRating $rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return UserRating
     */
    public function getRate()
    {
        return $this->rate;
    }
}
