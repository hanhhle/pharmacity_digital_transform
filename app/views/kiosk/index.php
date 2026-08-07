<?php require __DIR__ . '/../layout/header.php'; ?>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-6">
    <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account" class="hover:text-blue-600">Tài khoản</a>
    <span>/</span>
    <span class="font-semibold text-slate-800">Trạm Kiosk Sức Khỏe IoT Tại Nhà Thuốc</span>
  </div>

  <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm mb-8">
    
    <!-- Top Header -->
    <div class="flex flex-wrap items-center justify-between border-b border-slate-100 pb-4 mb-6 gap-3">
      <div>
        <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">DX PILLAR #6</span>
        <h1 class="text-xl font-bold text-slate-900 mt-1">Trạm Kiosk Sức Khỏe IoT Tại Nhà Thuốc</h1>
        <p class="text-xs text-slate-500 mt-0.5">Kết nối thiết bị đo sinh hiệu IoT (Huyết áp, Tim mạch, BMI) tự động phân tích & đồng bộ hồ sơ.</p>
      </div>
      <span class="bg-emerald-600 text-white text-[11px] font-bold px-3 py-1 rounded-full">
        IoT Terminal Active (PMC Q1)
      </span>
    </div>

    <!-- MÀN HÌNH XÁC THỰC MÃ THÀNH VIÊN / QR TẠI KIOSK -->
    <?php if ($step === 'connect'): ?>
      <div class="max-w-xl mx-auto bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white rounded-2xl p-6 shadow-xl text-center">
        <h2 class="text-lg font-bold">Xác Thực Mã Thành Viên / Quét Mã QR Tại Trạm Kiosk IoT</h2>
        <p class="text-xs text-blue-200 mt-1 leading-relaxed">
          Quý khách vui lòng Quét mã QR dưới đây hoặc Nhập Mã Thành Viên vào màn hình cảm ứng của máy đo Kiosk tại nhà thuốc.
        </p>

        <!-- QR Code Simulation Box -->
        <div class="my-6 bg-white p-4 rounded-2xl inline-block shadow-md">
          <div class="w-36 h-36 bg-slate-100 border-2 border-dashed border-blue-600 rounded-xl flex flex-col items-center justify-center text-slate-800 p-2 mx-auto">
            <div class="grid grid-cols-4 gap-1 w-24 h-24 bg-slate-900 p-2 rounded">
              <div class="bg-white"></div><div class="bg-slate-900"></div><div class="bg-white"></div><div class="bg-white"></div>
              <div class="bg-slate-900"></div><div class="bg-white"></div><div class="bg-slate-900"></div><div class="bg-slate-900"></div>
              <div class="bg-white"></div><div class="bg-slate-900"></div><div class="bg-white"></div><div class="bg-slate-900"></div>
              <div class="bg-white"></div><div class="bg-white"></div><div class="bg-slate-900"></div><div class="bg-white"></div>
            </div>
            <span class="text-[10px] font-bold text-slate-500 mt-2">Mã QR Khách Hàng</span>
          </div>
          <div class="mt-2 text-slate-900 font-extrabold text-xs">
            Mã Thành Viên: <span class="text-blue-600">PMC-8839201</span>
          </div>
        </div>

        <!-- Small Subtle Simulation Action Button (Defaulting to Normal Reading 118/78) -->
        <div>
          <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=kiosk" method="POST" class="inline-block">
            <input type="hidden" name="action" value="sync_kiosk">
            <input type="hidden" name="sys" value="118">
            <input type="hidden" name="dia" value="78">
            <input type="hidden" name="hr" value="70">
            <input type="hidden" name="weight" value="64.0">
            <button type="submit" class="bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-medium px-3.5 py-1.5 rounded-lg border border-slate-300 transition-all shadow-none">
              Quét QR / Nhập mã thành viên thành công (Giả lập Connect) →
            </button>
          </form>
        </div>
      </div>

    <!-- TRANG HIỂN THỊ KẾT QUẢ KIOSK CHÍNH THỨC -->
    <?php else: ?>

      <!-- Latest Sync Result Card -->
      <?php 
        $latestReading = !empty($newSync) ? $newSync : ($kioskLogs[0] ?? null);
        if ($latestReading):
          $badgeBg = 'bg-emerald-50 border-emerald-500 text-emerald-900';
          $badgeStatusText = 'MỨC 1: BÌNH THƯỜNG / CHUẨN Y KHOA';
          if (($latestReading['status'] ?? '') === 'red') {
              $badgeBg = 'bg-rose-50 border-rose-500 text-rose-900';
              $badgeStatusText = 'MỨC 3: CẢNH BÁO NGUY CƠ Y KHOA';
          } elseif (($latestReading['status'] ?? '') === 'yellow') {
              $badgeBg = 'bg-amber-50 border-amber-500 text-amber-900';
              $badgeStatusText = 'MỨC 2: CHÚ Ý / CẦN THEO DÕI';
          }
      ?>
        <div class="<?= $badgeBg ?> border-l-4 rounded-r-2xl p-5 mb-8 shadow-sm">
          <div class="flex flex-wrap items-center justify-between gap-2 border-b border-current/10 pb-3 mb-3">
            <span class="font-black text-xs px-2.5 py-1 rounded uppercase border border-current">
              <?= $badgeStatusText ?>
            </span>
            <span class="text-xs font-bold">Mốc đo gần nhất: <?= $latestReading['date'] ?></span>
          </div>

          <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-slate-900 my-3">
            <div class="bg-white/80 p-3 rounded-xl border border-current/20">
              <span class="text-[11px] text-slate-500 block font-semibold">Huyết Áp</span>
              <strong class="text-base font-extrabold"><?= $latestReading['bp'] ?></strong>
            </div>

            <div class="bg-white/80 p-3 rounded-xl border border-current/20">
              <span class="text-[11px] text-slate-500 block font-semibold">Nhịp Tim</span>
              <strong class="text-base font-extrabold"><?= $latestReading['hr'] ?></strong>
            </div>

            <div class="bg-white/80 p-3 rounded-xl border border-current/20">
              <span class="text-[11px] text-slate-500 block font-semibold">Cân Nặng</span>
              <strong class="text-base font-extrabold"><?= $latestReading['weight'] ?? '64 kg' ?></strong>
            </div>

            <div class="bg-white/80 p-3 rounded-xl border border-current/20">
              <span class="text-[11px] text-slate-500 block font-semibold">BMI Thể Tạng</span>
              <strong class="text-base font-extrabold"><?= $latestReading['bmi'] ?></strong>
            </div>
          </div>

          <div class="mt-3 text-xs font-semibold leading-relaxed border-t border-current/10 pt-3">
            <strong>Phân tích chẩn đoán AI:</strong> <?= htmlspecialchars($latestReading['assessment']) ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Trend Line SVG Chart & Measurement Logs -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        
        <!-- Dynamic Trend Line SVG Chart -->
        <div>
          <div class="flex items-center justify-between mb-3">
            <h3 class="text-base font-bold text-slate-800">Biểu Đồ Diễn Tiến Huyết Áp (Đo Nhiều Lần/Ngày)</h3>
            <span class="text-xs text-slate-500 font-semibold"><?= count($kioskLogs) ?> Lượt đo gần nhất</span>
          </div>
          
          <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4">
            <svg viewBox="0 0 400 180" class="w-full h-44 overflow-visible">
              <line x1="40" y1="20" x2="380" y2="20" stroke="#CBD5E1" stroke-dasharray="4"/>
              <line x1="40" y1="70" x2="380" y2="70" stroke="#CBD5E1" stroke-dasharray="4"/>
              <line x1="40" y1="120" x2="380" y2="120" stroke="#CBD5E1" stroke-dasharray="4"/>
              
              <text x="5" y="25" fill="#64748B" font-size="10">140 SYS</text>
              <text x="5" y="75" fill="#64748B" font-size="10">120 SYS</text>
              <text x="5" y="125" fill="#64748B" font-size="10">80 DIA</text>

              <?php
                $displayLogs = array_slice($kioskLogs, 0, 5);
                $displayLogs = array_reverse($displayLogs);
                $pointsSys = [];
                $pointsDia = [];
                $total = count($displayLogs);
                $stepX = $total > 1 ? (320 / ($total - 1)) : 160;

                foreach ($displayLogs as $idx => $l) {
                    $x = 40 + ($idx * $stepX);
                    $bpParts = explode('/', str_replace([' mmHg', ' '], '', $l['bp']));
                    $sysVal = intval($bpParts[0] ?? 120);
                    $diaVal = intval($bpParts[1] ?? 80);

                    $ySys = 70 - (($sysVal - 120) * 2.5);
                    $ySys = max(10, min(140, $ySys));

                    $yDia = 120 - (($diaVal - 80) * 1.5);
                    $yDia = max(80, min(160, $yDia));

                    $pointsSys[] = "{$x},{$ySys}";
                    $pointsDia[] = "{$x},{$yDia}";
                }

                $sysLine = implode(' ', $pointsSys);
                $diaLine = implode(' ', $pointsDia);
              ?>

              <?php if (!empty($sysLine)): ?>
                <polyline fill="none" stroke="#005EC4" stroke-width="3" points="<?= $sysLine ?>" />
              <?php endif; ?>

              <?php if (!empty($diaLine)): ?>
                <polyline fill="none" stroke="#059669" stroke-width="2" stroke-dasharray="3" points="<?= $diaLine ?>" />
              <?php endif; ?>

              <?php foreach ($displayLogs as $idx => $l): 
                  $x = 40 + ($idx * $stepX);
                  $bpParts = explode('/', str_replace([' mmHg', ' '], '', $l['bp']));
                  $sysVal = intval($bpParts[0] ?? 120);
                  $ySys = max(10, min(140, 70 - (($sysVal - 120) * 2.5)));
                  $timeLabel = date('d/m H:i', strtotime(str_replace('/', '-', $l['date'])));
              ?>
                <circle cx="<?= $x ?>" cy="<?= $ySys ?>" r="5" fill="#005EC4"/>
                <text x="<?= $x - 20 ?>" y="170" fill="#64748B" font-size="9" font-weight="bold"><?= htmlspecialchars($timeLabel) ?></text>
                <text x="<?= $x - 15 ?>" y="<?= $ySys - 8 ?>" fill="#005EC4" font-size="9" font-weight="bold"><?= $l['bp'] ?></text>
              <?php endforeach; ?>
            </svg>

            <div class="mt-4 pt-3 border-t border-slate-200 text-xs text-slate-600 flex justify-between">
              <span class="flex items-center gap-1 font-semibold text-blue-600"><span class="w-3 h-1 bg-blue-600 inline-block"></span> Huyết Áp Tâm Thu (SYS)</span>
              <span class="flex items-center gap-1 font-semibold text-emerald-600"><span class="w-3 h-1 bg-emerald-600 inline-block"></span> Huyết Áp Tâm Trương (DIA)</span>
            </div>
          </div>
        </div>

        <!-- Medical Classification Standard Reference -->
        <div>
          <h3 class="text-base font-bold text-slate-800 mb-3">Tiêu Chuẩn Phân Cụm Y Khoa</h3>
          <div class="space-y-2 text-xs">
            <div class="bg-emerald-50 border border-emerald-200 p-3 rounded-xl">
              <h4 class="font-bold text-emerald-900">Mức 1: Mức Chuẩn Y Khoa (Good/Normal)</h4>
              <p class="text-emerald-700 mt-0.5">Huyết áp SYS &lt; 120 &amp; DIA &lt; 80 mmHg. BMI 18.5 - 22.9. Nhịp tim 60 - 100 bpm.</p>
            </div>

            <div class="bg-amber-50 border border-amber-200 p-3 rounded-xl">
              <h4 class="font-bold text-amber-900">Mức 2: Chú Ý Theo Dõi (Warning/Borderline)</h4>
              <p class="text-amber-700 mt-0.5">Huyết áp SYS 120-139 hoặc DIA 80-89. Thể tạng gầy (BMI &lt; 18.5) hoặc thừa cân (BMI 23-24.9).</p>
            </div>

            <div class="bg-rose-50 border border-rose-200 p-3 rounded-xl">
              <h4 class="font-bold text-rose-900">Mức 3: Cảnh Báo Nguy Cơ Y Khoa (Danger/Critical)</h4>
              <p class="text-rose-700 mt-0.5">Huyết áp thấp (SYS &lt; 90) hoặc Cao (SYS &ge; 140). Béo phì (BMI &ge; 25.0). Nhịp tim &lt; 60 hoặc &gt; 100.</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Measurement Logs Table -->
      <div>
        <h3 class="text-base font-bold text-slate-900 mb-3">Lịch Sử Chi Tiết Các Lượt Đo Sinh Hiệu</h3>
        <div class="overflow-x-auto border border-slate-200 rounded-xl">
          <table class="w-full text-left text-xs md:text-sm whitespace-nowrap">
            <thead>
              <tr class="bg-slate-50 text-slate-500 border-b border-slate-200">
                <th class="py-2.5 px-3 font-semibold">Mốc thời gian đo</th>
                <th class="py-2.5 px-3 font-semibold">Huyết áp (SYS/DIA)</th>
                <th class="py-2.5 px-3 font-semibold">Nhịp tim</th>
                <th class="py-2.5 px-3 font-semibold">BMI</th>
                <th class="py-2.5 px-3 font-semibold">Đánh giá AI & Khuyến nghị</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
              <?php foreach ($kioskLogs as $log): ?>
                <?php 
                  $rowClass = 'text-emerald-700';
                  if (($log['status'] ?? '') === 'red') {
                      $rowClass = 'text-rose-700 font-bold bg-rose-50/50';
                  } elseif (($log['status'] ?? '') === 'yellow') {
                      $rowClass = 'text-amber-700 font-bold bg-amber-50/50';
                  }
                ?>
                <tr class="<?= $rowClass ?>">
                  <td class="py-3 px-3 font-medium text-slate-900"><?= htmlspecialchars($log['date']) ?></td>
                  <td class="py-3 px-3 font-bold"><?= htmlspecialchars($log['bp']) ?></td>
                  <td class="py-3 px-3"><?= htmlspecialchars($log['hr']) ?></td>
                  <td class="py-3 px-3"><?= htmlspecialchars($log['bmi']) ?></td>
                  <td class="py-3 px-3"><?= htmlspecialchars($log['assessment']) ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Developer Simulator Panel (Small, Unobtrusive) -->
      <div class="mt-10 pt-4 border-t border-slate-200">
        <details class="text-xs text-slate-500">
          <summary class="cursor-pointer font-semibold hover:text-slate-800 inline-block bg-slate-100 hover:bg-slate-200 px-3 py-1.5 rounded-lg border border-slate-300">
            Thử nghiệm thay đổi tình huống đo (Developer Simulator)
          </summary>
          <div class="mt-3 p-4 bg-slate-50 border border-slate-200 rounded-xl">
            <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=kiosk" method="POST" class="grid grid-cols-2 md:grid-cols-4 gap-3">
              <input type="hidden" name="action" value="sync_kiosk">
              <div>
                <label class="block font-bold">SYS (Tâm thu)</label>
                <input type="number" name="sys" value="118" class="w-full p-1.5 border rounded font-bold">
              </div>
              <div>
                <label class="block font-bold">DIA (Tâm trương)</label>
                <input type="number" name="dia" value="78" class="w-full p-1.5 border rounded font-bold">
              </div>
              <div>
                <label class="block font-bold">HR (Nhịp tim)</label>
                <input type="number" name="hr" value="70" class="w-full p-1.5 border rounded font-bold">
              </div>
              <div>
                <label class="block font-bold">Cân nặng (KG)</label>
                <input type="number" step="0.1" name="weight" value="64.0" class="w-full p-1.5 border rounded font-bold">
              </div>
              <div class="col-span-2 md:col-span-4 text-right">
                <button type="submit" class="bg-slate-700 hover:bg-slate-800 text-white px-4 py-1.5 rounded font-bold text-xs">
                  Thực Hiện Giả Lập Đo Thay Đổi Tình Huống
                </button>
              </div>
            </form>
          </div>
        </details>
      </div>

    <?php endif; ?>

  </div>
</main>

<?php require __DIR__ . '/../layout/footer.php'; ?>
