<?php

namespace App\Repository;

use App\Entity\Close;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Close|null find($id, $lockMode = null, $lockVersion = null)
 * @method Close|null findOneBy(array $criteria, array $orderBy = null)
 * @method Close[]    findAll()
 * @method Close[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Close::class);
    }

    // /**
    //  * @return Close[] Returns an array of Close objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Close
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
