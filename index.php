<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

$products = new Products;
$purchaseOrder = new PurchaseOrder;
$inventory = new Inventory($purchaseOrder);
$sales = new Sales;

$inventory->addStocks($products::BROWNIE);
$inventory->addStocks($products::LAMINGTON);
$inventory->addStocks($products::BLUEBERRY_MUFFIN);
$inventory->addStocks($products::CROISSANT);
$inventory->addStocks($products::CHOCOLATE_CAKE);

(new OrderProcessor($products, $inventory, $sales, $purchaseOrder))->processFromJson('orders-sample.json');

echo (new HtmlSummary($products, $inventory, $sales, $purchaseOrder))->output();

?>
