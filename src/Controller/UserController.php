<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

      /**
     * @Route("/accueil")
     */
    public function acc()
    {
        return $this->render('user/acc.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

      /**
     * @Route("/inscription")
     */
    public function inscription()
    {
        return $this->render('user/inscription.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

      /**
     * @Route("/connexion")
     */
    public function connexion()
    {
        return $this->render('user/connexion.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
