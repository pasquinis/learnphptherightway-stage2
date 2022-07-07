<?php

declare(strict_types=1);

namespace App\Render;

abstract class Field
{
    public function __construct(protected string $name)
    {
        
    }

    abstract public function render(): string;
}