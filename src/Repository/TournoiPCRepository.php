<?php

namespace App\Repository;

use App\Entity\TournoiPC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TournoiPC|null find($id, $lockMode = null, $lockVersion = null)
 * @method TournoiPC|null findOneBy(array $criteria, array $orderBy = null)
 * @method TournoiPC[]    findAll()
 * @method TournoiPC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TournoiPCRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TournoiPC::class);
    }

//    /**
//     * @return TournoiPC[] Returns an array of TournoiPC objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TournoiPC
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
