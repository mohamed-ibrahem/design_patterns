<?php

namespace Creational\AbstractFactory\Victorian;

use Creational\AbstractFactory\Contracts;

class Chair implements Contracts\Chair
{
    /**
     * @inheritDoc
     */
    public function hasLegs(): bool
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function price(): float
    {
        return 100;
    }
}