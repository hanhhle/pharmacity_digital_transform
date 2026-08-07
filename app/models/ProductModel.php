<?php
require_once __DIR__ . '/../../config/database.php';

class ProductModel {
    private static $imageFallbacks = [
        1 => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260527074753-0-OL00319.png',
        2 => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20260529023827-0-OL00326.png',
        3 => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260730095006-0-P30519.png',
        4 => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260402114453-0-P30711.png',
        5 => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260803030945-1-P37209.png',
        6 => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20241107084419-0-P09747.png',
        7 => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20260408081458-0-P00779.jpg',
        8 => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20250723071928-0-dadau.png'
    ];

    public static function sanitizeImage($url, $id = 1) {
        if (empty($url) || strpos($url, 'unsplash.com') !== false) {
            return self::$imageFallbacks[$id] ?? 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260527074753-0-OL00319.png';
        }
        return $url;
    }

    public static function getAllProducts() {
        if (Database::isMockMode()) {
            $mock = Database::getMockData();
            $products = $mock['products'];
        } else {
            $pdo = Database::getConnection();
            $stmt = $pdo->query("SELECT * FROM products ORDER BY id ASC");
            $products = $stmt->fetchAll();
        }

        foreach ($products as &$p) {
            $p['image'] = self::sanitizeImage($p['image'] ?? '', $p['id']);
        }
        return $products;
    }

    public static function getProductById($id) {
        $products = self::getAllProducts();
        foreach ($products as $p) {
            if ($p['id'] == $id) return $p;
        }
        return null;
    }

    public static function getAIRecommendations($userId = 1, $weatherContext = 'TP.HCM - Nắng nóng, độ ẩm cao') {
        $products = self::getAllProducts();
        
        $recommended = [];
        foreach ($products as $p) {
            if (in_array($p['id'], [1, 3, 4, 5, 8])) {
                $item = $p;
                if ($p['id'] == 3) {
                    $item['ai_reason'] = 'Dựa trên thời tiết nắng nóng TP.HCM & Tiền sử chăm sóc da mụn';
                } elseif ($p['id'] == 5) {
                    $item['ai_reason'] = 'Bảo vệ UV cấp thiết theo dự báo thời tiết hôm nay';
                } elseif ($p['id'] == 1) {
                    $item['ai_reason'] = 'Bổ sung vi chất chống kiệt sức mùa hè';
                } elseif ($p['id'] == 8) {
                    $item['ai_reason'] = 'Tương thích đồng bộ chỉ số Kiosk Sức Khoẻ của bạn';
                } else {
                    $item['ai_reason'] = 'Gợi ý kết hợp cùng sản phẩm đang xem';
                }
                $recommended[] = $item;
            }
        }
        return $recommended;
    }
}
