<?php
require_once __DIR__ . '/../../config/database.php';

class KioskModel {
    public static function getKioskLogs($userId = 1) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['kiosk_logs'])) {
            return $_SESSION['kiosk_logs'];
        }
        $mock = Database::getMockData();
        return $mock['kiosk_logs'];
    }

    public static function evaluateHealthMetrics($sys, $dia, $hr, $bmi) {
        $bpCategory = 'normal';
        $bpMsg = '';
        $bmiCategory = 'normal';
        $bmiMsg = '';

        // 1. Blood Pressure Classification (ESC & JNC7 Standards)
        if ($sys < 90 || $dia < 60) {
            $bpCategory = 'danger';
            $bpMsg = 'Huyết áp Thấp (Cảnh báo nguy cơ tụt huyết áp)';
        } elseif ($sys < 120 && $dia < 80) {
            $bpCategory = 'normal';
            $bpMsg = 'Huyết áp Bình thường chuẩn y khoa';
        } elseif (($sys >= 120 && $sys <= 139) || ($dia >= 80 && $dia <= 89)) {
            $bpCategory = 'warning';
            $bpMsg = 'Tiền Cao Huyết Áp (Cần chú ý theo dõi)';
        } else {
            $bpCategory = 'danger';
            $bpMsg = 'Cao Huyết Áp (Cảnh báo nguy cơ tim mạch)';
        }

        // 2. BMI Classification (WHO Asian Standards)
        if ($bmi < 18.5) {
            $bmiCategory = 'warning';
            $bmiMsg = 'Thể tạng gầy / Thiếu cân';
        } elseif ($bmi >= 18.5 && $bmi <= 22.9) {
            $bmiCategory = 'normal';
            $bmiMsg = 'Thể tạng Cân đối chuẩn';
        } elseif ($bmi >= 23.0 && $bmi <= 24.9) {
            $bmiCategory = 'warning';
            $bmiMsg = 'Thừa cân nhẹ';
        } else {
            $bmiCategory = 'danger';
            $bmiMsg = 'Béo phì (Cần chế độ kiểm soát calo)';
        }

        // 3. Heart Rate Classification
        if ($hr < 60) {
            $hrMsg = 'Nhịp tim chậm';
        } elseif ($hr > 100) {
            $hrMsg = 'Nhịp tim nhanh';
        } else {
            $hrMsg = 'Nhịp tim ổn định';
        }

        // Overall Badge Color: 'green', 'yellow', 'red'
        $status = 'green';
        if ($bpCategory === 'danger' || $bmiCategory === 'danger') {
            $status = 'red';
        } elseif ($bpCategory === 'warning' || $bmiCategory === 'warning') {
            $status = 'yellow';
        }

        return [
            'status' => $status,
            'bp_msg' => $bpMsg,
            'bmi_msg' => $bmiMsg,
            'hr_msg' => $hrMsg,
            'full_assessment' => "{$bpMsg}. Thể tạng: {$bmiMsg}. Nhịp tim: {$hrMsg}."
        ];
    }

    public static function syncNewReading($sys, $dia, $hr, $weight) {
        $sys = intval($sys);
        $dia = intval($dia);
        $hr = intval($hr);
        $weight = floatval($weight);
        $bmi = round($weight / (1.71 * 1.71), 1);

        $assessment = self::evaluateHealthMetrics($sys, $dia, $hr, $bmi);

        return [
            'date' => date('d/m/Y H:i'),
            'sys' => $sys,
            'dia' => $dia,
            'bp' => "{$sys}/{$dia} mmHg",
            'hr' => "{$hr} bpm",
            'weight' => "{$weight} kg",
            'bmi' => $bmi,
            'spo2' => '99%',
            'status' => $assessment['status'],
            'assessment' => $assessment['full_assessment']
        ];
    }
}
