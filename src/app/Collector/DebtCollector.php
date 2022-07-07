<?php

declare(strict_types=1);

namespace App\Collector;

interface DebtCollector
{
    public function collect(int $owedAmount): int;
}