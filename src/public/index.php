<?php

use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice(25, 'Invoice number 1', 'secretValue');

echo serialize($invoice) . PHP_EOL;