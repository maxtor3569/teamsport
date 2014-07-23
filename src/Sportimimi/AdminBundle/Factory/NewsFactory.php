<?php

namespace Sportimimi\AdminBundle\Factory;

use Sportimimi\userBundle\Entity\News;

class NewsFactory extends AbstractFactory
{
    public function createNews()
    {
        $class = $this->getClass();
        $news = new $class;

        return $news;
    }

    public function findNewss()
    {
        return $this->getRepository()->findAll();
    }

    public function findNewsBy(array $criteria)
    {
        return $this->getRepository()->findOneBy($criteria);
    }
} 