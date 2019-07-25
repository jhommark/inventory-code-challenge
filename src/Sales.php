<?php

class Sales implements SalesInterface
{
    protected $soldTotal = [];

    /**
     * @param int $productId
     * @param int $quantity
     */
    public function add(int $productId, int $quantity): void {
        $this->soldTotal[$productId] = $this->getSoldTotal($productId) + $quantity;
    }

    /**
     * @param int $productId
     * @return int
     */
    public function getSoldTotal(int $productId): int {
        return $this->soldTotal[$productId] ?? 0;
    }
}
