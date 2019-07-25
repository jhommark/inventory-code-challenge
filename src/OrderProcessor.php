<?php

class OrderProcessor implements OrderProcessorInterface
{
    protected $products;
    protected $inventory;
    protected $sales;
    protected $orderCanceled = false;

    public function __construct(Products $products, InventoryInterface $inventory, SalesInterface $sales) {
        $this->products = $products;
        $this->inventory = $inventory;
        $this->sales = $sales;
    }

    public function orderCanceled(): boolean {
        return $this->orderCanceled;
    }

    public function cancelOrder(): void {
        $this->orderCanceled = true;
    }

    /**
     * This function receives the path of the json for all the orders of the week,
     * processes all orders for the week,
     * while keeping track of stock levels, units sold and purchased
     * See `orders-sample.json` for example
     *
     * @param string $filePath
     */
    public function processFromJson(string $filePath): void {
        if (!file_exists($filePath)) throw new Error('File does not exist');

        $string = file_get_contents($filePath);
        $json = json_decode($string, true);

        if (!$json) throw new Error('Invalid json');

        for ($i = 0; $i < 7; $i++) {
            if (!$orders = $json[$i]) continue;

            $this->inventory->checkBeginningStocksForDay($i);

            foreach ($orders as $orderLine) {
                foreach ($orderLine as $productId => $quantity) {
                    if ($this->inventory->getStockLevel($productId) < $quantity) {
                        $this->cancelOrder();
                        break;
                    }
                }

                if (!$this->orderCanceled) {
                    foreach ($orderLine as $productId => $quantity) {
                        $this->sales->add($productId, $quantity);
                        $this->inventory->deductStockLevelByProductId($productId, (int) $quantity);
                    }
                }
            }

            $this->inventory->checkEndingStocksForDay($i);
        }
    }
}
