<?php

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

var_dump(new Transaction());

$ramsey = new \Ramsey\Uuid\UuidFactory();

echo $ramsey->uuid4();