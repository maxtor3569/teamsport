<?php
namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table( name="city" )
 */
class City
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\ManyToOne( targetEntity="Country" )
     * @ORM\JoinColumn( name="country", referencedColumnName="id" )
     */
    protected $country;

    /**
     * @ORM\Column(  type="string", length=30, name="name", nullable=false )
     */
    protected $name;

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
     * Set name
     *
     * @param string $name
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set country
     *
     * @param \Sportimimi\userBundle\Entity\Country $country
     * @return City
     */
    public function setCountry(\Sportimimi\userBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Sportimimi\userBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
