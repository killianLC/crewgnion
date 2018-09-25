<?php

namespace App\Repository;

use App\Entity\TournoiMobil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TournoiMobil|null find($id, $lockMode = null, $lockVersion = null)
 * @method TournoiMobil|null findOneBy(array $criteria, array $orderBy = null)
 * @method TournoiMobil[]    findAll()
 * @method TournoiMobil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TournoiMobilRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TournoiMobil::class);
    }

//    /**
//     * @return TournoiMobil[] Returns an array of TournoiMobil objects
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
    public function findOneBySomeField($value): ?TournoiMobil
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
