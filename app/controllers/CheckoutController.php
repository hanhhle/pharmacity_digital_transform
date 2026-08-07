<?php
require_once __DIR__ . '/../models/ProductModel.php';
require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../models/CartModel.php';

class CheckoutController {
    public function index() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $userId = 1;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
            $pId = intval($_POST['product_id']);
            $qty = max(1, intval($_POST['quantity'] ?? 1));
            $action = $_POST['action'] ?? 'buy_now';
            
            if ($action === 'buy_now') {
                CartModel::buyNow($userId, $pId, $qty);
            } else {
                CartModel::addItem($userId, $pId, $qty);
                if ($action === 'add_to_cart' || $action === 'add') {
                    $_SESSION['cart_toast'] = 'Đã thêm sản phẩm vào giỏ hàng thành công!';
                    $redirectUrl = $_SERVER['HTTP_REFERER'] ?? ((defined('BASE_URL') ? BASE_URL : '') . '/index.php?route=cart');
                    header('Location: ' . $redirectUrl);
                    exit;
                }
            }
        } elseif (isset($_GET['buy_now_id'])) {
            $pId = intval($_GET['buy_now_id']);
            $qty = max(1, intval($_GET['quantity'] ?? 1));
            if ($pId > 0) {
                CartModel::buyNow($userId, $pId, $qty);
            }
        }

        $allCartItems = CartModel::getCartItems($userId);
        
        // Filter $cartItems so Checkout ONLY displays recent/checked items
        $cartItems = array_filter($allCartItems, function($item) {
            return !empty($item['auto_checked']);
        });

        if (empty($cartItems)) {
            $cartItems = $allCartItems;
        }

        $aiRecommendations = ProductModel::getAIRecommendations();
        $user = UserModel::getUserProfile();

        require __DIR__ . '/../views/checkout/index.php';
    }

    public function ecosystem() {
        require __DIR__ . '/../views/ecosystem/index.php';
    }
}
