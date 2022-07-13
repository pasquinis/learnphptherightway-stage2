<?php

require __DIR__ . '/../vendor/autoload.php';

$dateTime = new DateTime('now');

echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format(DateTime::ISO8601) . PHP_EOL;

$dateTime->setTimezone(new DateTimeZone('Europe/Rome'));

echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format(DateTime::ISO8601) . PHP_EOL;