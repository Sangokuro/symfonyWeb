<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{

    /**
     * @Route("/", name="project")
     */
    public function index(): Response
    {
        return $this->render('project/home.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
}
