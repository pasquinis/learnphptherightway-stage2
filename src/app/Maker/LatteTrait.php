<?php

namespace App\Maker;

trait LatteTrait
{
    public function makeLatte(): void
    {
        echo static::class . ' is making latte with ' . $this->getMilkType() . PHP_EOL;
    }

    abstract public function getMilkType(): string;
}