<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Quete;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShopController extends AbstractController
{
    /**
     * @Route("/shop/boutique/{id}", name="shop")
     */
    public function index($id)
    {
        $quetes = $this->getDoctrine()->getRepository(Quete::class)->findAll();

        return $this->render('shop/index.html.twig',array('quetes'=>$quetes));

    }
    /**
     * @Route("/shop/buy/{id}/{id_quete}", name="buy")
     */
    public function buy($id, $id_quete)
    {
        $manager = $this->getDoctrine()->getManager();

        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        $quete = $this->getDoctrine()->getRepository(Quete::class)->find($id_quete);

        $calcul_cc = $user->getCoin() - $quete->getPrix(); //calcul coin après achat

        $add = $user->addQuete($quete); //ajout de la quete a la collection de l'utilisateur
        $cc = $user->setCoin($calcul_cc); //modification du solde de l'utilisateur

        $manager->persist($add, $cc);
        $manager->flush();

        return $this->redirectToRoute('shop', array('id' => $id));

    }
}
