<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\ActionsOnMakeOrder\ActionOnMakeOrder;

class MakeOrderHandler
{
    /**
     * @var ActionOnMakeOrder[]
     */
    public array $actionsOnMakeOrder = [];
    public function __construct(
        //any dependencies that u will need
    )
    {
    }

    public function execute(MakeOrder $makeOrder): void
    {
        $budget = new Budget();
        $budget->value = $makeOrder->getValue();
        $budget->quantityItems = $makeOrder->getAmountItems();

        $order = new Order();
        $order->clientName = $makeOrder->getClientName();
        $order->createdAt = new \DateTimeImmutable();

        foreach ($this->actionsOnMakeOrder as $action) {
            $action->execute($order);
        }
    }
}