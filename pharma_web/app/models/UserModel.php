<?php
require_once __DIR__ . '/../../config/database.php';

class UserModel {
    public static function getUserProfile($userId = 1) {
        $mock = Database::getMockData();
        return $mock['user'];
    }
}
