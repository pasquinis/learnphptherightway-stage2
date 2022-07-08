<?php

use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice();

$invoice->process(7, 'Transaction 1');

// $invoice::processTwo(1, 2, 3);