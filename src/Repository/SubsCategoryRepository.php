<?php

namespace App\Repository;

use App\Entity\SubsCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SubsCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubsCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubsCategory[]    findAll()
 * @method SubsCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubsCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubsCategory::class);
    }

    // /**
    //  * @return SubsCategory[] Returns an array of SubsCategory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SubsCategory
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
