<?php

declare(strict_types=1);

namespace App\Invoice;

class Invoice
{
    public string $id;

    public function __construct()
    {
        $this->id = uniqid('invoice_');
    }

    public static function create(): static
    {
        return new static();
    }

    public function __clone()
    {
        $this->id = uniqid('invoice_');
    }
}