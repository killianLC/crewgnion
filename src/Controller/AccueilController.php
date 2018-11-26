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

                $quetes = $r1->getQuetes();
                
                return $this->render('accueil/profil.html.twig', array('r1'=>$r1, 'quetes'=>$quetes));
            }
            
            
        }
