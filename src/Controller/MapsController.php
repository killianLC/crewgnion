<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Quete;
use App\Entity\Position;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MapsController extends AbstractController
{
    /**
    * @Route("/mapsG/{id}", name="maps")
    */
    public function index($id)
    {
        $positionsF = $this->getDoctrine()->getRepository(Position::class)->recupPointF($id);

        $positionsNF = $this->getDoctrine()->getRepository(Position::class)->recupPointNF($id);
        
        $nbPositionsF = count($positionsF);
        $nbPositionsNF = count($positionsNF);
        
        dump($nbPositionsNF);dump($nbPositionsF);
        /*
        $session->set('lat',$lat);
        $session->set('long',$long);
        $session->set('loc','oui');
        
        $test= $this->getDoctrine()->getRepository(Position::class)->findAllPositionAutourPosition($lat,$long);
        */
        return $this->render('maps/mapsG.html.twig',array('positionsF'=> $positionsF, 'positionsNF' => $positionsNF, 'nbPositionsF'=>$nbPositionsF, 'nbPositionsNF'=>$nbPositionsNF));
    }
    
    /**
    * @Route("/maps/mapsQ/{id}", name="mapsI")
    */
    public function maps_Individuel($id)
    {
        
        $position = $this->getDoctrine()->getRepository(Quete::class)->find($id);
        
        dump($position);
        
        /*
        $session->set('lat',$lat);
        $session->set('long',$long);
        $session->set('loc','oui');
        
        $test= $this->getDoctrine()->getRepository(Position::class)->findAllPositionAutourPosition($lat,$long);
        */
        return $this->render('maps/mapsQ.html.twig',array('position'=>$position));
    }
    
}
