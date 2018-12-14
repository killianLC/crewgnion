<?php

namespace App\Repository;

use App\Entity\Reponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
* @method Reponse|null find($id, $lockMode = null, $lockVersion = null)
* @method Reponse|null findOneBy(array $criteria, array $orderBy = null)
* @method Reponse[]    findAll()
* @method Reponse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/
class ReponseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Reponse::class);
    }
    
    //    /**
    //     * @return Reponse[] Returns an array of Reponse objects
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
    public function findOneBySomeField($value): ?Reponse
    {
        return $this->createQueryBuilder('r')
        ->andWhere('r.exampleField = :val')
        ->setParameter('val', $value)
        ->getQuery()
        ->getOneOrNullResult()
        ;
    }
    */
    /**
    * @return Reponse[] Returns an array of Reponse objects
    */
    public function RecupReponseQuestion($id_question)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
        SELECT r.id, r.Libelle_reponse, r.reponse_bonne
        FROM App\Entity\Reponse r, App\Entity\Question q
        WHERE q.id = r.question
        AND q.id = :id_question
        AND r.reponse_bonne = 1
        ')
        ->setParameter('id_question', $id_question);
        return $query->execute();
    }
}
