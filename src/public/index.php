<?php

use App\ErrorHandling\Invoice;
use App\ErrorHandling\Customer;
use App\Exception\MissingBillingInfoException;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice(new Customer());

try {
    $invoice->process(100);
    $invoice->process(0);
}
catch (MissingBillingInfoException $e) {
    echo $e->getMessage() . PHP_EOL;
}
catch (InvalidArgumentException $e) {
    echo $e->getMessage() . PHP_EOL;
}
finally {
    echo 'Finally block' . PHP_EOL;
}