<?php
require_once __DIR__ . '/../../config/database.php';

class AdminModel {
    public static function getDemandForecasts() {
        $mock = Database::getMockData();
        return $mock['demand_forecasts'];
    }

    public static function getFEFOExpiryBatches() {
        $mock = Database::getMockData();
        return $mock['expiry_batches'];
    }
}
