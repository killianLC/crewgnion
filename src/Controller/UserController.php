<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Grade;

use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends Controller
{
    /**
    * @Route("/", name="page_accueil_debut")
    */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            ]);
        }
        
        /**
        * @Route("/inscription", name="security_registration")
        */
        
        public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
        {
            $user = new User();
            $form = $this->createForm(RegistrationType::class,$user);
            
            $r1 = $this->getDoctrine()->getRepository(Grade::class)->find(1);
            
            $form->handleRequest($request);
            
            if($form->isSubmitted()&& $form->isValid())
            {
                $hash = $encoder->encodePassword($user, $user->getPassword());
                $user->setCoin(0);
                $user->setXp(0);
                $user->setGrade($r1);
                $user->setPassword($hash);
                $manager->persist($user);
                $manager->flush();
                
                return $this->redirect('security_login');
            }
            
            return $this->render('user/inscription.html.twig',['form' => $form->createView()]);
        }
        
        /**
        * @Route("/connexion", name="security_login")
        */
        public function connexion()
        {
            return $this->render('user/connexion.html.twig');
        }
        
        /**
        * @Route("/deconnexion", name="security_logout")
        */
        public function logout()
        {
            
        }
        
        /**
        * @Route("/user/update/{id}", name="modif")
        */
        public function modifier($id,Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
        {
            
            $user = $this->getDoctrine()->getRepository(User::class)->find($id);
            
            $form = $this->createForm(RegistrationType::class,$user);
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid())
            {
                $hash = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($hash);
                
                $manager->persist($user);
                $manager->flush();
                
                return $this->redirectToRoute('profil_user', array('id' => $id));
            }
            
            return $this->render('user/modifier.html.twig',['form' => $form->createView()]);
            
        }
        
        /**
        * @Route("/user/delete/{id}", name="delete_user")
        */
        
        public function supprimer($id)
        {
            $manager = $this->getDoctrine()->getManager();
            $user = $this->getDoctrine()->getRepository(User::class)->find($id);

            $manager->remove($user);
            $manager->flush();

           return $this->redirectToRoute('security_logout');
        }
        
        
        
    }
