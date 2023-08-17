<?php

namespace Alura\DesignPattern\States;

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\States\BudgetState;

class Refused extends BudgetState
{

    public function calculateDiscountExtra(Budget $budget): float
    {
        throw new \DomainException("Budget in this state cannot receive discoutn");
    }

    public function finalize(Budget $budget): void
    {
        $budget->state = new Finalized();
    }
}