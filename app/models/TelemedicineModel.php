<?php
require_once __DIR__ . '/../../config/database.php';

class TelemedicineModel {
    public static function getDoctors() {
        if (!Database::isMockMode()) {
            try {
                $pdo = Database::getConnection();
                $stmt = $pdo->query("SELECT id, name, specialty, hospital, rating, consultation_fee as fee, avatar, available_time as time FROM telemedicine_doctors ORDER BY id ASC");
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if (!empty($rows)) {
                    return $rows;
                }
            } catch (Exception $e) {}
        }
        $mock = Database::getMockData();
        return $mock['doctors'];
    }

    public static function createBooking($doctorId, $date, $timeSlot) {
        return [
            'booking_id' => 'TELE-' . rand(1000, 9999),
            'doctor_id' => $doctorId,
            'date' => $date,
            'time_slot' => $timeSlot,
            'status' => 'Xác nhận thành công',
            'video_link' => 'https://telemedicine.pharmacity.vn/room/' . uniqid()
        ];
    }
}
