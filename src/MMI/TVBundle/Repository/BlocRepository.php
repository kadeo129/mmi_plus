<?php

namespace MMI\TVBundle\Repository;

/**
 * BlocRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BlocRepository extends \Doctrine\ORM\EntityRepository
{
    public function getOrderedBlocs($id)
    {
        $qb = $this->createQueryBuilder('b');

        $qb
            ->where('b.grid = :id')
            ->setParameter('id',$id)
            ->innerJoin('b.category','c')
            ->addSelect('c')
            ->addOrderBy('b.day','ASC')
            ->addOrderBy('b.slot','ASC')
        ;

        return $qb
            ->getQuery()
            ->getResult()
        ;
    }
}
