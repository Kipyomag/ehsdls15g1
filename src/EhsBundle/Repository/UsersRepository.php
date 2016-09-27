<?php

namespace EhsBundle\Repository;

/**
 * UsersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersRepository extends \Doctrine\ORM\EntityRepository
{
    public function findUsers($search){
        return $this
			->createQueryBuilder('u')
			->where('u.nom LIKE :search OR u.prenom LIKE :search')
			->orderBy('u.nom', 'ASC')
            ->setParameter('search', $search.'%')
			->getQuery()
			->getResult()
			;
    }
}
