<?php

namespace App\Maker;

trait CappuccinoTrait
{
    public function makeCappuccino(): void
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }

    public function makeLatte(): void
    {
        echo static::class . ' is making latte (CappuccinoTrait)' . PHP_EOL;
    }
}