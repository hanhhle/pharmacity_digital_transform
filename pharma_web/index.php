<?php
/**
 * Pharmacity Digital Transformation Platform
 * Front Controller & Central MVC Router
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once __DIR__ . '/app/controllers/HomeController.php';
require_once __DIR__ . '/app/controllers/SuperAppController.php';
require_once __DIR__ . '/app/controllers/DashboardController.php';
require_once __DIR__ . '/app/controllers/CheckoutController.php';
require_once __DIR__ . '/app/controllers/AdminController.php';

$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'category':
        $controller = new HomeController();
        $controller->category();
        break;

    case 'product':
        $controller = new HomeController();
        $controller->product();
        break;

    case 'stores':
        $controller = new HomeController();
        $controller->stores();
        break;

    case 'skincare':
        $controller = new HomeController();
        $controller->skincare();
        break;

    case 'prescription':
        $controller = new SuperAppController();
        $controller->prescription();
        break;

    case 'telemedicine':
        $controller = new SuperAppController();
        $controller->telemedicine();
        break;

    case 'account':
        $controller = new DashboardController();
        $controller->account();
        break;

    case 'kiosk':
        $controller = new DashboardController();
        $controller->kiosk();
        break;

    case 'checkout':
        $controller = new CheckoutController();
        $controller->index();
        break;

    case 'ecosystem':
        $controller = new CheckoutController();
        $controller->ecosystem();
        break;

    case 'admin':
        $controller = new AdminController();
        $controller->index();
        break;

    case 'home':
    default:
        $controller = new HomeController();
        $controller->index();
        break;
}
