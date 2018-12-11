<?php

namespace App\Repository;

use App\Entity\Position;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
* @method Position|null find($id, $lockMode = null, $lockVersion = null)
* @method Position|null findOneBy(array $criteria, array $orderBy = null)
* @method Position[]    findAll()
* @method Position[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/
class PositionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Position::class);
    }
    
    //    /**
    //     * @return Position[] Returns an array of Position objects
    //     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
        ->andWhere('p.exampleField = :val')
        ->setParameter('val', $value)
        ->orderBy('p.id', 'ASC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult()
        ;
    }
    */
    
    /*
    public function findOneBySomeField($value): ?Position
    {
        return $this->createQueryBuilder('p')
        ->andWhere('p.exampleField = :val')
        ->setParameter('val', $value)
        ->getQuery()
        ->getOneOrNullResult()
        ;
    }
    */
    
    /**
    * @return Position[] Returns an array of Position objects
    */
    public function recupPointNF($id_user)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
        SELECT p.id, p.latitude, p.longitude, v.nomVille
        FROM App\Entity\Position p, App\Entity\Ville v
        WHERE p.id NOT IN (
            SELECT position.id
            FROM App\Entity\Position position, App\Entity\User user, App\Entity\Accomplir accomplir
            WHERE position.id = accomplir.positions
            AND user.id = accomplir.users
            AND user.id = :id
            )
            AND v.id = p.ville')
            ->setParameter('id', $id_user);
            
            return $query->execute();
        }
        
        /**
        * @return Position[] Returns an array of Position objects
        */
        public function recupPointF($id_user)
        {
            $em = $this->getEntityManager();
            $query = $em->createQuery('
            SELECT position.id, position.latitude, position.longitude, ville.nomVille
            FROM App\Entity\Position position, App\Entity\User user, App\Entity\Accomplir accomplir, App\Entity\Ville ville
            WHERE position.id = accomplir.positions
            AND user.id = accomplir.users
            AND user.id = :id
            AND ville.id = position.ville')
            ->setParameter('id', $id_user);
            
            return $query->execute();
        }
        /**
        * @return Position[] Returns an array of Position objects
        */
        public function pointF($id_user, $id)
        {
            $em = $this->getEntityManager();
            $query = $em->createQuery(' 
            SELECT position.id, position.latitude, position.longitude, position.rayon, ville.nomVille, accomplir.date
            FROM App\Entity\Position position, App\Entity\Ville ville, App\Entity\Accomplir accomplir, App\Entity\User user
            WHERE position.id = accomplir.positions
            AND user.id = accomplir.users
            AND position.id = :id
            AND user.id = :id_user
            AND ville.id = position.ville')
            ->setParameter('id_user', $id_user)
            ->setParameter('id', $id);
            
            return $query->execute();
        }
    }
