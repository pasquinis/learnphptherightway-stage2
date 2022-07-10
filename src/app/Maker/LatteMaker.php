<?php

declare(strict_types=1);

namespace App\Maker;

class LatteMaker extends CoffeeMaker
{
    use LatteTrait;

    public function getMilkType(): string
    {
        return 'whole-milk';
	}
}