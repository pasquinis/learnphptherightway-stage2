<?php

declare(strict_types=1);

namespace App\Collector;

class CollectionAgency implements DebtCollector
{
    public function collect(int $owedAmount): int
    {
        $guaranteed = $owedAmount * 0.5;

        return mt_rand((int) $guaranteed, $owedAmount);
    }
}