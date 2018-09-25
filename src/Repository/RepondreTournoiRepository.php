<?php

namespace App\Repository;

use App\Entity\RepondreTournoi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RepondreTournoi|null find($id, $lockMode = null, $lockVersion = null)
 * @method RepondreTournoi|null findOneBy(array $criteria, array $orderBy = null)
 * @method RepondreTournoi[]    findAll()
 * @method RepondreTournoi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RepondreTournoiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RepondreTournoi::class);
    }

//    /**
//     * @return RepondreTournoi[] Returns an array of RepondreTournoi objects
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
    public function findOneBySomeField($value): ?RepondreTournoi
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
