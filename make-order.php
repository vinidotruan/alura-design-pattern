<?php

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\Order;

require "vendor/autoload.php";

$value = $argv[1];
$amountItems = $argv[2];
$clientName = $argv[3];

$budget = new Budget();
$budget->value = $value;
$budget->quantityItems = $amountItems;

$order = new Order();
$order->clientName = $clientName;
$order->createdAt = new DateTimeImmutable();

echo "Order: {$order->clientName}, Date: {$order->createdAt->format('d/m/Y')}, Value: {$budget->value}, Quantity Items: {$budget->quantityItems}". PHP_EOL;
echo "Sending email".PHP_EOL;