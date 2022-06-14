<?php

namespace Creational\AbstractFactory\Victorian;

use Creational\AbstractFactory\Contracts;

class Sofa implements Contracts\Sofa
{
    /**
     * @inheritDoc
     */
    public function price(): float
    {
        return 700;
    }
}