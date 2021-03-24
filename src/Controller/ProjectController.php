<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('project/home.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(): Response
    {
        return $this->render('project/connexion.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu(): Response
    {
        return $this->render('project/menu.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/gerer_candidature", name="gerer_candidature")
     */
    public function gerer_candidature(): Response
    {
        return $this->render('project/gerer_candidature.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/gerer_entreprise", name="gerer_entreprise")
     */
    public function gerer_entreprise(): Response
    {
        return $this->render('project/gerer_entreprise.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/gerer_compte", name="gerer_compte")
     */
    public function gerer_compte(): Response
    {
        return $this->render('project/gerer_compte.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/gerer_offre", name="gerer_offre")
     */
    public function gerer_offre(): Response
    {
        return $this->render('project/gerer_offre.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
}
