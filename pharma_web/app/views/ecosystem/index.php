<?php require __DIR__ . '/../layout/header.php'; ?>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-6">
    <a href="/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <span class="font-semibold text-slate-800">Digital Pharmacy Ecosystem Gateway & API Integrations</span>
  </div>

  <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm mb-8">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-100 pb-4 mb-6 gap-3">
      <div>
        <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">DX PILLAR #7</span>
        <h1 class="text-xl font-bold text-slate-900 mt-1">Digital Pharmacy Ecosystem Gateway & API Integrations</h1>
        <p class="text-xs text-slate-500 mt-0.5">Cổng kết nối tích hợp dữ liệu thời gian thực giữa Pharmacity với Hệ thống y tế Quốc gia, Bệnh viện, Bảo hiểm & Đối tác logistics.</p>
      </div>
      <span class="bg-emerald-600 text-white text-[11px] font-bold px-3 py-1 rounded-full">
        ● 6/6 API Gateways Online
      </span>
    </div>

    <!-- Ecosystem Integration Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      
      <!-- National e-Prescription -->
      <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4 border-t-4 border-t-blue-600 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-2">
            <h3 class="font-bold text-slate-900 text-sm">🏥 Cổng Đơn Thuốc Quốc Gia</h3>
            <span class="text-[10px] bg-emerald-500 text-white font-bold px-2 py-0.5 rounded uppercase">CONNECTED</span>
          </div>
          <p class="text-xs text-slate-500 leading-relaxed">Đồng bộ tự động mã đơn thuốc liên thông từ tất cả các Bệnh viện công lập & tư nhân toàn quốc.</p>
        </div>
        <div class="bg-white p-2.5 rounded-xl border border-dashed border-blue-600 text-[11px] text-slate-700 mt-4">
          Mã định danh liên thông: <strong>PMC-VN-EPRESCRIPTION-API-v2.4</strong>
        </div>
      </div>

      <!-- Hospital & EMR Systems -->
      <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4 border-t-4 border-t-emerald-600 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-2">
            <h3 class="font-bold text-slate-900 text-sm">🩺 Hệ Thống EMR Bệnh Vụ</h3>
            <span class="text-[10px] bg-emerald-500 text-white font-bold px-2 py-0.5 rounded uppercase">CONNECTED</span>
          </div>
          <p class="text-xs text-slate-500 leading-relaxed">Kết nối dữ liệu hồ sơ bệnh án điện tử (EMR) Bệnh viện ĐHYD TP.HCM, Nhi Đồng 1, Da Liễu.</p>
        </div>
        <div class="bg-white p-2.5 rounded-xl border border-dashed border-emerald-600 text-[11px] text-slate-700 mt-4">
          Trạng thái đồng bộ: <strong>1.450 đơn thuốc/ngày</strong>
        </div>
      </div>

      <!-- Insurance Gateway -->
      <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4 border-t-4 border-t-amber-500 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-2">
            <h3 class="font-bold text-slate-900 text-sm">🛡️ Cổng Bảo Hiểm Y Tế & Tư Nhân</h3>
            <span class="text-[10px] bg-emerald-500 text-white font-bold px-2 py-0.5 rounded uppercase">CONNECTED</span>
          </div>
          <p class="text-xs text-slate-500 leading-relaxed">Tự động thanh toán trực tiếp BHXH / Bảo hiểm sức khỏe Prudential, Manulife, BaoViet qua đơn điện tử.</p>
        </div>
        <div class="bg-white p-2.5 rounded-xl border border-dashed border-amber-500 text-[11px] text-slate-700 mt-4">
          Tỷ lệ bảo lãnh tự động: <strong>99.1%</strong>
        </div>
      </div>

      <!-- Delivery Partners -->
      <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4 border-t-4 border-t-purple-600 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-2">
            <h3 class="font-bold text-slate-900 text-sm">🚚 Logistics Siêu Tốc 1H</h3>
            <span class="text-[10px] bg-emerald-500 text-white font-bold px-2 py-0.5 rounded uppercase">CONNECTED</span>
          </div>
          <p class="text-xs text-slate-500 leading-relaxed">Tích hợp API trực tiếp GrabExpress, Ahamove, VNPost giúp điều phối tài xế lấy thuốc trong 5 phút.</p>
        </div>
        <div class="bg-white p-2.5 rounded-xl border border-dashed border-purple-600 text-[11px] text-slate-700 mt-4">
          Thời gian giao trung bình: <strong>24.5 Phút</strong>
        </div>
      </div>

      <!-- Payment Gateway -->
      <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4 border-t-4 border-t-pink-600 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-2">
            <h3 class="font-bold text-slate-900 text-sm">💳 Cổng Thanh Toán Đa Kênh</h3>
            <span class="text-[10px] bg-emerald-500 text-white font-bold px-2 py-0.5 rounded uppercase">CONNECTED</span>
          </div>
          <p class="text-xs text-slate-500 leading-relaxed">VNPAY QR, MoMo, ZaloPay, Visa, Mastercard tích hợp hoàn tiền tự động khi hủy đơn.</p>
        </div>
        <div class="bg-white p-2.5 rounded-xl border border-dashed border-pink-600 text-[11px] text-slate-700 mt-4">
          Thanh toán bảo mật: <strong>PCI-DSS Level 1</strong>
        </div>
      </div>

    </div>
  </div>
</main>

<?php require __DIR__ . '/../layout/footer.php'; ?>
