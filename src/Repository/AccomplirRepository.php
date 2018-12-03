<?php

namespace App\Repository;

use App\Entity\Accomplir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Accomplir|null find($id, $lockMode = null, $lockVersion = null)
 * @method Accomplir|null findOneBy(array $criteria, array $orderBy = null)
 * @method Accomplir[]    findAll()
 * @method Accomplir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccomplirRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Accomplir::class);
    }

//    /**
//     * @return Accomplir[] Returns an array of Accomplir objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Accomplir
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
