<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Icms implements Tax
{
    public function toCalculate(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}