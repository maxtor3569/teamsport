<?php
// src/Sportimimi/userBundle/Entity/Category.php
namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="level")
 */
class Level
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
	 
     */
    protected $id;
	
	/**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */    
    private $level;
	
	/**
     * @ORM\ManyToOne(targetEntity="Profile",inversedBy="levels")
	 * @ORM\JoinColumn(name="profile_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $profile;
	
	/**
     * @ORM\ManyToOne(targetEntity="Category",inversedBy="levels")
	 * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $category;
	
	public function getLevel()
	{
		return $this->level;
	
	}
}
