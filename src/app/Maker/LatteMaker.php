<?php

declare(strict_types=1);

namespace App\Maker;

class LatteMaker extends CoffeeMaker
{
    public function makeLatte(): void
    {
        echo static::class . ' is making latte' . PHP_EOL;
    }
}