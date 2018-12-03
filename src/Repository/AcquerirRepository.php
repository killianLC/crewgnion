<?php

namespace App\Repository;

use App\Entity\Acquerir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Acquerir|null find($id, $lockMode = null, $lockVersion = null)
 * @method Acquerir|null findOneBy(array $criteria, array $orderBy = null)
 * @method Acquerir[]    findAll()
 * @method Acquerir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcquerirRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Acquerir::class);
    }

//    /**
//     * @return Acquerir[] Returns an array of Acquerir objects
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
    public function findOneBySomeField($value): ?Acquerir
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
