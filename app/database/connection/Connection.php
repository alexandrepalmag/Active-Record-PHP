<?php

namespace app\database\connection;

use PDOException;
use PDO;

class Connection
{

    private static $pdo = null;

    public static function connect()
    {

        try {

            if (!static::$pdo) {

                static::$pdo = new PDO("mysql:host=localhost;dbname=activerecord", "root", "", [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            }

            return static::$pdo;
        } catch (PDOException $e) {

            var_dump($e->getMessage());
        }
    }
}
