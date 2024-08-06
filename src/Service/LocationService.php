<?php

namespace App\Service;

use App\Entity\Location;
use Doctrine\ORM\EntityManagerInterface;

class LocationService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createLocation(): Location
    {
        $location = new Location();
        $this->entityManager->persist($location);
        $this->entityManager->flush();

        return $location;
    }

    public function getAllLocations(): array
    {
        return $this->entityManager->getRepository(Location::class)->findAll();
    }
}