<?php

use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice();

$invoice2 = new $invoice();

$invoice3 = Invoice::create();

$invoice4 = clone $invoice;

var_dump($invoice, $invoice, $invoice3, $invoice4);