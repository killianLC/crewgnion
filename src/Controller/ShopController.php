<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Quete;
use App\Entity\Acquerir;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShopController extends AbstractController
{
    /**
    * @Route("/shop/boutique/{id}", name="shop")
    */
    public function index($id)
    {
        $quetes = $this->getDoctrine()->getRepository(Quete::class)->QueteNonAcheter($id);
       
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        
        return $this->render('shop/index.html.twig',array('quetes'=>$quetes, 'user'=>$user));
        
    }
    /**
    * @Route("/shop/buy/{id}/{id_quete}", name="buy")
    */
    public function buy($id, $id_quete)
    {
        $manager = $this->getDoctrine()->getManager();
        
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        
        $quete = $this->getDoctrine()->getRepository(Quete::class)->find($id_quete);
        
        if($quete->getPrix() <= $user->getCoin())
        {
            $date = new \DateTime();

            $acquerir = new Acquerir;
            $acquerir->setUser($this->getUser());
            $acquerir->setQuete($quete);
            $acquerir->setDate($date);

            //dump($acquerir);die();

            $this->addFlash("success", "Vous venez d'acheter la quête " .strval($quete->getNom())." pour ".strval($quete->getPrix())." CC");
            
            $calcul_cc = $user->getCoin() - $quete->getPrix(); //calcul coin après achat
            $cc = $user->setCoin($calcul_cc); //modification du solde de l'utilisateur
            
            $manager->persist($acquerir);
            $manager->flush();
        }
        else
        {
            $cc_manquant = $quete->getPrix() - $user->getCoin();
            
            $this->addFlash("warning", "Vous ne pouvez pas achter la quête " .strval($quete->getNom()).", il vous manque ". $cc_manquant ." CC");
        }      
        
        return $this->redirectToRoute('shop', array('id' => $id));
        
    }
}
