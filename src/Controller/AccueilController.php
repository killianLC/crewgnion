<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Grade;
use App\Entity\Acquerir;
use App\Entity\Quete;
use App\Entity\Tournoi;

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
                $user = $this->getDoctrine()->getRepository(User::class)->find($id);   
                
                $acquerirs = $this->getDoctrine()->getRepository(Acquerir::class)->findBy([
                    'user' => $user,
                    ]); //recupere les différents objets acquerir de l'utilisateur 
                    $quetes = [];
                    
                    if($acquerirs) // si il y a des objets dans la requete précédente alors 
                    {
                        $acquerir = [];                    
                        foreach($acquerirs as $acquerir) //parcour de la liste acquerirs
                        {
                            $quetes[] = $acquerir->getQuete(); //ajout de la quete d'acquerir dans la liste quetes 
                        }
                        return $this->render('accueil/profil.html.twig', array('r1'=>$user, 'quetes'=>$quetes));
                    }
                    return $this->render('accueil/profil.html.twig', array('r1'=>$user, 'quetes'=>$quetes));
                }
            /**
             * @Route("/info", name="info")
             */
            public function info()
            {
                $users = $this->getDoctrine()->getRepository(User::class)->findAll();

                $tournois = $this->getDoctrine()->getRepository(Tournoi::class)->findAll();

                $nbT = count($tournois);

                $nbUser = count($users);

                $nbCC = 0;
                $nbXp = 0;

                foreach($users as $user)
                {
                    $nbCC += $user->getCoin();                    
                    $nbXp += $user->getXp();
                }
                return $this->render('accueil/info.html.twig', array('nbUser' => $nbUser, 'nbCC' => $nbCC, 'nbXp' => $nbXp, 'nbT' => $nbT));
            }
                
                
            }
