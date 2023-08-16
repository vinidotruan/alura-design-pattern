<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

interface Tax
{
    public function toCalculate(Budget $budget): float;
}