<?php

use App\Routing\Router;
use App\Routing\Classes\Home;
use App\Routing\Classes\Invoice;

require __DIR__ . '/../vendor/autoload.php';

session_start();
$router = new Router();

$router
    ->get('/', [ Home::class, 'index'])
    ->get('/invoices', [ Invoice::class, 'index'])
    ->get('/invoices/create', [ Invoice::class, 'create'])
    ->post('/invoices/create', [ Invoice::class, 'store']);

echo $router->resolver(
    strtolower($_SERVER['REQUEST_METHOD']),
    $_SERVER['REQUEST_URI']
);

var_dump(($_SESSION));