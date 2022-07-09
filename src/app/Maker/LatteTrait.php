<?php

namespace App\Maker;

trait LatteTrait
{
    public function makeLatte(): void
    {
        echo static::class . ' is making latte' . PHP_EOL;
    }
}