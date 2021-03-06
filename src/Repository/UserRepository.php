<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }

//    /**
//     * @return User[] Returns an array of User objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    /**
     * @return User[] Returns an array of User objects
     */
    public function recup_grade($id)
    {
        $qb = $this->createQueryBuilder('u')
        ->innerJoin('u.grade', 'g')
        ->addSelect('g')
        ->andWhere('u.id=:id')
        ->setParameter('id', $id)
        ->select('g.Nom_Grade', 'g.photo')
        ->getQuery();

        return $qb->execute();
    }

    public function findlog($username){
        $qb = $this->createQueryBuilder('u')
        ->where('u.username=:username')
        ->setParameter('username', $username)
        ->select('u.username', 'u.id', 'u.password', 'u.xp', 'u.coin')
        ->getQuery();
        
        return $qb->execute();
    }

    public function findUserByXp(){
        $qb = $this->createQueryBuilder('u')
        ->select('u.username', 'u.id', 'u.password', 'u.xp', 'u.coin')
        ->orderBy('u.xp')
        ->getQuery();
        
        return $qb->execute();
    }


}
