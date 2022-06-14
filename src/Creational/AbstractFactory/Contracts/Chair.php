<?php

namespace Creational\AbstractFactory\Contracts;

interface Chair
{
    /**
     * Determine if the chair have legs.
     *
     * @return bool
     */
    public function hasLegs(): bool;

    /**
     * Get the chair price.
     *
     * @return float
     */
    public function price(): float;
}