<?php

namespace App\Iterator;

class Invoice
{
    public int $id;

    public function __construct(public float $amount)
    {
        $this->id = random_int(1000, 9000);
    }
}