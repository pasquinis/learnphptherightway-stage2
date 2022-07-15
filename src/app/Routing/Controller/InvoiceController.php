<?php

declare(strict_types=1);

namespace App\Routing\Controller;
use App\Routing\View;

class InvoiceController
{
    public function index(): View
    {
        return View::make('invoices/index');
    }

    public function create(): View
    {
        return View::make('invoices/create');
    }

    public function store()
    {
        var_dump($_POST);
    }

    public function download()
    {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="invoice12.pdf"');

        readfile(STORAGE_PATH . '/sample.pdf');
    }
} 