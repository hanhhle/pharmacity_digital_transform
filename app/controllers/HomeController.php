<?php
require_once __DIR__ . '/../models/ProductModel.php';
require_once __DIR__ . '/../models/UserModel.php';

class HomeController {
    public function index() {
        $products = ProductModel::getAllProducts();
        $aiRecommendations = ProductModel::getAIRecommendations();
        $user = UserModel::getUserProfile();
        
        require __DIR__ . '/../views/home/index.php';
    }

    public function category() {
        $products = ProductModel::getAllProducts();
        $user = UserModel::getUserProfile();
        require __DIR__ . '/../views/home/category.php';
    }

    public function product() {
        $user = UserModel::getUserProfile();
        require __DIR__ . '/../views/home/product_detail.php';
    }

    public function stores() {
        $user = UserModel::getUserProfile();
        require __DIR__ . '/../views/home/stores.php';
    }

    public function skincare() {
        $products = ProductModel::getAllProducts();
        $user = UserModel::getUserProfile();
        require __DIR__ . '/../views/home/skincare.php';
    }
}
