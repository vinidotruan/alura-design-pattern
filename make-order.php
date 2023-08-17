<?php

use Alura\DesignPattern\ActionsOnMakeOrder\{CreateOrderOnBank, LogMakeOrder, SendOrderEmail};
use Alura\DesignPattern\{MakeOrder, MakeOrderHandler};

require "vendor/autoload.php";

$value = $argv[1];
$amountItems = $argv[2];
$clientName = $argv[3];

$makeOrder = new MakeOrder($value, $amountItems, $clientName);
$makeOrderHandler = new MakeOrderHandler();

$makeOrderHandler->actionsOnMakeOrder[] = new CreateOrderOnBank();
$makeOrderHandler->actionsOnMakeOrder[] = new LogMakeOrder();
$makeOrderHandler->actionsOnMakeOrder[] = new SendOrderEmail();
$makeOrderHandler->execute($makeOrder);