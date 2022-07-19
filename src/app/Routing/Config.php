<?php

namespace App\Routing;

/**
 * @property-read array ?$db
 */
class Config
{
    public array $conf;

    public function __construct(array $env)
    {
        $this->conf = [ 'db' => [
                'host' => $env['DB_HOST'],
                'database' => $env['DB_DATABASE'],
                'user' => $env['DB_USER'],
                'password' => $env['DB_PASSWORD'],
                'driver' => $env['DB_DRIVER'] ?? 'mysql',
            ]
        ];
    }

    public function __get($name)
    {
        return $this->conf[$name] ?? null;
    }
}