<?php
/**
 * Database Abstraction & PDO Connection with Datamock Fallback
 */

class Database {
    private static $pdo = null;
    private static $useMock = false;

    public static function getConnection() {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        $host = '127.0.0.1';
        $db   = 'pharmacity_dx';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            self::$pdo = new PDO($dsn, $user, $pass, $options);
            self::$useMock = false;
        } catch (\PDOException $e) {
            // MySQL not running or database not imported yet - switch to Datamock Mode
            self::$useMock = true;
        }

        return self::$pdo;
    }

    public static function isMockMode() {
        if (self::$pdo === null) {
            self::getConnection();
        }
        return self::$useMock;
    }

    public static function getMockData() {
        return require __DIR__ . '/datamock.php';
    }
}
