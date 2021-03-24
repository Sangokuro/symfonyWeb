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

    /**
     * @Route("/creer_offre", name="creer_offre")
     */
    public function creer_offre(): Response
    {
        return $this->render('project/creer_offre.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/creer_entreprise", name="creer_entreprise")
     */
    public function creer_entreprise(): Response
    {
        return $this->render('project/creer_entreprise.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/creer_compte", name="creer_compte")
     */
    public function creer_compte(): Response
    {
        return $this->render('project/creer_compte.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/modifier_offre", name="modifier_offre")
     */
    public function modifier_offre(): Response
    {
        return $this->render('project/modifier_offre.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/modifier_entreprise", name="modifier_entreprise")
     */
    public function modifier_entreprise(): Response
    {
        return $this->render('project/modifier_entreprise.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/modifier_compte", name="modifier_compte")
     */
    public function modifier_compte(): Response
    {
        return $this->render('project/modifier_compte.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/comparaison_entreprise", name="comparaison_entreprise")
     */
    public function comparaison_entreprise(): Response
    {
        return $this->render('project/comparaison_entreprise.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/comparaison_offre", name="comparaison_offre")
     */
    public function comparaison_offre(): Response
    {
        return $this->render('project/comparaison_offre.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/assigner_droit", name="assigner_droit")
     */
    public function assigner_droit(): Response
    {
        return $this->render('project/assigner_droit.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/statistique_entreprise", name="statistique_entreprise")
     */
    public function statistique_entreprise(): Response
    {
        return $this->render('project/statistique_entreprise.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/statistique_offre", name="statistique_offre")
     */
    public function statistique_offre(): Response
    {
        return $this->render('project/statistique_offre.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/statistique_compte", name="statistique_compte")
     */
    public function statistique_compte(): Response
    {
        return $this->render('project/statistique_compte.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/evaluer_entreprise", name="evaluer_entreprise")
     */
    public function evaluer_entreprise(): Response
    {
        return $this->render('project/evaluer_entreprise.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/wishList", name="wishList")
     */
    public function wishList(): Response
    {
        return $this->render('project/wishList.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
}
