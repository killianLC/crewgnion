<?php

namespace App\Repository;

use App\Entity\Quete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Quete|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quete|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quete[]    findAll()
 * @method Quete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QueteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Quete::class);
    }

//    /**
//     * @return Quete[] Returns an array of Quete objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Quete
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * @return Quete[] Returns an array of Quete objects
     */
    public function QueteNonAcheter($id_user)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
        SELECT q.id, q.nom, q.latitude, q.longitude, q.xp, q.prix
        FROM App\Entity\Quete q
        WHERE q.id NOT IN (
            SELECT quete.id
            FROM App\Entity\Quete quete, App\Entity\User user, App\Entity\Acquerir acquerir
            WHERE quete.id = acquerir.quete
            AND user.id = acquerir.user
            AND user.id = :id
        )')
        ->setParameter('id', $id_user);
        return $query->execute();
    }

    public function findQuete(){
        $qb = $this->createQueryBuilder('q')
        ->select('q.id', 'q.descriptif', 'q.xp', 'q.prix', 'q.latitude', 'q.longitude', 'q.nom' )
        ->getQuery();
        
        return $qb->execute();
    }
}
