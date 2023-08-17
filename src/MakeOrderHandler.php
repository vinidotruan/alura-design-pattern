<?php

namespace Alura\DesignPattern;

class MakeOrderHandler
{
    public function __construct(
        //any dependencies that u will need
    )
    {
    }

    public function execute(MakeOrder $makeOrder) {
        $budget = new Budget();
        $budget->value = $makeOrder->getValue();
        $budget->quantityItems = $makeOrder->getAmountItems();

        $order = new Order();
        $order->clientName = $makeOrder->getClientName();
        $order->createdAt = new \DateTimeImmutable();

        echo "Order: {$order->clientName}, Date: {$order->createdAt->format('d/m/Y')}, Value: {$budget->value}, Quantity Items: {$budget->quantityItems}". PHP_EOL;
        echo "Sending email".PHP_EOL;
    }
}