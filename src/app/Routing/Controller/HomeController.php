<?php

declare(strict_types=1);

namespace App\Routing\Controller;

use App\Routing\View;

class HomeController
{
    public function index(): View
    {
        $_SESSION['counter'] = ($_SESSION['counter'] ?? 0)+ 1;
        setcookie('homePage', 'hks', time()  + 10);

        return View::make('index', [
            'title' => 'Home page'
        ]);
    }
}