<?php

use App\Invoice\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice();

$invoice->amount = 15;

var_dump(isset($invoice->amount));

$invoice->receipt = 20;

unset($invoice->receipt);