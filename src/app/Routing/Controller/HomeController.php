<?php

declare(strict_types=1);

namespace App\Routing\Controller;

use App\Routing\View;
use DateTime;
use DateTimeZone;
use PDO;
use PDOException;

class HomeController
{
    public function index(): View
    {
        try {
            $db = new PDO('mysql:host=db;dbname=my_db', 'root', 'root');

            $query = 'INSERT INTO users(email, full_name, is_active, created_at)
                VALUES (:email, :name, :active, :date)';
            $stmt = $db->prepare($query);

            $email = 'j3.doe@email.com';
            $fullName = 'Jim Three';
            $isActive = true;
            $createdAt = (new DateTime('now', new DateTimeZone('UTC')))->format('Y-m-d H:i:s');

            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':name', $fullName);
            $stmt->bindValue(':active', $isActive, PDO::PARAM_BOOL);
            $stmt->bindValue(':date', $createdAt);

            $stmt->execute();

            $id = (int) $db->lastInsertId();

            $user = $db->query('SELECT * FROM users WHERE id = ' . $id)->fetch();
            echo '<pre>';
            var_dump($user);
            echo '</pre>';
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }

        return View::make('index', [
            'title' => 'Home page'
        ]);
    }
}