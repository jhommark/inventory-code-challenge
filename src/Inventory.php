<?php

class Inventory implements InventoryInterface
{
  protected $purchaseOrder;
  protected $stockLevel = [];
  protected $initialStockLevel = 20;
  protected $minimumStockLevel = 10;

  public function __construct(PurchaseOrderInterface $purchaseOrder, $stockLevel = []) {
    $this->purchaseOrder = $purchaseOrder;
    $this->stockLevel = $stockLevel;
  }

  /**
   * @return int
   */
  public function initialStockLevel(): int {
    return $this->initialStockLevel;
  }

  /**
   * @return int
   */
  public function minimumStockLevel(): int {
    return $this->minimumStockLevel;
  }

  /**
   * @param int $productId
   * @param int $quantity
   */
  public function addStocks(int $productId, int $quantity = null): void {
    $this->stockLevel[$productId] = $quantity ?? $this->initialStockLevel;
  }

  /**
   * @param int $productId
   * @return int
   */
  public function getStockLevel(int $productId): int {
    return $this->stockLevel[$productId];
  }

  /**
   * @param int $productId
   * @return int
   */
  public function deductStockLevelByProductId(int $productId, int $quantity): void {
    $this->stockLevel[$productId] -= $quantity;
  }

  public function checkBeginningStocksForDay($day): void {
    foreach ($this->stockLevel as $productId => $quantity) {
      if ($orderQuantity = $this->purchaseOrder->getOrderForDay($day, $productId)) {
        $this->addStocks($productId, $orderQuantity);
      }
    }
  }

  public function checkEndingStocksForDay($day): void {
    foreach ($this->stockLevel as $productId => $quantity) {
      if ($quantity < $this->minimumStockLevel) {
        $this->purchaseOrder->forDay($day)->add($productId, $this->initialStockLevel);
      }
    }
  }
}
