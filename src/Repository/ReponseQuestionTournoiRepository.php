<?php

namespace App\Repository;

use App\Entity\ReponseQuestionTournoi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReponseQuestionTournoi|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReponseQuestionTournoi|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReponseQuestionTournoi[]    findAll()
 * @method ReponseQuestionTournoi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReponseQuestionTournoiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReponseQuestionTournoi::class);
    }

//    /**
//     * @return ReponseQuestionTournoi[] Returns an array of ReponseQuestionTournoi objects
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
    public function findOneBySomeField($value): ?ReponseQuestionTournoi
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
