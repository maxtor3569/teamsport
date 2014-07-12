<?php

// src/Sportimimi/userBundle/Entity/Notification.php

namespace Sportimimi\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use \DateTime;
/**
 * @ORM\Entity
 * @ORM\Table(name="notification")
 */
class Notification {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="notifications")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")

     */
    private $profile;

    /**
     * @ORM\OneToOne(targetEntity="Invitation", cascade={"remove"})
     * @ORM\JoinColumn(name="invitation_id", referencedColumnName="id")
     */
    private $invitation;

    /**
     * @ORM\OneToOne(targetEntity="InvitationTeam", cascade={"remove"})
     * @ORM\JoinColumn(name="invitation_team_id", referencedColumnName="id")
     */
    private $invitationTeam;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */
    private $message;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    // 0 : not viewed
    // 1 : viewed
    private $viewed = 0;

    public function __construct() {
        $this->profile = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function sendNotification($user, $message) {

        $this->message = $message;
        $this->profile = $user;
    }

    public function getId() {
        return $this->id;
    }

    public function getMessage() {
        return html_entity_decode($this->message);
    }

    public function setMessage($message) {
        $this->message = htmlentities($message);
    }

    public function setProfile(\Sportimimi\userBundle\Entity\Profile $profile) {
        $this->profile = $profile;
    }

    public function setInvitation(\Sportimimi\userBundle\Entity\Invitation $invitation) {
        $this->invitation = $invitation;
    }

    public function setInvitation_team(\Sportimimi\userBundle\Entity\InvitationTeam $invitationTeam) {
        $this->invitationTeam = $invitationTeam;
    }

    public function setViewed() {
        $this->viewed = 1;
    }

    public function getCreated() {
        return $this->created;
    }

    public function getDiff() {
        $dt = new DateTime();
        $diff12 = date_diff($dt, $this->created);

        //accesing days
        $days = $diff12->d;
        //accesing months
        $months = $diff12->m;
        //accesing years
        $years = $diff12->y;
        $hours = $diff12->h;
        if ($days > 1)
            return $days. ' ngày';
        else
            return $hours. ' giờ';
    }
    public function getViewed() {
        return $this->viewed;
    }
}
