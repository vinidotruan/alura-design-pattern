<?php

namespace Alura\DesignPattern\ActionsOnMakeOrder;

use Alura\DesignPattern\Order;

interface ActionOnMakeOrder
{
    public function execute(Order $order): void;
}