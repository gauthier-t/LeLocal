<?php

namespace App\Repository;

use App\Entity\LocalInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LocalInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method LocalInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method LocalInfo[]    findAll()
 * @method LocalInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocalInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LocalInfo::class);
    }

    // /**
    //  * @return LocalInfo[] Returns an array of LocalInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LocalInfo
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
