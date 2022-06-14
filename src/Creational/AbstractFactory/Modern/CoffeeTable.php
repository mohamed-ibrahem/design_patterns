<?php

namespace Creational\AbstractFactory\Modern;

use Creational\AbstractFactory\Contracts;

class CoffeeTable implements Contracts\CoffeeTable
{
    /**
     * @inheritDoc
     */
    public function price(): float
    {
        return 700;
    }
}