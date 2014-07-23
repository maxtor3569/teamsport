<?php
namespace Sportimimi\AdminBundle\Factory;


class ClientFactory extends AbstractFactory
{

    public function createClient()
    {
        $class = $this->getClass();
        $client = new $class;

        return $client;
    }

    public function findClients()
    {
        return $this->getRepository()->findAll();
    }

    public function findClientBy(array $criteria)
    {
        return $this->getRepository()->findOneBy($criteria);
    }
} 