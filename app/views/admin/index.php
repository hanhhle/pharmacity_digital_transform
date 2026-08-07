<?php require __DIR__ . '/../layout/header.php'; ?>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-6">
    <a href="/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <span class="font-semibold text-slate-800">AI Dự Báo Nhu Cầu & Quản Lý Hạn Dùng FEFO (Admin Portal)</span>
  </div>

  <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm mb-8 space-y-8">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-100 pb-4 gap-3">
      <div>
        <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">DX PILLAR #8 & #9</span>
        <h1 class="text-xl font-bold text-slate-900 mt-1">Bảng Điều Hành AI Dự Báo Nhu Cầu & Quản Lý Hạn Dùng FEFO</h1>
        <p class="text-xs text-slate-500 mt-0.5">Cổng thông tin Dược sĩ & Ban Quản trị: Thuật toán AI Prophet dự báo tồn kho kho vùng + Chiến lược điều phối hạn dùng FEFO.</p>
      </div>
      <span class="bg-blue-900 text-white text-[11px] font-bold px-3 py-1 rounded-full">
        🔐 Pharmacist / Admin Portal
      </span>
    </div>

    <!-- AI Demand Forecasting Table & Replenishment (DX #8) -->
    <div>
      <div class="flex flex-wrap items-center justify-between gap-3 mb-4">
        <h3 class="text-base font-bold text-slate-800">📈 Dự Báo Nhu Cầu Chuỗi Cung Ứng AI (AI Supply Chain Demand Forecast)</h3>
        <button onclick="alert('Đã tạo đề xuất đặt hàng tự động gửi tới các Nhà cung cấp dược phẩm!');" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs px-4 py-2 rounded-xl transition-all shadow">
          ⚡ Duyệt Tự Động Đặt Hàng AI (Auto-Replenish)
        </button>
      </div>

      <div class="overflow-x-auto rounded-xl border border-slate-200">
        <table class="w-full text-left text-xs whitespace-nowrap">
          <thead>
            <tr class="bg-blue-600 text-white font-bold">
              <th class="py-3 px-3">Khu Vực</th>
              <th class="py-3 px-3">Danh Mục Sản Phẩm</th>
              <th class="py-3 px-3">Tồn Kho Hiện Tại</th>
              <th class="py-3 px-3">Nhu Cầu Dự Báo (30 Ngày)</th>
              <th class="py-3 px-3">AI Đề Xuất Nhập</th>
              <th class="py-3 px-3">Độ Tin Cậy AI</th>
              <th class="py-3 px-3">Xu Hướng Khí Hậu / Y Tế</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-200 text-slate-700 bg-slate-50/50">
            <?php foreach ($forecasts as $f): ?>
              <tr>
                <td class="py-3 px-3 font-bold text-slate-900"><?= htmlspecialchars($f['region']) ?></td>
                <td class="py-3 px-3 font-bold text-blue-600"><?= htmlspecialchars($f['category']) ?></td>
                <td class="py-3 px-3"><?= number_format($f['stock']) ?> đơn vị</td>
                <td class="py-3 px-3 font-bold text-blue-900"><?= number_format($f['forecast']) ?> đơn vị</td>
                <td class="py-3 px-3 font-bold text-amber-600"><?= number_format($f['reorder']) ?> đơn vị</td>
                <td class="py-3 px-3 font-bold text-emerald-600"><?= htmlspecialchars($f['confidence']) ?></td>
                <td class="py-3 px-3 text-[11px] text-slate-500"><?= htmlspecialchars($f['trend']) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Smart Expiry Management & FEFO (DX #9) -->
    <div>
      <div class="flex flex-wrap items-center justify-between gap-3 mb-4">
        <h3 class="text-base font-bold text-slate-800">⏳ Quản Lý Lô Thuốc Cận Hạn Theo Nguyên Tắc FEFO (First Expired, First Out)</h3>
        <button onclick="alert('Đã kích hoạt chương trình xả hàng FEFO tự động giảm 40% trên website!');" class="bg-orange-600 hover:bg-orange-700 text-white font-bold text-xs px-4 py-2 rounded-xl transition-all shadow">
          🏷️ Kích Hoạt Clearance FEFO 40%
        </button>
      </div>

      <div class="overflow-x-auto rounded-xl border border-slate-200">
        <table class="w-full text-left text-xs whitespace-nowrap">
          <thead>
            <tr class="bg-slate-900 text-white font-bold">
              <th class="py-3 px-3">Mã Sản Phẩm / Tên Thuốc</th>
              <th class="py-3 px-3">Số Lô (Batch ID)</th>
              <th class="py-3 px-3">Số Lượng Lô</th>
              <th class="py-3 px-3">Hạn Sử Dụng (EXP)</th>
              <th class="py-3 px-3">Trạng Thái Cảnh Báo FEFO</th>
              <th class="py-3 px-3">Đề Xuất Hành Động AI</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-200 text-slate-700 bg-slate-50/50">
            <?php foreach ($expiryBatches as $b): ?>
              <tr>
                <td class="py-3 px-3">
                  <strong class="text-blue-600 text-sm block"><?= htmlspecialchars($b['name']) ?></strong>
                  <span class="text-[10px] text-slate-400">SKU: <?= htmlspecialchars($b['sku']) ?></span>
                </td>
                <td class="py-3 px-3 font-mono font-bold"><?= htmlspecialchars($b['batch']) ?></td>
                <td class="py-3 px-3 font-bold"><?= $b['qty'] ?> hộp</td>
                <td class="py-3 px-3 font-bold text-red-600"><?= htmlspecialchars($b['exp']) ?></td>
                <td class="py-3 px-3">
                  <span class="px-2 py-0.5 rounded text-[10px] font-bold <?= strpos($b['status'], 'CẤP THIẾT') !== false ? 'bg-red-100 text-red-700' : 'bg-amber-100 text-amber-700' ?>">
                    <?= htmlspecialchars($b['status']) ?>
                  </span>
                </td>
                <td class="py-3 px-3 font-bold text-emerald-600"><?= htmlspecialchars($b['action']) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</main>

<?php require __DIR__ . '/../layout/footer.php'; ?>
