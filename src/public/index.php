<?php

use App\Collector\CollectionAgency;
use App\Collector\DebtCollectionService;

require __DIR__ . '/../vendor/autoload.php';

$service = new DebtCollectionService();

echo $service->collectDebt(new CollectionAgency()) . PHP_EOL;