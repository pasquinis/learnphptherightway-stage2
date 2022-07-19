<?php

declare(strict_types=1);

namespace App\Routing\Model;
use Throwable;

class SignUp extends Model
{
    public function __construct(private User $user, private Invoice $invoice)
    {
        parent::__construct();
    }

    public function register(array $user, array $invoice): int
    {
        try {
            $this->db->beginTransaction();

            $userId = $this->user->create(
                $user['email'],
                $user['fullName'],
                $user['active']
            );

            $invoiceId = $this->invoice->create($invoice['amount'], $userId);

            $this->db->commit();
        }
        catch(Throwable $e) {
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }

            throw $e;
        }

        return $invoiceId;
    }
}