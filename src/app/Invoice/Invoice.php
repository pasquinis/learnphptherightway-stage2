<?php

declare(strict_types=1);

namespace App\Invoice;

class Invoice
{
    protected float $amount;

    public function __construct(float $amount)
    {
       $this->amount = $amount; 
    }
    public function __get(string $name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        return null;
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }
}