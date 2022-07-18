<?php

declare(strict_types=1);

namespace App\Routing\Controller;

use App\Routing\View;
use DateTime;
use DateTimeZone;
use Exception;
use PDO;
use PDOException;
use Throwable;

class HomeController
{
    public function index(): View
    {
        try {
            $db = new PDO('mysql:host=db;dbname=my_db', 'root', 'root');
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }

        try {
            $db->beginTransaction();
            $email = mt_rand(1, 100) . 'j.doe@email.com';
            $fullName = 'Jim Three' . mt_rand(1, 100);
            $isActive = true;
            $createdAt = (new DateTime('now', new DateTimeZone('UTC')))->format('Y-m-d H:i:s');

            $query = 'INSERT INTO users(email, full_name, is_active, created_at)
                VALUES (:email, :name, :active, :date)';
            $usertStmnt = $db->prepare($query);
            $usertStmnt->bindValue(':email', $email);
            $usertStmnt->bindValue(':name', $fullName);
            $usertStmnt->bindValue(':active', $isActive, PDO::PARAM_BOOL);
            $usertStmnt->bindValue(':date', $createdAt);

            $usertStmnt->execute();

            $userId = (int)$db->lastInsertId();

            $amount = mt_rand(1, 300);
            $invoiceQuery = 'INSERT INTO invoices(amount, user_id)
                VALUES (:amount, :userId)';
            $invoiceStmnt = $db->prepare($invoiceQuery);

            $invoiceStmnt->bindValue(':amount', $amount);
            $invoiceStmnt->bindValue(':userId', $userId);

            $invoiceStmnt->execute();
            $db->commit();
        }
        catch(Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }

            throw $e;
        }

        $invoiceUserQuery = 'SELECT i.amount, u.full_name, u.id FROM invoices AS i
                INNER JOIN users AS u ON u.id = i.user_id
                WHERE u.email = :email';

        $selectStmnt = $db->prepare($invoiceUserQuery);
        $selectStmnt->bindValue(':email', $email);

        $selectStmnt->execute();

        foreach ($selectStmnt->fetchAll(PDO::FETCH_ASSOC) as $row) {
            echo '<pre>';
            var_dump($row);
            echo '</pre>';
        }

        return View::make('index', [
            'title' => 'Home page'
        ]);
    }
}