<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Grade;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GradeController extends AbstractController
{
    /**
    * @Route("/grade/liste_grade/{id}", name="grade_user")
    */
    public function grade($id)
    {
        $r1 = $this->getDoctrine()->getRepository(User::class)->find($id);
        $r2 = $this->getDoctrine()->getRepository(Grade::class)->findAll();
        
        $xp = $r1->getXp();
        $ptgrade = $r1->getGrade()->getPointMax();
        
        $progresscalcul = ($xp/$ptgrade) * 100;
        
        return $this->render('grade/liste_grade.html.twig', array('r1'=>$r1, 'r2'=>$r2 , 'progressbar' => $progresscalcul));
    }
    
    /**
    * @Route("/gradeUp/{id}", name="gradeUp")
    */
    public function gradeUp($id)
    {
        $manager = $this->getDoctrine()->getManager();
        
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        $grade = $user->getGrade()->getId();

        $r1 = $this->getDoctrine()->getRepository(Grade::class)->find($grade+1);       
        
        $user->setGrade($r1);

        $manager->persist($user);
        $manager->flush();

        return $this->redirectToRoute('grade_user', array('id' => $id));
        
    }

    /**
     * @Route("/grade_in/{id}", name="gradeIn")
     */
    public function gradeIn($id)
    {
        $grade = $this->getDoctrine()->getRepository(Grade::class)->find($id);

        $users = $grade->getUsers();

        return $this->render('grade/grade_in.html.twig', array('users'=>$users, 'grade'=>$grade));
    }
}
