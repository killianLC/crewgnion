<?php

namespace App\Repository;

use App\Entity\Repondre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Repondre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Repondre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Repondre[]    findAll()
 * @method Repondre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RepondreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Repondre::class);
    }

//    /**
//     * @return Repondre[] Returns an array of Repondre objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Repondre
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
    * @return Repondre[] Returns an array of Repondre objects
     */
    public function nbRepondre($id_user, $id_question)
    {
        $em = $this->getEntityManager();
            $query = $em->createQuery(' 
            SELECT repondre.id
            FROM App\Entity\Question question, App\Entity\Repondre repondre, App\Entity\Reponse reponse, App\Entity\User user
            WHERE question.id = reponse.question
            AND reponse.id = repondre.reponses
            AND user.id = repondre.users
            AND question.id = :id_question
            AND user.id = :id_user')
            ->setParameter('id_user', $id_user)
            ->setParameter('id_question', $id_question);
            
            return $query->execute();
    }
}
