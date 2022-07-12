<?php

use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice();

$str = serialize($invoice);

echo $str . PHP_EOL;

var_dump(unserialize('a:2:{i:0;s:12:"Sample array";i:1;a:2:{i:0;s:5:"Apple";i:1;s:6:"Orange";}}'));

var_dump(unserialize('O:19:"App\Invoice\Invoice":1:{s:2:"id";s:21:"invoice_62cd7a1bc89c4";}'));