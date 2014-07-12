<?php
// src/Sportimimi/userBundle/Entity/Article.php
namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article
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
    private $name;

    /**
     * @ORM\Column(name="dateCreated", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @ORM\Column(type="string",length=1000)
     * @Assert\NotBlank()
     */    
    private $content;
	
	 /**
	 * @ORM\ManyToOne(targetEntity="Profile", inversedBy="articles", cascade={"remove"})
	 * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
	*/
    protected $author; 
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getContent()
	{
		return $this->content;
	}
	
	public function setContent($content)
	{
		return $this->content = $content;
	}
	
	public function setName($name)
	{
		return $this->name = $name;
	}
	
	public function getAuthor(\Sportimimi\userBundle\Entity\Profile $author)
	{
		return $this->author;
	}
	
	public function setAuthor(\Sportimimi\userBundle\Entity\Profile $author)
	{
		return $this->author = $author;
	}
	public function setDateCreated($date)
	{
		
		return $this->dateCreated = $date;
	
	}
	
}
