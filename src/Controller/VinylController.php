<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title: PB a nd Jams');
    }



    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug)
            $title = 'Genre^ :' . str_replace('-', ' ', $slug);
        else
            $title = "all genres";
        // $title = u(str_replace('-', ' ', $slug))->title(true);

        return new Response("Genre: " . $title);
    }
}
