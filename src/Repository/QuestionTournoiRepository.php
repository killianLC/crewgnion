<?php

namespace App\Repository;

use App\Entity\QuestionTournoi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QuestionTournoi|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionTournoi|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionTournoi[]    findAll()
 * @method QuestionTournoi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionTournoiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QuestionTournoi::class);
    }

//    /**
//     * @return QuestionTournoi[] Returns an array of QuestionTournoi objects
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
    public function findOneBySomeField($value): ?QuestionTournoi
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
