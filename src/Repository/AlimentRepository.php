<?php

namespace App\Repository;

use App\Entity\Aliment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Aliment>
 *
 * @method Aliment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aliment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aliment[]    findAll()
 * @method Aliment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlimentRepository extends ServiceEntityRepository
{


    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aliment::class);
    }

    public function save(Aliment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Aliment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllNames(): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('a.Nom')
            ->orderBy('a.Nom', 'ASC')
            ->getQuery();

        return $qb->getResult();
    }

// /**
//     * @return Aliment[] Returns an array of Aliment objects
//     */
    /**
     * @throws NonUniqueResultException
     * @throws NoResultException
     */
    public function findbyname( $name)
    {
        $queryBuilder = $this->createQueryBuilder('a')

        ->select('a.NbCal')

            ->where('a.Nom = :name')
            ->setParameter('name', $name);

        $query = $queryBuilder->getQuery();

        return $query->getSingleScalarResult();
    }
//    public function findOneBySomeField($value): ?Aliment
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
