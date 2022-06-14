<?php

namespace Creational\AbstractFactory\ArtDeco;

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