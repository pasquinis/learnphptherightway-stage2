<?php

require __DIR__ . '/../vendor/autoload.php';

$date = '12/05/2022 3:30';
$dateTime = new DateTime(str_replace('/', '-', $date));

echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format(DateTime::ISO8601) . PHP_EOL;

$dateTime = DateTime::createFromFormat('d/m/Y g:i', $date);

echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format(DateTime::ISO8601) . PHP_EOL;