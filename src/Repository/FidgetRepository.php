<?php

namespace App\Repository;

use App\Entity\Fidget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fidget|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fidget|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fidget[]    findAll()
 * @method Fidget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FidgetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fidget::class);
    }



//    /**
//     * @return Fidget[] Returns an array of Fidget objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    public function OrderByName()
    {
        return $this->createQueryBuilder('f')
            ->orderBy('f.viewCounter', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }

    /*
    public function findOneBySomeField($value): ?Fidget
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
