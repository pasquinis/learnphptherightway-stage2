<?php

declare(strict_types=1);

namespace App\Invoice;

class Invoice
{
    public string $id;

    public function __construct(
        public float $amount,
        public string $description,
        public string $cardNumber
    )
    {
        $this->id = uniqid('invoice_');
    }

    public function __sleep()
    {
        return ['id', 'amount', 'description'];
    }
}