<?php

declare(strict_types=1);

namespace App\Render;

class Field
{
    public function __construct(protected string $name)
    {
        
    }

    public function render(): string
    {
        return '';
    }
}