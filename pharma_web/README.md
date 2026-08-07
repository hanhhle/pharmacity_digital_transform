# Pharmacity AI-Powered Omnichannel Smart Healthcare Ecosystem
## Dự Án Chuyển Đổi Số (Digital Transformation Capstone Project)

Dự án phát triển nền tảng **Hệ sinh thái Chăm sóc Sức khỏe Thông minh Pharmacity** trên nền tảng **PHP MVC Architecture** kết hợp hệ quản trị cơ sở dữ liệu **MySQL / phpMyAdmin (XAMPP)**, đáp ứng các tiêu chuẩn chuyển đổi số toàn diện cho chuỗi nhà thuốc bán lẻ.

---

## 🌟 10 Trụ Cột Chuyển Đổi Số (Digital Transformation Pillars)

1. **Healthcare Super App Experience**:
   - **Upload Đơn Thuốc Điện Tử AI OCR**: Quét hình ảnh đơn thuốc, tự động trích xuất tên thuốc, liều dùng, xác thực dược sĩ và đặt mua 1-Click.
   - **Khám Bệnh Telemedicine**: Đặt lịch tư vấn Video 1-1 với bác sĩ chuyên khoa, xem hồ sơ bác sĩ và nhận đơn thuốc điện tử trực tuyến.
   - **Trợ Lý Dược Sĩ AI Floating**: Trợ lý thông minh tư vấn liều dùng, kiểm tra tồn kho 1.000+ nhà thuốc và khuyến nghị sức khỏe 24/7.

2. **Smart Customer Dashboard**:
   - Hồ sơ y tế cá nhân, theo dõi sinh hiệu (Huyết áp, Nhịp tim, BMI, Đường huyết), lịch sử mua hàng, tự động nhắc nhở uống thuốc/tái đơn, xuất báo cáo PDF cho bác sĩ.

3. **AI Personalized Recommendation Engine**:
   - Khuyến nghị sản phẩm cá nhân hóa dựa trên thuật toán AI kết hợp: Tiền sử bệnh + Hồ sơ da mụn/huyết áp + Dữ liệu thời tiết khí hậu thời gian thực (nắng nóng TP.HCM).

4. **Smart Inventory Visibility**:
   - Hiển thị tồn kho thời gian thực tại các cửa hàng gần nhất, cảnh báo hàng sắp hết, kho tổng và gợi ý sản phẩm thay thế tương đương sinh học.

5. **Omnichannel Experience**:
   - Đa dạng phương thức nhận hàng: Giao siêu tốc 1 giờ (Live tracking bản đồ tài xế), Click & Collect (đến nhận tại cửa hàng), Giao tự động định kỳ (Subscription -10%).

6. **Smart Health Kiosk Integration**:
   - Giao diện đồng bộ dữ liệu sinh hiệu thời gian thực từ Trạm Kiosk Sức Khoẻ IoT đặt tại cửa hàng Pharmacity, trực quan hóa biểu đồ diễn tiến 30/60/90 ngày.

7. **Digital Pharmacy Ecosystem Gateway**:
   - Cổng kết nối tích hợp dữ liệu thời gian thực với **Cổng Đơn Thuốc Quốc Gia**, Hồ sơ bệnh án điện tử (EMR), Bảo hiểm y tế (BHXH/Bảo hiểm tư nhân), Cổng thanh toán (VNPAY, MoMo), và Đối tác giao hàng (GrabExpress).

8. **AI Demand Forecasting (Admin Dashboard)**:
   - Bảng điều hành chuỗi cung ứng: Thuật toán AI Prophet dự báo nhu cầu kho vùng, bản đồ nhiệt tồn kho và tự động tạo đơn đặt hàng bổ sung (Auto-Replenishment).

9. **Smart Expiry Management (FEFO)**:
   - Quản lý lô thuốc cận hạn theo nguyên tắc FEFO (First Expired, First Out), quét mã Barcode/RFID và kích hoạt chiến lược xả hàng clearance tự động.

10. **Digital Loyalty & Gamification**:
    - Thẻ thành viên Pharmacity Extra tích điểm thưởng tự động khi tuân thủ uống thuốc và đo sinh hiệu đúng giờ.

---

## 📂 Cấu Trúc Thư Mục Dự Án (PHP MVC Pattern)

```
/
├── index.php                      # Front Controller & Router central
├── pharmacity_dx.sql              # Database dump MySQL sẵn sàng import phpMyAdmin
├── config/
│   ├── database.php               # Kết nối PDO MySQL + Chế độ fallback Datamock
│   └── datamock.php               # Dữ liệu giả lập đầy đủ chạy ngay không cần SQL
├── app/
│   ├── models/
│   │   ├── ProductModel.php       # Quản lý sản phẩm & thuật toán gợi ý AI
│   │   ├── PrescriptionModel.php  # Nhận diện OCR đơn thuốc & xác thực dược sĩ
│   │   ├── TelemedicineModel.php  # Danh sách bác sĩ & đặt lịch khám video
│   │   ├── KioskModel.php         # Đồng bộ sinh hiệu Kiosk IoT & biểu đồ
│   │   ├── AdminModel.php         # Dự báo nhu cầu AI & Quản lý lô FEFO
│   │   └── UserModel.php          # Hồ sơ khách hàng & điểm thưởng Extra
│   ├── controllers/
│   │   ├── HomeController.php     # Trang chủ & Gợi ý AI
│   │   ├── SuperAppController.php # Upload OCR & Telemedicine
│   │   ├── DashboardController.php# Dashboard sức khỏe & Kiosk
│   │   ├── CheckoutController.php # Giao hàng 1H & Ecosystem
│   │   └── AdminController.php    # AI Demand Forecast & FEFO Expiry
│   └── views/
│       ├── layout/
│       │   ├── header.php         # Thanh điều hướng DX Showcase & Brand Header
│       │   └── footer.php         # Chân trang & Floating AI Assistant Chatbot
│       ├── home/index.php         # Banner hero, thời tiết AI & danh mục sản phẩm
│       ├── prescription/index.php # Upload đơn OCR & Dược sĩ duyệt
│       ├── telemedicine/index.php # Đặt lịch bác sĩ & Phòng khám video 1-1
│       ├── dashboard/index.php    # Dashboard sinh hiệu & Tái đơn tự động
│       ├── kiosk/index.php        # Trạm đo Kiosk IoT & Biểu đồ diễn tiến
│       ├── checkout/index.php     # Giao 1H, Live tracking & Thanh toán
│       ├── ecosystem/index.php    # Cổng kết nối API Y Tế Quốc Gia & BHXH
│       └── admin/index.php        # AI Supply Chain & FEFO Expiry Table
└── public/
    ├── css/
    │   └── style.css              # Bộ nhận diện thương hiệu Pharmacity (#005EC4)
    └── js/
        └── main.js                # Xử lý tương tác AI Chatbot, OCR & Modal
```

---

## 🛠️ Hướng Dẫn Cài Đặt & Chạy Dự Án Với XAMPP / phpMyAdmin

### Cách 1: Chạy Trên XAMPP (Apache + MySQL / phpMyAdmin)
1. Mở **XAMPP Control Panel** và bật **Apache** & **MySQL**.
2. Truy cập **phpMyAdmin** (`http://localhost/phpmyadmin`).
3. Tạo cơ sở dữ liệu tên: `pharmacity_dx`.
4. Chọn cơ sở dữ liệu `pharmacity_dx` $\rightarrow$ Nhấp vào thẻ **Import** $\rightarrow$ Chọn file `pharmacity_dx.sql` trong thư mục dự án và bấm **Go**.
5. Đặt toàn bộ thư mục dự án vào thư mục `htdocs` của XAMPP (Ví dụ: `C:/xampp/htdocs/pharmacity_dx`).
6. Mở trình duyệt và truy cập: `http://localhost/pharmacity_dx`

### Cách 2: Chạy Nhanh Bằng Server PHP Built-in (Không Cần Cài MySQL)
Dự án được trang bị cơ chế **Datamock Fallback** tự động trong `config/database.php`. Nếu MySQL chưa bật, hệ thống sẽ tự động dùng dữ liệu seed trong `config/datamock.php` mà không phát sinh lỗi:
```bash
php -S localhost:8000
```
Truy cập trình duyệt: `http://localhost:8000`

---

## 🎯 Kiểm Thứ Các Tính Năng Chuyển Đổi Số Trực Quan

Tại góc trên cùng của trang web, thanh điều khiển **DIGITAL TRANSFORMATION PLATFORM** hỗ trợ chọn nhanh tất cả 10 tính năng:
- **📄 Upload Đơn OCR (DX #1)**: Tải ảnh đơn thuốc $\rightarrow$ Xem AI bóc tách tên thuốc & Dược sĩ duyệt.
- **🩺 Telemedicine (DX #1)**: Chọn bác sĩ $\rightarrow$ Đặt lịch $\rightarrow$ Mở phòng khám Video HD 1-1.
- **👤 Dashboard Sức Khỏe (DX #2)**: Xem sinh hiệu, điểm Extra, và tải Báo Cáo Sức Khỏe PDF.
- **📊 Kiosk IoT (DX #6)**: Giả lập trạm đo Kiosk tại cửa hàng Q1 $\rightarrow$ Xem biểu đồ huyết áp 30 ngày.
- **🚀 Giao 1H (DX #5)**: Đặt hàng $\rightarrow$ Theo dõi tài xế di chuyển realtime trên bản đồ.
- **🌐 Ecosystem Gateway (DX #7)**: Kiểm tra trạng thái liên thông Cổng Đơn Thuốc Quốc Gia & BHYT.
- **📈 AI Admin & FEFO (DX #8 & #9)**: Xem dự báo nhu cầu kho vùng & bảng cảnh báo cận hạn FEFO.
