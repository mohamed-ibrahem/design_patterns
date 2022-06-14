<?php

namespace Creational\AbstractFactory\Contracts;

interface FurnitureFactory
{
    /**
     * Create chair object.
     *
     * @return Chair
     */
    public function createChair(): Chair;

    /**
     * Create coffee table object.
     *
     * @return CoffeeTable
     */
    public function createCoffeeTable(): CoffeeTable;

    /**
     * Create sofa object.
     *
     * @return Sofa
     */
    public function createSofa(): Sofa;
}