<?php

use App\Toaster;
use App\ToasterPro;
use App\FancyOven;

require __DIR__ . '/../vendor/autoload.php';

$toaster = new ToasterPro();
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');

$fancyOven = new FancyOven($toaster);
$fancyOven->toast();