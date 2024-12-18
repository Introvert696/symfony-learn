<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'])]
    public function getSong(int $id, LoggerInterface $logger): Response
    {
        // dd($id);
        // TODO query the database
        $song = [
            'id' => $id,
            'name' => 'Boulevard depo',
            'url' => "https://meowpad.pw/cdn/meowpad/sounds/58d49c22-molitva.mp3"
        ];


        $logger->info('Return Api response for song {song}', [
            'song' => $id,
        ]);
        // return new JsonResponse($song);
        return $this->json($song);
    }
}
