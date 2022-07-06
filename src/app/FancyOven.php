<?php

namespace App;

class FancyOven
{
    public function __construct(private $toaster)
    {
        
    }
    public function fry(): void
    {}

    public function toast(): void
    {
        $this->toaster->toast();
    }

    public function toastBagel(): void
    {
        $this->toaster->toastBagel();
    }
}