<?php

namespace App\Entity;

use App\Repository\LocationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocationRepository::class)]
class Location
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $latitude = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $longitude = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }
}