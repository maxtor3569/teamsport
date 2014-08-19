<?php

namespace Sportimimi\userBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
//Serialize entity for rest.
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;
use JMS\Serializer\Annotation\Type;

/**
 * @ORM\Entity
 * @ORM\Table(name="profile")
 * @ExclusionPolicy("all")
 */
class Profile
{

    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @Expose
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="profile")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Country",inversedBy="profile")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * @Expose
     */
    protected $country;

    /**
     * @ORM\OneToMany(targetEntity="Image",mappedBy="profile", orphanRemoval=true)
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id")
     * @Expose
     */
    private $document;

    /**
     * @ORM\OneToMany(targetEntity="Notification",mappedBy="profile", orphanRemoval=true)
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $notifications;

    /**
     * @ORM\OneToMany(targetEntity="Invitation",mappedBy="profile_send", orphanRemoval=true)
     */
    private $invitations_send;

    /**
     * @ORM\OneToMany(targetEntity="Invitation",mappedBy="profile_receive")
     */
    private $invitations_receive;

    /**
     * @ORM\OneToMany(targetEntity="InvitationTeam",mappedBy="profile")
     */
    private $invitations_team_send;

    /**
     * @ORM\OneToMany(targetEntity="News",mappedBy="profile")
     */
    private $news;

    /**
     * @ORM\OneToMany(targetEntity="Team",mappedBy="leader")
     */
    private $leader;

    /**
     * @ORM\ManyToMany(targetEntity="Event", inversedBy="profile")
     * @ORM\JoinTable(name="profile_events")
     */
    private $events;

    /**
     * @ORM\ManyToMany(targetEntity="Team", inversedBy="profile")
     * @ORM\JoinTable(name="profile_teams")
     */
    private $teams;

    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="profile")
     * @ORM\JoinTable(name="profile_sports")
     * @Expose
     */
    protected $sports;

    /**
     * @ORM\ManyToMany(targetEntity="Profile", mappedBy="myFriends")
     */
    private $friendsWithMe;

    /**
     * @ORM\ManyToMany(targetEntity="Profile", inversedBy="friendsWithMe")
     * @ORM\JoinTable(name="friends",
     *      joinColumns={@ORM\JoinColumn(name="profile_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="friend_profile_id", referencedColumnName="id")}
     *      )
     */
    private $myFriends;

    /**
     * @ORM\OneToMany(targetEntity="Position",mappedBy="profile")
     * @Expose
     */
    private $positions;

    /**
     * @ORM\OneToMany(targetEntity="Level",mappedBy="profile")
     */
    private $levels;

    /**
     * @ORM\OneToMany(targetEntity="Comment",mappedBy="profile")
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="UserComment",mappedBy="profile")
     */
    private $userComments;

    /**
     * @ORM\OneToMany(targetEntity="UserRating",mappedBy="profile")
     */
    private $userRates;

    /**
     * @ORM\OneToOne(targetEntity="Skills")
     * @ORM\JoinColumn(name="skills_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $skills;

    /**
     * @ORM\Column(type="string",length=255, unique=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Expose
     */
    private $nom;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Expose
     */
    private $prenom;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="date",nullable=true)
     * @Assert\NotBlank()
     * @Expose
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string",length=1)
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {"M", "F"})
     */
    private $sexe;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Expose
     */
    private $description;

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     * @Expose
     */
    protected $phone;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $completion;


    /**
     * @ORM\OneToMany(targetEntity="Article",mappedBy="author")
     */
    private $articles;

    /**
     * @ORM\ManyToMany(targetEntity="Place", inversedBy="profile")
     * @ORM\JoinTable(name="profile_place")
     */
    private $places;
    //This represent where the player is currently playing with who
    /**
     * @ORM\ManyToMany(targetEntity="News", inversedBy="participants")
     * @ORM\JoinTable(name="profile_news")
     */
    private $playingTogether;

    /**
     * @ORM\OneToMany(targetEntity="PlaceCurrentlyPlay", mappedBy="profile")
     */
    private $placeCurrentlyPlay;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $searchPlayer;
    // Message : one profile can send lots of message
    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="profile_send")
     */
    protected $message_send;

    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="profile_recieve")
     */
    protected $message_recieve;

    /**
     * @ORM\OneToMany(targetEntity="MessageReply", mappedBy="profile")
     */
    protected $message_reply;

    public function __construct()
    {
        $this->friendsWithMe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->myFriends = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userComments = new ArrayCollection();
        $this->userRates = new ArrayCollection();
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($date)
    {
        $this->dateNaissance = $date;
    }

    // GENDER
    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    //SPORTS
    public function getSports()
    {
        return $this->sports;
    }

    public function setSports($sports)
    {
        $this->sports = $sports;
    }

    public function addSports($sport)
    {
        $this->sports[] = $sport;
    }

    // DOCUMENT
    public function getDocument()
    {
        return $this->document;
    }

    public function setDocument(\Sportimimi\userBundle\Entity\Image $document)
    {
        $this->document = $document;
    }

    //Phone
    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    // DESCRIPTION
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    //COUNTRY
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(\Sportimimi\userBundle\Entity\Country $country)
    {
        $this->country = $country;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($pass)
    {
        $this->password = '';
    }

    public function setUser(\Sportimimi\userBundle\Entity\User $user = null)
    {
        $this->user = $user;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEvents()
    {
        return $this->events;
    }

    public function addEvent(\Sportimimi\userBundle\Entity\Event $event)
    {
        $this->events[] = $event;
        return $this;
    }

    public function removeEvent(\Sportimimi\userBundle\Entity\Event $event)
    {
        $this->events->removeElement($event);
    }

    public function addTeam(\Sportimimi\userBundle\Entity\Team $team)
    {
        $this->teams[] = $team;
        return $this;
    }

    public function getTeams()
    {
        return $this->teams;
    }

    //PLACES
    public function addPlace(\Sportimimi\userBundle\Entity\Place $place)
    {
        $this->places[] = $place;
        return $this;
    }

    public function getPlaces()
    {
        return $this->places;
    }

    //SKILLS
    public function getSkills()
    {
        return $this->skills;
    }

    public function setSkills(\Sportimimi\userBundle\Entity\Skills $skills)
    {
        $this->skills = $skills;
    }

    //NOTIFICATIONS

    public function getNotifications()
    {
        return $this->notifications;
    }

    public function addNotifications(\Sportimimi\userBundle\Entity\Notification $notification)
    {
        $this->notifications[] = $notification;
        return $this;
    }

    public function removeTeam(\Sportimimi\userBundle\Entity\Team $team)
    {
        $this->teams->removeElement($team);
    }

    //POSITIONS
    public function getPositions()
    {
        return $this->positions;
    }

    public function addPosition(\Sportimimi\userBundle\Entity\Position $position)
    {
        $this->positions[] = $position;
        return $this;
    }

    //FRIENDS
    public function addFriend(\Sportimimi\userBundle\Entity\Profile $profile)
    {
        $this->myFriends[] = $profile;
        return $this;
    }

    public function getFriends()
    {
        return $this->myFriends;
    }

    // INVITAITIONS
    public function getInvitations_send()
    {
        return $this->invitations_send;
    }

    public function getInvitations_receive()
    {
        return $this->invitations_receive;
    }

    public function getInvitations_team_send()
    {
        return $this->invitations_team_send;
    }

    public function removeFriend(\Sportimimi\userBundle\Entity\Profile $profile)
    {
        $this->myFriends->removeElement($profile);
        $this->friendsWithMe->removeElement($profile);
    }

    public function getAge()
    {
        if (isset($this->dateNaissance)) {
            $dateInterval = $this->dateNaissance->diff(new \DateTime());
            if ($dateInterval->y == 22)
                $dateInterval->y++;
            return $dateInterval->y;
        }
    }

    // Levels

    public function getLevels()
    {
        return $this->levels;
    }

    public function getUser()
    {
        return $this->user;
    }

    //online or not?
    public function online()
    {
        $now = date('Y-m-d H:i:s');
        $lastActive = $this->lastActive;
        if ($lastActive == null)
            return 1000;
        //echo $lastActive;
        $time1 = strtotime($now);
        $time2 = strtotime($lastActive->format('Y-m-d H:i:s'));

        $diff = $time1 - $time2;
        return $diff;
    }

    //1 : player is looking for someone 0 : none
    public function setSearchPlayer($value)
    {
        $this->searchPlayer = $value;
    }

    public function getSearchPlayer()
    {
        return $this->searchPlayer;
    }

    // return place user are currently playing
    public function getPlaceCurrentlyPlay()
    {
        return $this->placeCurrentlyPlay;
    }

    //Make a user participate to a news
    public function addPlayNews(\Sportimimi\userBundle\Entity\News $news)
    {
        $this->playingTogether[] = $news;
        return $this;
    }

    public function removePlayNews(\Sportimimi\userBundle\Entity\News $news)
    {
        $this->playingTogether->removeElement($news);

    }

    //get message
    public function getMessage_recieve()
    {
        return $this->message_recieve;
    }


	public function getNews() { 
		return $this->news;
	}
    public function __toString()
    {
        return sprintf('%s, %s', $this->nom, $this->prenom);
    }

    /**
     * @param mixed $userComments
     *
     * @return $this
     */
    public function setUserComments($userComments)
    {
        $this->userComments = $userComments;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserComments()
    {
        return $this->userComments;
    }

    /**
     * @param mixed $userRates
     *
     * @return $this
     */
    public function setUserRates($userRates)
    {
        $this->userRates = $userRates;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserRates()
    {
        return $this->userRates;
    }
}
