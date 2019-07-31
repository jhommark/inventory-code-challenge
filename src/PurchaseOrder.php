<?php

class PurchaseOrder implements PurchaseOrderInterface
{
    protected $day;
    protected $orders = [];

    /**
     * @param int $productId
     * @param int $quantity
     */
    public function add(int $productId, int $quantity) {
        $this->orders[$this->day][$productId] = $quantity;
    }

    public function forDay(int $day) {
        $this->day = $day;

        return $this;
    }

    private function getDayOrderedForDay(int $day): int {
        if ($day == 0) return 6;
        else if ($day == 1) return 7;
        else return $day - 2;
    }

    public function getOrderForDay(int $day, int $productId): int {
        return $this->orders[$this->getDayOrderedForDay($day)][$productId] ?? 0;
    }

    /**
     * @param int $productId
     * @return int
     */
    public function getPurchasedReceivedTotal(int $productId): int {
        $total = 0;

        for ($i = 0; $i < 7; $i++) {
            $total += $this->getOrderForDay($i, $productId);
        }

        return $total;
    }

    /**
     * @param int $productId
     * @return int
     */
    public function getPurchasedPendingTotal(int $productId): int {
        $total = 0;

        for ($i = 5; $i < 7; $i++) {
            $total += $this->orders[$i][$productId] ?? 0;
        }

        return $total;
    }
}
