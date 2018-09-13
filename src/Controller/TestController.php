<?php
namespace App\Controller;
use  Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Salarie;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestController
 *
 * @author killi
 */
class TestController extends Controller{
    /**
     * @Route("/")
     * @return Response
     */
    public function indexAction(){
        $uneVariable = new \stdClass();
        $uneVariable->v1 = "variable1";
        $uneVariable->v2 = "variable2";
        return $this->render('testUtilisateur/index.html.twig',['variable'=>$uneVariable]);
    }
    /**
     * @Route("/contact")
     * @return Response
     */
    public  function contactAction(){
        $nomprenom = new \stdClass();
        $nomprenom->nom = "Potter";
        $nomprenom->prenom = "Harry";
        return $this->render('testUtilisateur/contact.twig',['nomprenom'=>$nomprenom]);
        
    }
    /** @Route("/ajout")*/
    public function ajoutSalarie(){
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $product = new salarie();
        $product->setNomsalarie('Jaque');
        $product->setPrenomsalarie('Mickael');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('1\id est'.$product->getId());
    }
    //put your code here
}
