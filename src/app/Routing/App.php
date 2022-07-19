<?php

declare(strict_types=1);

namespace App\Routing;
use App\Routing\Exception\RouteNotFoundException;
use Exception;
use PDO;
use PDOException;

class App
{
    private static $db;

    public static function db(): DB
    {
        return self::$db;
    }

    public function __construct(private Router $router, private array $request, private Config $configuration)
    {   
        self::$db = new DB($configuration->db ?? []);
    }

    public function run(): void
    {
        try {
            echo $this->router->resolver(
                strtolower($this->request['method']),
                $this->request['uri']
            );
        }
        catch (RouteNotFoundException $e) {
            http_response_code(404);
            echo View::make('error/404');
        }
        catch (Exception $e) {
            http_response_code(500);
            var_dump($e);
            echo View::make('error/500', ['error' => $e]);        
        }
    }
}