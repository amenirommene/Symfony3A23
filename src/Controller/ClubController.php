<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    /**
     * @Route("/club", name="club_route")
     */
    public function index(): Response
    {
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }

/**
* @Route("/club/getName/{name}", name="get_club_route")
*/
    public function getName($name): Response
    {
        return $this->render('club/detail.html.twig', [
            'myName' => $name,
        ]);
    }
}
