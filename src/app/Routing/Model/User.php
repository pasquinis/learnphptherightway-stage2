<?php

declare(strict_types=1);

namespace App\Routing\Model;
use DateTime;
use DateTimeZone;
use PDO;

class User extends Model
{
    public function create(string $email, string $fullName, bool $active): int
    {
        $createdAt = (new DateTime('now', new DateTimeZone('UTC')))->format('Y-m-d H:i:s');

        $query = 'INSERT INTO users(email, full_name, is_active, created_at)
                VALUES (:email, :name, :active, :date)';
        $usertStmnt = $this->db->prepare($query);
        $usertStmnt->bindValue(':email', $email);
        $usertStmnt->bindValue(':name', $fullName);
        $usertStmnt->bindValue(':active', $active, PDO::PARAM_BOOL);
        $usertStmnt->bindValue(':date', $createdAt);

        $usertStmnt->execute();

        return (int) $this->db->lastInsertId();
    }
}