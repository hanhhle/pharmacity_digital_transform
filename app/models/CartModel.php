<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/ProductModel.php';

class CartModel {
    
    public static function getCartItems($userId = 1) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $now = time();

        // Initialize session cart on first access if never initialized
        if (!isset($_SESSION['user_cart'][$userId])) {
            $_SESSION['user_cart'][$userId] = [
                15 => ['quantity' => 2, 'is_selected' => 1, 'added_at' => $now - 3600], // Mua 2 Tặng 1 (Older)
                16 => ['quantity' => 1, 'is_selected' => 1, 'added_at' => $now - 3600], // Deal 50% (Older)
                17 => ['quantity' => 1, 'is_selected' => 1, 'added_at' => $now]        // Deal Combo 120K (Recent < 5s)
            ];

            if (!Database::isMockMode()) {
                try {
                    $pdo = Database::getConnection();
                    $pdo->exec("CREATE TABLE IF NOT EXISTS `cart_items` (
                      `id` INT AUTO_INCREMENT PRIMARY KEY,
                      `user_id` INT NOT NULL,
                      `product_id` INT NOT NULL,
                      `quantity` INT NOT NULL DEFAULT 1,
                      `is_selected` TINYINT(1) DEFAULT 1,
                      `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                      `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      UNIQUE KEY `user_product` (`user_id`, `product_id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

                    $stmt = $pdo->prepare("INSERT IGNORE INTO cart_items (user_id, product_id, quantity, is_selected) VALUES (1, 15, 2, 1), (1, 16, 1, 1), (1, 17, 1, 1)");
                    $stmt->execute();
                } catch (Exception $e) {}
            }
        }

        $itemsMap = $_SESSION['user_cart'][$userId] ?? [];

        // Try DB fallback if available
        if (!Database::isMockMode()) {
            try {
                $pdo = Database::getConnection();
                $stmt = $pdo->prepare("SELECT product_id, quantity, is_selected, UNIX_TIMESTAMP(updated_at) as updated_ts FROM cart_items WHERE user_id = :uid ORDER BY id ASC");
                $stmt->execute([':uid' => $userId]);
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if (!empty($rows)) {
                    $itemsMap = [];
                    foreach ($rows as $r) {
                        $itemsMap[$r['product_id']] = [
                            'quantity' => intval($r['quantity']),
                            'is_selected' => intval($r['is_selected']),
                            'added_at' => intval($r['updated_ts'])
                        ];
                    }
                }
            } catch (Exception $e) {}
        }

        $result = [];
        foreach ($itemsMap as $pId => $info) {
            $product = ProductModel::getProductById($pId);
            if ($product) {
                $qty = is_array($info) ? $info['quantity'] : intval($info);
                $isSelected = is_array($info) ? $info['is_selected'] : 1;
                $addedAt = is_array($info) ? intval($info['added_at'] ?? 0) : 0;

                // Auto-checked ONLY if added/updated in the last 5 seconds!
                $isRecent = (($now - $addedAt) < 5);

                $product['cart_quantity'] = $qty;
                $product['is_selected'] = $isSelected;
                $product['added_at'] = $addedAt;
                $product['auto_checked'] = $isRecent;
                $product['subtotal'] = $product['price'] * $qty;
                $result[] = $product;
            }
        }

        return $result;
    }

    public static function addItem($userId, $productId, $quantity = 1) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $quantity = max(1, intval($quantity));
        $now = time();

        if (!isset($_SESSION['user_cart'][$userId]) || !is_array($_SESSION['user_cart'][$userId])) {
            $_SESSION['user_cart'][$userId] = [];
        }

        if (isset($_SESSION['user_cart'][$userId][$productId])) {
            $currQty = is_array($_SESSION['user_cart'][$userId][$productId]) ? $_SESSION['user_cart'][$userId][$productId]['quantity'] : $_SESSION['user_cart'][$userId][$productId];
            $_SESSION['user_cart'][$userId][$productId] = [
                'quantity' => $currQty + $quantity,
                'is_selected' => 1,
                'added_at' => $now
            ];
        } else {
            $_SESSION['user_cart'][$userId][$productId] = [
                'quantity' => $quantity,
                'is_selected' => 1,
                'added_at' => $now
            ];
        }

        if (!Database::isMockMode()) {
            try {
                $pdo = Database::getConnection();
                $stmt = $pdo->prepare("INSERT INTO cart_items (user_id, product_id, quantity, is_selected, updated_at) 
                    VALUES (:uid, :pid, :qty, 1, CURRENT_TIMESTAMP) 
                    ON DUPLICATE KEY UPDATE quantity = quantity + :qty2, is_selected = 1, updated_at = CURRENT_TIMESTAMP");
                $stmt->execute([':uid' => $userId, ':pid' => $productId, ':qty' => $quantity, ':qty2' => $quantity]);
            } catch (Exception $e) {}
        }
    }

    public static function updateQuantity($userId, $productId, $quantity) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $quantity = intval($quantity);

        if ($quantity <= 0) {
            return self::removeItem($userId, $productId);
        }

        if (isset($_SESSION['user_cart'][$userId][$productId])) {
            $_SESSION['user_cart'][$userId][$productId]['quantity'] = $quantity;
        }

        if (!Database::isMockMode()) {
            try {
                $pdo = Database::getConnection();
                $stmt = $pdo->prepare("UPDATE cart_items SET quantity = :qty, updated_at = CURRENT_TIMESTAMP WHERE user_id = :uid AND product_id = :pid");
                $stmt->execute([':qty' => $quantity, ':uid' => $userId, ':pid' => $productId]);
            } catch (Exception $e) {}
        }
    }

    public static function removeItem($userId, $productId) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user_cart'][$userId][$productId])) {
            unset($_SESSION['user_cart'][$userId][$productId]);
        }

        if (!Database::isMockMode()) {
            try {
                $pdo = Database::getConnection();
                $stmt = $pdo->prepare("DELETE FROM cart_items WHERE user_id = :uid AND product_id = :pid");
                $stmt->execute([':uid' => $userId, ':pid' => $productId]);
            } catch (Exception $e) {}
        }
    }

    public static function clearCart($userId) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['user_cart'][$userId] = [];

        if (!Database::isMockMode()) {
            try {
                $pdo = Database::getConnection();
                $stmt = $pdo->prepare("DELETE FROM cart_items WHERE user_id = :uid");
                $stmt->execute([':uid' => $userId]);
            } catch (Exception $e) {}
        }
    }

    public static function getCartCount($userId = 1) {
        $items = self::getCartItems($userId);
        $total = 0;
        foreach ($items as $item) {
            $total += intval($item['cart_quantity']);
        }
        return $total;
    }
}
