<?php

declare(strict_types=1);

namespace App\Routing;
use App\Routing\Exception\ViewFileNotFoundException;

class View
{
    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }
    public function __construct(protected string $view, protected array $params = []) {}

    public function __toString(): string
    {
        return $this->render();
    }

    public function render(): string
    {
        $viewFile = VIEW_PATH . '/' . $this->view . '.php';

        if (!file_exists($viewFile)) {
            throw new ViewFileNotFoundException();
        }

        ob_start();

        include VIEW_PATH . '/' . $this->view . '.php';

        return ob_get_clean();
    }
}