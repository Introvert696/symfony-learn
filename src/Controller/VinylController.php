<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['artist' => 'coolio', 'song' => 'Gansta paradise',],
            ['artist' => 'bolevard depo ', 'song' => ' coola',],
            ['artist' => 'Bato ', 'song' => 'instint',],
            ['artist' => 'boulevard depo', 'song' => 'Arhofuture',],
            ['artist' => 'Gangsta ', 'song' => 'somethink',],

        ];


        // $html =  $twig->render('vinyl/homepage.html.twig', [
        //     'title' => 'PB & jams',
        //     'tracks' => $tracks
        // ]);
        // // dd($html); 
        // return new Response($html);
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & jams',
            'tracks' => $tracks
        ]);
    }



    #[Route('/browse/{slug}', 'app_browse')]
    public function browse(string $slug = null): Response
    {
        // if ($slug)
        //     $title = 'Genre^ :' . str_replace('-', ' ', $slug);
        // else
        //     $title = "all genres";
        // $title = u(str_replace('-', ' ', $slug))->title(true);
        $genre = $slug ? str_replace('-', ' ', $slug) : null;
        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}
