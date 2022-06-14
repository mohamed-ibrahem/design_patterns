<?php

namespace Tests\Creational;

use Creational\AbstractFactory\Client;
use Creational\AbstractFactory\Modern;
use Creational\AbstractFactory\ArtDeco;
use Creational\AbstractFactory\Victorian;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    /** @test */
    public function it_can_get_modern_products(): void
    {
        $client = new Client(new Modern\FurnitureFactory());

        $this->assertInstanceOf(
            Modern\Chair::class,
            $client->createChair()
        );

        $this->assertInstanceOf(
            Modern\Sofa::class,
            $client->createSofa()
        );

        $this->assertInstanceOf(
            Modern\CoffeeTable::class,
            $client->createCoffeeTable()
        );
    }

    /** @test */
    public function it_can_get_atr_deco_products(): void
    {
        $client = new Client(new ArtDeco\FurnitureFactory());

        $this->assertInstanceOf(
            ArtDeco\Chair::class,
            $client->createChair()
        );

        $this->assertInstanceOf(
            ArtDeco\Sofa::class,
            $client->createSofa()
        );

        $this->assertInstanceOf(
            ArtDeco\CoffeeTable::class,
            $client->createCoffeeTable()
        );
    }

    /** @test */
    public function it_can_get_victorian_products(): void
    {
        $client = new Client(new Victorian\FurnitureFactory());

        $this->assertInstanceOf(
            Victorian\Chair::class,
            $client->createChair()
        );

        $this->assertInstanceOf(
            Victorian\Sofa::class,
            $client->createSofa()
        );

        $this->assertInstanceOf(
            Victorian\CoffeeTable::class,
            $client->createCoffeeTable()
        );
    }
}