<?php

declare(strict_types=1);

namespace App\Routing\Classes;

class Home
{
    public function index(): string
    {
        $_SESSION['counter'] = ($_SESSION['counter'] ?? 0)+ 1;
        return 'Home';
    }
}