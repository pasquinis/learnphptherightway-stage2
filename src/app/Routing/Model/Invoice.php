<?php

declare(strict_types=1);

namespace App\Routing\Model;

class Invoice extends Model
{
    public function create(float $amount, int $userId): int
    {
        $invoiceQuery = 'INSERT INTO invoices(amount, user_id)
                VALUES (:amount, :userId)';
        $invoiceStmnt = $this->db->prepare($invoiceQuery);

        $invoiceStmnt->bindValue(':amount', $amount);
        $invoiceStmnt->bindValue(':userId', $userId);

        $invoiceStmnt->execute();

        return (int) $this->db->lastInsertId();
    }

    public function find(int $id): array
    {
        $invoiceUserQuery = 'SELECT i.amount, u.full_name, u.id
            FROM invoices AS i
            INNER JOIN users AS u ON u.id = i.user_id
            WHERE i.id = :id';

        $stmnt = $this->db->prepare($invoiceUserQuery);
        $stmnt->bindValue(':id', $id);
        $stmnt->execute();

        return $stmnt->fetchAll();
    }
}