<?php

namespace Sportimimi\userBundle\Entity\Repository;


use Doctrine\ORM\EntityRepository;

class PlaceRepository extends EntityRepository
{
    public function findLikeName($name, $array = true)
    {
        $query = $this->createQueryBuilder('p')
            ->orWhere('p.placeName LIKE :name')
            ->orWhere('p.address LIKE :name')
            ->setParameter('name', sprintf('%%%s%%', $name))
        ;

        if ($array)
            return $query->getQuery()->getArrayResult();

        return $query->getQuery()->getResult();
    }
} 