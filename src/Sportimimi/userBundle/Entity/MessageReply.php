<?php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="message_reply")
 */
class MessageReply {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")

     */
    protected $id;

    /** @ORM\ManyToOne(targetEntity="Message", inversedBy="message_reply")
     * 
     */
    private $message;
    
    /** @ORM\ManyToOne(targetEntity="Profile", inversedBy="message_reply")
     * 
     */
    private $profile;
    /**
     * @ORM\Column(name="content", type="text",nullable=true)
     *
     */
    protected $content;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    public function getId() {
        return $this->id;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        return $this->content = $content;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        return $this->message = $message;
    }

    public function getProfile() {
        return $this->profile;
    }

    public function setProfile($profile) {
        return $this->profile = $profile;
    }

    public function getCreated() {
        return $this->created;
    }
}
