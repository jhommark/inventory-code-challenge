<?php

interface InventoryInterface
{
    /**
     * @return int
     */
    public function initialStockLevel(): int;

    /**
     * @return int
     */
    public function minimumStockLevel(): int;
    
    /**
     * @param int $productId
     * @param int $quantity
     */
    public function addStocks(int $productId, int $quantity): void;

    /**
     * @param int $productId
     * @return int
     */
    public function getStockLevel(int $productId): int;

    /**
     * @param int $productId
     * @param int $quantity
     */
    public function deductStockLevelByProductId(int $productId, int $quantity): void;
}
