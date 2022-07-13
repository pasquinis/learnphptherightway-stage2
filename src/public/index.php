<?php

require __DIR__ . '/../vendor/autoload.php';

$date1 = '12/05/2022 3:30 AM';
$date2 = '12/05/2022 3:35 AM';

$dateTime1 = new DateTime($date1);
$dateTime2 = new DateTime($date2);

var_dump($dateTime1 < $dateTime2);
var_dump($dateTime1 > $dateTime2);
var_dump($dateTime1 == $dateTime2);
var_dump($dateTime1 <=> $dateTime2);