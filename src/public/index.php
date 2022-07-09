<?php

use App\Maker\CappuccinoMaker;
use App\Maker\CoffeeMaker;
use App\Maker\LatteMaker;

require __DIR__ . '/../vendor/autoload.php';

$coffeeMaker = new CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker = new LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();

$cappuccinoMaker = new CappuccinoMaker();
$cappuccinoMaker->makeCappuccino();
$cappuccinoMaker->makeCoffee();