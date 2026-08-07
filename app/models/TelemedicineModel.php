<?php
require_once __DIR__ . '/../../config/database.php';

class TelemedicineModel {
    public static function getDoctors() {
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
