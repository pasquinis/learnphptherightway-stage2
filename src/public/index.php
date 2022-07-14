<?php

use App\Routing\Router;
use App\Routing\Classes\Home;
use App\Routing\Classes\Invoice;
use App\Routing\Classes\Upload;

require __DIR__ . '/../vendor/autoload.php';

session_start();
define('STORAGE_PATH', __DIR__ . '/../storage');


$router = new Router();

$router
    ->get('/', [ Home::class, 'index'])
    ->get('/invoices', [ Invoice::class, 'index'])
    ->get('/invoices/create', [ Invoice::class, 'create'])
    ->post('/invoices/create', [ Invoice::class, 'store'])
    ->get('/upload', [ Upload::class, 'index'])
    ->post('/upload/store', [ Upload::class, 'store']);

echo $router->resolver(
    strtolower($_SERVER['REQUEST_METHOD']),
    $_SERVER['REQUEST_URI']
);