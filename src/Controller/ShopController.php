<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    /**
     * @Route("/shop/boutique/{id}", name="shop")
     */
    public function index()
    {
        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
}
