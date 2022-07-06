<?php

use App\PaymentGateway\Paddle\Transaction;
use App\Enums\Status;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction();

$transaction->setStatus(Status::PAID);

var_dump($transaction);