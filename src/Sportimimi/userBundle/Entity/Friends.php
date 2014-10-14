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
 * @ORM\Table(name="friends")
 */
class Friends
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $profile_id;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $friend_profile_id;

    public function getArray(){

    return array(
            "friendProfileId"   => $this->friend_profile_id
        );;
        }
}
    