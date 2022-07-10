<?php

namespace App\Maker;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use LatteTrait;
    use CappuccinoTrait;    

	public function getMilkType(): string
    {
        return 'whole-milk';
	}
}