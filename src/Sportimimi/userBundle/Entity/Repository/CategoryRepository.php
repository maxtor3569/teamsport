<?php

namespace Sportimimi\userBundle\Entity\Repository;


use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function findLikeName($name, $array = true)
    {
        $query = $this->createQueryBuilder('c')
            ->orWhere('c.nameVn LIKE :name')
            ->orWhere('c.nom LIKE :name')
            ->setParameter('name', sprintf('%%%s%%', $name))
        ;

        if ($array)
            return $query->getQuery()->getArrayResult();

        return $query->getQuery()->getResult();
    }
} 