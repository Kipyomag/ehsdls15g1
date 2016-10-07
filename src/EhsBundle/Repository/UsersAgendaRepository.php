<?php

namespace EhsBundle\Repository;

/**
 * UsersAgendaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersAgendaRepository extends \Doctrine\ORM\EntityRepository
{
	public function findUserFromAgenda($event) {
		return $this
			->createQueryBuilder('u')
            ->innerJoin('u.event', 'e', 'with', 'e.title=:event')
			->orderBy('u.nom', 'ASC')
            ->setParameter('event', $event)
			->getQuery()
			->getResult()
			;
	}
}
