<?php

use App\Routing\Controller\HomeController;
use App\Routing\Controller\InvoiceController;
use App\Routing\Controller\UploadController;
use App\Routing\Exception\RouteNotFoundException;
use App\Routing\Router;
use App\Routing\View;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

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