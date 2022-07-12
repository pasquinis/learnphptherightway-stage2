<?php

use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice1 = new Invoice(25, 'Invoice');
$invoice2 = new Invoice(25, 'Invoice');

echo '$invoice1 == $invoice2' . PHP_EOL;
var_dump($invoice1 == $invoice2);

echo '$invoice1 === $invoice2' . PHP_EOL;
var_dump($invoice1 === $invoice2);

$invoice3 = $invoice1;
echo '$invoice1 === $invoice3' . PHP_EOL;
var_dump($invoice1 === $invoice3);

var_dump($invoice3);
var_dump($invoice1);

$invoice3->amount = 100;

var_dump($invoice3);
var_dump($invoice1);