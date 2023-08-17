<?php

use Alura\DesignPattern\MakeOrder;
use Alura\DesignPattern\MakeOrderHandler;

require "vendor/autoload.php";

$value = $argv[1];
$amountItems = $argv[2];
$clientName = $argv[3];

$makeOrder = new MakeOrder($value, $amountItems, $clientName);
$makeOrderHandler = new MakeOrderHandler();
$makeOrderHandler->execute($makeOrder);