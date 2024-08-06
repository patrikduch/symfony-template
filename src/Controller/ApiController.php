<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\LocationService;

class ApiController extends AbstractController
{
    private $locationService;

    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    #[Route('/api/test', name: 'api_test', methods: ['GET'])]
    public function test(): JsonResponse
    {
        // Create a new Location entity
        $this->locationService->createLocation();

        // Fetch all Location entities from the database
        $locations = $this->locationService->getAllLocations();

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
