<?php

namespace Alura\DesignPattern\ActionsOnMakeOrder;

use Alura\DesignPattern\Order;

class SendOrderEmail implements ActionOnMakeOrder
{
    public function execute(Order $order): void
    {
        echo "Sending email" . PHP_EOL;
    }
}