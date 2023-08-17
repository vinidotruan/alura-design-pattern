<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;

class MakeOrder
{
    public function __construct(
        private readonly float $value,
        private readonly int $amountItems,
        private readonly string $clientName
    ){}

    /**
     * @return int
     */
    public function getAmountItems(): int
    {
        return $this->amountItems;
    }

    /**
     * @return string
     */
    public function getClientName(): string
    {
        return $this->clientName;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }


}