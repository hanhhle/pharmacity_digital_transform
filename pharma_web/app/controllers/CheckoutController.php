<?php
require_once __DIR__ . '/../models/ProductModel.php';
require_once __DIR__ . '/../models/UserModel.php';

class CheckoutController {
    public function index() {
        // Handle Add To Cart / Buy Now POST requests
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
            if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            
            $pId = intval($_POST['product_id']);
            $qty = max(1, intval($_POST['quantity'] ?? 1));
            
            if (isset($_SESSION['cart'][$pId])) {
                $_SESSION['cart'][$pId] += $qty;
            } else {
                $_SESSION['cart'][$pId] = $qty;
            }

            $action = $_POST['action'] ?? 'buy_now';
            if ($action === 'add_to_cart') {
                $_SESSION['cart_toast'] = 'Đã thêm sản phẩm vào giỏ hàng thành công!';
                $redirectUrl = $_SERVER['HTTP_REFERER'] ?? '/index.php?route=product&id=' . $pId;
                header('Location: ' . $redirectUrl);
                exit;
            }
        }

        // Default initial cart if session cart is empty
        if (empty($_SESSION['cart'])) {
            $_SESSION['cart'] = [
                3 => 1, // Gel rửa mặt Effaclar
                5 => 1  // Kem chống nắng Anthelios
            ];
        }

        $cartItems = [];
        foreach ($_SESSION['cart'] as $id => $qty) {
            $p = ProductModel::getProductById($id);
            if ($p) {
                $p['cart_quantity'] = $qty;
                $cartItems[] = $p;
            }
        }

        $aiRecommendations = ProductModel::getAIRecommendations();
        $user = UserModel::getUserProfile();

        require __DIR__ . '/../views/checkout/index.php';
    }

    public function ecosystem() {
        require __DIR__ . '/../views/ecosystem/index.php';
    }
}
