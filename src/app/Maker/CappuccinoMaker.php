<?php

declare(strict_types=1);

namespace App\Maker;

class CappuccinoMaker extends CoffeeMaker
{
    public function makeCappuccino(): void
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }
}