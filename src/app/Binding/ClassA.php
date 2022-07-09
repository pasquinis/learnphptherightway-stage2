<?php

declare(strict_types=1);

namespace App\Binding;

class ClassA
{
    protected static string $name = 'classA';

    public function getName(): string
    {
        var_dump(static::class);
        return static::$name;
    }

    public static function make(): static
    {
        return new static;
    }

}