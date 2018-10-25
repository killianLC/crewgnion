<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Grade;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
    * @Route("/accueil", name="accueil")
    */
    public function index()
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            ]);
        }
        
        /**
        * @Route("/connecte", name="connecte")
        */
        public function connecte()
        {
            return $this->redirect('user/index.html.twig', [
                'controller_name' => 'UserController',
                ]);
            }
            
            /**
            * @Route("/profil/{id}", name="profil_user")
            */
            public function profil($id)
            {
                $r1 = $this->getDoctrine()->getRepository(User::class)->find($id);       
                
                return $this->render('accueil/profil.html.twig', array('r1'=>$r1));
            }
            
            /**
            * @Route("/grade/{id}", name="grade_user")
            */
            public function grade($id)
            {
                $r1 = $this->getDoctrine()->getRepository(User::class)->find($id);
                $r2 = $this->getDoctrine()->getRepository(Grade::class)->findAll();
                
                $xp = $r1->getXp();
                $ptgrade = $r1->getGrade()->getPointGrade();
                
                $progresscalcul = ($xp/$ptgrade) * 100;
                                
                return $this->render('accueil/grade.html.twig', array('r1'=>$r1, 'r2'=>$r2 , 'progressbar' => $progresscalcul));
            }

             /**
            * @Route("/gradeUp/{id}", name="gradeUp")
            */
            public function gradeUp($id)
            {
                $r1 = $this->getDoctrine()->getRepository(User::class)->find($id);
                $r2 = $this->getDoctrine()->getRepository(Grade::class)->findAll();
                
                $xp = $r1->getXp();
                $ptgrade = $r1->getGrade()->getPointGrade();
                
                $progresscalcul = ($xp/$ptgrade) * 100;

                //return $this->redirectToRoute('grade_user');
                                
                return $this->render('accueil/grade.html.twig', array('r1'=>$r1, 'r2'=>$r2 , 'progressbar' => $progresscalcul));
            }
        }
