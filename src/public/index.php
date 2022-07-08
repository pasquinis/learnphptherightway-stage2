<?php

use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice();

echo $invoice . PHP_EOL;