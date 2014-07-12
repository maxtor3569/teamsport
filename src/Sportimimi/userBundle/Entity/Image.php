<?php
// src/Sdz/BlogBundle/Entity/Image.php
 
namespace Sportimimi\userBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
// N'oubliez pas ce use :
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity(repositoryClass="Sportimimi\userBundle\Entity\Image")
 * @ORM\HasLifecycleCallbacks
 */
class Image
{

 /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
 
  /**
   * @ORM\Column(name="url", type="string", length=255)
   */
  private $url;
 
   /**
   * @ORM\Column(name="type", type="string", length=255,nullable=true)
   */
  private $type;
  
	/**
	 * @ORM\ManyToOne(targetEntity="Profile", inversedBy="document", cascade={"remove", "persist"})
	*/
  private $profile;
  
  	/**
	 * @ORM\ManyToOne(targetEntity="Team", inversedBy="document", cascade={"remove", "persist"})
	*/
  private $team;
  
   	/**
	 * @ORM\ManyToOne(targetEntity="Event", inversedBy="document", cascade={"remove", "persist"})
	*/
  private $event;
  
  

  /**
   * @ORM\Column(name="alt", type="string", length=255)
   */
  private $alt;
 
  public $file;
  // On ajoute cet attribut pour y stocker le nom du fichier temporairement
  private $tempFilename;
 
  // On modifie le setter de File, pour prendre en compte l'upload d'un fichier lorsqu'il en existe déjà un autre
  public function setFile(UploadedFile $file)
  {
    $this->file = $file;
 
    // On vérifie si on avait déjà un fichier pour cette entité
    if (null !== $this->url) {
      // On sauvegarde l'extension du fichier pour le supprimer plus tard
      $this->tempFilename = $this->url;
 
      // On réinitialise les valeurs des attributs url et alt
      $this->url = null;
      $this->alt = null;
    }
  }
 
  /**
   * @ORM\PrePersist()
   * @ORM\PreUpdate()
   */
  public function preUpload()
  {
    // Si jamais il n'y a pas de fichier (champ facultatif)
    if (null === $this->file) {
      return;
    }
 
    // Le nom du fichier est son id, on doit juste stocker également son extension
    // Pour faire propre, on devrait renommer cet attribut en « extension », plutôt que « url »
    $this->url = $this->file->getClientOriginalExtension(); // guessExtension not working properly

    // Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
    $this->alt = $this->file->getClientOriginalName();
  }
 
  /**
   * @ORM\PostPersist()
   * @ORM\PostUpdate()
   */
  public function upload()
  {
    // Si jamais il n'y a pas de fichier (champ facultatif)
    if (null === $this->file) {
      return;
    }
 
    // Si on avait un ancien fichier, on le supprime
    if (null !== $this->tempFilename) {
      $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
      if (file_exists($oldFile)) {
        unlink($oldFile);
      }
    }
 
    // On déplace le fichier envoyé dans le répertoire de notre choix
    $this->file->move(
      $this->getUploadRootDir(), // Le répertoire de destination
      $this->id.'.'.$this->url   // Le nom du fichier à créer, ici « id.extension »
    );
	//echo $this->alt;
	//Convert into different format
	//This code convert video to ogg format.
	//for that you have to install ffmpeg2theora on your linux server 
	$commands="ffmpeg -i uploads/img/".$this->id.".".$this->url." -ar 22050 -ab 32 -f flv -s 320x240 uploads/img/".$this->id.".flv";
	//echo $commands;
	exec($commands);
	
  }
 
  /**
   * @ORM\PreRemove()
   */
  public function preRemoveUpload()
  {
    // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
    $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
  }
 
  /**
   * @ORM\PostRemove()
   */
  public function removeUpload()
  {
    // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
    if (file_exists($this->tempFilename)) {
      // On supprime le fichier
      unlink($this->tempFilename);
    }
  }
 
  public function getUploadDir()
  {
    // On retourne le chemin relatif vers l'image pour un navigateur
    return 'uploads/img';
  }
 
  protected function getUploadRootDir()
  {
    // On retourne le chemin relatif vers l'image pour notre code PHP
	return $_SERVER['DOCUMENT_ROOT'].'/'.$this->getUploadDir(); 
  }
 
	public function setProfile(\Sportimimi\userBundle\Entity\Profile $profile = null)
	{
	$this->profile = $profile;

	return $this;
	}

	public function getProfile()
	{
		return $this->profile;
	}
	
	public function getAlt()
	{
		return $this->alt;
	}
	
	public function getUrl()
	{
		return $this->url;
	}
	
	public function getId()
	{
		return $this->id;
	}
	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
	}
	
	//Image
	public function setEvent(\Sportimimi\userBundle\Entity\Event $event)
	{
		$this->event = $event;
	}
}