<?php

use App\Binding\ClassA;
use App\Binding\ClassB;

require __DIR__ . '/../vendor/autoload.php';

// $classA = new ClassA();
// $classB = new ClassB();

// echo $classA->getName() . PHP_EOL;
// echo $classB->getName() . PHP_EOL;
echo ClassA::getName() . PHP_EOL;
echo ClassB::getName() . PHP_EOL;
