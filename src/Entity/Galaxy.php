<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GalaxyRepository")
 */
class Galaxy
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $img_type;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SolarSystem", mappedBy="galaxyid", orphanRemoval=true)
     */
    private $solar_system;

    public function __construct()
    {
        $this->solar_system = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getImgType(): ?int
    {
        return $this->img_type;
    }

    public function setImgType(int $img_type): self
    {
        $this->img_type = $img_type;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|SolarSystem[]
     */
    public function getSolarSystem(): Collection
    {
        return $this->solar_system;
    }

    public function addSolarSystem(SolarSystem $solarSystem): self
    {
        if (!$this->solar_system->contains($solarSystem)) {
            $this->solar_system[] = $solarSystem;
            $solarSystem->setGalaxyid($this);
        }

        return $this;
    }

    public function removeSolarSystem(SolarSystem $solarSystem): self
    {
        if ($this->solar_system->contains($solarSystem)) {
            $this->solar_system->removeElement($solarSystem);
            // set the owning side to null (unless already changed)
            if ($solarSystem->getGalaxyid() === $this) {
                $solarSystem->setGalaxyid(null);
            }
        }

        return $this;
    }
}
