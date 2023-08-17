<?php

namespace Alura\DesignPattern\ActionsOnMakeOrder;

use Alura\DesignPattern\Order;

class LogMakeOrder implements ActionOnMakeOrder
{
    public function execute(Order $order): void
    {
        echo "Create log of order" . PHP_EOL;
    }
}