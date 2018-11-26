<?php

namespace App\Repository;

use App\Entity\Position;
use app\Entity\User;
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
    
    /* public function findAllPositionAutourPosition($latitude,$longitude): array
    {
        
        $qb = $this->createQueryBuilder('p')
        ->andWhere('distance(p.latitude,:latitude,p.latitude,:latitude,p.longitude,:longitude ) < 1000' )
        ->orderBy('distance(p.latitude,:latitude,p.latitude,:latitude,p.longitude,:longitude )', 'ASC')
        ->setParameter('latitude', $latitude)
        ->setParameter('longitude', $longitude)
        ->addselect('distance(p.latitude,:latitude,p.latitude,:latitude,p.longitude,:longitude )AS gps')
        ->getQuery();
        
        return $qb->execute();
    }*/
    
    /**
     * @return Position[] Returns an array of Position objects
     */
    public function recupPointNF($user_id)
    {        
        $query = $this->getEntityManager()->createQuery('select p.id, p.Latitude_Position, p.Longitude_Position
                                                     FROM App\Entity\Position p
                                                     WHERE p.id NOT IN (SELECT position.id 
                                                     FROM App\Entity\Position position, App\Entity\User user
                                                     WHERE  position.id = user.positions 
                                                     AND user.id = :id )')
        ->setParameter('id', $user_id);

        return $query->execute();
        
    }
    
}
