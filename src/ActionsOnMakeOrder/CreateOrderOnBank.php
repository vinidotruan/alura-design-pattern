<?php

namespace Alura\DesignPattern\ActionsOnMakeOrder;

use Alura\DesignPattern\Order;

class CreateOrderOnBank implements ActionOnMakeOrder
{
    public function execute(Order $order): void
    {
        echo "Saving order on database" . PHP_EOL;
    }
}