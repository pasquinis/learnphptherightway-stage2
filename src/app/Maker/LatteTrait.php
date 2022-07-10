<?php

namespace App\Maker;

use PDO;

trait LatteTrait
{
    private string $milkType = 'whole-milk';
    
    public function makeLatte(): void
    {
        echo static::class . ' is making latte with ' . $this->milkType . PHP_EOL;
    }

    public function setMilkType(string $type): static
    {
        $this->milkType = $type;

        return $this;
    }
}