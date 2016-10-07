<?php

namespace EhsBundle\Repository;

/**
 * ArticlesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticlesRepository extends \Doctrine\ORM\EntityRepository
{
	public function findArticlesFromUser($id) {
		return $this
			->createQueryBuilder('a')
			->where('a.author = :author')
			->orderBy('a.status', 'ASC')
            ->setParameter('author', $id)
			->getQuery()
			->getResult()
			;
	}

	/**
	 * all articles without in progress ones
	 */
	public function findPublicArticles() {
		return $this
			->createQueryBuilder('a')
			->where('a.status != :status')
			->orderBy('a.status', 'ASC')
			->addOrderBy('a.date', 'DESC')
            ->setParameter('status', 'progress')
			->getQuery()
			->getResult()
			;
	}

	/**
	 * nbr of articles displayable
	 */
	public function countPublished()
	{
	    return $this
			->createQueryBuilder('a')
			->select('count(a.id)')
			->where('a.status = :status')
            ->setParameter('status', 'published')
			->getQuery()
			->getSingleScalarResult()
			;
	}
}
