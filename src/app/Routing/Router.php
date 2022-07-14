<?php

declare(strict_types=1);

namespace App\Routing;
use App\Routing\Exception\RouteNotFoundException;

class Router
{
    private array $route;

    public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }
    
    public function post(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }

    public function register(string $requestMethod, string $route, callable|array $action): self
    {
        $this->route[$requestMethod][$route] = $action;

        return $this;
    }

    public function resolver(string $requestMethod, string $requestUri)
    {
        $route = explode('?', $requestUri)[0];
        $action = $this->route[$requestMethod][$route] ?? null;

        if (!$action) {
            throw new RouteNotFoundException();
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;
            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class , $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }

        throw new RouteNotFoundException();
    }
}