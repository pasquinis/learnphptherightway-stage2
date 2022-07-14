<?php

use App\Routing\Router;

require __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router->register('/', function() {
    echo 'Home';
});

$router->register('/invoices', function() {
    echo 'Invoices';
});

echo $router->resolver($_SERVER['REQUEST_URI']);