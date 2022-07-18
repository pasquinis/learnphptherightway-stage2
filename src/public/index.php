<?php

use App\Routing\Router;
use App\Routing\View;
use App\Routing\Controller\HomeController;
use App\Routing\Controller\InvoiceController;
use App\Routing\Controller\UploadController;
use App\Routing\Exception\RouteNotFoundException;

require __DIR__ . '/../vendor/autoload.php';

session_start();
define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');


try {
    $router = new Router();
    $router
        ->get('/', [ HomeController::class, 'index'])
        ->get('/invoices', [ InvoiceController::class, 'index'])
        ->get('/invoices/create', [ InvoiceController::class, 'create'])
        ->post('/invoices/create', [ InvoiceController::class, 'store'])
        ->get('/invoices/download', [ InvoiceController::class, 'download'])
        ->get('/upload', [ UploadController::class, 'index'])
        ->post('/upload/store', [ UploadController::class, 'store']);

    echo $router->resolver(
        strtolower($_SERVER['REQUEST_METHOD']),
        $_SERVER['REQUEST_URI']
    );
}
catch (RouteNotFoundException $e) {
    http_response_code(404);
    echo View::make('error/404');
}
catch (Exception $e) {
    http_response_code(500);
    echo View::make('error/500', ['error' => $e]);
}