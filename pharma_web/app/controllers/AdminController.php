<?php
require_once __DIR__ . '/../models/AdminModel.php';

class AdminController {
    public function index() {
        $forecasts = AdminModel::getDemandForecasts();
        $expiryBatches = AdminModel::getFEFOExpiryBatches();
        require __DIR__ . '/../views/admin/index.php';
    }
}
