<?php

declare(strict_types=1);

namespace App\Collector;

class DebtCollectionService
{
    public function collectDebt(DebtCollector $collector): string
    {
       $owedAmount = mt_rand(100, 1000);
       $collectedAmount = $collector->collect($owedAmount);

       return 'Collect amount $' . $collectedAmount . ' a front of $' . $owedAmount;
    }
}