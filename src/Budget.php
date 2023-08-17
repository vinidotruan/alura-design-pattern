<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\States\Approving;
use Alura\DesignPattern\States\BudgetState;

class Budget
{
    public float $value;
    public int $quantityItems;
    public BudgetState $state;

    public function __construct()
    {
        $this->state = new Approving();
    }

    public function applyDiscountExtra(): void
    {
        $this->value -= $this->state->calculateDiscountExtra($this);
    }

    public function approve(): void
    {
        $this->state->approve($this);
    }

    public function refuse(): void
    {
        $this->state->reprove($this);
    }

    public function finalize(): void
    {
        $this->state->finalize($this);
    }

}