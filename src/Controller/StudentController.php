<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student/{name}", name="student")
     */
    public function index($name): Response
    {
        return $this->render('student/index.html.twig', [
            'classe' => '3A23333','xxx'=>$name
        ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function index2(): Response
    {
        return new Response("Technologies web 2.0");
    }

}
