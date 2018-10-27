<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TournoiController extends AbstractController
{
    /**
     * @Route("/tournoi", name="tournoi")
     */
    public function index()
    {
        return $this->render('tournoi/index.html.twig', [
            'controller_name' => 'TournoiController',
        ]);
    }
}
