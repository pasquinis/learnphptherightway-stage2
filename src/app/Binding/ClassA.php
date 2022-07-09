<?php

declare(strict_types=1);

namespace App\Binding;

class ClassA
{
    protected static string $name = 'classA';

    public static function getName(): string
    {
        var_dump(self::class);
        return static::$name;
    }

}