<?php

use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice(25, 'Invoice number 1', 'secretValue');

$str = serialize($invoice);

echo $str . PHP_EOL;

$invoice2 = unserialize($str);

var_dump($invoice2);