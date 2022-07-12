<?php

declare(strict_types=1);

namespace App\Invoice;

class Invoice
{
    public function __construct(public float $amount, public string $description) {}
}