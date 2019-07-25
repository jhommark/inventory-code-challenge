<?php

class HtmlSummary extends Summary implements SummaryInterface {
  public function output(): string {
    $data = $this->data();

    return '
      <div style="font-family: Arial, Sans-serif">
        <h2>Brownie</h2>
        &emsp;<strong>Total Units Sold:</strong> ' . $data[$this->products::BROWNIE]['soldTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Pending:</strong> ' . $data[$this->products::BROWNIE]['purchasedPendingTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Received:</strong> ' . $data[$this->products::BROWNIE]['purchasedReceiveTotal'] . '<br />
        &emsp;<strong>Current Stock Level:</strong> ' . $data[$this->products::BROWNIE]['stockLevel'] . '<br />
        <h2>Lamington</h2>
        &emsp;<strong>Total Units Sold:</strong> ' . $data[$this->products::LAMINGTON]['soldTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Pending:</strong> ' . $data[$this->products::LAMINGTON]['purchasedPendingTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Received:</strong> ' . $data[$this->products::LAMINGTON]['purchasedReceiveTotal'] . '<br />
        &emsp;<strong>Current Stock Level:</strong> ' . $data[$this->products::LAMINGTON]['stockLevel'] . '<br />
        <h2>Blueberry Muffin</h2>
        &emsp;<strong>Total Units Sold:</strong> ' . $data[$this->products::BLUEBERRY_MUFFIN]['soldTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Pending:</strong> ' . $data[$this->products::BLUEBERRY_MUFFIN]['purchasedPendingTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Received:</strong> ' . $data[$this->products::BLUEBERRY_MUFFIN]['purchasedReceiveTotal'] . '<br />
        &emsp;<strong>Current Stock Level:</strong> ' . $data[$this->products::BLUEBERRY_MUFFIN]['stockLevel'] . '<br />
        <h2>Croissant</h2>
        &emsp;<strong>Total Units Sold:</strong> ' . $data[$this->products::CROISSANT]['soldTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Pending:</strong> ' . $data[$this->products::CROISSANT]['purchasedPendingTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Received:</strong> ' . $data[$this->products::CROISSANT]['purchasedReceiveTotal'] . '<br />
        &emsp;<strong>Current Stock Level:</strong> ' . $data[$this->products::CROISSANT]['stockLevel'] . '<br />
        <h2>Chocolate Cake</h2>
        &emsp;<strong>Total Units Sold:</strong> ' . $data[$this->products::CHOCOLATE_CAKE]['soldTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Pending:</strong> ' . $data[$this->products::CHOCOLATE_CAKE]['purchasedPendingTotal'] . '<br />
        &emsp;<strong>Total Units Purchased and Received:</strong> ' . $data[$this->products::CHOCOLATE_CAKE]['purchasedReceiveTotal'] . '<br />
        &emsp;<strong>Current Stock Level:</strong> ' . $data[$this->products::CHOCOLATE_CAKE]['stockLevel'] . '<br />
      </div>
    ';
  }
}
