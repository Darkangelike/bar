<?php

namespace Database;

class PdoMySQL
{
    /**
     * Return a PDO object to interact with the database
     * 
     * @return PDO
     */
    static function getPdo():\PDO{
    $pdo = new \PDO ("mysql:host=localhost;dbname=bar;charset=utf8", "baradmin", "sizzle", [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
    ]);

    return $pdo;

    }
}