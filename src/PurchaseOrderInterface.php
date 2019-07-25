<?php

interface PurchaseOrderInterface
{
    /**
     * @param int $day
     */
    public function forDay(int $day);

    /**
     * @param int $day
     * @param int $productId
     */
    public function add(int $productId, int $quantity);

    /**
     * @param int $day
     * @param int $productId
     * @return int
     */
    public function getOrderForDay(int $day, int $productId): int;

    /**
     * @param int $productId
     * @return int
     */
    public function getPurchasedReceivedTotal(int $productId): int;

    /**
     * @param int $productId
     * @return int
     */
    public function getPurchasedPendingTotal(int $productId): int;
}
