<?php

abstract class Summary
{
  protected $products;
  protected $inventory;
  protected $sales;
  protected $purchaseOrder;

  public function __construct(Products $products, InventoryInterface $inventory, SalesInterface $sales, PurchaseOrder $purchaseOrder) {
    $this->products = $products;
    $this->inventory = $inventory;
    $this->sales = $sales;
    $this->purchaseOrder = $purchaseOrder;
  }

  public function data(): array {
    return [
      $this->products::BROWNIE => [
        'soldTotal' => $this->sales->getSoldTotal($this->products::BROWNIE),
        'purchasedPendingTotal' => $this->purchaseOrder->getPurchasedPendingTotal($this->products::BROWNIE),
        'purchasedReceiveTotal' => $this->purchaseOrder->getPurchasedReceivedTotal($this->products::BROWNIE),
        'stockLevel' => $this->inventory->getStockLevel($this->products::BROWNIE),
      ],
      $this->products::LAMINGTON => [
        'soldTotal' => $this->sales->getSoldTotal($this->products::LAMINGTON),
        'purchasedPendingTotal' => $this->purchaseOrder->getPurchasedPendingTotal($this->products::LAMINGTON),
        'purchasedReceiveTotal' => $this->purchaseOrder->getPurchasedReceivedTotal($this->products::LAMINGTON),
        'stockLevel' => $this->inventory->getStockLevel($this->products::LAMINGTON),
      ],
      $this->products::BLUEBERRY_MUFFIN => [
        'soldTotal' => $this->sales->getSoldTotal($this->products::BLUEBERRY_MUFFIN),
        'purchasedPendingTotal' => $this->purchaseOrder->getPurchasedPendingTotal($this->products::BLUEBERRY_MUFFIN),
        'purchasedReceiveTotal' => $this->purchaseOrder->getPurchasedReceivedTotal($this->products::BLUEBERRY_MUFFIN),
        'stockLevel' => $this->inventory->getStockLevel($this->products::BLUEBERRY_MUFFIN),
      ],
      $this->products::CROISSANT => [
        'soldTotal' => $this->sales->getSoldTotal($this->products::CROISSANT),
        'purchasedPendingTotal' => $this->purchaseOrder->getPurchasedPendingTotal($this->products::CROISSANT),
        'purchasedReceiveTotal' => $this->purchaseOrder->getPurchasedReceivedTotal($this->products::CROISSANT),
        'stockLevel' => $this->inventory->getStockLevel($this->products::CROISSANT),
      ],
      $this->products::CHOCOLATE_CAKE => [
        'soldTotal' => $this->sales->getSoldTotal($this->products::CHOCOLATE_CAKE),
        'purchasedPendingTotal' => $this->purchaseOrder->getPurchasedPendingTotal($this->products::CHOCOLATE_CAKE),
        'purchasedReceiveTotal' => $this->purchaseOrder->getPurchasedReceivedTotal($this->products::CHOCOLATE_CAKE),
        'stockLevel' => $this->inventory->getStockLevel($this->products::CHOCOLATE_CAKE),
      ],
    ];
  }
}
