<?php

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\TaxCalculator;

require 'vendor/autoload.php';

$calc = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $calc->calc($budget, new \Alura\DesignPattern\Taxes\Iss()) . PHP_EOL;