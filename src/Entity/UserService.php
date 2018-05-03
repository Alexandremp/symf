<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserServiceRepository")
 */
class UserService
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $facebook_id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $google_id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $twitter_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_info_id;

    public function getId()
    {
        return $this->id;
    }

    public function getFacebookId(): ?string
    {
        return $this->facebook_id;
    }

    public function setFacebookId(?string $facebook_id): self
    {
        $this->facebook_id = $facebook_id;

        return $this;
    }

    public function getGoogleId(): ?string
    {
        return $this->google_id;
    }

    public function setGoogleId(?string $google_id): self
    {
        $this->google_id = $google_id;

        return $this;
    }

    public function getTwitterId(): ?string
    {
        return $this->twitter_id;
    }

    public function setTwitterId(?string $twitter_id): self
    {
        $this->twitter_id = $twitter_id;

        return $this;
    }

    public function getUserInfoId(): ?int
    {
        return $this->user_info_id;
    }

    public function setUserInfoId(int $user_info_id): self
    {
        $this->user_info_id = $user_info_id;

        return $this;
    }
}
