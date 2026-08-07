<?php
require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../models/KioskModel.php';
require_once __DIR__ . '/../models/ProductModel.php';

class DashboardController {
    public function account() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $user = UserModel::getUserProfile();
        $kioskLogs = KioskModel::getKioskLogs();

        // Initial Sample Orders History including 3 active shipping orders
        $ordersHistory = [
            [
                'order_code' => 'PMC-ORD-2026-905',
                'date' => 'Hôm nay 22:40',
                'type' => 'Giao Siêu Tốc 1H',
                'items' => 'Augmentin 1g (10v), Paracetamol 500mg (1 hộp)',
                'total' => '215.000 ₫',
                'delivery' => 'Tài xế Grab: Nguyễn Văn Tuấn (0908.111.222) - Đang di chuyển',
                'status' => 'Đang giao hàng 1H',
                'status_color' => 'blue',
                'can_cancel' => false
            ],
            [
                'order_code' => 'PMC-ORD-2026-904',
                'date' => 'Hôm nay 21:15',
                'type' => 'Đơn Hàng Online',
                'items' => 'Sữa rửa mặt Cerave 473ml, Kem chống nắng Anessa 60ml',
                'total' => '680.000 ₫',
                'delivery' => 'VNPost Express (Mã vận đơn: VN8839102 - Đang giao)',
                'status' => 'Đang vận chuyển',
                'status_color' => 'amber',
                'can_cancel' => false
            ],
            [
                'order_code' => 'PMC-ORD-2026-903',
                'date' => 'Hôm nay 19:30',
                'type' => 'Tái Đơn Tự Động 1-Click',
                'items' => 'Berocca Performance 10v, Khẩu trang y tế 3D (50 cái)',
                'total' => '125.000 ₫',
                'delivery' => 'Dược sĩ PMC Q1 đang đóng gói & điều phối tài xế',
                'status' => 'Đang điều phối dược sĩ',
                'status_color' => 'indigo',
                'can_cancel' => true
            ],
            [
                'order_code' => 'PMC-ORD-2026-901',
                'date' => '15/07/2026 14:30',
                'type' => 'Đơn Thuốc Định Kỳ 30 Ngày',
                'items' => 'Amlodipine 5mg (30v), Concor 5mg (30v)',
                'total' => '345.000 ₫',
                'delivery' => 'Giao siêu tốc 1H (Tài xế Grab: Nguyễn Văn Bình)',
                'status' => 'Đã hoàn thành',
                'status_color' => 'emerald',
                'can_cancel' => false
            ],
            [
                'order_code' => 'PMC-ORD-2026-874',
                'date' => '28/06/2026 09:15',
                'type' => 'Đơn Thuốc Theo Chỉ Định',
                'items' => 'Panadol Extra (20v), Bột thanh nhiệt Sensa Cools (12g)',
                'total' => '64.500 ₫',
                'delivery' => 'Nhận tại nhà thuốc PMC Q1 (Click & Collect)',
                'status' => 'Đã hoàn thành',
                'status_color' => 'emerald',
                'can_cancel' => false
            ],
            [
                'order_code' => 'PMC-ORD-2026-850',
                'date' => '10/06/2026 11:20',
                'type' => 'Đơn Hàng Online',
                'items' => 'Vitamin C 1000mg Pharmacity (Hộp 30v)',
                'total' => '95.000 ₫',
                'delivery' => 'Đơn hàng đã được hủy theo yêu cầu khách hàng',
                'status' => 'Đã hủy',
                'status_color' => 'rose',
                'can_cancel' => false
            ]
        ];

        // Maintain session persistence for orders
        if (isset($_SESSION['orders_history'])) {
            $ordersHistory = $_SESSION['orders_history'];
        }

        // Handle POST order cancellation
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'cancel_order') {
            $cancelCode = $_POST['order_code'] ?? '';
            foreach ($ordersHistory as &$ord) {
                if ($ord['order_code'] === $cancelCode) {
                    $ord['status'] = 'Đã hủy';
                    $ord['status_color'] = 'rose';
                    $ord['can_cancel'] = false;
                    $ord['delivery'] = 'Đã hủy thành công bởi khách hàng (Mốc thời gian: ' . date('d/m/Y H:i') . ')';
                    break;
                }
            }
            unset($ord);
            $_SESSION['orders_history'] = $ordersHistory;
        }

        // Handle Reorder ("Mua lại đơn này")
        if (isset($_GET['reorder_code']) || (isset($_POST['action']) && $_POST['action'] === 'reorder_order')) {
            $reorderCode = $_GET['reorder_code'] ?? ($_POST['order_code'] ?? '');
            require_once __DIR__ . '/../models/CartModel.php';
            
            $reorderItemsMap = [
                'PMC-ORD-2026-874' => [['id' => 6, 'quantity' => 1], ['id' => 1, 'quantity' => 1]],
                'PMC-ORD-2026-901' => [['id' => 7, 'quantity' => 1], ['id' => 6, 'quantity' => 1]],
                'PMC-ORD-2026-905' => [['id' => 1, 'quantity' => 1], ['id' => 6, 'quantity' => 1]],
                'PMC-ORD-2026-904' => [['id' => 3, 'quantity' => 1], ['id' => 5, 'quantity' => 1]],
                'PMC-ORD-2026-903' => [['id' => 1, 'quantity' => 1], ['id' => 2, 'quantity' => 1]]
            ];

            $itemsToReorder = $reorderItemsMap[$reorderCode] ?? [['id' => 6, 'quantity' => 1]];
            CartModel::reorderItems(1, $itemsToReorder);

            header('Location: ' . (defined('BASE_URL') ? BASE_URL : '') . '/index.php?route=checkout');
            exit;
        }

        // Sample P-Xu Extra points history logs
        $pointsHistory = [
            ['date' => '07/08/2026 22:00', 'type' => 'earn', 'points' => '+50 P-Xu', 'title' => 'Thưởng đo sinh hiệu Kiosk IoT Pharmacity PMC Q1', 'balance' => '2.450 P-Xu'],
            ['date' => '07/08/2026 07:00', 'type' => 'earn', 'points' => '+10 P-Xu', 'title' => 'Thưởng tuân thủ uống thuốc Amlodipine đúng giờ', 'balance' => '2.400 P-Xu'],
            ['date' => '01/08/2026 15:30', 'type' => 'redeem', 'points' => '-100 P-Xu', 'title' => 'Đổi Voucher 10.000đ mua Berocca sủi cam', 'balance' => '2.390 P-Xu'],
            ['date' => '15/07/2026 14:35', 'type' => 'earn', 'points' => '+34 P-Xu', 'title' => 'Tích điểm đơn hàng PMC-ORD-2026-901', 'balance' => '2.490 P-Xu'],
            ['date' => '01/07/2026 00:00', 'type' => 'earn', 'points' => '+100 P-Xu', 'title' => 'Quà tặng sinh nhật hội viên Platinum Extra', 'balance' => '2.456 P-Xu'],
            ['date' => '20/06/2026 10:15', 'type' => 'redeem', 'points' => '-200 P-Xu', 'title' => 'Đổi quà tặng Hộp Khẩu trang 3D Pharmacity', 'balance' => '2.356 P-Xu']
        ];

        // Handle POST medication confirmation (100% Automatic Real-Time Time-Window Check)
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'confirm_medication') {
            $rxId = $_POST['rx_id'] ?? 'RX-99201';
            $drug = $_POST['drug'] ?? 'Amlodipine 5mg';
            $slot = $_POST['slot'] ?? '07:00';

            if (!isset($_SESSION['loyalty_points'])) {
                $_SESSION['loyalty_points'] = 2450;
            }
            if (!isset($_SESSION['points_history'])) {
                $_SESSION['points_history'] = $pointsHistory;
            }

            // Real-time automatic hour & minute calculation (±60 minutes rule)
            $currentMinutes = intval(date('H')) * 60 + intval(date('i'));
            $scheduledHour = intval(substr($slot, 0, 2));
            $scheduledMin = intval(substr($slot, 3, 2));
            $scheduledMinutes = $scheduledHour * 60 + $scheduledMin;
            $diffMinutes = abs($currentMinutes - $scheduledMinutes);

            $isOntime = ($diffMinutes <= 60);

            if ($isOntime) {
                $_SESSION['loyalty_points'] += 10;
                $newPoints = $_SESSION['loyalty_points'];

                array_unshift($_SESSION['points_history'], [
                    'date' => date('d/m/Y H:i'),
                    'type' => 'earn',
                    'points' => '+10 P-Xu',
                    'title' => "Thưởng tuân thủ uống thuốc $drug đúng giờ ($slot)",
                    'balance' => number_format($newPoints) . ' P-Xu'
                ]);

                $_SESSION['confirmed_today_' . $rxId] = true;

                $_SESSION['flash_msg'] = [
                    'type' => 'success',
                    'title' => '🟢 ĐIỂM DANH THÀNH CÔNG (+10 P-XU)',
                    'text' => "Hệ thống đã tự động đối soát thời gian thực (" . date('H:i') . ") trùng khớp khung giờ quy định ($slot ±60 phút). Đã cộng +10 P-Xu Extra vào tài khoản!"
                ];
            } else {
                $_SESSION['confirmed_today_' . $rxId] = true;
                $_SESSION['flash_msg'] = [
                    'type' => 'warning',
                    'title' => '⏰ ĐÃ GHI NHẬN LIỀU UỐNG THUỐC (KHÔNG ĐỦ ĐIỀU KIỆN TÍCH ĐIỂM)',
                    'text' => "Thời gian thực hiện tại (" . date('H:i') . ") lệch hơn 60 phút so với khung giờ quy định ($slot). Đã ghi nhận bạn đã uống liều này, nhưng không đủ điều kiện nhận +10 P-Xu thưởng đúng giờ."
                ];
            }
        }

        if (isset($_SESSION['loyalty_points'])) {
            $user['loyalty_points'] = $_SESSION['loyalty_points'];
        }
        if (isset($_SESSION['points_history'])) {
            $pointsHistory = $_SESSION['points_history'];
        }

        // Handle POST update of health metrics from Dashboard (Manual Entry)
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update_metrics') {
            $sys = intval($_POST['sys'] ?? 120);
            $dia = intval($_POST['dia'] ?? 80);
            $hr = intval($_POST['hr'] ?? 72);
            $weight = floatval($_POST['weight'] ?? 65.0);

            $synced = KioskModel::syncNewReading($sys, $dia, $hr, $weight);

            $_SESSION['user_metrics'] = [
                'bp' => $synced['bp'],
                'hr' => $synced['hr'],
                'bmi' => $synced['bmi'],
                'weight' => $weight,
                'assessment' => $synced['assessment'],
                'status' => $synced['status'],
                'date' => $synced['date']
            ];

            if (!isset($_SESSION['kiosk_logs'])) {
                $_SESSION['kiosk_logs'] = $kioskLogs;
            }

            array_unshift($_SESSION['kiosk_logs'], [
                'date' => $synced['date'],
                'sys' => $sys,
                'dia' => $dia,
                'bp' => $synced['bp'],
                'hr' => $synced['hr'],
                'bmi' => $synced['bmi'],
                'status' => $synced['status'],
                'assessment' => $synced['assessment']
            ]);
        }

        if (isset($_SESSION['kiosk_logs']) && !empty($_SESSION['kiosk_logs'])) {
            $kioskLogs = $_SESSION['kiosk_logs'];
        }

        // Always sync top summary cards with the absolute latest reading ($kioskLogs[0])
        if (!empty($kioskLogs[0])) {
            $latest = $kioskLogs[0];
            $user['blood_pressure'] = $latest['bp'];
            $user['heart_rate'] = $latest['hr'];
            $user['bmi'] = $latest['bmi'];
            $user['latest_date'] = $latest['date'];
            $user['latest_assessment'] = $latest['assessment'];
            $user['latest_status'] = $latest['status'] ?? 'green';
        }

        $aiRecommendations = ProductModel::getAIRecommendations();
        require __DIR__ . '/../views/dashboard/index.php';
    }

    public function kiosk() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $user = UserModel::getUserProfile();
        $kioskLogs = KioskModel::getKioskLogs();
        $newSync = null;
        $step = $_GET['step'] ?? 'result';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'sync_kiosk') {
            $sys = intval($_POST['sys'] ?? 118);
            $dia = intval($_POST['dia'] ?? 78);
            $hr = intval($_POST['hr'] ?? 70);
            $weight = floatval($_POST['weight'] ?? 64.0);

            $synced = KioskModel::syncNewReading($sys, $dia, $hr, $weight);
            $newSync = $synced;
            $step = 'result';

            $_SESSION['user_metrics'] = [
                'bp' => $synced['bp'],
                'hr' => $synced['hr'],
                'bmi' => $synced['bmi'],
                'weight' => $weight,
                'assessment' => $synced['assessment'],
                'status' => $synced['status'],
                'date' => $synced['date']
            ];

            if (!isset($_SESSION['kiosk_logs'])) {
                $_SESSION['kiosk_logs'] = $kioskLogs;
            }

            array_unshift($_SESSION['kiosk_logs'], [
                'date' => $synced['date'],
                'sys' => $sys,
                'dia' => $dia,
                'bp' => $synced['bp'],
                'hr' => $synced['hr'],
                'bmi' => $synced['bmi'],
                'status' => $synced['status'],
                'assessment' => $synced['assessment']
            ]);
        }

        if (isset($_SESSION['kiosk_logs'])) {
            $kioskLogs = $_SESSION['kiosk_logs'];
        }

        require __DIR__ . '/../views/kiosk/index.php';
    }
}
