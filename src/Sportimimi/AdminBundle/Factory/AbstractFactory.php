<?php

namespace Sportimimi\AdminBundle\Factory;


use Doctrine\ORM\EntityManager;

abstract class AbstractFactory
{
    private $class;
    private $em;

    public function __construct(EntityManager $em, $class)
    {
        $this->em = $em;
        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getRepository()
    {
        return $this->em->getRepository($this->class);
    }
} 