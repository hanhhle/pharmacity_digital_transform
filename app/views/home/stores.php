<?php 
$pageTitle = 'Hệ Thống Nhà Thuốc & Trạm Kiosk IoT Pharmacity';
require __DIR__ . '/../layout/header.php'; 

function isStoreOpen($hoursStr) {
    if (strpos($hoursStr, '24h') !== false) {
        return true;
    }
    if (preg_match('/(\d{2})h(\d{2})\s*-\s*(\d{2})h(\d{2})/', $hoursStr, $m)) {
        $openMins = intval($m[1]) * 60 + intval($m[2]);
        $closeMins = intval($m[3]) * 60 + intval($m[4]);
        
        $nowMins = intval(date('H')) * 60 + intval(date('i'));
        
        if ($closeMins >= $openMins) {
            return ($nowMins >= $openMins && $nowMins <= $closeMins);
        } else {
            return ($nowMins >= $openMins || $nowMins <= $closeMins);
        }
    }
    return true;
}

$storesList = [
    [
        'id' => 'store-DQH',
        'name' => 'Nhà Thuốc & Trạm Kiosk IoT Dương Quảng Hàm',
        'address' => '392A Dương Quảng Hàm, Phường 05, Quận Gò Vấp, Thành phố Hồ Chí Minh',
        'hours' => 'Hoạt động 24h',
        'has_kiosk' => true,
        'maps_url' => 'https://www.google.com/maps/dir/?api=1&destination=Nhà%20thuốc%20Pharmacity,%20392A%20Dương%20Quảng%20Hàm,%20Phường%2005,%20Quận%20Gò%20Vấp,%20Thành%20phố%20Hồ%20Chí%20Minh',
        'zalo_url' => 'https://zalo.me/0842366805'
    ],
    [
        'id' => 'store-NHC',
        'name' => 'Nhà Thuốc & Trạm Kiosk IoT Nguyễn Hữu Cầu (PMC Q1)',
        'address' => '77 Nguyễn Hữu Cầu, Phường Tân Định, Quận 1, Thành phố Hồ Chí Minh',
        'hours' => '06h00 - 23h30',
        'has_kiosk' => true,
        'maps_url' => 'https://www.google.com/maps/dir/?api=1&destination=Nhà%20thuốc%20Pharmacity,%2077%20Nguyễn%20Hữu%20Cầu,%20Phường%20Tân%20Định,%20Quận%201,%20Thành%20phố%20Hồ%20Chí%20Minh',
        'zalo_url' => 'https://zalo.me/0842365853'
    ],
    [
        'id' => 'store-PXL',
        'name' => 'Nhà Thuốc Pharmacity Phan Xích Long',
        'address' => '280 Phan Xích Long, Phường 07, Quận Phú Nhuận, Thành phố Hồ Chí Minh',
        'hours' => '06h00 - 23h30',
        'has_kiosk' => true,
        'maps_url' => 'https://www.google.com/maps/dir/?api=1&destination=Nhà%20thuốc%20Pharmacity,%20280%20Phan%20Xích%20Long,%20Phường%2007,%20Quận%20Phú%20Nhuận,%20Thành%20phố%20Hồ%20Chí%20Minh',
        'zalo_url' => 'https://zalo.me/0842365957'
    ],
    [
        'id' => 'store-TCV',
        'name' => 'Nhà Thuốc Pharmacity Hai Bà Trưng',
        'address' => '136 Hai Bà Trưng, Phường Đa Kao, Quận 1, Thành phố Hồ Chí Minh',
        'hours' => '06h00 - 23h30',
        'has_kiosk' => true,
        'maps_url' => 'https://www.google.com/maps/dir/?api=1&destination=Nhà%20thuốc%20Pharmacity,%20136%20Hai%20Bà%20Trưng,%20Phường%20Đa%20Kao,%20Quận%201,%20Thành%20phố%20Hồ%20Chí%20Minh',
        'zalo_url' => 'https://zalo.me/0842366791'
    ],
    [
        'id' => 'store-TDN',
        'name' => 'Nhà Thuốc Pharmacity Thảo Điền',
        'address' => 'Số 10 Thảo Điền, Phường Thảo Điền, Quận 2, Thành phố Hồ Chí Minh',
        'hours' => '06h00 - 23h30',
        'has_kiosk' => false,
        'maps_url' => 'https://www.google.com/maps/dir/?api=1&destination=Nhà%20thuốc%20Pharmacity,%20Số%2010%20Thảo%20Điền,%20Phường%20Thảo%20Điền,%20Quận%202,%20Thành%20phố%20Hồ%20Chí%20Minh',
        'zalo_url' => 'https://zalo.me/00842366295'
    ],
    [
        'id' => 'store-HLC',
        'name' => 'Nhà Thuốc Pharmacity Hồng Lạc',
        'address' => '146 Hồng Lạc, Phường 11, Quận Tân Bình, Thành phố Hồ Chí Minh',
        'hours' => '06h00 - 22h00',
        'has_kiosk' => false,
        'maps_url' => 'https://www.google.com/maps/dir/?api=1&destination=Nhà%20thuốc%20Pharmacity,%20146%20Hồng%20Lạc,%20Phường%2011,%20Quận%20Tân%20Bình,%20Thành%20phố%20Hồ%20Chí%20Minh',
        'zalo_url' => 'https://zalo.me/0901107542'
    ]
];

foreach ($storesList as &$st) {
    $st['is_open'] = isStoreOpen($st['hours']);
}
unset($st);
?>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-4 no-print">
    <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <span class="font-semibold text-slate-800">Hệ thống nhà thuốc</span>
  </div>

  <!-- Top Banner -->
  <div class="w-full h-40 md:h-52 rounded-2xl overflow-hidden shadow-sm mb-6 bg-blue-900 relative">
    <img class="h-full w-full object-cover opacity-90" src="https://prod-cdn.pharmacity.io/e-com/images/banners/20250428100240-0-Banner592x200px.png?versionId=wuUlYnzNmfpg0yROBbRaPz5yuLBcBm7Y" alt="Promotion Store Banner">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 via-blue-900/40 to-transparent p-6 flex flex-col justify-center text-white">
      <span class="bg-blue-600/80 text-white text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-md w-fit mb-2">Mạng Lưới Toàn Quốc</span>
      <h1 class="text-xl md:text-3xl font-extrabold tracking-tight">Hệ Thống Nhà Thuốc & Trạm Kiosk IoT Pharmacity</h1>
      <p class="text-xs md:text-sm text-blue-100 mt-1 max-w-xl">Tìm nhà thuốc gần nhất, tích hợp Trạm Kiosk Sức Khỏe IoT đo sinh hiệu miễn phí & hỗ trợ dược sĩ tư vấn 24/7.</p>
    </div>
  </div>

  <!-- Search & Region Filters Section -->
  <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm mb-6">
    <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-3">
      <!-- Search Input -->
      <div class="relative md:col-span-2">
        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
          <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
          </svg>
        </div>
        <input type="text" id="store-search-input" onkeyup="filterStores()" placeholder="Nhập khu vực, tên đường hoặc phường/xã bạn muốn tìm..." class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs md:text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all">
      </div>

      <!-- City / Province Filter -->
      <div>
        <select id="city-filter" onchange="filterStores()" class="w-full py-3 px-3 bg-slate-50 border border-slate-200 rounded-xl text-xs md:text-sm focus:outline-none focus:border-blue-600 font-semibold text-slate-700">
          <option value="">Tất cả Thành phố / Tỉnh</option>
          <option value="Hồ Chí Minh" selected>TP. Hồ Chí Minh (1.000+ Nhà thuốc)</option>
          <option value="Hà Nội">TP. Hà Nội</option>
          <option value="Đà Nẵng">TP. Đà Nẵng</option>
          <option value="Cần Thơ">TP. Cần Thơ</option>
        </select>
      </div>

      <!-- District Filter -->
      <div>
        <select id="district-filter" onchange="filterStores()" class="w-full py-3 px-3 bg-slate-50 border border-slate-200 rounded-xl text-xs md:text-sm focus:outline-none focus:border-blue-600 font-semibold text-slate-700">
          <option value="">Tất cả Quận / Huyện</option>
          <option value="Gò Vấp">Quận Gò Vấp</option>
          <option value="Quận 1">Quận 1</option>
          <option value="Phú Nhuận">Quận Phú Nhuận</option>
          <option value="Tân Bình">Quận Tân Bình</option>
          <option value="Quận 2">Quận 2</option>
        </select>
      </div>
    </div>

    <div class="flex flex-wrap items-center justify-between gap-3 mt-4 pt-3 border-t border-slate-100 text-xs">
      <button onclick="getUserLocation()" class="flex items-center gap-1.5 text-blue-600 hover:text-blue-700 font-bold bg-blue-50 hover:bg-blue-100 px-3.5 py-2 rounded-xl transition-all">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
        </svg>
        <span>Định vị vị trí hiện tại của tôi</span>
      </button>

      <div class="flex items-center gap-4 text-slate-600">
        <span class="flex items-center gap-1.5 font-bold text-slate-900">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
          Nhà thuốc gần bạn: <strong id="store-count" class="text-blue-600 text-sm font-extrabold ml-1"><?= count($storesList) ?></strong>
        </span>
      </div>
    </div>
  </div>

  <!-- Main 2-Column Section: Store Cards List (Left) + Interactive Map (Right) -->
  <div class="grid grid-cols-1 lg:grid-cols-[450px,1fr] gap-6 items-start">
    
    <!-- Stores List Cards Container -->
    <div id="stores-container" class="space-y-4 max-h-[620px] overflow-y-auto pr-1 scrollbar-thin">
      <?php foreach ($storesList as $st): ?>
        <div data-store-card="<?= htmlspecialchars($st['name']) ?> <?= htmlspecialchars($st['address']) ?>" class="store-item bg-white rounded-2xl p-4 border border-slate-200 shadow-2xs hover:border-blue-300 hover:shadow-md transition-all space-y-3 relative">
          
          <div class="flex items-start justify-between gap-2">
            <div>
              <h3 class="font-bold text-slate-900 text-sm md:text-base leading-snug"><?= htmlspecialchars($st['name']) ?></h3>
              <?php if ($st['has_kiosk']): ?>
                <span class="inline-flex items-center gap-1 bg-blue-100 text-blue-800 text-[10px] font-extrabold px-2 py-0.5 rounded-md mt-1 border border-blue-200">
                  🏥 Có Trạm Kiosk IoT Sức Khỏe
                </span>
              <?php endif; ?>
            </div>
            
            <span class="shrink-0 text-[10px] font-bold px-2.5 py-1 rounded-full border <?= $st['is_open'] ? 'bg-emerald-100 text-emerald-800 border-emerald-300' : 'bg-slate-100 text-slate-600 border-slate-300' ?>">
              ● <?= $st['is_open'] ? 'Đang mở cửa' : 'Đóng cửa' ?>
            </span>
          </div>

          <!-- Address -->
          <div class="flex items-start gap-2 text-xs text-slate-600">
            <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-slate-400 shrink-0 mt-0.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>
            <p class="leading-relaxed"><?= htmlspecialchars($st['address']) ?></p>
          </div>

          <!-- Operating Hours -->
          <div class="flex items-center gap-2 text-xs text-slate-500">
            <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-slate-400 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Giờ mở cửa: <strong class="text-slate-800 font-semibold"><?= htmlspecialchars($st['hours']) ?></strong></span>
          </div>

          <!-- Action Buttons Row (Equally Spaced 3-Column Grid) -->
          <div class="grid grid-cols-3 gap-2 border-t border-slate-100 pt-3 text-[11px] md:text-xs font-semibold no-print">
            <a href="<?= htmlspecialchars($st['maps_url']) ?>" target="_blank" class="flex items-center justify-center gap-1 font-bold text-blue-600 hover:text-blue-700 bg-blue-50 hover:bg-blue-100 px-2 py-2 rounded-xl transition-all whitespace-nowrap">
              <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.5-12.75l-4.135 1.654a1.5 1.5 0 01-1.112 0L5.625 3.375C4.729 3.016 3.75 3.678 3.75 4.65v13.064c0 .66.386 1.258.985 1.5l4.5 1.8a1.5 1.5 0 001.03 0l4.5-1.8a1.5 1.5 0 011.03 0l3.965 1.586c.896.358 1.875-.304 1.875-1.276V6.936c0-.66-.386-1.258-.985-1.5l-4.5-1.8a1.5 1.5 0 00-1.03 0z" />
              </svg>
              <span class="whitespace-nowrap">Xem chỉ đường</span>
            </a>

            <a href="<?= htmlspecialchars($st['zalo_url']) ?>" target="_blank" class="flex items-center justify-center gap-1 font-bold text-slate-700 hover:text-slate-900 bg-slate-100 hover:bg-slate-200 px-2 py-2 rounded-xl transition-all whitespace-nowrap">
              <img class="w-3.5 h-3.5 shrink-0" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240809162128-0-zalo.svg" alt="Zalo">
              <span class="whitespace-nowrap">Liên hệ Zalo</span>
            </a>

            <?php if ($st['has_kiosk']): ?>
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=kiosk&step=connect" class="flex items-center justify-center gap-1 bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-2 py-2 rounded-xl transition-all shadow-2xs whitespace-nowrap">
                <span class="whitespace-nowrap">Kiosk Đo IoT →</span>
              </a>
            <?php else: ?>
              <span class="flex items-center justify-center gap-1 bg-slate-50 text-slate-400 font-medium py-2 rounded-xl text-[10px] border border-slate-100 whitespace-nowrap">
                Chưa có Kiosk
              </span>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Right Column: Interactive Map Frame -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden h-[620px] relative flex flex-col">
      <div class="bg-slate-900 text-white p-3.5 px-4 flex items-center justify-between text-xs">
        <div class="flex items-center gap-2">
          <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
          <span class="font-bold">Bản Đồ Trực Tuyến & Trạm Kiosk IoT Sức Khỏe</span>
        </div>
        <span class="text-slate-400">TP. Hồ Chí Minh</span>
      </div>

      <!-- Map Embed Iframe -->
      <div class="w-full flex-1 relative bg-slate-100">
        <iframe title="Pharmacity Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.288591871234!2d106.68725831533426!3d10.789178992312643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528d258169123%3A0x6b876402431a47b1!2sPharmacity!5e0!3m2!1svi!2s!4v1620000000000!5m2!1svi!2s" class="w-full h-full border-0" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</main>

<script>
  function filterStores() {
    const input = document.getElementById('store-search-input').value.toLowerCase();
    const city = document.getElementById('city-filter').value.toLowerCase();
    const district = document.getElementById('district-filter').value.toLowerCase();
    
    const storeCards = document.querySelectorAll('.store-item');
    let visibleCount = 0;

    storeCards.forEach(card => {
      const text = card.getAttribute('data-store-card').toLowerCase();
      const matchesSearch = text.includes(input);
      const matchesCity = !city || text.includes(city);
      const matchesDistrict = !district || text.includes(district);

      if (matchesSearch && matchesCity && matchesDistrict) {
        card.style.display = 'block';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    document.getElementById('store-count').innerText = visibleCount;
  }

  function getUserLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          alert('Đã định vị thành công vị trí của bạn (' + position.coords.latitude.toFixed(4) + ', ' + position.coords.longitude.toFixed(4) + ')! Đang hiển thị nhà thuốc & Trạm Kiosk IoT gần nhất.');
          document.getElementById('district-filter').value = 'Gò Vấp';
          filterStores();
        },
        () => {
          alert('Vui lòng cho phép quyền truy cập vị trí trên trình duyệt để tìm nhà thuốc tự động.');
        }
      );
    } else {
      alert('Trình duyệt của bạn không hỗ trợ Geolocation.');
    }
  }
</script>

<?php require __DIR__ . '/../layout/footer.php'; ?>
