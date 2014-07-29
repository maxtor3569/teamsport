<?php

namespace Sportimimi\AdminBundle\Factory;

use Sportimimi\userBundle\Entity\Place;

class PlaceFactory extends AbstractFactory
{
    public function createPlace()
    {
        $class = $this->getClass();
        $place = new $class;

        return $place;
    }

    public function findPlaces()
    {
        return $this->getRepository()->findAll();
    }

    public function findPlaceBy(array $criteria)
    {
        return $this->getRepository()->findOneBy($criteria);
    }
} 