<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SolarSystemRepository")
 */
class SolarSystem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $xaxis;

    /**
     * @ORM\Column(type="integer")
     */
    private $yaxis;

    /**
     * @ORM\Column(type="integer")
     */
    private $n_planets;

    /**
     * @ORM\Column(type="integer")
     */
    private $img_type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $galaxy_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Galaxy", inversedBy="solar_system")
     * @ORM\JoinColumn(nullable=false)
     */
    private $galaxyid;

    public function getId()
    {
        return $this->id;
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

    public function getXaxis(): ?int
    {
        return $this->xaxis;
    }

    public function setXaxis(int $xaxis): self
    {
        $this->xaxis = $xaxis;

        return $this;
    }

    public function getYaxis(): ?int
    {
        return $this->yaxis;
    }

    public function setYaxis(int $yaxis): self
    {
        $this->yaxis = $yaxis;

        return $this;
    }

    public function getNPlanets(): ?int
    {
        return $this->n_planets;
    }

    public function setNPlanets(int $n_planets): self
    {
        $this->n_planets = $n_planets;

        return $this;
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

    public function getGalaxyId(): ?int
    {
        return $this->galaxy_id;
    }

    public function setGalaxyId(?int $galaxy_id): self
    {
        $this->galaxy_id = $galaxy_id;

        return $this;
    }

    public function getGalaxyid(): ?Galaxy
    {
        return $this->galaxyid;
    }

    public function setGalaxyid(?Galaxy $galaxyid): self
    {
        $this->galaxyid = $galaxyid;

        return $this;
    }
}
