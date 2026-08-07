<?php
require_once __DIR__ . '/../models/PrescriptionModel.php';
require_once __DIR__ . '/../models/TelemedicineModel.php';

class SuperAppController {
    public function prescription() {
        $ocrResult = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'upload_ocr') {
            $ocrResult = PrescriptionModel::processOCRUpload($_FILES['prescription_file']['name'] ?? 'don_thuoc.png');
        }
        require __DIR__ . '/../views/prescription/index.php';
    }

    public function telemedicine() {
        $doctors = TelemedicineModel::getDoctors();
        $booking = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'book_doctor') {
            $booking = TelemedicineModel::createBooking($_POST['doctor_id'], $_POST['book_date'], $_POST['time_slot']);
        }
        require __DIR__ . '/../views/telemedicine/index.php';
    }
}
