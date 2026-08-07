-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 07, 2026 lúc 08:47 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pharmacity_dx`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `is_selected` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_items`
--

INSERT INTO `cart_items` (`id`, `user_id`, `product_id`, `quantity`, `is_selected`, `created_at`, `updated_at`) VALUES
(4, 1, 13, 1, 1, '2026-08-07 18:22:58', '2026-08-07 18:22:58'),
(6, 1, 9, 2, 1, '2026-08-07 18:23:16', '2026-08-07 18:23:19'),
(8, 1, 1, 1, 1, '2026-08-07 18:24:15', '2026-08-07 18:45:55'),
(9, 1, 8, 1, 1, '2026-08-07 18:25:05', '2026-08-07 18:25:05'),
(10, 1, 4, 1, 1, '2026-08-07 18:25:51', '2026-08-07 18:25:51'),
(12, 1, 15, 2, 1, '2026-08-07 18:38:55', '2026-08-07 18:38:55'),
(13, 1, 16, 1, 1, '2026-08-07 18:38:55', '2026-08-07 18:38:55'),
(14, 1, 17, 1, 1, '2026-08-07 18:38:55', '2026-08-07 18:38:55'),
(27, 1, 6, 1, 1, '2026-08-07 18:42:31', '2026-08-07 18:42:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `demand_forecasts`
--

CREATE TABLE `demand_forecasts` (
  `id` int(11) NOT NULL,
  `region` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `current_stock` int(11) NOT NULL,
  `forecasted_demand_30d` int(11) NOT NULL,
  `recommended_replenishment` int(11) NOT NULL,
  `ai_confidence` decimal(4,1) DEFAULT 94.5,
  `trend_direction` varchar(255) DEFAULT 'TĂNG 28% (Mùa mưa)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `demand_forecasts`
--

INSERT INTO `demand_forecasts` (`id`, `region`, `category`, `current_stock`, `forecasted_demand_30d`, `recommended_replenishment`, `ai_confidence`, `trend_direction`) VALUES
(1, 'TP. Hồ Chí Minh', 'Khẩu trang & Chống dịch', 1200, 3500, 2300, 96.2, 'TĂNG 42% (Bụi mịn & Mùa mưa)'),
(2, 'Hà Nội', 'Thuốc cảm cúm & Hạ sốt', 850, 2100, 1250, 93.8, 'TĂNG 35% (Giao mùa)'),
(3, 'Đà Nẵng', 'Vitamins & Sức đề kháng', 400, 950, 550, 91.5, 'TĂNG 18%');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `expiry_batches`
--

CREATE TABLE `expiry_batches` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `batch_number` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `location_bin` varchar(50) DEFAULT 'A1-04-02',
  `fefo_status` varchar(100) DEFAULT 'Xuất trước (FEFO Priority)',
  `action_recommended` varchar(255) DEFAULT 'Khuyến mãi clearance 30%'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `expiry_batches`
--

INSERT INTO `expiry_batches` (`id`, `product_id`, `batch_number`, `quantity`, `expiry_date`, `location_bin`, `fefo_status`, `action_recommended`) VALUES
(1, 1, 'LOT-BER2026-01', 45, '2026-09-15', 'A1-02-01', 'Cảnh báo hạn ngắn (<45 ngày)', 'Giảm giá 40% xả kho FEFO'),
(2, 3, 'LOT-LRP2026-09', 12, '2026-08-28', 'B2-01-05', 'CẬN HẠN CẤP THIẾT (<25 ngày)', 'Ưu tiên xuất bán cửa hàng Q1 (FEFO)'),
(3, 6, 'LOT-PMC2027-11', 500, '2027-12-31', 'C3-05-12', 'An toàn (>500 ngày)', 'Lưu kho tiêu chuẩn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `health_kiosk_logs`
--

CREATE TABLE `health_kiosk_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) DEFAULT 1,
  `blood_pressure_sys` int(11) NOT NULL,
  `blood_pressure_dia` int(11) NOT NULL,
  `heart_rate` int(11) NOT NULL,
  `bmi` decimal(4,1) NOT NULL,
  `weight_kg` decimal(4,1) NOT NULL,
  `spo2_percent` int(11) DEFAULT 98,
  `ai_assessment` varchar(255) DEFAULT 'Chỉ số sức khỏe ổn định',
  `recorded_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `health_kiosk_logs`
--

INSERT INTO `health_kiosk_logs` (`id`, `user_id`, `store_id`, `blood_pressure_sys`, `blood_pressure_dia`, `heart_rate`, `bmi`, `weight_kg`, `spo2_percent`, `ai_assessment`, `recorded_at`) VALUES
(1, 1, 1, 122, 80, 74, 22.1, 65.0, 99, 'Huyết áp và chỉ số tim mạch tối ưu', '2026-08-01 10:15:00'),
(2, 1, 1, 120, 78, 72, 21.9, 64.5, 98, 'Huyết áp lý tưởng. Duy trì chế độ vận động', '2026-08-05 16:30:00'),
(3, 1, 1, 118, 78, 70, 21.8, 64.0, 99, 'Xu hướng sức khỏe rất tốt', '2026-08-07 09:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kiosk_logs`
--

CREATE TABLE `kiosk_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sys` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `heart_rate` int(11) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `bmi` decimal(4,1) NOT NULL,
  `spo2` int(11) DEFAULT 99,
  `status` enum('green','yellow','red') DEFAULT 'green',
  `assessment` text NOT NULL,
  `measured_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `medication_adherence_logs`
--

CREATE TABLE `medication_adherence_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `dose_slot` enum('morning','evening') NOT NULL,
  `scheduled_time` datetime NOT NULL,
  `confirmed_time` datetime DEFAULT current_timestamp(),
  `is_ontime` tinyint(1) DEFAULT 1,
  `points_rewarded` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `medication_adherence_logs`
--

INSERT INTO `medication_adherence_logs` (`id`, `user_id`, `prescription_id`, `dose_slot`, `scheduled_time`, `confirmed_time`, `is_ontime`, `points_rewarded`) VALUES
(1, 1, 1, 'morning', '2026-08-07 07:00:00', '2026-08-07 07:05:00', 1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_code` varchar(50) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `order_type` varchar(100) NOT NULL,
  `items_summary` text NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `delivery_info` varchar(255) NOT NULL,
  `status` varchar(50) DEFAULT 'Đã hoàn thành',
  `status_color` varchar(20) DEFAULT 'emerald'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_code`, `order_date`, `order_type`, `items_summary`, `total_amount`, `delivery_info`, `status`, `status_color`) VALUES
(1, 1, 'PMC-ORD-2026-905', '2026-08-07 22:40:00', 'Giao Siêu Tốc 1H', 'Augmentin 1g (10v), Paracetamol 500mg (1 hộp)', 215000.00, 'Tài xế Grab: Nguyễn Văn Tuấn (0908.111.222) - Đang di chuyển', 'Đang giao hàng 1H', 'blue'),
(2, 1, 'PMC-ORD-2026-904', '2026-08-07 21:15:00', 'Đơn Hàng Online', 'Sữa rửa mặt Cerave 473ml, Kem chống nắng Anessa 60ml', 680000.00, 'VNPost Express (Mã vận đơn: VN8839102 - Đang giao)', 'Đang vận chuyển', 'amber'),
(3, 1, 'PMC-ORD-2026-903', '2026-08-07 19:30:00', 'Tái Đơn Tự Động 1-Click', 'Berocca Performance 10v, Khẩu trang y tế 3D (50 cái)', 125000.00, 'Dược sĩ PMC Q1 đang đóng gói & điều phối tài xế', 'Đang điều phối dược sĩ', 'indigo'),
(4, 1, 'PMC-ORD-2026-901', '2026-07-15 14:30:00', 'Đơn Thuốc Định Kỳ 30 Ngày', 'Amlodipine 5mg (30v), Concor 5mg (30v)', 345000.00, 'Giao siêu tốc 1H (Tài xế Grab: Nguyễn Văn Bình)', 'Đã hoàn thành', 'emerald'),
(5, 1, 'PMC-ORD-2026-874', '2026-06-28 09:15:00', 'Đơn Thuốc Theo Chỉ Định', 'Panadol Extra (20v), Bột thanh nhiệt Sensa Cools (12g)', 64500.00, 'Nhận tại nhà thuốc PMC Q1 (Click & Collect)', 'Đã hoàn thành', 'emerald'),
(6, 1, 'PMC-ORD-2026-850', '2026-06-10 11:20:00', 'Đơn Hàng Online', 'Vitamin C 1000mg Pharmacity (Hộp 30v)', 95000.00, 'Đơn hàng đã được hủy theo yêu cầu khách hàng', 'Đã hủy', 'rose');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `original_price` decimal(10,0) DEFAULT NULL,
  `unit` varchar(50) DEFAULT 'Hộp',
  `image` varchar(255) DEFAULT NULL,
  `is_prescription` tinyint(1) DEFAULT 0,
  `description` text DEFAULT NULL,
  `dosage` varchar(255) DEFAULT NULL,
  `ai_recommend_tag` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `category`, `price`, `original_price`, `unit`, `image`, `is_prescription`, `description`, `dosage`, `ai_recommend_tag`, `created_at`) VALUES
(1, 'Viên sủi Berocca Performance vị cam (Hộp 10 viên)', 'BER-01', 'Vitamins & Khoáng chất', 82000, 95000, 'Hộp 10 viên', 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=300', 0, 'Bổ sung Vitamin B, C và khoáng chất thiết yếu giúp giảm mệt mỏi, tăng cường năng lượng.', '1 viên/ngày sủi với 200ml nước', 'Thời tiết nóng / Mệt mỏi', '2026-08-07 11:14:32'),
(2, 'Khẩu trang y tế Pharmacity 4 lớp 3D (Hộp 50 cái)', 'PMC-MASK3D', 'Thiết bị y tế', 45000, 55000, 'Hộp 50 cái', 'https://images.unsplash.com/photo-1586942593568-29364efbe871?w=300', 0, 'Khẩu trang kháng khuẩn 99% BFE, lọc bụi mịn PM2.5, thiết kế ôm khít dễ thở.', 'Dùng 1 lần', 'Bảo vệ hô hấp mùa mưa', '2026-08-07 11:14:32'),
(3, 'Gel rửa mặt La Roche-Posay Effaclar Purifying 200ml', 'LRP-EFF-200', 'Dược mỹ phẩm', 385000, 420000, 'Chai 200ml', 'https://images.unsplash.com/photo-1556228720-195a672e8a03?w=300', 0, 'Gel rửa mặt tạo bọt làm sạch sâu dành cho da dầu mụn nhạy cảm.', 'Dùng 2 lần/ngày sáng & tối', 'Hỗ trợ điều trị mụn', '2026-08-07 11:14:32'),
(4, 'Nước cân bằng da La Roche-Posay Effaclar Lotion 200ml', 'LRP-LOT-200', 'Dược mỹ phẩm', 410000, 450000, 'Chai 200ml', 'https://images.unsplash.com/photo-1608248597260-244e45d944c6?w=300', 0, 'Nước hoa hồng giúp se khít lỗ chân lông và giảm sưng viêm mụn.', 'Thoa sau khi rửa mặt', 'Kèm sản phẩm trị mụn', '2026-08-07 11:14:32'),
(5, 'Kem chống nắng La Roche-Posay Anthelios UVmune 400 50ml', 'LRP-SUN-50', 'Dược mỹ phẩm', 495000, 530000, 'Tuýp 50ml', 'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=300', 0, 'Chống nắng phổ rộng bảo vệ tối đa khỏi tia UVA/UVB dài, không gây nhờn rít.', 'Thoa trước khi ra nắng 20p', 'Khuyên dùng cùng trị mụn', '2026-08-07 11:14:32'),
(6, 'Thuốc hạ sốt Paracetamol Pharmacity 500mg (Hộp 100 viên)', 'PMC-PARA500', 'Thuốc không kê đơn', 35000, 40000, 'Hộp 10 vỉ', 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=300', 0, 'Giảm đau hạ sốt nhanh chóng trong các trường hợp cảm cúm, đau đầu, nhức mỏi.', '1-2 viên cách nhau 4-6 giờ', 'Củ thuốc tủ gia đình', '2026-08-07 11:14:32'),
(7, 'Thuốc điều trị huyết áp Amlodipine 5mg (Hộp 30 viên)', 'AML-5MG', 'Thuốc kê đơn', 65000, NULL, 'Hộp 3 vỉ', 'https://images.unsplash.com/photo-1471864190281-a93a3070b6de?w=300', 1, 'Thuốc chẹn kênh calci điều trị tăng huyết áp và đau thắt ngực (Cần đơn bác sĩ).', '1 viên/ngày theo chỉ định', 'Kèm đơn thuốc cao huyết áp', '2026-08-07 11:14:32'),
(8, 'Máy đo huyết áp tự động Omron HEM-7120', 'OMR-7120', 'Thiết bị y tế', 890000, 1050000, 'Bộ', 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=300', 0, 'Máy đo huyết áp bắp tay thông minh phát hiện nhịp tim bất thường chính xác.', 'Sử dụng hằng ngày', 'Kiosk IoT đồng bộ app', '2026-08-07 11:14:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pxu_points_history`
--

CREATE TABLE `pxu_points_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_type` enum('earn','redeem') NOT NULL DEFAULT 'earn',
  `points_changed` int(11) NOT NULL,
  `points_label` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `balance_after` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `pxu_points_history`
--

INSERT INTO `pxu_points_history` (`id`, `user_id`, `transaction_type`, `points_changed`, `points_label`, `title`, `balance_after`, `created_at`) VALUES
(1, 1, 'earn', 50, '+50 P-Xu', 'Thưởng đo sinh hiệu Kiosk IoT Pharmacity PMC Q1', '2.450 P-Xu', '2026-08-07 22:00:00'),
(2, 1, 'earn', 10, '+10 P-Xu', 'Thưởng tuân thủ uống thuốc Amlodipine đúng giờ', '2.400 P-Xu', '2026-08-07 07:00:00'),
(3, 1, 'redeem', -100, '-100 P-Xu', 'Đổi Voucher 10.000đ mua Berocca sủi cam', '2.390 P-Xu', '2026-08-01 15:30:00'),
(4, 1, 'earn', 34, '+34 P-Xu', 'Tích điểm đơn hàng PMC-ORD-2026-901', '2.490 P-Xu', '2026-07-15 14:35:00'),
(5, 1, 'earn', 100, '+100 P-Xu', 'Quà tặng sinh nhật hội viên Platinum Extra', '2.456 P-Xu', '2026-07-01 00:00:00'),
(6, 1, 'redeem', -200, '-200 P-Xu', 'Đổi quà tặng Hộp Khẩu trang 3D Pharmacity', '2.356 P-Xu', '2026-06-20 10:15:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `store_code` varchar(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT '1800 6821',
  `has_kiosk` tinyint(1) DEFAULT 1,
  `latitude` decimal(10,8) DEFAULT 10.77688900,
  `longitude` decimal(11,8) DEFAULT 106.70080600
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stores`
--

INSERT INTO `stores` (`id`, `store_code`, `name`, `address`, `district`, `city`, `phone`, `has_kiosk`, `latitude`, `longitude`) VALUES
(1, 'PMC-001', 'Pharmacity 205 Nguyễn Trãi', '205 Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1', 'Quận 1', 'TP. Hồ Chí Minh', '028 7300 0001', 1, 10.77688900, 106.70080600),
(2, 'PMC-042', 'Pharmacity 15A Trần Hưng Đạo', '15A Trần Hưng Đạo, Phường Phan Chu Trinh', 'Quận Hoàn Kiếm', 'Hà Nội', '024 7300 0042', 1, 10.77688900, 106.70080600),
(3, 'PMC-108', 'Pharmacity 364 Cộng Hòa', '364 Cộng Hòa, Phường 13, Quận Tân Bình', 'Quận Tân Bình', 'TP. Hồ Chí Minh', '028 7300 0108', 1, 10.77688900, 106.70080600),
(4, 'PMC-215', 'Pharmacity 82 Nguyễn Văn Linh', '82 Nguyễn Văn Linh, Phường Nam Dương', 'Quận Hải Châu', 'Đà Nẵng', '0236 730 0215', 0, 10.77688900, 106.70080600);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `store_inventory`
--

CREATE TABLE `store_inventory` (
  `id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL DEFAULT 0,
  `safety_stock` int(11) NOT NULL DEFAULT 10,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `store_inventory`
--

INSERT INTO `store_inventory` (`id`, `store_id`, `product_id`, `stock_quantity`, `safety_stock`, `last_updated`) VALUES
(1, 1, 1, 45, 10, '2026-08-07 11:14:32'),
(2, 1, 2, 120, 20, '2026-08-07 11:14:32'),
(3, 1, 3, 8, 5, '2026-08-07 11:14:32'),
(4, 1, 4, 14, 5, '2026-08-07 11:14:32'),
(5, 1, 5, 6, 5, '2026-08-07 11:14:32'),
(6, 1, 6, 200, 30, '2026-08-07 11:14:32'),
(7, 1, 7, 35, 10, '2026-08-07 11:14:32'),
(8, 1, 8, 4, 2, '2026-08-07 11:14:32'),
(9, 2, 1, 30, 10, '2026-08-07 11:14:32'),
(10, 2, 2, 85, 20, '2026-08-07 11:14:32'),
(11, 2, 3, 2, 5, '2026-08-07 11:14:32'),
(12, 2, 4, 9, 5, '2026-08-07 11:14:32'),
(13, 2, 5, 3, 5, '2026-08-07 11:14:32'),
(14, 2, 6, 150, 30, '2026-08-07 11:14:32'),
(15, 2, 7, 18, 10, '2026-08-07 11:14:32'),
(16, 2, 8, 5, 2, '2026-08-07 11:14:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `telemedicine_doctors`
--

CREATE TABLE `telemedicine_doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `rating` decimal(2,1) DEFAULT 4.9,
  `consultation_fee` decimal(10,0) DEFAULT 150000,
  `avatar` varchar(255) DEFAULT NULL,
  `available_time` varchar(100) DEFAULT '8:00 - 20:00 Hằng ngày'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `telemedicine_doctors`
--

INSERT INTO `telemedicine_doctors` (`id`, `name`, `specialty`, `hospital`, `rating`, `consultation_fee`, `avatar`, `available_time`) VALUES
(1, 'BS. CKII Nguyễn Thị Thanh', 'Nội khoa & Huyết áp', 'Bệnh viện Đại học Y Dược TP.HCM', 4.9, 150000, 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200', '08:00 - 17:30 Hôm nay'),
(2, 'ThS. BS Trần Minh Hoàng', 'Da liễu & Dược mỹ phẩm', 'Bệnh viện Da Liễu TP.HCM', 4.8, 180000, 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=200', '09:00 - 20:00 Hôm nay'),
(3, 'BS. CKI Lê Hoàng Anh', 'Nhi khoa & Dinh dưỡng', 'Bệnh viện Nhi Đồng 1', 5.0, 160000, 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=200', '13:00 - 21:00 Hôm nay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `loyalty_tier` varchar(50) DEFAULT 'Gold Member',
  `loyalty_points` int(11) DEFAULT 1850,
  `blood_pressure` varchar(50) DEFAULT '120/80 mmHg',
  `heart_rate` int(11) DEFAULT 72,
  `bmi` decimal(4,1) DEFAULT 21.5,
  `weight_kg` decimal(4,1) DEFAULT 62.0,
  `blood_glucose` varchar(50) DEFAULT '95 mg/dL',
  `health_conditions` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `loyalty_tier`, `loyalty_points`, `blood_pressure`, `heart_rate`, `bmi`, `weight_kg`, `blood_glucose`, `health_conditions`, `created_at`) VALUES
(1, 'Nguyen Van A', 'nguyenvana@gmail.com', '0908123456', 'Platinum Extra', 2450, '118/78 mmHg', 70, 21.8, 64.0, '92 mg/dL', 'Nhạy cảm da, Dị ứng Penicillin nhẹ', '2026-08-07 11:14:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_health_profiles`
--

CREATE TABLE `user_health_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blood_pressure` varchar(30) DEFAULT '120/80 mmHg',
  `heart_rate` int(11) DEFAULT 72,
  `weight` decimal(5,2) DEFAULT 65.00,
  `height` decimal(5,2) DEFAULT 171.00,
  `bmi` decimal(4,1) DEFAULT 22.2,
  `blood_type` varchar(10) DEFAULT 'A+',
  `allergies` text DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_loyalty_profiles`
--

CREATE TABLE `user_loyalty_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `member_card_id` varchar(50) NOT NULL DEFAULT 'PMC-8839201',
  `tier_name` varchar(50) NOT NULL DEFAULT 'Platinum Extra',
  `current_points` int(11) NOT NULL DEFAULT 2450,
  `next_tier_threshold` int(11) NOT NULL DEFAULT 3000,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_loyalty_profiles`
--

INSERT INTO `user_loyalty_profiles` (`id`, `user_id`, `member_card_id`, `tier_name`, `current_points`, `next_tier_threshold`, `created_at`, `updated_at`) VALUES
(1, 1, 'PMC-8839201', 'Platinum Extra', 2450, 3000, '2026-08-07 23:01:18', '2026-08-07 23:01:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_prescriptions`
--

CREATE TABLE `user_prescriptions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rx_code` varchar(50) NOT NULL DEFAULT 'RX-99201',
  `drug_name` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `schedule_morning` time DEFAULT '07:00:00',
  `schedule_evening` time DEFAULT '18:00:00',
  `days_remaining` int(11) NOT NULL DEFAULT 5,
  `adherence_rate` decimal(5,2) DEFAULT 96.00,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_prescriptions`
--

INSERT INTO `user_prescriptions` (`id`, `user_id`, `rx_code`, `drug_name`, `doctor_name`, `schedule_morning`, `schedule_evening`, `days_remaining`, `adherence_rate`, `created_at`) VALUES
(1, 1, 'RX-99201', 'Amlodipine 5mg', 'BS. CKII Nguyễn Thị Thanh', '07:00:00', '18:00:00', 5, 96.00, '2026-08-07 23:15:50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_product` (`user_id`,`product_id`);

--
-- Chỉ mục cho bảng `demand_forecasts`
--
ALTER TABLE `demand_forecasts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `expiry_batches`
--
ALTER TABLE `expiry_batches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `health_kiosk_logs`
--
ALTER TABLE `health_kiosk_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `kiosk_logs`
--
ALTER TABLE `kiosk_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`measured_at`);

--
-- Chỉ mục cho bảng `medication_adherence_logs`
--
ALTER TABLE `medication_adherence_logs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_daily_dose` (`user_id`,`prescription_id`,`dose_slot`,`scheduled_time`),
  ADD KEY `prescription_id` (`prescription_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_code` (`order_code`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pxu_points_history`
--
ALTER TABLE `pxu_points_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`created_at`);

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `store_inventory`
--
ALTER TABLE `store_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_id` (`store_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `telemedicine_doctors`
--
ALTER TABLE `telemedicine_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_health_profiles`
--
ALTER TABLE `user_health_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user_loyalty_profiles`
--
ALTER TABLE `user_loyalty_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `member_card_id` (`member_card_id`);

--
-- Chỉ mục cho bảng `user_prescriptions`
--
ALTER TABLE `user_prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rx_code` (`rx_code`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `demand_forecasts`
--
ALTER TABLE `demand_forecasts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `expiry_batches`
--
ALTER TABLE `expiry_batches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `health_kiosk_logs`
--
ALTER TABLE `health_kiosk_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `kiosk_logs`
--
ALTER TABLE `kiosk_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `medication_adherence_logs`
--
ALTER TABLE `medication_adherence_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `pxu_points_history`
--
ALTER TABLE `pxu_points_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `store_inventory`
--
ALTER TABLE `store_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `telemedicine_doctors`
--
ALTER TABLE `telemedicine_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user_health_profiles`
--
ALTER TABLE `user_health_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_loyalty_profiles`
--
ALTER TABLE `user_loyalty_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user_prescriptions`
--
ALTER TABLE `user_prescriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `expiry_batches`
--
ALTER TABLE `expiry_batches`
  ADD CONSTRAINT `expiry_batches_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `health_kiosk_logs`
--
ALTER TABLE `health_kiosk_logs`
  ADD CONSTRAINT `health_kiosk_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `kiosk_logs`
--
ALTER TABLE `kiosk_logs`
  ADD CONSTRAINT `kiosk_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `medication_adherence_logs`
--
ALTER TABLE `medication_adherence_logs`
  ADD CONSTRAINT `medication_adherence_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medication_adherence_logs_ibfk_2` FOREIGN KEY (`prescription_id`) REFERENCES `user_prescriptions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `pxu_points_history`
--
ALTER TABLE `pxu_points_history`
  ADD CONSTRAINT `pxu_points_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `store_inventory`
--
ALTER TABLE `store_inventory`
  ADD CONSTRAINT `store_inventory_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`),
  ADD CONSTRAINT `store_inventory_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `user_health_profiles`
--
ALTER TABLE `user_health_profiles`
  ADD CONSTRAINT `user_health_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_loyalty_profiles`
--
ALTER TABLE `user_loyalty_profiles`
  ADD CONSTRAINT `user_loyalty_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_prescriptions`
--
ALTER TABLE `user_prescriptions`
  ADD CONSTRAINT `user_prescriptions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
