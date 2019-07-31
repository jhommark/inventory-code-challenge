<?php

use PHPUnit\Framework\TestCase;

final class InventoryTest extends TestCase
{
  /**
   * @covers \Inventory::initialStockLevel
   */
  public function testHasInitialStockOfTwenty(): void {
    $inventory = new Inventory(new PurchaseOrder);
    
    $this->assertEquals(
      20,
      $inventory->initialStockLevel()
    );
  }
}
