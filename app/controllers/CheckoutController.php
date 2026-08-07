<?php
require_once __DIR__ . '/../models/ProductModel.php';
require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../models/CartModel.php';

class CheckoutController {
    public function index() {
        $userId = 1;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
            $pId = intval($_POST['product_id']);
            $qty = max(1, intval($_POST['quantity'] ?? 1));
            $action = $_POST['action'] ?? 'buy_now';
            
            CartModel::addItem($userId, $pId, $qty);

            if ($action === 'add_to_cart' || $action === 'add') {
                $_SESSION['cart_toast'] = 'Đã thêm sản phẩm vào giỏ hàng thành công!';
                $redirectUrl = $_SERVER['HTTP_REFERER'] ?? '/index.php?route=cart';
                header('Location: ' . $redirectUrl);
                exit;
            }
        }

        $cartItems = CartModel::getCartItems($userId);
        $aiRecommendations = ProductModel::getAIRecommendations();
        $user = UserModel::getUserProfile();

        require __DIR__ . '/../views/checkout/index.php';
    }

    public function ecosystem() {
        require __DIR__ . '/../views/ecosystem/index.php';
    }
}
