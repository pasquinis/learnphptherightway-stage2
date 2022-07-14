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
        return '<form action="/invoices/create" method="post">
            <label>amount</label>
            <input type="text" name="amount"></input>
            </form>';
    }

    public function store()
    {
        var_dump($_POST);
    }
} 