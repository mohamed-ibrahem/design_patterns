<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Contracts\Chair;
use Creational\AbstractFactory\Contracts\CoffeeTable;
use Creational\AbstractFactory\Contracts\FurnitureFactory;
use Creational\AbstractFactory\Contracts\Sofa;

class Client
{
    /**
     * @var FurnitureFactory
     */
    public FurnitureFactory $factory;

    /**
     * @param FurnitureFactory $factory
     */
    public function __construct(FurnitureFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return Chair
     */
    public function createChair(): Chair
    {
        return $this->factory->createChair();
    }

    /**
     * @return CoffeeTable
     */
    public function createCoffeeTable(): CoffeeTable
    {
        return $this->factory->createCoffeeTable();
    }

    /**
     * @return Sofa
     */
    public function createSofa(): Sofa
    {
        return $this->factory->createSofa();
    }
}