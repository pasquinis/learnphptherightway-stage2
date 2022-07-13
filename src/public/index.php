<?php

require __DIR__ . '/../vendor/autoload.php';

$date1 = '12/05/2022 3:30 AM';

$dateTime1 = new DateTime($date1);

$dateInterval = new DateInterval('P1M2D');

echo $dateTime1->add($dateInterval)->format(DateTime::ISO8601) . PHP_EOL;

$dateInterval->invert = 1;

echo $dateTime1->add($dateInterval)->format(DateTime::ISO8601) . PHP_EOL;