<?php

use App\Routing\Router;
use App\Routing\Classes\Home;
use App\Routing\Classes\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router
    ->register('/', [ Home::class, 'index'])
    ->register('/invoices', [ Invoice::class, 'index'])
    ->register('/invoices/create', [ Invoice::class, 'create']);


echo $router->resolver($_SERVER['REQUEST_URI']);