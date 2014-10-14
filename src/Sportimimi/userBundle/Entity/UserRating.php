<?php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UserRating
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserRating
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer")
     * @Assert\Range(min=1, max=5)
     */
    private $rate;

    /**
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="userRates")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    protected $profile;

    /**
     * @ORM\Column(name="profile_id", type="integer")
     */
    protected $profile_id;

    /**
     * @ORM\ManyToOne(targetEntity="Profile")
     * @ORM\JoinColumn(name="ratedBy", referencedColumnName="id")
     */
    protected $ratedBy;


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
     * Set rate
     *
     * @param integer $rate
     * @return UserRating
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
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
     * @param mixed $ratedBy
     *
     * @return $this
     */
    public function setRatedBy($ratedBy)
    {
        $this->ratedBy = $ratedBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRatedBy()
    {
        return $this->ratedBy;
    }

    public function getArray(){
        return array(
                "id" => $this->id,
                "rate" => $this->rate,
                "profile" =>$this->profile_id
            );
    }
}
