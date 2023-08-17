<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Discounts\MoreThanFiveHundredValue;
use Alura\DesignPattern\Discounts\MoreThanFiveItems;
use Alura\DesignPattern\Discounts\WithoutDiscount;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        $discountChain = new MoreThanFiveItems(
            new MoreThanFiveHundredValue(
                new WithoutDiscount(null)
            )
        );

        return $discountChain->calculateDiscount($budget);
    }
}