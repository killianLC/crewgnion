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
}
