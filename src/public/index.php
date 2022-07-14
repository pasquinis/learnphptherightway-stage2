<?php

require __DIR__ . '/../vendor/autoload.php';

function modifyDate(DateTime $passed): void {
    $dateInterval = new DateInterval('P1M');
    echo 'inside method ' . $passed->add($dateInterval)->format(DateTime::ISO8601) . PHP_EOL;
}


$date1 = '12/05/2022 3:30 AM';
$dateTime1 = new DateTime($date1);

echo 'before method ' . $dateTime1->format(DateTime::ISO8601) . PHP_EOL;
modifyDate($dateTime1);
echo 'after method ' . $dateTime1->format(DateTime::ISO8601) . PHP_EOL;


function modifyDateImmutable(DateTimeImmutable $passed): void
{
    $dateInterval = new DateInterval('P1M');
    echo 'inside method ' . $passed->add($dateInterval)->format(DateTime::ISO8601) . PHP_EOL;
}

echo PHP_EOL;
echo 'DateTimeImmutable' . PHP_EOL;
echo PHP_EOL;

$date1 = '12/05/2022 3:30 AM';
$dateTime1 = new DateTimeImmutable($date1);

echo 'before method ' . $dateTime1->format(DateTime::ISO8601) . PHP_EOL;
modifyDateImmutable($dateTime1);
echo 'after method ' . $dateTime1->format(DateTime::ISO8601) . PHP_EOL;