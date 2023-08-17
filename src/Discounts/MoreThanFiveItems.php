<?php

namespace Alura\DesignPattern\Discounts;

use Alura\DesignPattern\Budget;

class MoreThanFiveItems extends Discount
{
    public function calculateDiscount(Budget $budget): float {
        if ($budget->quantityItems > 5) {
            return $budget->value * 0.1;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}