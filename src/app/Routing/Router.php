<?php

declare(strict_types=1);

namespace App\Routing;
use App\Routing\Exception\RouteNotFoundException;

class Router
{
    private array $route;

    public function register(string $route, callable $action): self
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

        call_user_func($action);
    }
}