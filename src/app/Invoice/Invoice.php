<?php

declare(strict_types=1);

namespace App\Invoice;

class Invoice
{
    public string $id;

    public function __construct(
        public float $amount,
        public string $description,
        public string $cardNumber
    )
    {
        $this->id = uniqid('invoice_');
    }

    public function __serialize(): array
    {
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description' => $this->description,
            'cardNumber' => base64_encode($this->cardNumber),
            'serialized' => true,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->id = $data['id'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        $this->cardNumber = base64_decode($data['cardNumber']);
    }
}