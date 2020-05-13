<?php

namespace App\Repository;

use App\Entity\InfoBanner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InfoBanner|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfoBanner|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfoBanner[]    findAll()
 * @method InfoBanner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoBannerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfoBanner::class);
    }

    // /**
    //  * @return InfoBanner[] Returns an array of InfoBanner objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InfoBanner
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
