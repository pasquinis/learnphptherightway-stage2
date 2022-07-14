<?php

use App\Iterator\Invoice;
use App\Iterator\InvoiceCollection;

require __DIR__ . '/../vendor/autoload.php';

$invoiceCollection = new InvoiceCollection([
    new Invoice(15),
    new Invoice(25),
    new Invoice(35)
]);


function printInvoices(iterable $collection) {
    foreach($collection as $invoice) {
        echo $invoice->amount . ' ' . $invoice->id . PHP_EOL;
    }
}

printInvoices($invoiceCollection);