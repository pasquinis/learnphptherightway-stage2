<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Notification\Email;
use App\Enums\Status;

class Transaction
{
    private float $amount;
    public function __construct(
        float $amount
    )
    { 
        $this->amount = $amount;
    }

    public function process(): void
    {
        echo 'Processing $' . $this->amount . ' transaction </br>';

        $this->generateReceipt();

        $this->sendEmail();
    }

    private function generateReceipt(): void
    {

    }

    private function sendEmail(): void
    {

    }
}