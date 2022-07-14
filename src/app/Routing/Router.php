<?php

declare(strict_types=1);

namespace App\Routing;
use App\Routing\Exception\RouteNotFoundException;

class Router
{
    private array $route;

    public function register(string $route, callable|array $action): self
    {
        $this->route[$route] = $action;

        return $this;
    }

    public function resolver(string $requestedUri)
    {
        $route = explode('?', $requestedUri)[0];
        $action = $this->route[$route] ?? null;

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