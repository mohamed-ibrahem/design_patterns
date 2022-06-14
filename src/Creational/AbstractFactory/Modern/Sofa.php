<?php

namespace Creational\AbstractFactory\Modern;

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