<?php require __DIR__ . '/../layout/header.php'; ?>

<style>
  @media print {
    header, footer, #pmc-main-header, .no-print {
      display: none !important;
    }
    body, main {
      background: white !important;
      color: black !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    .print-full-width {
      width: 100% !important;
      max-width: 100% !important;
      box-shadow: none !important;
      border: 1px solid #CBD5E1 !important;
    }
  }
</style>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-6 no-print">
    <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <span class="font-semibold text-slate-800">Tài khoản</span>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    
    <!-- Sidebar Profile (Sticky on Desktop) -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm text-center no-print lg:sticky lg:top-24 lg:self-start">
      <img src="<?= htmlspecialchars($user['avatar']) ?>" class="w-20 h-20 rounded-full object-cover border-4 border-blue-600 mx-auto mb-3" alt="Avatar">
      <h3 class="font-bold text-slate-900 text-base mb-1"><?= htmlspecialchars($user['fullname']) ?></h3>
      <span class="inline-block bg-amber-100 text-amber-800 text-xs font-bold px-2.5 py-0.5 rounded-full mb-2">
        Hạng <?= htmlspecialchars($user['loyalty_tier']) ?>
      </span>
      <p class="text-xs text-slate-400">ID Khách Hàng: PMC-8839201</p>

      <div class="mt-6 pt-4 border-t border-slate-100 flex flex-col gap-2 text-left text-xs font-semibold text-slate-700">
        <a href="#metrics" id="tab-metrics" class="dash-tab p-2.5 bg-blue-50 text-blue-600 font-bold rounded-xl transition-all">Chỉ Số Sức Khỏe Tổng Quan</a>
        <a href="#prescriptions" id="tab-prescriptions" class="dash-tab p-2.5 text-slate-700 hover:bg-slate-50 font-medium rounded-xl transition-all">Lịch Sử Đơn Thuốc & Mua Hàng</a>
        <a href="#reminders" id="tab-reminders" class="dash-tab p-2.5 text-slate-700 hover:bg-slate-50 font-medium rounded-xl transition-all">Nhắc Nhở Uống Thuốc Định Kỳ</a>
        <a href="#loyalty" id="tab-loyalty" class="dash-tab p-2.5 text-slate-700 hover:bg-slate-50 font-medium rounded-xl transition-all">Thẻ Thành Viên P-Xu Extra</a>
        <a href="#kiosk-logs" id="tab-kiosk-logs" class="dash-tab p-2.5 text-slate-700 hover:bg-slate-50 font-medium rounded-xl transition-all">Trạm Kiosk Sức Khỏe IoT</a>
      </div>
    </div>

    <!-- Main Dashboard Content -->
    <div class="lg:col-span-3 space-y-6 print-full-width">
      
      <!-- Top Title & PDF Export (Anchor #metrics) -->
      <div id="metrics" class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm scroll-mt-28">
        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-100 pb-4 mb-4">
          <div>
            <h1 class="text-xl font-bold text-slate-900 mt-1">Smart Customer Dashboard & Hồ Sơ Y Tế Digital EMR</h1>
            <p class="text-xs text-slate-500 mt-0.5">Hệ thống quản lý dữ liệu sức khỏe cá nhân cá thể hóa & chương trình tích điểm thưởng sức khỏe.</p>
          </div>
          
          <div class="flex items-center gap-2 no-print">
            <button onclick="document.getElementById('update-metrics-modal').classList.toggle('hidden')" class="bg-slate-800 hover:bg-slate-900 text-white text-xs font-bold px-3.5 py-2.5 rounded-xl transition-all">
              Cập Nhật Chỉ Số Sức Khỏe
            </button>

            <button onclick="window.print();" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition-all">
              Xuất Báo Cáo Sức Khỏe (PDF)
            </button>
          </div>
        </div>

        <!-- Shortcut Banner to Kiosk IoT -->
        <div class="mt-4 bg-gradient-to-r from-emerald-600 to-teal-700 text-white p-4 rounded-xl flex items-center justify-between gap-4 no-print">
          <div>
            <h3 class="font-bold text-sm mt-1">Đến Nhà Thuốc Đo Sinh Hiệu Tại Kiosk Sức Khỏe IoT?</h3>
            <p class="text-xs text-emerald-100">Dữ liệu đo tại trạm Kiosk sẽ tự động đẩy trực tiếp vào hồ sơ này thông qua Mã Khách Hàng / SĐT.</p>
          </div>
          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=kiosk&step=connect" class="bg-white text-emerald-800 hover:bg-emerald-50 font-bold text-xs px-4 py-2.5 rounded-lg shrink-0 transition-all">
            Chuyển Sang Trạm Kiosk IoT →
          </a>
        </div>
      </div>

      <!-- Update Metrics Form Modal (Inline Toggle for manual entry) -->
      <div id="update-metrics-modal" class="hidden bg-slate-900/40 border border-slate-300 bg-white p-5 rounded-2xl shadow-lg no-print">
        <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
          <div>
            <h3 class="font-bold text-slate-900 text-sm">Nhập Trực Tiếp Chỉ Số Sinh Hiệu</h3>
            <p class="text-xs text-slate-500">Dành cho người dùng tự cập nhật khi đo ở các cơ sở bên ngoài nhà thuốc.</p>
          </div>
          <button onclick="document.getElementById('update-metrics-modal').classList.add('hidden')" class="text-slate-400 hover:text-slate-600 text-sm font-bold">✕</button>
        </div>

        <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account" method="POST" class="grid grid-cols-2 md:grid-cols-4 gap-3 text-xs">
          <input type="hidden" name="action" value="update_metrics">

          <div>
            <label class="font-bold text-slate-700 block mb-1">Huyết Áp Tâm Thu (SYS)</label>
            <input type="number" name="sys" value="120" class="w-full p-2 border border-slate-200 rounded-lg text-slate-900 font-bold">
          </div>

          <div>
            <label class="font-bold text-slate-700 block mb-1">Huyết Áp Tâm Trương (DIA)</label>
            <input type="number" name="dia" value="80" class="w-full p-2 border border-slate-200 rounded-lg text-slate-900 font-bold">
          </div>

          <div>
            <label class="font-bold text-slate-700 block mb-1">Nhịp Tim (BPM)</label>
            <input type="number" name="hr" value="72" class="w-full p-2 border border-slate-200 rounded-lg text-slate-900 font-bold">
          </div>

          <div>
            <label class="font-bold text-slate-700 block mb-1">Cân Nặng (KG)</label>
            <input type="number" step="0.1" name="weight" value="65.0" class="w-full p-2 border border-slate-200 rounded-lg text-slate-900 font-bold">
          </div>

          <div class="col-span-2 md:col-span-4 mt-2 flex justify-end gap-2">
            <button type="button" onclick="document.getElementById('update-metrics-modal').classList.add('hidden')" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold px-4 py-2 rounded-lg">
              Hủy
            </button>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-5 py-2 rounded-lg">
              Cập Nhật Về Hồ Sơ
            </button>
          </div>
        </form>
      </div>

      <!-- Health Metrics Summary Cards (Dynamically Linked to Latest Reading) -->
      <div id="metrics" class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <?php
          $latestStatus = $user['latest_status'] ?? 'green';
          $bpColor = 'text-emerald-700';
          $bpBg = 'bg-emerald-50 border-emerald-200';
          if ($latestStatus === 'red') {
              $bpColor = 'text-rose-700 font-extrabold';
              $bpBg = 'bg-rose-50 border-rose-200';
          } elseif ($latestStatus === 'yellow') {
              $bpColor = 'text-amber-700 font-bold';
              $bpBg = 'bg-amber-50 border-amber-200';
          }
        ?>
        <div class="bg-white rounded-2xl p-4 border border-slate-200 shadow-sm flex flex-col justify-between">
          <span class="text-xs font-semibold text-slate-500">Huyết Áp Tâm Thu/Trương</span>
          <div class="text-lg md:text-xl font-bold <?= $bpColor ?> mt-2"><?= htmlspecialchars($user['blood_pressure']) ?></div>
          <span class="text-[10px] text-slate-500 mt-1">Đo lúc: <?= htmlspecialchars($user['latest_date'] ?? 'Lần đo mới nhất') ?></span>
        </div>

        <div class="bg-white rounded-2xl p-4 border border-slate-200 shadow-sm flex flex-col justify-between">
          <span class="text-xs font-semibold text-slate-500">Nhịp Tim Y Khoa</span>
          <div class="text-lg md:text-xl font-bold text-rose-600 mt-2">
            <?= (strpos($user['heart_rate'], 'bpm') !== false) ? htmlspecialchars($user['heart_rate']) : intval($user['heart_rate']) . ' bpm' ?>
          </div>
          <span class="text-[10px] text-slate-500 mt-1">Nhịp đập/phút</span>
        </div>

        <div class="bg-white rounded-2xl p-4 border border-slate-200 shadow-sm flex flex-col justify-between">
          <span class="text-xs font-semibold text-slate-500">Chỉ Số Thể Tạng BMI</span>
          <div class="text-lg md:text-xl font-bold text-emerald-600 mt-2"><?= htmlspecialchars($user['bmi']) ?></div>
          <?php
            $bmiVal = floatval($user['bmi']);
            $bmiLabel = 'Cân đối y khoa';
            if ($bmiVal < 18.5) {
                $bmiLabel = 'Thiếu cân / Gầy';
            } elseif ($bmiVal >= 18.5 && $bmiVal <= 22.9) {
                $bmiLabel = 'Cân đối y khoa';
            } elseif ($bmiVal >= 23.0 && $bmiVal <= 24.9) {
                $bmiLabel = 'Thừa cân nhẹ';
            } else {
                $bmiLabel = 'Béo phì';
            }
          ?>
          <span class="text-[10px] text-slate-500 mt-1 font-medium"><?= $bmiLabel ?></span>
        </div>

        <div class="bg-white rounded-2xl p-4 border border-slate-200 shadow-sm flex flex-col justify-between">
          <span class="text-xs font-semibold text-slate-500">Điểm P-Xu Extra</span>
          <div class="text-lg md:text-xl font-bold text-amber-600 mt-2"><?= number_format($user['loyalty_points']) ?> P-Xu</div>
          <span class="text-[10px] text-amber-700 font-semibold mt-1">Hạng <?= htmlspecialchars($user['loyalty_tier']) ?></span>
        </div>
      </div>

      <!-- Medication Order History & Auto-Refill Section (#prescriptions) -->
      <div id="prescriptions" class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm scroll-mt-28">
        <div class="flex flex-wrap items-center justify-between mb-4 border-b border-slate-100 pb-3 gap-2">
          <div>
            <h3 class="text-base font-bold text-slate-900">Lịch Sử Mua Thuốc & Đơn Hàng Định Kỳ (3 Đơn Gần Nhất)</h3>
            <p class="text-xs text-slate-500">Quản lý các đơn hàng đang giao 1H, đơn đang vận chuyển & lộ trình tái đơn 1-Click.</p>
          </div>
          <span class="text-xs bg-blue-50 text-blue-700 font-bold px-3 py-1 rounded-full border border-blue-200">
            <?= count($ordersHistory) ?> Đơn hàng đã ghi nhận
          </span>
        </div>

        <?php 
          $top3Orders = array_slice($ordersHistory, 0, 3);
          $remainingOrders = array_slice($ordersHistory, 3);
        ?>

        <div class="space-y-4">
          <?php foreach ($top3Orders as $ord): ?>
            <?php 
              $statusBadgeClass = 'bg-emerald-100 text-emerald-800 border border-emerald-200';
              if ($ord['status_color'] === 'blue') {
                  $statusBadgeClass = 'bg-blue-100 text-blue-800 border border-blue-300 font-bold animate-pulse';
              } elseif ($ord['status_color'] === 'amber') {
                  $statusBadgeClass = 'bg-amber-100 text-amber-800 border border-amber-300 font-bold animate-pulse';
              } elseif ($ord['status_color'] === 'indigo') {
                  $statusBadgeClass = 'bg-indigo-100 text-indigo-800 border border-indigo-300 font-bold animate-pulse';
              } elseif ($ord['status_color'] === 'rose') {
                  $statusBadgeClass = 'bg-rose-100 text-rose-800 border border-rose-200';
              }
            ?>
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-4 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
              <div class="space-y-1 flex-1">
                <div class="flex flex-wrap items-center gap-2">
                  <span class="font-extrabold text-xs text-slate-900"><?= htmlspecialchars($ord['order_code']) ?></span>
                  <span class="bg-blue-100 text-blue-800 text-[10px] font-bold px-2 py-0.5 rounded uppercase">
                    <?= htmlspecialchars($ord['type']) ?>
                  </span>
                  <span class="<?= $statusBadgeClass ?> text-[10px] px-2 py-0.5 rounded">
                    ● <?= htmlspecialchars($ord['status']) ?>
                  </span>
                </div>

                <p class="text-xs font-semibold text-slate-800 mt-1">
                  Thuốc / Sản phẩm: <span class="text-slate-600 font-normal"><?= htmlspecialchars($ord['items']) ?></span>
                </p>

                <div class="flex flex-wrap items-center gap-3 text-[11px] text-slate-500 mt-1">
                  <span>Mốc thời gian: <strong><?= htmlspecialchars($ord['date']) ?></strong></span>
                  <span>|</span>
                  <span>Vận chuyển: <strong><?= htmlspecialchars($ord['delivery']) ?></strong></span>
                </div>
              </div>

              <!-- Fixed-width Aligned Total & Customized Status Button Column -->
              <div class="flex items-center gap-4 w-full md:w-auto justify-between md:justify-end border-t md:border-t-0 border-slate-200 pt-3 md:pt-0 no-print shrink-0">
                <div class="w-28 text-right shrink-0">
                  <span class="text-[10px] text-slate-400 block">Tổng tiền</span>
                  <strong class="text-sm font-extrabold text-blue-600"><?= htmlspecialchars($ord['total']) ?></strong>
                </div>

                <div class="w-36 text-right shrink-0">
                  <?php if ($ord['status'] === 'Đang giao hàng 1H' || $ord['status'] === 'Đang vận chuyển'): ?>
                    <button onclick="alert('Đơn hàng <?= $ord['order_code'] ?>: <?= htmlspecialchars($ord['delivery']) ?>')" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs py-2.5 rounded-xl transition-all shadow-xs text-center">
                      Xem Trạng Thái
                    </button>
                  <?php elseif (!empty($ord['can_cancel']) || $ord['status'] === 'Đang điều phối dược sĩ'): ?>
                    <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account#prescriptions" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn hủy đơn hàng <?= $ord['order_code'] ?> không?');" class="inline">
                      <input type="hidden" name="action" value="cancel_order">
                      <input type="hidden" name="order_code" value="<?= htmlspecialchars($ord['order_code']) ?>">
                      <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-bold text-xs py-2.5 rounded-xl transition-all shadow-xs text-center">
                        Hủy Đơn Hàng
                      </button>
                    </form>
                  <?php elseif ($ord['status'] === 'Đã hoàn thành'): ?>
                    <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account&reorder_code=<?= urlencode($ord['order_code']) ?>" class="inline-block w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs py-2.5 rounded-xl transition-all shadow-xs text-center">
                      Mua lại đơn này →
                    </a>
                  <?php else: ?>
                    <button class="w-full bg-slate-200 text-slate-500 font-bold text-xs py-2.5 rounded-xl pointer-events-none cursor-not-allowed text-center">
                      Đã Hủy
                    </button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <?php if (!empty($remainingOrders)): ?>
            <div id="extra-orders" class="hidden space-y-4 pt-2">
              <?php foreach ($remainingOrders as $ord): ?>
                <?php 
                  $statusBadgeClass = 'bg-emerald-100 text-emerald-800 border border-emerald-200';
                  if ($ord['status_color'] === 'rose') {
                      $statusBadgeClass = 'bg-rose-100 text-rose-800 border border-rose-200';
                  }
                ?>
                <div class="bg-slate-50 border border-slate-200 rounded-xl p-4 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                  <div class="space-y-1 flex-1">
                    <div class="flex flex-wrap items-center gap-2">
                      <span class="font-extrabold text-xs text-slate-900"><?= htmlspecialchars($ord['order_code']) ?></span>
                      <span class="bg-blue-100 text-blue-800 text-[10px] font-bold px-2 py-0.5 rounded uppercase">
                        <?= htmlspecialchars($ord['type']) ?>
                      </span>
                      <span class="<?= $statusBadgeClass ?> text-[10px] px-2 py-0.5 rounded">
                        ● <?= htmlspecialchars($ord['status']) ?>
                      </span>
                    </div>

                    <p class="text-xs font-semibold text-slate-800 mt-1">
                      Thuốc / Sản phẩm: <span class="text-slate-600 font-normal"><?= htmlspecialchars($ord['items']) ?></span>
                    </p>

                    <div class="flex flex-wrap items-center gap-3 text-[11px] text-slate-500 mt-1">
                      <span>Mốc thời gian: <strong><?= htmlspecialchars($ord['date']) ?></strong></span>
                      <span>|</span>
                      <span>Vận chuyển: <strong><?= htmlspecialchars($ord['delivery']) ?></strong></span>
                    </div>
                  </div>

                  <div class="flex items-center gap-4 w-full md:w-auto justify-between md:justify-end border-t md:border-t-0 border-slate-200 pt-3 md:pt-0 no-print shrink-0">
                    <div class="w-28 text-right shrink-0">
                      <span class="text-[10px] text-slate-400 block">Tổng tiền</span>
                      <strong class="text-sm font-extrabold text-blue-600"><?= htmlspecialchars($ord['total']) ?></strong>
                    </div>

                    <div class="w-36 text-right shrink-0">
                      <?php if ($ord['status'] === 'Đã hoàn thành'): ?>
                        <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account&reorder_code=<?= urlencode($ord['order_code']) ?>" class="inline-block w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs py-2.5 rounded-xl transition-all shadow-xs text-center">
                          Mua lại đơn này →
                        </a>
                      <?php else: ?>
                        <button class="w-full bg-slate-200 text-slate-500 font-bold text-xs py-2.5 rounded-xl pointer-events-none cursor-not-allowed text-center">
                          Đã Hủy
                        </button>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

            <div class="mt-4 text-center border-t border-slate-100 pt-3 no-print">
              <button onclick="document.getElementById('extra-orders').classList.toggle('hidden'); this.innerText = this.innerText.includes('Xem thêm') ? 'Thu gọn bớt đơn hàng' : 'Xem thêm tất cả đơn hàng (Còn <?= count($remainingOrders) ?> đơn) →';" class="text-xs font-bold text-blue-600 hover:text-blue-700 bg-blue-50 hover:bg-blue-100 px-4 py-2 rounded-xl transition-all">
                Xem thêm tất cả đơn hàng (Còn <?= count($remainingOrders) ?> đơn) →
              </button>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Active Medication Reminders & Dosage Schedule -->
      <div id="reminders" class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm scroll-mt-28">
        <div class="flex items-center justify-between mb-4 border-b border-slate-100 pb-3">
          <div>
            <h3 class="text-base font-bold text-slate-900">Lịch Nhắc Uống Thuốc & Tự Động Tái Đơn</h3>
            <p class="text-xs text-slate-500">Quy định điểm danh đúng giờ (±60 phút) để nhận +10 P-Xu thưởng mỗi ngày.</p>
          </div>
          <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded-full border border-emerald-200">
            Tỷ lệ tuân thủ: 96%
          </span>
        </div>

        <?php if (isset($_SESSION['flash_msg'])): ?>
          <div class="mb-4 p-3.5 rounded-xl border text-xs font-semibold flex items-center justify-between <?= $_SESSION['flash_msg']['type'] === 'success' ? 'bg-emerald-50 text-emerald-900 border-emerald-300' : 'bg-amber-50 text-amber-900 border-amber-300' ?>">
            <div>
              <strong><?= htmlspecialchars($_SESSION['flash_msg']['title']) ?></strong>
              <p class="mt-0.5 font-normal"><?= htmlspecialchars($_SESSION['flash_msg']['text']) ?></p>
            </div>
            <button onclick="this.parentElement.remove()" class="text-slate-400 hover:text-slate-600 font-bold ml-2">✕</button>
          </div>
          <?php unset($_SESSION['flash_msg']); ?>
        <?php endif; ?>

        <div class="space-y-3">
          <?php foreach ($user['active_prescriptions'] as $rx): ?>
            <div class="bg-slate-50 p-4 rounded-xl border-l-4 border-blue-600 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
              <div class="space-y-1">
                <strong class="text-sm font-bold text-slate-900"><?= htmlspecialchars($rx['drug']) ?></strong>
                <p class="text-xs text-slate-500">Mã đơn: <?= htmlspecialchars($rx['id']) ?> | Bác sĩ kê đơn: <?= htmlspecialchars($rx['doctor']) ?></p>
                <p class="text-xs text-amber-700 font-semibold mt-1">Lịch uống: 07:00 (Sáng) & 18:00 (Tối) | Cần tái đơn trong: <?= htmlspecialchars($rx['refill_remind']) ?></p>
              </div>

              <div class="flex flex-wrap items-center gap-2 no-print shrink-0">
                <?php if (!empty($_SESSION['confirmed_today_' . $rx['id']])): ?>
                  <span class="bg-emerald-100 text-emerald-800 border border-emerald-300 font-bold text-xs px-3 py-2 rounded-xl flex items-center gap-1">
                    ✔ Đã Điểm Danh Uống Thuốc Hôm Nay (+10 P-Xu)
                  </span>
                <?php else: ?>
                  <!-- Real-Time Automatic Medication Confirmation Form -->
                  <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account#reminders" method="POST" class="inline">
                    <input type="hidden" name="action" value="confirm_medication">
                    <input type="hidden" name="rx_id" value="<?= htmlspecialchars($rx['id']) ?>">
                    <input type="hidden" name="drug" value="<?= htmlspecialchars($rx['drug']) ?>">
                    <input type="hidden" name="slot" value="07:00">
                    <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs px-4 py-2.5 rounded-xl transition-all shadow-xs">
                      Đã Uống Liều Này
                    </button>
                  </form>
                <?php endif; ?>

                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=checkout" class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-3.5 py-2.5 rounded-xl transition-all shadow-xs">
                  Tái Đơn Tự Động →
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Digital Loyalty Membership Card & P-Xu Rewards History (#loyalty) -->
      <div id="loyalty" class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm scroll-mt-28">
        <div class="flex flex-wrap items-center justify-between mb-4 border-b border-slate-100 pb-3 gap-2">
          <div>
            <h3 class="text-base font-bold text-slate-900">Thẻ Thành Viên P-Xu Extra & Điểm Thưởng Sức Khỏe</h3>
            <p class="text-xs text-slate-500">Tích điểm P-Xu tự động khi tuân thủ uống thuốc, đo Kiosk IoT & mua sắm.</p>
          </div>
          <span class="text-xs bg-amber-100 text-amber-900 font-bold px-3 py-1 rounded-full border border-amber-300">
            Hạng <?= htmlspecialchars($user['loyalty_tier']) ?>
          </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
          <!-- VIP Digital Loyalty Card Graphic -->
          <div class="lg:col-span-1 bg-gradient-to-br from-amber-500 via-amber-600 to-yellow-700 text-white rounded-2xl p-5 shadow-lg flex flex-col justify-between relative overflow-hidden">
            <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
            
            <div>
              <div class="flex items-center justify-between border-b border-white/20 pb-3 mb-3">
                <span class="font-extrabold text-xs tracking-wider uppercase">Pharmacity Extra VIP</span>
                <span class="text-[10px] bg-white/20 px-2 py-0.5 rounded font-bold">PLATINUM</span>
              </div>
              
              <span class="text-[10px] text-amber-100 block">Thành viên sở hữu</span>
              <h4 class="text-lg font-black tracking-wide mt-0.5"><?= htmlspecialchars($user['fullname']) ?></h4>
              <p class="text-xs text-amber-200 font-mono mt-1">ID: PMC-8839201</p>
            </div>

            <div class="mt-6 pt-3 border-t border-white/20">
              <div class="flex justify-between items-end">
                <div>
                  <span class="text-[10px] text-amber-100 block">Số dư P-Xu khả dụng</span>
                  <strong class="text-xl font-black text-yellow-200"><?= number_format($user['loyalty_points']) ?> P-Xu</strong>
                </div>
                <span class="text-[9px] bg-yellow-400 text-amber-950 px-2 py-1 rounded font-extrabold">
                  Trừ trực tiếp tiền
                </span>
              </div>

              <!-- Tier Progress Bar -->
              <div class="mt-3">
                <div class="flex justify-between text-[10px] text-amber-100 mb-1 font-semibold">
                  <span>Tiến trình nâng hạng Diamond</span>
                  <span>2,450 / 3,000 P-Xu (81%)</span>
                </div>
                <div class="w-full bg-white/20 h-2 rounded-full overflow-hidden">
                  <div class="bg-yellow-300 h-full rounded-full" style="width: 81%"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Loyalty Privileges & Benefits -->
          <div class="lg:col-span-2 bg-slate-50 border border-slate-200 rounded-2xl p-5">
            <h4 class="font-bold text-slate-800 text-sm mb-3">Đặc Quyền Hội Viên Platinum Extra</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 text-xs">
              <div class="bg-white p-3 rounded-xl border border-slate-200 shadow-2xs">
                <span class="font-bold text-blue-600 block mb-1">Giảm 5% Trực Tiếp</span>
                <p class="text-slate-500">Giảm 5% cho hóa đơn thuốc OTC, Thực phẩm chức năng & Dược mỹ phẩm.</p>
              </div>

              <div class="bg-white p-3 rounded-xl border border-slate-200 shadow-2xs">
                <span class="font-bold text-emerald-600 block mb-1">Freeship Giao 1H</span>
                <p class="text-slate-500">Miễn phí vận chuyển hỏa tốc 1H cho mọi đơn hàng từ 150.000đ.</p>
              </div>

              <div class="bg-white p-3 rounded-xl border border-slate-200 shadow-2xs">
                <span class="font-bold text-amber-600 block mb-1">Thưởng Sức Khỏe</span>
                <p class="text-slate-500">Tích điểm P-Xu mỗi lần đo Kiosk IoT (+50 P-Xu) & uống thuốc đúng giờ (+10 P-Xu).</p>
              </div>
            </div>

            <!-- Quick Redeem Button -->
            <div class="mt-4 pt-3 border-t border-slate-200 flex flex-wrap items-center justify-between gap-3 text-xs">
              <span class="text-slate-600 font-semibold">Tỷ lệ quy đổi: <strong>100 P-Xu = 10.000đ</strong> giảm trừ trực tiếp vào đơn hàng.</span>
              <button onclick="alert('Đã đổi 100 P-Xu thành công! Bạn nhận được Voucher 10.000đ áp dụng cho đơn hàng tiếp theo.')" class="bg-amber-600 hover:bg-amber-700 text-white font-bold px-4 py-2 rounded-xl transition-all shadow-xs">
                Đổi Voucher 10k (-100 P-Xu)
              </button>
            </div>
          </div>
        </div>

        <!-- P-Xu Points Transaction History Logs -->
        <div>
          <h4 class="font-bold text-slate-900 text-sm mb-3">Lịch Sử Biến Động Điểm P-Xu Extra (Cộng / Trừ Điểm)</h4>
          <div class="overflow-x-auto border border-slate-200 rounded-xl">
            <table class="w-full text-left text-xs md:text-sm whitespace-nowrap">
              <thead>
                <tr class="bg-slate-50 text-slate-500 border-b border-slate-200">
                  <th class="py-2.5 px-3 font-semibold">Mốc thời gian</th>
                  <th class="py-2.5 px-3 font-semibold">Nội dung hoạt động tích / tiêu điểm</th>
                  <th class="py-2.5 px-3 font-semibold">Số điểm P-Xu</th>
                  <th class="py-2.5 px-3 font-semibold">Số dư P-Xu sau GD</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-100 text-slate-700">
                <?php 
                  $defaultPointsLogs = [
                    ['date' => '07/08/2026 22:00', 'type' => 'earn', 'points' => '+50 P-Xu', 'title' => 'Thưởng đo sinh hiệu Kiosk IoT Pharmacity PMC Q1', 'balance' => '2.450 P-Xu'],
                    ['date' => '07/08/2026 07:00', 'type' => 'earn', 'points' => '+10 P-Xu', 'title' => 'Thưởng tuân thủ uống thuốc Amlodipine đúng giờ', 'balance' => '2.400 P-Xu'],
                    ['date' => '01/08/2026 15:30', 'type' => 'redeem', 'points' => '-100 P-Xu', 'title' => 'Đổi Voucher 10.000đ mua Berocca sủi cam', 'balance' => '2.390 P-Xu'],
                    ['date' => '15/07/2026 14:35', 'type' => 'earn', 'points' => '+34 P-Xu', 'title' => 'Tích điểm đơn hàng PMC-ORD-2026-901', 'balance' => '2.490 P-Xu'],
                    ['date' => '01/07/2026 00:00', 'type' => 'earn', 'points' => '+100 P-Xu', 'title' => 'Quà tặng sinh nhật hội viên Platinum Extra', 'balance' => '2.456 P-Xu'],
                    ['date' => '20/06/2026 10:15', 'type' => 'redeem', 'points' => '-200 P-Xu', 'title' => 'Đổi quà tặng Hộp Khẩu trang 3D Pharmacity', 'balance' => '2.356 P-Xu']
                  ];
                  $pLogs = !empty($pointsHistory) ? $pointsHistory : $defaultPointsLogs;
                  $top3Points = array_slice($pLogs, 0, 3);
                  $remainingPoints = array_slice($pLogs, 3);

                  foreach ($top3Points as $pt): 
                ?>
                  <tr>
                    <td class="py-3 px-3 font-medium text-slate-900"><?= htmlspecialchars($pt['date']) ?></td>
                    <td class="py-3 px-3 font-semibold text-slate-800"><?= htmlspecialchars($pt['title']) ?></td>
                    <td class="py-3 px-3 font-bold <?= $pt['type'] === 'earn' ? 'text-emerald-600' : 'text-rose-600' ?>">
                      <?= htmlspecialchars($pt['points']) ?>
                    </td>
                    <td class="py-3 px-3 font-extrabold text-slate-900"><?= htmlspecialchars($pt['balance']) ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

              <?php if (!empty($remainingPoints)): ?>
                <tbody id="extra-points-logs" class="hidden divide-y divide-slate-100 text-slate-700">
                  <?php foreach ($remainingPoints as $pt): ?>
                    <tr>
                      <td class="py-3 px-3 font-medium text-slate-900"><?= htmlspecialchars($pt['date']) ?></td>
                      <td class="py-3 px-3 font-semibold text-slate-800"><?= htmlspecialchars($pt['title']) ?></td>
                      <td class="py-3 px-3 font-bold <?= $pt['type'] === 'earn' ? 'text-emerald-600' : 'text-rose-600' ?>">
                        <?= htmlspecialchars($pt['points']) ?>
                      </td>
                      <td class="py-3 px-3 font-extrabold text-slate-900"><?= htmlspecialchars($pt['balance']) ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              <?php endif; ?>
            </table>
          </div>

          <?php if (!empty($remainingPoints)): ?>
            <div class="mt-3 text-center border-t border-slate-100 pt-3 no-print">
              <button onclick="document.getElementById('extra-points-logs').classList.toggle('hidden'); this.innerText = this.innerText.includes('Xem thêm') ? 'Thu gọn bớt lịch sử điểm' : 'Xem thêm tất cả lịch sử tích / tiêu điểm (Còn <?= count($remainingPoints) ?> lượt) →';" class="text-xs font-bold text-amber-700 hover:text-amber-800 bg-amber-50 hover:bg-amber-100 px-4 py-2 rounded-xl transition-all">
                Xem thêm tất cả lịch sử tích / tiêu điểm (Còn <?= count($remainingPoints) ?> lượt) →
              </button>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Historical Kiosk Logs Table (Top 5 Recent Measurements & Level Color Coding) -->
      <div id="kiosk-logs" class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm scroll-mt-28">
        <div class="flex flex-wrap items-center justify-between mb-4 border-b border-slate-100 pb-3 gap-2">
          <div>
            <h3 class="text-base font-bold text-slate-900">Lịch Sử Đo Tại Kiosk Sức Khỏe Pharmacity (5 Lần Đo Gần Nhất)</h3>
            <p class="text-xs text-slate-500">Dữ liệu được phân cụm theo các cấp độ y khoa (Mức 1: Xanh, Mức 2: Vàng, Mức 3: Đỏ).</p>
          </div>
        </div>

        <?php 
          $top5Logs = array_slice($kioskLogs, 0, 5);
          $remainingLogs = array_slice($kioskLogs, 5);
        ?>

        <div class="overflow-x-auto">
          <table class="w-full text-left text-xs md:text-sm whitespace-nowrap">
            <thead>
              <tr class="bg-slate-50 text-slate-500 border-b border-slate-200">
                <th class="py-2.5 px-3 font-semibold">Thời gian đo</th>
                <th class="py-2.5 px-3 font-semibold">Huyết áp (SYS/DIA)</th>
                <th class="py-2.5 px-3 font-semibold">Nhịp tim</th>
                <th class="py-2.5 px-3 font-semibold">BMI</th>
                <th class="py-2.5 px-3 font-semibold">Đánh giá y khoa</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
              <?php foreach ($top5Logs as $log): ?>
                <?php
                  $bpParts = explode('/', str_replace([' mmHg', ' '], '', $log['bp']));
                  $sys = intval($bpParts[0] ?? 120);
                  $dia = intval($bpParts[1] ?? 80);
                  $status = $log['status'] ?? '';

                  if ($status === 'red' || $sys < 90 || $dia < 60 || $sys >= 140 || $dia >= 90) {
                      $bpStyle = 'text-rose-700 font-extrabold bg-rose-50 px-2 py-1 rounded border border-rose-200 inline-block';
                      $evalStyle = 'text-rose-700 font-bold bg-rose-50 px-2 py-1 rounded border border-rose-200 inline-block';
                  } elseif ($status === 'yellow' || ($sys >= 120 && $sys <= 139) || ($dia >= 80 && $dia <= 89)) {
                      $bpStyle = 'text-amber-700 font-bold bg-amber-50 px-2 py-1 rounded border border-amber-200 inline-block';
                      $evalStyle = 'text-amber-700 font-bold bg-amber-50 px-2 py-1 rounded border border-amber-200 inline-block';
                  } else {
                      $bpStyle = 'text-emerald-700 font-bold bg-emerald-50 px-2 py-1 rounded border border-emerald-200 inline-block';
                      $evalStyle = 'text-emerald-700 font-medium bg-emerald-50 px-2 py-1 rounded border border-emerald-200 inline-block';
                  }
                ?>
                <tr>
                  <td class="py-3 px-3 font-medium text-slate-900"><?= htmlspecialchars($log['date']) ?></td>
                  <td class="py-3 px-3"><span class="<?= $bpStyle ?>"><?= htmlspecialchars($log['bp']) ?></span></td>
                  <td class="py-3 px-3"><?= htmlspecialchars($log['hr']) ?></td>
                  <td class="py-3 px-3"><?= htmlspecialchars($log['bmi']) ?></td>
                  <td class="py-3 px-3"><span class="<?= $evalStyle ?>"><?= htmlspecialchars($log['assessment']) ?></span></td>
                </tr>
              <?php endforeach; ?>
            </tbody>

            <?php if (!empty($remainingLogs)): ?>
              <tbody id="extra-kiosk-logs" class="hidden divide-y divide-slate-100 text-slate-700">
                <?php foreach ($remainingLogs as $log): ?>
                  <?php
                    $bpParts = explode('/', str_replace([' mmHg', ' '], '', $log['bp']));
                    $sys = intval($bpParts[0] ?? 120);
                    $dia = intval($bpParts[1] ?? 80);
                    $status = $log['status'] ?? '';

                    if ($status === 'red' || $sys < 90 || $dia < 60 || $sys >= 140 || $dia >= 90) {
                        $bpStyle = 'text-rose-700 font-extrabold bg-rose-50 px-2 py-1 rounded border border-rose-200 inline-block';
                        $evalStyle = 'text-rose-700 font-bold bg-rose-50 px-2 py-1 rounded border border-rose-200 inline-block';
                    } elseif ($status === 'yellow' || ($sys >= 120 && $sys <= 139) || ($dia >= 80 && $dia <= 89)) {
                        $bpStyle = 'text-amber-700 font-bold bg-amber-50 px-2 py-1 rounded border border-amber-200 inline-block';
                        $evalStyle = 'text-amber-700 font-bold bg-amber-50 px-2 py-1 rounded border border-amber-200 inline-block';
                    } else {
                        $bpStyle = 'text-emerald-700 font-bold bg-emerald-50 px-2 py-1 rounded border border-emerald-200 inline-block';
                        $evalStyle = 'text-emerald-700 font-medium bg-emerald-50 px-2 py-1 rounded border border-emerald-200 inline-block';
                    }
                  ?>
                  <tr>
                    <td class="py-3 px-3 font-medium text-slate-900"><?= htmlspecialchars($log['date']) ?></td>
                    <td class="py-3 px-3"><span class="<?= $bpStyle ?>"><?= htmlspecialchars($log['bp']) ?></span></td>
                    <td class="py-3 px-3"><?= htmlspecialchars($log['hr']) ?></td>
                    <td class="py-3 px-3"><?= htmlspecialchars($log['bmi']) ?></td>
                    <td class="py-3 px-3"><span class="<?= $evalStyle ?>"><?= htmlspecialchars($log['assessment']) ?></span></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            <?php endif; ?>
          </table>
        </div>



        <?php if (!empty($remainingLogs)): ?>
          <div class="mt-4 text-center border-t border-slate-100 pt-3 no-print">
            <button id="toggle-extra-logs-btn" onclick="document.getElementById('extra-kiosk-logs').classList.toggle('hidden'); this.innerText = this.innerText.includes('Xem thêm') ? 'Thu gọn bớt lịch sử' : 'Xem thêm lịch sử đo (Còn <?= count($remainingLogs) ?> lượt) →';" class="text-xs font-bold text-blue-600 hover:text-blue-700 bg-blue-50 hover:bg-blue-100 px-4 py-2 rounded-xl transition-all">
              Xem thêm lịch sử đo (Còn <?= count($remainingLogs) ?> lượt) →
            </button>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</main>

<script>
  function updateDashboardTabState(activeHash) {
    const tabs = document.querySelectorAll('.dash-tab');
    tabs.forEach(tab => {
      const targetHash = tab.getAttribute('href');
      if (targetHash === activeHash) {
        tab.className = 'dash-tab p-2.5 bg-blue-50 text-blue-600 font-bold rounded-xl transition-all shadow-xs';
      } else {
        tab.className = 'dash-tab p-2.5 text-slate-700 hover:bg-slate-50 font-medium rounded-xl transition-all';
      }
    });
  }

  function updateDashboardTabs() {
    const hash = window.location.hash || '#metrics';
    updateDashboardTabState(hash);
  }

  document.addEventListener('DOMContentLoaded', function() {
    updateDashboardTabs();

    let isManualClicking = false;

    // Smooth tab click scrolling
    document.querySelectorAll('.dash-tab').forEach(tab => {
      tab.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetEl = document.getElementById(targetId);
        if (targetEl) {
          isManualClicking = true;
          history.pushState(null, null, '#' + targetId);
          updateDashboardTabState('#' + targetId);
          const headerOffset = 110;
          const elementPosition = targetEl.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });

          setTimeout(() => { isManualClicking = false; }, 800);
        }
      });
    });

    // Real-time ScrollSpy to light up active sidebar tab while user scrolls
    const sectionIds = ['metrics', 'prescriptions', 'reminders', 'loyalty', 'kiosk-logs'];
    window.addEventListener('scroll', function() {
      if (isManualClicking) return;
      
      let currentSectionId = 'metrics';
      const scrollPosition = window.pageYOffset + 180;

      sectionIds.forEach(id => {
        const section = document.getElementById(id);
        if (section) {
          const top = section.offsetTop;
          const height = section.offsetHeight;
          if (scrollPosition >= top && scrollPosition < top + height) {
            currentSectionId = id;
          }
        }
      });

      if (currentSectionId) {
        updateDashboardTabState('#' + currentSectionId);
      }
    });
  });

  window.addEventListener('hashchange', updateDashboardTabs);
</script>

<?php require __DIR__ . '/../layout/footer.php'; ?>
