<?php

class PDOConnection
{
    private const HOST = 'localhost';
    private const USER = 'root';
    private const PASSWORD = 'pavlik_1.6pro';
    private const DB_NAME = 'php-crud';

    public function connect(): PDO
    {
        $dsn = "mysql:host=" . self::HOST . ";dbname=".self::DB_NAME;
        $pdo = new PDO($dsn, self::USER, self::PASSWORD);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}
