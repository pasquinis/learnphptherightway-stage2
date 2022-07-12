<?php

declare(strict_types=1);

namespace App\Invoice;

class Invoice
{
    public ?Invoice $invoiceLinked = null;

    public function __construct(public float $amount, public string $description) {}
}