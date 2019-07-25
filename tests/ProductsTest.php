<?php

use PHPUnit\Framework\TestCase;

final class ProductsTest extends TestCase
{
    public function testHasBrownie(): void
    {
        $this->assertEquals(
            1,
            Products::BROWNIE
        );
    }

    public function testHasLamington(): void
    {
        $this->assertEquals(
            2,
            Products::LAMINGTON
        );
    }

    public function testHasBlueBerryMuffin(): void
    {
        $this->assertEquals(
            3,
            Products::BLUEBERRY_MUFFIN
        );
    }

    public function testHasCroissant(): void
    {
        $this->assertEquals(
            4,
            Products::CROISSANT
        );
    }

    public function testHasChocolateCake(): void
    {
        $this->assertEquals(
            5,
            Products::CHOCOLATE_CAKE
        );
    }
}
