<?php require __DIR__ . '/../layout/header.php'; ?>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-6">
    <a href="/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <span class="font-semibold text-slate-800">Khám Bệnh Telemedicine & Đơn Thuốc Trực Tuyến</span>
  </div>

  <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm mb-8">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-100 pb-4 mb-6 gap-3">
      <div>
        <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">DX PILLAR #1</span>
        <h1 class="text-xl font-bold text-slate-900 mt-1">Khám Bệnh Telemedicine & Đơn Thuốc Trực Tuyến</h1>
        <p class="text-xs text-slate-500 mt-0.5">Kết nối trực tiếp video 1-1 với Bác sĩ Chuyên khoa hàng đầu $\rightarrow$ Kê đơn điện tử kết nối kho thuốc Pharmacity.</p>
      </div>
      <span class="bg-emerald-600 text-white text-[11px] font-bold px-3 py-1 rounded-full">
        ✓ Live Video HD Ready
      </span>
    </div>

    <!-- Booking Confirmation Alert -->
    <?php if (!empty($booking)): ?>
      <div class="bg-blue-50 border-2 border-blue-600 rounded-2xl p-4 mb-6">
        <div class="flex flex-wrap items-center justify-between gap-3">
          <div>
            <h3 class="font-bold text-blue-600 text-sm md:text-base">🎉 Đặt Lịch Khám Telemedicine Thành Công! (Mã: <?= $booking['booking_id'] ?>)</h3>
            <p class="text-xs text-slate-700 mt-0.5">Thời gian: <strong><?= htmlspecialchars($booking['date']) ?> (<?= htmlspecialchars($booking['time_slot']) ?>)</strong></p>
          </div>
          <button onclick="document.getElementById('videoSimModal').style.display='flex';" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs md:text-sm px-5 py-2.5 rounded-xl transition-all shadow">
            🎥 Vào Phòng Khám Video Ngay
          </button>
        </div>
      </div>
    <?php endif; ?>

    <!-- Doctor Grid -->
    <h3 class="text-base font-bold text-slate-800 mb-4">Danh Sách Bác Sĩ Đang Trực Tuyến</h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php foreach ($doctors as $doc): ?>
        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4 flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="flex gap-3 mb-3">
              <img src="<?= htmlspecialchars($doc['avatar']) ?>" class="w-14 h-14 rounded-full object-cover border-2 border-blue-600 shrink-0" alt="Doctor Avatar">
              <div>
                <h4 class="font-bold text-slate-900 text-sm line-clamp-1"><?= htmlspecialchars($doc['name']) ?></h4>
                <div class="text-xs font-bold text-blue-600"><?= htmlspecialchars($doc['specialty']) ?></div>
                <div class="text-[11px] text-slate-400"><?= htmlspecialchars($doc['hospital']) ?></div>
                <div class="text-[11px] text-amber-600 font-semibold mt-0.5">★ <?= $doc['rating'] ?> / 5.0 (240+ Đánh giá)</div>
              </div>
            </div>
            
            <div class="bg-white p-2.5 rounded-xl border border-slate-200 text-xs text-slate-600 mb-4 space-y-1">
              <div>Phí tư vấn: <strong class="text-blue-600"><?= number_format($doc['fee'], 0, ',', '.') ?> đ / lượt</strong></div>
              <div>Khung giờ rảnh: <span class="text-emerald-600 font-bold"><?= htmlspecialchars($doc['time']) ?></span></div>
            </div>
          </div>

          <form action="/index.php?route=telemedicine" method="POST">
            <input type="hidden" name="action" value="book_doctor">
            <input type="hidden" name="doctor_id" value="<?= $doc['id'] ?>">
            <input type="hidden" name="book_date" value="<?= date('d/m/Y') ?>">
            
            <select name="time_slot" class="w-full p-2 border border-slate-200 rounded-xl text-xs outline-none bg-white mb-2 font-medium text-slate-800">
              <option value="14:00 - 14:30">14:00 - 14:30 Hôm nay</option>
              <option value="15:00 - 15:30">15:00 - 15:30 Hôm nay</option>
              <option value="19:00 - 19:30">19:00 - 19:30 Tối nay</option>
            </select>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs py-2.5 rounded-xl transition-all">
              📅 Đặt Lịch Tư Vấn Video
            </button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</main>

<!-- Simulated Video Call Modal -->
<div id="videoSimModal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4">
  <div class="bg-slate-900 w-[750px] max-w-full rounded-2xl overflow-hidden text-white shadow-2xl">
    <div class="p-4 bg-slate-950 flex items-center justify-between text-xs border-b border-slate-800">
      <div class="flex items-center gap-2">
        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
        <strong class="text-white">Phòng Khám Telemedicine Trực Tuyến - BS. CKII Nguyễn Thị Thanh</strong>
      </div>
      <button onclick="document.getElementById('videoSimModal').style.display='none';" class="text-slate-400 hover:text-white font-bold text-base">✕</button>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 bg-slate-950 min-h-[360px]">
      <div class="md:col-span-2 relative min-h-[240px] bg-slate-800 flex items-center justify-center">
        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600" class="w-full h-full object-cover" alt="Doctor Stream">
        
        <!-- User Self Cam Overlay -->
        <div class="absolute bottom-3 right-3 w-28 h-20 bg-slate-900 rounded-xl border-2 border-white overflow-hidden shadow-lg">
          <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=200" class="w-full h-full object-cover" alt="User Self Cam">
        </div>
      </div>

      <div class="p-4 bg-slate-900 border-t md:border-t-0 md:border-l border-slate-800 flex flex-col justify-between text-xs">
        <div>
          <h4 class="font-bold text-blue-400 text-xs uppercase mb-2">Đơn Thuốc Điện Tử AI Realtime</h4>
          <div class="space-y-2 text-slate-300">
            <div class="bg-slate-800 p-2 rounded-lg">
              <p class="font-bold text-white">1. Augmentin 1g</p>
              <p class="text-[11px] text-slate-400">1 viên x 2 lần/ngày (Sau ăn)</p>
            </div>
            <div class="bg-slate-800 p-2 rounded-lg">
              <p class="font-bold text-white">2. Paracetamol 500mg</p>
              <p class="text-[11px] text-slate-400">1 viên khi sốt > 38.5°C</p>
            </div>
          </div>
        </div>

        <a href="/index.php?route=checkout" class="mt-4 bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-center py-2.5 rounded-xl transition-all">
          🚀 Đặt Giao Đơn Thuốc Này (1H)
        </a>
      </div>
    </div>
  </div>
</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>
