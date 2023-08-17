<?php

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\DiscountCalculator;
use Alura\DesignPattern\TaxCalculator;

require 'vendor/autoload.php';

//$calc = new TaxCalculator();
//
//$budget = new Budget();
//$budget->value = 100;
//
//echo $calc->calculate($budget, new \Alura\DesignPattern\Taxes\Iss()) . PHP_EOL;


$calc = new DiscountCalculator();

$budget = new Budget();
$budget->value = 500;
$budget->quantityItems = 7;

echo $calc->calculate($budget) . PHP_EOL;
