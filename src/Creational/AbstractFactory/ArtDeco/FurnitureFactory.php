<?php

namespace Creational\AbstractFactory\ArtDeco;

use Creational\AbstractFactory\Contracts\FurnitureFactory as FactoryContract;
use Creational\AbstractFactory\Contracts\Chair as ChairContract;
use Creational\AbstractFactory\Contracts\CoffeeTable as CoffeeTableContract;
use Creational\AbstractFactory\Contracts\Sofa as SofaContract;

class FurnitureFactory implements FactoryContract
{
    /**
     * @inheritDoc
     */
    public function createChair(): ChairContract
    {
        return new Chair();
    }

    /**
     * @inheritDoc
     */
    public function createCoffeeTable(): CoffeeTableContract
    {
        return new CoffeeTable();
    }

    /**
     * @inheritDoc
     */
    public function createSofa(): SofaContract
    {
        return new Sofa();
    }
}