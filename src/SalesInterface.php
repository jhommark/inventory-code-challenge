<?php

interface SalesInterface
{
    /**
     * @param int $productId
     * @param int $quantity
     */
    public function add(int $productId, int $quantity): void;

    /**
     * @param int $productId
     * @return int
     */
    public function getSoldTotal(int $productId): int;
}
