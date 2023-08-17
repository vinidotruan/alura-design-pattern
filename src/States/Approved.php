<?php

namespace Alura\DesignPattern\States;

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\States\BudgetState;

class Approved extends BudgetState
{

    public function calculateDiscountExtra(Budget $budget): float
    {
        return $budget->value * 0.02;
    }

        public function finalize(Budget $budget): void
    {
        $budget->state = new Finalized();
    }
}