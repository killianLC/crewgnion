<?php

namespace App\Controller;

use App\Entity\Position;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MapsController extends AbstractController
{
    /**
    * @Route("/mapsG/{id}", name="maps")
    */
    public function index()
    {
        $positions = $this->getDoctrine()->getRepository(Position::class)->findAll();
        // dump($positions);die();
    
        /*
        $session->set('lat',$lat); 
        $session->set('long',$long);  
        $session->set('loc','oui');

        $test= $this->getDoctrine()->getRepository(Position::class)->findAllPositionAutourPosition($lat,$long);
        */
        return $this->render('maps/mapsG.html.twig',array('positions'=>$positions));
    }
   

}
