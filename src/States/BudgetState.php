<?php

namespace Alura\DesignPattern\States;

use Alura\DesignPattern\Budget;

abstract class BudgetState
{
    abstract public function calculateDiscountExtra(Budget $budget): float;

    public function approve(Budget $budget): void
    {
        throw new \DomainException('This budget cannot be approved');
    }

    public function reprove(Budget $budget): void
    {
        throw new \DomainException('This budget cannot be reproved');
    }

    public function finalize(Budget $budget): void
    {
        throw new \DomainException('This budget cannot be finalized');
    }
}