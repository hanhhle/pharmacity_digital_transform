-- ============================================================
-- Pharmacity Digital Transformation (DX) Smart Healthcare Platform
-- SQL Script for XAMPP / phpMyAdmin Import
-- Database: pharmacity_dx
-- ============================================================

CREATE DATABASE IF NOT EXISTS `pharmacity_dx` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `pharmacity_dx`;

-- --------------------------------------------------------
-- Table structure for `users`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `fullname` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `loyalty_tier` VARCHAR(50) DEFAULT 'Gold Member',
  `loyalty_points` INT DEFAULT 1850,
  `blood_pressure` VARCHAR(50) DEFAULT '120/80 mmHg',
  `heart_rate` INT DEFAULT 72,
  `bmi` DECIMAL(4,1) DEFAULT 21.5,
  `weight_kg` DECIMAL(4,1) DEFAULT 62.0,
  `blood_glucose` VARCHAR(50) DEFAULT '95 mg/dL',
  `health_conditions` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `loyalty_tier`, `loyalty_points`, `blood_pressure`, `heart_rate`, `bmi`, `weight_kg`, `blood_glucose`, `health_conditions`) VALUES
(1, 'Nguyen Van A', 'nguyenvana@gmail.com', '0908123456', 'Platinum Extra', 2450, '118/78 mmHg', 70, 21.8, 64.0, '92 mg/dL', 'Nhạy cảm da, Dị ứng Penicillin nhẹ');

-- --------------------------------------------------------
-- Table structure for `products`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `sku` VARCHAR(50) NOT NULL,
  `category` VARCHAR(100) NOT NULL,
  `price` DECIMAL(10,0) NOT NULL,
  `original_price` DECIMAL(10,0) DEFAULT NULL,
  `unit` VARCHAR(50) DEFAULT 'Hộp',
  `image` VARCHAR(255) DEFAULT NULL,
  `is_prescription` TINYINT(1) DEFAULT 0,
  `description` TEXT,
  `dosage` VARCHAR(255) DEFAULT NULL,
  `ai_recommend_tag` VARCHAR(255) DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `sku`, `category`, `price`, `original_price`, `unit`, `image`, `is_prescription`, `description`, `dosage`, `ai_recommend_tag`) VALUES
(1, 'Viên sủi Berocca Performance vị cam (Hộp 10 viên)', 'BER-01', 'Vitamins & Khoáng chất', 82000, 95000, 'Hộp 10 viên', 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=300', 0, 'Bổ sung Vitamin B, C và khoáng chất thiết yếu giúp giảm mệt mỏi, tăng cường năng lượng.', '1 viên/ngày sủi với 200ml nước', 'Thời tiết nóng / Mệt mỏi'),
(2, 'Khẩu trang y tế Pharmacity 4 lớp 3D (Hộp 50 cái)', 'PMC-MASK3D', 'Thiết bị y tế', 45000, 55000, 'Hộp 50 cái', 'https://images.unsplash.com/photo-1586942593568-29364efbe871?w=300', 0, 'Khẩu trang kháng khuẩn 99% BFE, lọc bụi mịn PM2.5, thiết kế ôm khít dễ thở.', 'Dùng 1 lần', 'Bảo vệ hô hấp mùa mưa'),
(3, 'Gel rửa mặt La Roche-Posay Effaclar Purifying 200ml', 'LRP-EFF-200', 'Dược mỹ phẩm', 385000, 420000, 'Chai 200ml', 'https://images.unsplash.com/photo-1556228720-195a672e8a03?w=300', 0, 'Gel rửa mặt tạo bọt làm sạch sâu dành cho da dầu mụn nhạy cảm.', 'Dùng 2 lần/ngày sáng & tối', 'Hỗ trợ điều trị mụn'),
(4, 'Nước cân bằng da La Roche-Posay Effaclar Lotion 200ml', 'LRP-LOT-200', 'Dược mỹ phẩm', 410000, 450000, 'Chai 200ml', 'https://images.unsplash.com/photo-1608248597260-244e45d944c6?w=300', 0, 'Nước hoa hồng giúp se khít lỗ chân lông và giảm sưng viêm mụn.', 'Thoa sau khi rửa mặt', 'Kèm sản phẩm trị mụn'),
(5, 'Kem chống nắng La Roche-Posay Anthelios UVmune 400 50ml', 'LRP-SUN-50', 'Dược mỹ phẩm', 495000, 530000, 'Tuýp 50ml', 'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=300', 0, 'Chống nắng phổ rộng bảo vệ tối đa khỏi tia UVA/UVB dài, không gây nhờn rít.', 'Thoa trước khi ra nắng 20p', 'Khuyên dùng cùng trị mụn'),
(6, 'Thuốc hạ sốt Paracetamol Pharmacity 500mg (Hộp 100 viên)', 'PMC-PARA500', 'Thuốc không kê đơn', 35000, 40000, 'Hộp 10 vỉ', 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=300', 0, 'Giảm đau hạ sốt nhanh chóng trong các trường hợp cảm cúm, đau đầu, nhức mỏi.', '1-2 viên cách nhau 4-6 giờ', 'Củ thuốc tủ gia đình'),
(7, 'Thuốc điều trị huyết áp Amlodipine 5mg (Hộp 30 viên)', 'AML-5MG', 'Thuốc kê đơn', 65000, NULL, 'Hộp 3 vỉ', 'https://images.unsplash.com/photo-1471864190281-a93a3070b6de?w=300', 1, 'Thuốc chẹn kênh calci điều trị tăng huyết áp và đau thắt ngực (Cần đơn bác sĩ).', '1 viên/ngày theo chỉ định', 'Kèm đơn thuốc cao huyết áp'),
(8, 'Máy đo huyết áp tự động Omron HEM-7120', 'OMR-7120', 'Thiết bị y tế', 890000, 1050000, 'Bộ', 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=300', 0, 'Máy đo huyết áp bắp tay thông minh phát hiện nhịp tim bất thường chính xác.', 'Sử dụng hằng ngày', 'Kiosk IoT đồng bộ app');

-- --------------------------------------------------------
-- Table structure for `stores`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `store_code` VARCHAR(20) NOT NULL,
  `name` VARCHAR(150) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `district` VARCHAR(50) NOT NULL,
  `city` VARCHAR(50) NOT NULL,
  `phone` VARCHAR(20) DEFAULT '1800 6821',
  `has_kiosk` TINYINT(1) DEFAULT 1,
  `latitude` DECIMAL(10,8) DEFAULT 10.776889,
  `longitude` DECIMAL(11,8) DEFAULT 106.700806
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `stores` (`id`, `store_code`, `name`, `address`, `district`, `city`, `phone`, `has_kiosk`) VALUES
(1, 'PMC-001', 'Pharmacity 205 Nguyễn Trãi', '205 Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1', 'Quận 1', 'TP. Hồ Chí Minh', '028 7300 0001', 1),
(2, 'PMC-042', 'Pharmacity 15A Trần Hưng Đạo', '15A Trần Hưng Đạo, Phường Phan Chu Trinh', 'Quận Hoàn Kiếm', 'Hà Nội', '024 7300 0042', 1),
(3, 'PMC-108', 'Pharmacity 364 Cộng Hòa', '364 Cộng Hòa, Phường 13, Quận Tân Bình', 'Quận Tân Bình', 'TP. Hồ Chí Minh', '028 7300 0108', 1),
(4, 'PMC-215', 'Pharmacity 82 Nguyễn Văn Linh', '82 Nguyễn Văn Linh, Phường Nam Dương', 'Quận Hải Châu', 'Đà Nẵng', '0236 730 0215', 0);

-- --------------------------------------------------------
-- Table structure for `store_inventory`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `store_inventory`;
CREATE TABLE `store_inventory` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `store_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `stock_quantity` INT NOT NULL DEFAULT 0,
  `safety_stock` INT NOT NULL DEFAULT 10,
  `last_updated` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`store_id`) REFERENCES `stores`(`id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `store_inventory` (`store_id`, `product_id`, `stock_quantity`, `safety_stock`) VALUES
(1, 1, 45, 10), (1, 2, 120, 20), (1, 3, 8, 5), (1, 4, 14, 5), (1, 5, 6, 5), (1, 6, 200, 30), (1, 7, 35, 10), (1, 8, 4, 2),
(2, 1, 30, 10), (2, 2, 85, 20), (2, 3, 2, 5), (2, 4, 9, 5), (2, 5, 3, 5), (2, 6, 150, 30), (2, 7, 18, 10), (2, 8, 5, 2);

-- --------------------------------------------------------
-- Table structure for `telemedicine_doctors`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `telemedicine_doctors`;
CREATE TABLE `telemedicine_doctors` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `specialty` VARCHAR(100) NOT NULL,
  `hospital` VARCHAR(150) NOT NULL,
  `rating` DECIMAL(2,1) DEFAULT 4.9,
  `consultation_fee` DECIMAL(10,0) DEFAULT 150000,
  `avatar` VARCHAR(255) DEFAULT NULL,
  `available_time` VARCHAR(100) DEFAULT '8:00 - 20:00 Hằng ngày'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `telemedicine_doctors` (`id`, `name`, `specialty`, `hospital`, `rating`, `consultation_fee`, `avatar`, `available_time`) VALUES
(1, 'BS. CKII Nguyễn Thị Thanh', 'Nội khoa & Huyết áp', 'Bệnh viện Đại học Y Dược TP.HCM', 4.9, 150000, 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200', '08:00 - 17:30 Hôm nay'),
(2, 'ThS. BS Trần Minh Hoàng', 'Da liễu & Dược mỹ phẩm', 'Bệnh viện Da Liễu TP.HCM', 4.8, 180000, 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=200', '09:00 - 20:00 Hôm nay'),
(3, 'BS. CKI Lê Hoàng Anh', 'Nhi khoa & Dinh dưỡng', 'Bệnh viện Nhi Đồng 1', 5.0, 160000, 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=200', '13:00 - 21:00 Hôm nay');

-- --------------------------------------------------------
-- Table structure for `health_kiosk_logs`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `health_kiosk_logs`;
CREATE TABLE `health_kiosk_logs` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `store_id` INT DEFAULT 1,
  `blood_pressure_sys` INT NOT NULL,
  `blood_pressure_dia` INT NOT NULL,
  `heart_rate` INT NOT NULL,
  `bmi` DECIMAL(4,1) NOT NULL,
  `weight_kg` DECIMAL(4,1) NOT NULL,
  `spo2_percent` INT DEFAULT 98,
  `ai_assessment` VARCHAR(255) DEFAULT 'Chỉ số sức khỏe ổn định',
  `recorded_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `health_kiosk_logs` (`user_id`, `store_id`, `blood_pressure_sys`, `blood_pressure_dia`, `heart_rate`, `bmi`, `weight_kg`, `spo2_percent`, `ai_assessment`, `recorded_at`) VALUES
(1, 1, 122, 80, 74, 22.1, 65.0, 99, 'Huyết áp và chỉ số tim mạch tối ưu', '2026-08-01 10:15:00'),
(1, 1, 120, 78, 72, 21.9, 64.5, 98, 'Huyết áp lý tưởng. Duy trì chế độ vận động', '2026-08-05 16:30:00'),
(1, 1, 118, 78, 70, 21.8, 64.0, 99, 'Xu hướng sức khỏe rất tốt', '2026-08-07 09:00:00');

-- --------------------------------------------------------
-- Table structure for `expiry_batches`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `expiry_batches`;
CREATE TABLE `expiry_batches` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `product_id` INT NOT NULL,
  `batch_number` VARCHAR(50) NOT NULL,
  `quantity` INT NOT NULL,
  `expiry_date` DATE NOT NULL,
  `location_bin` VARCHAR(50) DEFAULT 'A1-04-02',
  `fefo_status` VARCHAR(100) DEFAULT 'Xuất trước (FEFO Priority)',
  `action_recommended` VARCHAR(255) DEFAULT 'Khuyến mãi clearance 30%',
  FOREIGN KEY (`product_id`) REFERENCES `products`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `expiry_batches` (`product_id`, `batch_number`, `quantity`, `expiry_date`, `location_bin`, `fefo_status`, `action_recommended`) VALUES
(1, 'LOT-BER2026-01', 45, '2026-09-15', 'A1-02-01', 'Cảnh báo hạn ngắn (<45 ngày)', 'Giảm giá 40% xả kho FEFO'),
(3, 'LOT-LRP2026-09', 12, '2026-08-28', 'B2-01-05', 'CẬN HẠN CẤP THIẾT (<25 ngày)', 'Ưu tiên xuất bán cửa hàng Q1 (FEFO)'),
(6, 'LOT-PMC2027-11', 500, '2027-12-31', 'C3-05-12', 'An toàn (>500 ngày)', 'Lưu kho tiêu chuẩn');

-- --------------------------------------------------------
-- Table structure for `demand_forecasts`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `demand_forecasts`;
CREATE TABLE `demand_forecasts` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `region` VARCHAR(100) NOT NULL,
  `category` VARCHAR(100) NOT NULL,
  `current_stock` INT NOT NULL,
  `forecasted_demand_30d` INT NOT NULL,
  `recommended_replenishment` INT NOT NULL,
  `ai_confidence` DECIMAL(4,1) DEFAULT 94.5,
  `trend_direction` VARCHAR(255) DEFAULT 'TĂNG 28% (Mùa mưa)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `demand_forecasts` (`region`, `category`, `current_stock`, `forecasted_demand_30d`, `recommended_replenishment`, `ai_confidence`, `trend_direction`) VALUES
('TP. Hồ Chí Minh', 'Khẩu trang & Chống dịch', 1200, 3500, 2300, 96.2, 'TĂNG 42% (Bụi mịn & Mùa mưa)'),
('Hà Nội', 'Thuốc cảm cúm & Hạ sốt', 850, 2100, 1250, 93.8, 'TĂNG 35% (Giao mùa)'),
('Đà Nẵng', 'Vitamins & Sức đề kháng', 400, 950, 550, 91.5, 'TĂNG 18%');

-- --------------------------------------------------------
-- Table structure for `cart_items` (Giỏ Hàng Người Dùng)
-- --------------------------------------------------------
DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE `cart_items` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `quantity` INT NOT NULL DEFAULT 1,
  `is_selected` TINYINT(1) DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `user_product` (`user_id`, `product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cart_items` (`user_id`, `product_id`, `quantity`, `is_selected`) VALUES
(1, 3, 1, 1),
(1, 5, 1, 1),
(1, 7, 1, 1);

-- ============================================================
-- End of pharmacity_dx.sql
-- ============================================================
