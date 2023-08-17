<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

abstract class DiscountWithTwoAliquot implements Tax
{

    public function toCalculate(Budget $budget): float
    {
        if ($this->mustApplyTax($budget)) {
            return $this->calculateMaximumTax($budget);
        }

        return $this->calculateMinimumTax($budget);
    }
    abstract protected function mustApplyTax(Budget $budget): bool;
    abstract protected function calculateMaximumTax(Budget $budget): float;
    abstract protected function calculateMinimumTax(Budget $budget): float;
}