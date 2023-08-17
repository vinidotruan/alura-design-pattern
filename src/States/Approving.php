<?php

namespace Alura\DesignPattern\States;

use Alura\DesignPattern\Budget;

class Approving extends BudgetState
{

    public function calculateDiscountExtra(Budget $budget): float
    {
        return $budget->value * 0.05;
    }

    public function approve(Budget $budget): void
    {
        $budget->state = new Approved();
    }

    public function reprove(Budget $budget): void
    {
        $budget->state = new Refused();
    }
}