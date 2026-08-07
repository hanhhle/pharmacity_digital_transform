<?php
require_once __DIR__ . '/../../config/database.php';

class PrescriptionModel {
    public static function processOCRUpload($filename = 'don_thuoc_sample.png') {
        // Simulated AI OCR Pipeline:
        // Input: Prescription Image -> Output: Structued Medical Data & Verified Drug List
        return [
            'prescription_id' => 'PMC-OCR-' . rand(10000, 99999),
            'patient_name' => 'Nguyễn Văn A',
            'doctor_name' => 'BS. CKII Nguyễn Thị Thanh',
            'clinic' => 'Bệnh viện Đại học Y Dược TP.HCM',
            'diagnosis' => 'Tăng huyết áp độ 1 & Suy nhược nhẹ',
            'issued_date' => date('d/m/Y'),
            'ocr_confidence' => 98.6,
            'status' => 'DƯỢC SĨ PHARMACITY ĐÃ XÁC THỰC',
            'medicines' => [
                [
                    'name' => 'Amlodipine 5mg Pharmacity',
                    'quantity' => 30,
                    'unit' => 'Viên',
                    'dosage' => 'Uống 1 viên vào buổi sáng sau ăn',
                    'price' => 65000,
                    'is_in_stock' => true,
                    'matched_product_id' => 7
                ],
                [
                    'name' => 'Berocca Performance sủi cam',
                    'quantity' => 1,
                    'unit' => 'Hộp 10 viên',
                    'dosage' => 'Sủi 1 viên/ngày buổi sáng',
                    'price' => 82000,
                    'is_in_stock' => true,
                    'matched_product_id' => 1
                ]
            ],
            'total_amount' => 147000
        ];
    }
}
