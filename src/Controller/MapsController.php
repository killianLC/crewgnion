<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Quete;
use App\Entity\Reponse;
use App\Entity\Repondre;
use App\Entity\Position;
use App\Entity\Question;
use App\Entity\Resoudre;
use App\Entity\Accomplir;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MapsController extends AbstractController
{
    public function recupPointF($id)
    {
        $positionsF = $this->getDoctrine()->getRepository(Position::class)->recupPointF($id);
        return $positionsF;
    }
    public function recupPointNF($id)
    {
        $positionsNF = $this->getDoctrine()->getRepository(Position::class)->recupPointNF($id);
        return $positionsNF;
    }
    /**
    * @param float $latitudeFrom Latitude of start point in [deg decimal]
    * @param float $longitudeFrom Longitude of start point in [deg decimal]
    * @param float $latitudeTo Latitude of target point in [deg decimal]
    * @param float $longitudeTo Longitude of target point in [deg decimal]
    * @param float $earthRadius Mean earth radius in [m]
    * @return float Distance between points in [m] (same as earthRadius)
    */
    public function CalculDistanceEntre2Point($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
    {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);
        
        $lonDelta = $lonTo - $lonFrom;
        $a = pow(cos($latTo) * sin($lonDelta), 2) +
        pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
        $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);
        
        $angle = atan2(sqrt($a), $b);
        $distance = $angle * $earthRadius;
        return round($distance/1000, 2);
        
    }
    /**
    * @Route("/mapsG/{id}&{u_lat}&{u_lng}", name="maps")
    */
    public function index($id, $u_lat, $u_lng)
    {
        $positionsF = $this->recupPointF($id);
        
        $positionsNF = $this->recupPointNF($id);
        
        $user_lat = $u_lat;
        $user_lng = $u_lng;
        
        $nbPositionsF = count($positionsF);
        $nbPositionsNF = count($positionsNF);
        
        dump($nbPositionsNF);dump($nbPositionsF);
        
        return $this->render('maps/mapsG.html.twig',array('positionsF'=> $positionsF, 'positionsNF' => $positionsNF, 'nbPositionsF'=>$nbPositionsF, 'nbPositionsNF'=>$nbPositionsNF, 'user_lat' => $user_lat, 'user_lng'=> $user_lng));
    }
    
    /**
    * @Route("/maps/mapsQ/{id}&{id_user}&{u_lat}&{u_lng}", name="mapsQ")
    */
    public function mapsQ($id, $id_user, $u_lat, $u_lng)
    {
        
        $quete = $this->getDoctrine()->getRepository(Quete::class)->find($id);
        
        $r1 = $this->getDoctrine()->getRepository(Quete::class);
        
        $distance = $this->CalculDistanceEntre2Point($u_lat, $u_lng, $quete->getLatitude(), $quete->getLongitude());
        
        $distance_m = $distance * 1000;
        
        $queteF = $r1->QueteF($id_user, $id);
        
        return $this->render('maps/mapsQ.html.twig',array('position'=>$quete, 'distance' => $distance, 'queteF'=>$queteF, 'distanceM' => $distance_m, 'user_lat'=>$u_lat, 'user_lng'=>$u_lng));
    }
    
    /**
    * @Route("/maps/listePositionF/{id}&{u_lat}&{u_lng}", name="listeF")
    */
    public function liste_PositionF($id, $u_lat, $u_lng)
    {
        $positionsF = $this->recupPointF($id);
        $user_lat = $u_lat;
        $user_lng = $u_lng;
        
        return $this->render('maps/listePositionF.html.twig',array('positionsF'=>$positionsF, 'user_lat' => $user_lat, 'user_lng' => $user_lng));
    }
    
    /**
    * @Route("/maps/listePositionNF/{id}&{u_lat}&{u_lng}", name="listeNF")
    */
    public function liste_PositionNF($id, $u_lat, $u_lng)
    {
        $positionsNF = $this->recupPointNF($id);
        $user_lat = $u_lat;
        $user_lng = $u_lng;
        
        return $this->render('maps/listePositionNF.html.twig',array('positionsNF'=>$positionsNF, 'user_lat' => $user_lat, 'user_lng' => $user_lng));
    }
    
    /**
    * @Route("/maps/mapsI/{id}&{id_user}&{u_lat}&{u_lng}", name="mapsI")
    */
    public function mapsI($id, $id_user, $u_lat, $u_lng)
    {
        
        $position = $this->getDoctrine()->getRepository(Position::class)->find($id);
        
        $r1 = $this->getDoctrine()->getRepository(Position::class);
        
        $distance = $this->CalculDistanceEntre2Point($u_lat, $u_lng, $position->getLatitude(), $position->getLongitude());
        
        $distance_m = $distance * 1000;
        
        $positionF = $r1->PointF($id_user, $id);
        
        if($positionF)
        {
            return $this->render('maps/mapsI.html.twig',array('positionF'=>$positionF, 'position'=>$position, 'distance' => $distance, 'distanceM' => $distance_m, 'user_lat' => $u_lat, 'user_lng' => $u_lng));
        }
        else 
        {
            $vide = [];
            return $this->render('maps/mapsI.html.twig',array('position'=>$position, 'positionF'=>$vide, 'distance' => $distance, 'distanceM' => $distance_m, 'user_lat' => $u_lat, 'user_lng' => $u_lng));
        }
        
    }
    /**
    * @Route("/mapsError", name="mapsE")
    */
    public function maps_error()
    {
        return $this->render('maps/mapsError.html.twig');
    }
    
    /**
    * @Route("/maps/mapsV/{id}&{id_user}&{u_lat}&{u_lng}", name="validationQ")
    */
    public function mapsV($id, $id_user, $u_lat, $u_lng)
    {
        $manager = $this->getDoctrine()->getManager();
        
        $user = $this->getDoctrine()->getRepository(User::class)->find($id_user);
        
        $quete = $this->getDoctrine()->getRepository(Quete::class)->find($id);
        
        $date = new \DateTime();
        
        $resoudre = new Resoudre;
        $resoudre->setUser($this->getUser());
        $resoudre->setQuete($quete);
        $resoudre->setDate($date);
        $xp_user = $user->getXp() + $quete->getXp();
        $user = $user->setXp($xp_user);
        
        $this->addFlash("success", "Vous venez de validé la quête " .strval($quete->getNom()). " et vous avez gagnez " .strval($quete->getXp()). " Xp.");
        
        $manager->persist($resoudre);
        $manager->flush();
        
        return $this->redirectToRoute('mapsQ',array('id' => $id, 'id_user' => $id_user,'u_lat' =>  $u_lat, 'u_lng' => $u_lng));
        
    }
    /**
    * @Route("/maps/Question/{id}&{id_user}&{u_lat}&{u_lng}", name="Question")
    */
    public function Question($id, $id_user, $u_lat, $u_lng)
    {
        $position = $this->getDoctrine()->getRepository(Position::class)->find($id);

        $repondre = $this->getDoctrine()->getRepository(Repondre::class)->nbRepondre($id_user, $id);
        
        $nbEssai = count($repondre);

        $r1 = $this->getDoctrine()->getRepository(Position::class);
        
        $positionF = $r1->PointF($id_user, $id);
        
        $question = $position->getQuestion();
        
        $reponses = $question->getReponses();
        
        $reponseQuestion = $this->getDoctrine()->getRepository(Reponse::class)->RecupReponseQuestion($question->getId());

        if($positionF)
        {
            return $this->render('maps/question.html.twig',array('positionF'=>$positionF, 'position'=>$position, 'reponses' => $reponses, 'question' => $question, 'reponseQuestion' => $reponseQuestion, 'nbEssai' => $nbEssai));
        }
        else 
        {
            $vide = [];
            return $this->render('maps/question.html.twig',array('position'=>$position, 'positionF'=>$vide,'user_lat' => $u_lat, 'user_lng' => $u_lng, 'question'=>$question, 'reponses' => $reponses, 'nbEssai' => $nbEssai));
        }
        
        return $this->render('maps/question.html.twig');
    }
    
    /**
    * @Route("/maps/mapsI/repondre/{id_question}&{id_position}&{id_user}&{id_reponse}&{u_lat}&{u_lng}", name="Repondre")
    */
    public function repondre($id_question, $id_position, $id_user, $id_reponse, $u_lat, $u_lng)
    {
        $manager = $this->getDoctrine()->getManager();

        $reponse = $this->getDoctrine()->getRepository(Reponse::class)->find($id_reponse);
        
        $user = $this->getDoctrine()->getRepository(User::class)->find($id_user);
        
        $question = $this->getDoctrine()->getRepository(Question::class)->find($id_question);
        
        $position = $this->getDoctrine()->getRepository(Position::class)->find($id_position);
        
        if ($reponse->getReponseBonne() == true)
        {
            $date = new \DateTime();
            
            $repondre = new Repondre;
            $repondre->setUsers($user);
            $repondre->setReponses($reponse);
            
            $accomplir = new Accomplir;
            $accomplir->setDate($date);
            $accomplir->setPositions($position);
            $accomplir->setUsers($user);
            
            $add_xp = $user->getXp() + $question->getExperience();
            $add_cc = $user->getCoin() + $question->getPointGagne();

            $user = $user->setXp($add_xp);
            $user->setXp($add_xp);
            $user->setCoin($add_cc);
            
            $manager->persist($repondre);
            $manager->persist($accomplir);
            $manager->flush();
            
            $this->addFlash("success", "Bonne réponse ! Vous avez gagné " .strval($question->getExperience()). " Xp et " .strval($question->getPointGagne()). " CC.");

            return $this->redirectToRoute('Question',array('id' => $id_position, 'id_user' => $id_user,'u_lat' =>  $u_lat, 'u_lng' => $u_lng));
        } else {

            $repondre = new Repondre;
            $repondre->setUsers($user);
            $repondre->setReponses($reponse);

            $manager->persist($repondre);
            $manager->flush();
            
            $this->addFlash("danger", "Mauvaise réponse ! Réessayer :)");

            return $this->redirectToRoute('Question',array('id' => $id_position, 'id_user' => $id_user,'u_lat' =>  $u_lat, 'u_lng' => $u_lng));
        }
    }
    
    
    
}
