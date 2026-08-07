<?php
/**
 * Datamock File for Pharmacity Digital Transformation Platform
 * Fallback data layer for instant offline & local XAMPP execution
 */

return [
    'user' => [
        'id' => 1,
        'fullname' => 'Nguyễn Văn A',
        'email' => 'nguyenvana@gmail.com',
        'phone' => '0908 123 456',
        'loyalty_tier' => 'Platinum Extra',
        'loyalty_points' => 2450,
        'avatar' => 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=150',
        'blood_pressure' => '118/78 mmHg',
        'heart_rate' => 70,
        'bmi' => 21.8,
        'weight_kg' => 64.0,
        'blood_glucose' => '92 mg/dL',
        'health_conditions' => ['Nhạy cảm da', 'Dị ứng Penicillin nhẹ'],
        'active_prescriptions' => [
            ['id' => 'RX-99201', 'drug' => 'Amlodipine 5mg', 'doctor' => 'BS. CKII Nguyễn Thị Thanh', 'issued' => '01/08/2026', 'refill_remind' => 'Còn 5 ngày']
        ]
    ],

    'products' => [
        [
            'id' => 1,
            'name' => 'Viên sủi Berocca Performance vị cam (Hộp 10 viên)',
            'sku' => 'BER-01',
            'category' => 'Vitamins & Khoáng chất',
            'price' => 82000,
            'original_price' => 95000,
            'unit' => 'Hộp 10 viên',
            'image' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400',
            'is_prescription' => false,
            'badge' => 'BÁN CHẠY',
            'description' => 'Bổ sung Vitamin B, C và khoáng chất thiết yếu giúp giảm mệt mỏi, tăng cường năng lượng và cải thiện tập trung.',
            'dosage' => '1 viên/ngày sủi trong 200ml nước',
            'ai_tag' => 'Mùa hè / Mệt mỏi'
        ],
        [
            'id' => 2,
            'name' => 'Khẩu trang y tế Pharmacity 4 lớp 3D (Hộp 50 cái)',
            'sku' => 'PMC-MASK3D',
            'category' => 'Thiết bị y tế',
            'price' => 45000,
            'original_price' => 55000,
            'unit' => 'Hộp 50 cái',
            'image' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20260529023827-0-OL00326.png',
            'is_prescription' => false,
            'badge' => 'KHUYÊN DÙNG AI',
            'description' => 'Khẩu trang kháng khuẩn 99% BFE, lọc bụi mịn PM2.5, thiết kế 3D ôm khít khuôn mặt dễ thở.',
            'dosage' => 'Dùng 1 lần',
            'ai_tag' => 'Bảo vệ hô hấp mùa mưa'
        ],
        [
            'id' => 3,
            'name' => 'Gel rửa mặt La Roche-Posay Effaclar Purifying 200ml',
            'sku' => 'LRP-EFF-200',
            'category' => 'Dược mỹ phẩm',
            'price' => 385000,
            'original_price' => 420000,
            'unit' => 'Chai 200ml',
            'image' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260730095006-0-P30519.png',
            'is_prescription' => false,
            'badge' => 'AI ĐỀ XUẤT',
            'description' => 'Gel rửa mặt tạo bọt làm sạch sâu dành cho da dầu mụn nhạy cảm, giảm bóng nhờn hiệu quả.',
            'dosage' => 'Sử dụng 2 lần/ngày (Sáng & Tối)',
            'ai_tag' => 'Chăm sóc da mụn'
        ],
        [
            'id' => 4,
            'name' => 'Nước cân bằng da La Roche-Posay Effaclar Lotion 200ml',
            'sku' => 'LRP-LOT-200',
            'category' => 'Dược mỹ phẩm',
            'price' => 410000,
            'original_price' => 450000,
            'unit' => 'Chai 200ml',
            'image' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260402114453-0-P30711.png',
            'is_prescription' => false,
            'badge' => 'GỢI Ý KÈM MỤN',
            'description' => 'Nước hoa hồng cân bằng pH, thu nhỏ lỗ chân lông và làm dịu vùng da bị sưng đỏ do mụn.',
            'dosage' => 'Thoa bằng bông tẩy trang sau rửa mặt',
            'ai_tag' => 'Kèm Effaclar Gel'
        ],
        [
            'id' => 5,
            'name' => 'Kem chống nắng La Roche-Posay Anthelios UVmune 400 50ml',
            'sku' => 'LRP-SUN-50',
            'category' => 'Dược mỹ phẩm',
            'price' => 495000,
            'original_price' => 530000,
            'unit' => 'Tuýp 50ml',
            'image' => 'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=400',
            'is_prescription' => false,
            'badge' => 'BEST SELLER',
            'description' => 'Chống nắng phổ rộng bảo vệ da khỏi tia UVA/UVB dài, không rít, bám tốt trong môi trường nồng ẩm.',
            'dosage' => 'Thoa trước khi ra ngoài 20 phút',
            'ai_tag' => 'Bảo vệ UV hàng ngày'
        ],
        [
            'id' => 6,
            'name' => 'Thuốc hạ sốt Paracetamol Pharmacity 500mg (Hộp 100 viên)',
            'sku' => 'PMC-PARA500',
            'category' => 'Thuốc không kê đơn',
            'price' => 35000,
            'original_price' => 40000,
            'unit' => 'Hộp 10 vỉ',
            'image' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400',
            'is_prescription' => false,
            'badge' => 'CƠ BẢN',
            'description' => 'Hạ sốt, giảm đau nhanh trong trường hợp nhức đầu, đau răng, cảm cúm, sốt do virus.',
            'dosage' => '1-2 viên/lần, cách 4-6 giờ',
            'ai_tag' => 'Thuốc tủ gia đình'
        ],
        [
            'id' => 7,
            'name' => 'Thuốc điều trị huyết áp Amlodipine 5mg (Hộp 30 viên)',
            'sku' => 'AML-5MG',
            'category' => 'Thuốc kê đơn (Rx)',
            'price' => 65000,
            'original_price' => null,
            'unit' => 'Hộp 3 vỉ',
            'image' => 'https://images.unsplash.com/photo-1471864190281-a93a3070b6de?w=400',
            'is_prescription' => true,
            'badge' => 'THUỐC KÊ ĐƠN',
            'description' => 'Thuốc điều trị cao huyết áp và đau thắt ngực (Yêu cầu đơn thuốc hợp lệ từ bác sĩ).',
            'dosage' => '1 viên/ngày uống buổi sáng',
            'ai_tag' => 'Hồ sơ huyết áp'
        ],
        [
            'id' => 8,
            'name' => 'Máy đo huyết áp tự động Omron HEM-7120',
            'sku' => 'OMR-7120',
            'category' => 'Thiết bị y tế',
            'price' => 890000,
            'original_price' => 1050000,
            'unit' => 'Bộ máy',
            'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=400',
            'is_prescription' => false,
            'badge' => 'KẾT NỐI IOT',
            'description' => 'Máy đo huyết áp bắp tay tự động công nghệ IntelliSense chính xác, phát hiện nhịp tim bất thường.',
            'dosage' => 'Đo hàng ngày lúc nghỉ ngơi',
            'ai_tag' => 'Đồng bộ Kiosk IoT'
        ],
        [
            'id' => 15,
            'name' => 'Thực phẩm bổ sung HS Collagen 5000mg (10 Chai)',
            'sku' => 'HS-COL-5000',
            'category' => 'Thực phẩm chức năng',
            'price' => 590000,
            'original_price' => 680000,
            'unit' => 'Hộp 10 chai',
            'image' => 'https://production-cdn.pharmacity.io/digital/828x828/plain/e-com/images/product/20260402113259-0-P30708.png',
            'is_prescription' => false,
            'badge' => 'MUA 2 TẶNG 1',
            'deal_tag' => 'Mua 2 Tặng 1',
            'description' => 'Bổ sung 5000mg Collagen peptide giúp da căng mịn, giảm nếp nhăn và trẻ hóa làn da.',
            'dosage' => 'Uống 1 chai mỗi ngày trước khi đi ngủ'
        ],
        [
            'id' => 16,
            'name' => 'Combo 10 mặt nạ Wonjin Effect dưỡng ẩm Nourishing Supplement 30g/Miếng',
            'sku' => 'WONJIN-10',
            'category' => 'Dược mỹ phẩm',
            'price' => 240000,
            'original_price' => 480000,
            'unit' => 'Bộ 10 miếng',
            'image' => 'https://production-cdn.pharmacity.io/digital/828x828/plain/e-com/images/promotion_sku_images/20260807081817-7-OL00274.png',
            'is_prescription' => false,
            'badge' => 'GIẢM 50%',
            'deal_tag' => 'Độc Quyền Online - Deal Online Giảm 50%',
            'description' => 'Mặt nạ dưỡng chất chuyên sâu phục hồi da khô ráp, giúp da căng bóng mịn màng.',
            'dosage' => 'Đắp 15-20 phút 2-3 lần/tuần'
        ],
        [
            'id' => 17,
            'name' => 'Combo 10 gói khẩu trang UNICHARM 3D Mask Super Fit size M (Gói 5 Cái)',
            'sku' => 'UNI-3D-10',
            'category' => 'Thiết bị y tế',
            'price' => 110000,
            'original_price' => 180000,
            'unit' => 'Bộ 10 gói',
            'image' => 'https://production-cdn.pharmacity.io/digital/828x828/plain/e-com/images/promotion_sku_images/20260807081817-8-OL00375.png',
            'is_prescription' => false,
            'badge' => 'DEAL COMBO 120K',
            'deal_tag' => 'Deal Combo giá chỉ 120K - Duy nhất hôm nay',
            'description' => 'Khẩu trang 3D ôm khít khuôn mặt, ngăn khói bụi mịn và vi khuẩn vượt trội.',
            'dosage' => 'Dùng 1 lần'
        ]
    ],

    'stores' => [
        [
            'id' => 1,
            'code' => 'PMC-001',
            'name' => 'Pharmacity 205 Nguyễn Trãi',
            'address' => '205 Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, TP.HCM',
            'distance' => '0.8 km',
            'status' => 'Còn hàng (45 hộp)',
            'has_kiosk' => true
        ],
        [
            'id' => 2,
            'code' => 'PMC-042',
            'name' => 'Pharmacity 15A Trần Hưng Đạo',
            'address' => '15A Trần Hưng Đạo, Phường Phan Chu Trinh, Hoàn Kiếm, Hà Nội',
            'distance' => '1.5 km',
            'status' => 'Còn hàng (30 hộp)',
            'has_kiosk' => true
        ],
        [
            'id' => 3,
            'code' => 'PMC-108',
            'name' => 'Pharmacity 364 Cộng Hòa',
            'address' => '364 Cộng Hòa, Phường 13, Quận Tân Bình, TP.HCM',
            'distance' => '3.2 km',
            'status' => 'Còn hàng (18 hộp)',
            'has_kiosk' => true
        ]
    ],

    'doctors' => [
        [
            'id' => 1,
            'name' => 'BS. CKII Nguyễn Thị Thanh',
            'specialty' => 'Nội khoa & Huyết áp',
            'hospital' => 'Bệnh viện Đại học Y Dược TP.HCM',
            'experience' => '18 năm kinh nghiệm',
            'rating' => 4.9,
            'fee' => 150000,
            'avatar' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200',
            'time' => '08:00 - 17:30 Hôm nay'
        ],
        [
            'id' => 2,
            'name' => 'ThS. BS Trần Minh Hoàng',
            'specialty' => 'Da liễu & Dược mỹ phẩm',
            'hospital' => 'Bệnh viện Da Liễu TP.HCM',
            'experience' => '12 năm kinh nghiệm',
            'rating' => 4.8,
            'fee' => 180000,
            'avatar' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=200',
            'time' => '09:00 - 20:00 Hôm nay'
        ],
        [
            'id' => 3,
            'name' => 'BS. CKI Lê Hoàng Anh',
            'specialty' => 'Nhi khoa & Dinh dưỡng',
            'hospital' => 'Bệnh viện Nhi Đồng 1',
            'experience' => '15 năm kinh nghiệm',
            'rating' => 5.0,
            'fee' => 160000,
            'avatar' => 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=200',
            'time' => '13:00 - 21:00 Hôm nay'
        ]
    ],

    'kiosk_logs' => [
        ['date' => '01/08/2026', 'bp' => '122/80', 'hr' => 74, 'bmi' => 22.1, 'weight' => 65.0, 'spo2' => 99, 'assessment' => 'Tối ưu'],
        ['date' => '05/08/2026', 'bp' => '120/78', 'hr' => 72, 'bmi' => 21.9, 'weight' => 64.5, 'spo2' => 98, 'assessment' => 'Ổn định'],
        ['date' => '07/08/2026', 'bp' => '118/78', 'hr' => 70, 'bmi' => 21.8, 'weight' => 64.0, 'spo2' => 99, 'assessment' => 'Rất tốt (Mục tiêu đạt 100%)']
    ],

    'demand_forecasts' => [
        ['region' => 'TP. Hồ Chí Minh', 'category' => 'Khẩu trang & Chống dịch', 'stock' => 1200, 'forecast' => 3500, 'reorder' => 2300, 'confidence' => '96.2%', 'trend' => 'TĂNG 42% (Mùa mưa & Bụi mịn)'],
        ['region' => 'Hà Nội', 'category' => 'Thuốc cảm cúm & Hạ sốt', 'stock' => 850, 'forecast' => 2100, 'reorder' => 1250, 'confidence' => '93.8%', 'trend' => 'TĂNG 35% (Giao mùa)'],
        ['region' => 'Đà Nẵng', 'category' => 'Vitamins & Sức đề kháng', 'stock' => 400, 'forecast' => 950, 'reorder' => 550, 'confidence' => '91.5%', 'trend' => 'TĂNG 18%']
    ],

    'expiry_batches' => [
        ['sku' => 'BER-01', 'name' => 'Berocca Performance 10v', 'batch' => 'LOT-BER2026-01', 'qty' => 45, 'exp' => '15/09/2026', 'status' => 'Cảnh báo hạn ngắn (<45 ngày)', 'action' => 'Giảm giá FEFO 40% xả kho'],
        ['sku' => 'LRP-EFF-200', 'name' => 'La Roche-Posay Effaclar 200ml', 'batch' => 'LOT-LRP2026-09', 'qty' => 12, 'exp' => '28/08/2026', 'status' => 'CẬN HẠN CẤP THIẾT (<25 ngày)', 'action' => 'Xuất ngay cửa hàng Q1 (FEFO)'],
        ['sku' => 'PMC-PARA500', 'name' => 'Paracetamol 500mg PMC', 'batch' => 'LOT-PMC2027-11', 'qty' => 500, 'exp' => '31/12/2027', 'status' => 'An toàn (>500 ngày)', 'action' => 'Lưu kho tiêu chuẩn']
    ]
];
