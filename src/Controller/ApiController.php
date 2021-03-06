<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Quete;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ApiController extends AbstractController
{
    /* 
    @Route("/api", name="api")
    */
    public function index()
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
            ]);
        }
        
        /* 
        @Route("/api_connexion", name="api_connexion")
        */
        public function api_connexion(Request $request, UserPasswordEncoderInterface $encoder)
        {
            $data = $request->getContent();
            $data = json_decode($data, true);
            
            $users = $this->getDoctrine()->getRepository(User::class)->findlog($data['username']);
            
            foreach ($users as $user) 
            {
                $hash = password_verify($data['password'], $user['password']);
                if($hash) 
                {
                    $data =  $this->get('serializer')->serialize($user, 'json');
                    
                    $response = new Response($data);
                    $response->headers->set('Content-Type', 'application/json');
                    
                    return $response;
                }
            }
            
            if (!$hash) 
            {
                throw $this->createNotFoundException(
                    'Erreur, MDP utilisateur inconnu.'
                );
            }                        
        }
   /* 
        @Route("/api_quete", name="api_quete")
        */
        public function api_quete(){

            $quetes = $this->getDoctrine()->getRepository(Quete::class)->findQuete();

            
            $data =  $this->get('serializer')->serialize($quetes, 'json');
            $response = new Response($data);
            $response->headers->set('Content-Type', 'application/json');
           
            return $response ;
                       

        }
/* 
        @Route("/api_classement", name="api_classement")
        */
        public function api_classement(){
            $classement = $this->getDoctrine()->getRepository(User::class)->findUserByXp();;
        
            $data =  $this->get('serializer')->serialize($classement, 'json');
            $response = new Response($data);
            $response->headers->set('Content-Type', 'application/json');
            
            return $response;
        }
    }
    