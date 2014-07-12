<?php

// src/Sportimimi/userBundle/Entity/Match.php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="message")
 */
class Message {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")

     */
    protected $id;

    /** @ORM\ManyToOne(targetEntity="Profile", inversedBy="message_send")
     * 
     */
    private $profile_send;

    /** @ORM\ManyToOne(targetEntity="Profile", inversedBy="message_recieve")
     * 
     */
    private $profile_recieve;

    /** @ORM\OneToMany(targetEntity="MessageReply", mappedBy="message")
     * 
     */
    private $message_reply;

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

    public function getProfile_send() {
        return $this->profile_send;
    }

    public function setProfile_send(\Sportimimi\userBundle\Entity\Profile $profile) {
        return $this->profile_send = $profile;
    }

    public function getProfile_recieve() {
        return $this->profile_recieve;
    }

    public function setProfile_recieve(\Sportimimi\userBundle\Entity\Profile $profile) {
        return $this->profile_recieve = $profile;
    }
    
    public function getMessage_reply() {
        return $this->message_reply;
    }
    
}
