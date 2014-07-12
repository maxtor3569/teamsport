<?php
// src/Sportimimi/userBundle/Entity/Comment.php
namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * @ORM\Entity
 * @ORM\Table(name="comment")
 */
class Comment
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
	 
     */
    protected $id;

	/**
     * @ORM\Column(type="string",length=5000)
     * @Assert\NotBlank()
     */    
    private $content;
	
	/**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

	
	/**
	 * @ORM\ManyToOne(targetEntity="Profile", inversedBy="comments")
	 * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
	*/
    protected $profile; 
	
	/**
	 * @ORM\ManyToOne(targetEntity="News", inversedBy="comments")
	 * @ORM\JoinColumn(name="news_id", referencedColumnName="id")
	*/
    protected $news; 
	
	public function getProfile()
	{
		return $this->profile;
	}
	
	public function setProfile(\Sportimimi\userBundle\Entity\Profile $author)
	{
		return $this->profile = $author;
	}
		
	public function getContent()
	{
		return $this->content;
	
	}
	
	public function setContent($content)
	{
		$this->content = $content;
		
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setNews(\Sportimimi\userBundle\Entity\News $news)
	{
		$this->news = $news;
	
	}
	
	
	
}
