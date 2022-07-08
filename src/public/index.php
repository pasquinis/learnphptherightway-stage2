<?php

use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice(7);

$invoice->amount = 17;

echo $invoice->amount . PHP_EOL;