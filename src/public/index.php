<?php

declare(strict_types=1);

require_once '../Transaction.php';

$transaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$amount2 = (new Transaction(200, 'Transaction 2'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

var_dump($transaction1->getAmount(), $amount2);