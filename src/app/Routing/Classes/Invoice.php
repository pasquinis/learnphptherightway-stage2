<?php

declare(strict_types=1);

namespace App\Routing\Classes;

class Invoice
{
    public function index(): string
    {
        return 'Invoice';
    }

    public function create(): string
    {
        return 'Create';
    }
} 