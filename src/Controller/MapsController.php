<?php

namespace App\Controller;

use App\Entity\Position;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MapsController extends AbstractController
{
    /**
    * @Route("/mapsG/{id}", name="maps")
    */
    public function index($id)
    {

        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        dump($user);

        $user_id = $user->getId();

        dump($user_id);

        $positionsN = $this->getDoctrine()->getRepository(Position::class)->recupPointNF($user_id);

        dump($positionsN);die();        

        $positionsO = $user->getPositions();
        
        // dump($positions);die();
    
        /*
        $session->set('lat',$lat); 
        $session->set('long',$long);  
        $session->set('loc','oui');

        $test= $this->getDoctrine()->getRepository(Position::class)->findAllPositionAutourPosition($lat,$long);
        */
        return $this->render('maps/mapsG.html.twig',array('positions1'=>$positionsO, 'positions2'=>$positionsN));
    }
   

}
