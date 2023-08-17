<?php

namespace Alura\DesignPattern\States;

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\States\BudgetState;

class Finalized extends BudgetState
{

    public function calculateDiscountExtra(Budget $budget): float
    {
        throw new \DomainException("Budget in this state cannot receive discoutn");
    }
}