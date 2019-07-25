<?php

use PHPUnit\Framework\TestCase;

final class InventoryTest extends TestCase
{
    public function testHasInitialStockOfTwenty(): void {
      $inventory = new Inventory(new PurchaseOrder);
      
      $this->assertEquals(
          20,
          $inventory->initialStockLevel()
      );
    }
}
