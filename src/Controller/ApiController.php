<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Location;

class ApiController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/api/test', name: 'api_test', methods: ['GET'])]
    public function test(): JsonResponse
    {

        // Create a new Location entity
        $location = new Location();
        $this->entityManager->persist($location);
        $this->entityManager->flush();
        
        // Fetch all Location entities from the database
        $locations = $this->entityManager->getRepository(Location::class)->findAll();


        // Convert Location entities to an array
        $data = [];
        foreach ($locations as $location) {
            $data[] = [
                'id' => $location->getId(),
            ];
        }


        return $this->json([
            'message' => 'Hello, this is a test API endpoint!',
            'status' => 'success',
            'data' => $data,
        ]);
    }
}
