<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JeuxController extends AbstractController
{
    /**
     * @Route("/jeux", name="jeux")
     */
    public function index()
    {
        return $this->render('jeux/index.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }
}
