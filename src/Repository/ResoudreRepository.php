<?php

namespace App\Repository;

use App\Entity\Resoudre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Resoudre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Resoudre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Resoudre[]    findAll()
 * @method Resoudre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResoudreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Resoudre::class);
    }

//    /**
//     * @return Resoudre[] Returns an array of Resoudre objects
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
    public function findOneBySomeField($value): ?Resoudre
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
