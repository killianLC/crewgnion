<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

      /**
     * @Route("/accueil")
     */
    public function acc()
    {
        return $this->render('user/acc.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

      /**
     * @Route("/inscription", name="security_registration")
     */

    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
       $user = new User;
       $form = $this->createForm(RegistrationType::class,$user);
       
       $form->handleRequest($request);
       
       if($form->isSubmitted()&& $form->isValid())
       {
           $hash = $encoder->encodePassword($user, $user->getPassword());
           $user->setPassword($hash);
           $manager->persist($user);
           $manager->flush();
           
           return $this->redirectToRoute('security_login');
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
}
