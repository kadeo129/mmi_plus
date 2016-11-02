<?php

namespace MMI\TVBundle\Repository;

/**
 * GridRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GridRepository extends \Doctrine\ORM\EntityRepository
{
    public function getMostRecentId()
    {
        $qb = $this->createQueryBuilder('g');

        $qb
            ->orderBy('g.id','DESC')
            ->setMaxResults(1)
            ;

        return $qb
                ->getQuery()
                ->getSingleResult()
        ;
    }

    public function getOldGrids($limit)
    {
        $qb = $this->createQueryBuilder('g');

        $qb
            ->where($qb->expr()->lte('g.week',':limit'))
            ->setParameter('limit',$limit);
        ;

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }


}
