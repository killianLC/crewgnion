<?php

namespace App\Repository;

use App\Entity\QuestionApp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QuestionApp|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionApp|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionApp[]    findAll()
 * @method QuestionApp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionAppRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QuestionApp::class);
    }

//    /**
//     * @return QuestionApp[] Returns an array of QuestionApp objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuestionApp
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
