<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Ikcv extends DiscountWithTwoAliquot
{
    protected function mustApplyTax(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->quantityItems > 3;
    }

    protected function calculateMaximumTax(Budget $budget): float
    {
        return $budget->value * 0.4;
    }

    protected function calculateMinimumTax(Budget $budget): float
    {
        return $budget->value * 0.025;
    }

}