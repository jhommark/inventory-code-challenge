<?php

use PHPUnit\Framework\TestCase;

final class ProductsTest extends TestCase
{
    /**
     * @covers \Products::BROWNIE
     */
    public function testHasBrownie(): void
    {
        $this->assertEquals(
            1,
            Products::BROWNIE
        );
    }

    /**
     * @covers \Products::LAMINGTON
     */
    public function testHasLamington(): void
    {
        $this->assertEquals(
            2,
            Products::LAMINGTON
        );
    }

    /**
     * @covers \Products::BLUEBERRY_MUFFIN
     */
    public function testHasBlueBerryMuffin(): void
    {
        $this->assertEquals(
            3,
            Products::BLUEBERRY_MUFFIN
        );
    }

    /**
     * @covers \Products::CROISSANT
     */
    public function testHasCroissant(): void
    {
        $this->assertEquals(
            4,
            Products::CROISSANT
        );
    }

    /**
     * @covers \Products::CHOCOLATE_CAKE
     */
    public function testHasChocolateCake(): void
    {
        $this->assertEquals(
            5,
            Products::CHOCOLATE_CAKE
        );
    }
}
