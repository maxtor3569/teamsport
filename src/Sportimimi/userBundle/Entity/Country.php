<?php
namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
//Serialize entity for rest.
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;
use JMS\Serializer\Annotation\Type;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
 * @ExclusionPolicy("all")
 */

class Country
{
    /**
	 * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	 
    protected $id;

    /**
     * @ORM\Column( type="string", length=30, name="name", nullable=false )
     * @Expose
     */
    private $name;

	 /**
	 * @ORM\OneToMany(targetEntity="Profile", mappedBy="country")
	 */
    private $profile;
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
     * @return Country
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

    public function __toString()
    {
        return $this->getName();
    }

    public function getArray()
    {
        return array(
                "id" => $this->id,
                "name" => $this->name,
            );
    }
}
