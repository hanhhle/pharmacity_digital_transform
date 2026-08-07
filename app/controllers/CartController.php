<?php
require_once __DIR__ . '/../models/CartModel.php';
require_once __DIR__ . '/../models/UserModel.php';

class CartController {
    public function index() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $userId = 1;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'] ?? '';
            $productId = intval($_POST['product_id'] ?? 0);
            $qty = intval($_POST['quantity'] ?? 1);

            if (($action === 'add' || $action === 'add_to_cart') && $productId > 0) {
                CartModel::addItem($userId, $productId, $qty);
                $_SESSION['cart_toast'] = 'Đã thêm sản phẩm vào giỏ hàng!';
            } elseif ($action === 'buy_now' && $productId > 0) {
                CartModel::buyNow($userId, $productId, $qty);
                header('Location: ' . (defined('BASE_URL') ? BASE_URL : '') . '/index.php?route=checkout');
                exit;
            } elseif ($action === 'update' && $productId > 0) {
                CartModel::updateQuantity($userId, $productId, $qty);
            } elseif ($action === 'remove' && $productId > 0) {
                CartModel::removeItem($userId, $productId);
            } elseif ($action === 'clear') {
                CartModel::clearCart($userId);
            }

            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                echo json_encode([
                    'status' => 'success',
                    'cart_count' => CartModel::getCartCount($userId)
                ]);
                exit;
            }

            header('Location: ' . (defined('BASE_URL') ? BASE_URL : '') . '/index.php?route=cart');
            exit;
        }

        $cartItems = CartModel::getCartItems($userId);
        $cartCount = CartModel::getCartCount($userId);
        $user = UserModel::getUserProfile();

        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['subtotal'];
        }

        require __DIR__ . '/../views/cart/index.php';
    }
}
