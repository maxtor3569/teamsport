<?php
namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
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
	
}
