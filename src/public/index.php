<?php

use App\Invoice\CustomInvoice;
use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice1 = new Invoice(25, 'Invoice');
$invoice2 = new CustomInvoice(25, 'Invoice');

echo '$invoice1 == $invoice2' . PHP_EOL;
var_dump($invoice1 == $invoice2);

echo '$invoice1 === $invoice2' . PHP_EOL;
var_dump($invoice1 === $invoice2);


$invoice3 = new Invoice(25, 'Invoice');

$invoice1->invoiceLinked = $invoice3;
$invoice3->invoiceLinked = $invoice1;

echo '$invoice1 === $invoice3 (circular reference)' . PHP_EOL;
var_dump($invoice1 === $invoice3);

echo '$invoice1 == $invoice3 (circular reference)' . PHP_EOL;
var_dump($invoice1 == $invoice3);