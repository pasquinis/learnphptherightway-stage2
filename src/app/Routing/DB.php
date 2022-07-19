<?php

declare(strict_types=1);

namespace App\Routing;
use PDO;
use PDOException;

/**
 * @mixin PDO
 */
class DB
{
    private PDO $db;

    public function __construct(array $configuration)
    {
        $defaultOptions = [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        try {
            $this->db = new PDO(
                $configuration['driver']. ':host=' . $configuration['host'] . ';dbname=' . $configuration['database'],
                $configuration['user'],
                $configuration['password'],
                $configuration['options'] ?? $defaultOptions 
            );
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->db, $name], $arguments);
    }
}