<?php

namespace Creational\AbstractFactory\Contracts;

interface CoffeeTable
{
    /**
     * Get the table price.
     *
     * @return float
     */
    public function price(): float;
}