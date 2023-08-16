<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Taxes\Tax;

class TaxCalculator
{
    public function calc(Budget $budget, Tax $tax): float
    {
        return $tax->toCalculate($budget);
    }
}