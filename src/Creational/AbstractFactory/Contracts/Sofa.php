<?php

namespace Creational\AbstractFactory\Contracts;

interface Sofa
{
    /**
     * Get the sofa price.
     *
     * @return float
     */
    public function price(): float;
}