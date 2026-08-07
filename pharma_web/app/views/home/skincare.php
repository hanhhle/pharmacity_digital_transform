<?php 
$pageTitle = 'Chăm Sóc Da & Dược Mỹ Phẩm Chính Hãng | Pharmacity';
require __DIR__ . '/../layout/header.php'; 

// Sample skincare categories & data
$skinTypes = [
    ['name' => 'Da dầu', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071928-0-dadau.png?versionId=zObMfAf_eQOOfB9U7MCFHqFUum56ynrg'],
    ['name' => 'Da Khô', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071959-0-dakho.png?versionId=xEPKNg7ApS2h4h7orqwMWpxYhUBuSazZ'],
    ['name' => 'Da hỗn hợp', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723072018-0-dahh.png?versionId=fHU1jil3ZlBZ0CQy6Vv0Fl4tvRV.fmFG'],
    ['name' => 'Da nhạy cảm', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723072033-0-danhaycam.png?versionId=zg.GLHJ.K.P0SIAF2LyDmLpGIWuS_N.d'],
    ['name' => 'Da thường', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723072047-0-dathuong.png?versionId=T1po1jV3xkOBWdVgwm4D4cjZF.HrvErh']
];

$skinConditions = [
    ['name' => 'Mụn & vết thâm', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071444-0-mun.png?versionId=TuTlNPm1RPuB9HOR3uEXid_2NYaJaAzg'],
    ['name' => 'Thiếu độ ẩm', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071537-0-thieuam.png?versionId=D.XStRH5BnuUsdVMEIwj4f3r1qLY8wVP'],
    ['name' => 'Thừa dầu', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071557-0-thuadau.png?versionId=vteIZ_OYA6nBhMsghA0fGEjZ3PV35aPV'],
    ['name' => 'Dễ kích ứng', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071624-0-kichung.png?versionId=nWhfPmR3yfoeSB_gqjaV_VLxdBgfFzLr'],
    ['name' => 'Da không đều màu', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071649-0-khongdeumau.png?versionId=NiWvCXk0G8PABk5zWPfoXLkzZW45C8Sk'],
    ['name' => 'Nếp nhăn & lão hoá', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071710-0-laohoa.png?versionId=10MlGNiep3UqMPLusfyCmw808o0up_jW'],
    ['name' => 'Đốm nâu & thâm nám', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071727-0-domnau.png?versionId=9Le3Dz8Xlj8x7q8O74qHt0K8eYPUDWIK'],
    ['name' => 'Tổn thương do nắng', 'img' => 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071750-0-tonthuong.png?versionId=nN8O8uQqb1rCSB.r1BiKCGQjmmGDOC5O']
];

$skincareProducts = [
    [
        'id' => 'P00748',
        'name' => 'Gel rửa mặt ACNES Oil Control Cleanser giúp kiểm soát nhờn (Tuýp 100g)',
        'price' => '77.000',
        'old_price' => '',
        'discount' => '',
        'img' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20250415090630-0-P00748.jpg?versionId=J6I4RQ4WF0DwJGEojBd1rhvXCgKO57xu'
    ],
    [
        'id' => 'P03662',
        'name' => 'Mặt nạ Dermal Red Ginseng Collagen Essence Mask (23g)',
        'price' => '15.000',
        'old_price' => '',
        'discount' => '',
        'img' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20250415090508-0-P03662.jpg?versionId=1v4oEVEroKqVOamiQ6R45WsqzoSs6ZNd'
    ],
    [
        'id' => 'P01432',
        'name' => 'Kem rửa mặt Mentholatum ACNES Vitamin Cleanser (100g)',
        'price' => '70.650',
        'old_price' => '78.500',
        'discount' => 'Giảm 10%',
        'img' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260417084149-0-P01432_1.jpg?versionId=JB8bFSVhkBupiSDlkiRtlKuuSzpQkYPP'
    ],
    [
        'id' => 'P01450',
        'name' => 'Kem Rửa Mặt HADA LABO Labo Advanced Nourish Hyaluronic Acid (80g)',
        'price' => '78.200',
        'old_price' => '92.000',
        'discount' => 'Giảm 15%',
        'img' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20250415090619-0-P01450.jpg?versionId=ToBjekT2A6ZIFa257Vdvj1P3kYkAx97b'
    ],
    [
        'id' => 'P10835',
        'name' => "Nước Tẩy Trang L'OREAL Micellar Water 3-in-1 For Sensitive Skin (400ml)",
        'price' => '289.000',
        'old_price' => '',
        'discount' => '',
        'img' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20250731092229-0-P10835.jpg?versionId=1n7M6nNTpwnCQrmu.BuLmKfrkYqtnmxK'
    ],
    [
        'id' => 'P10578',
        'name' => 'Gel Chống Nắng ANESSA Perfect UV Dưỡng Da Ẩm Mịn SPF50+/PA++++ (90g)',
        'price' => '423.750',
        'old_price' => '565.000',
        'discount' => 'Giảm 25%',
        'img' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260604033100-0-20260508082320-0-P30660_1.jpg?versionId=R.C5CCWhlG.cB0FbZ6TXCkLGTG3hry4C'
    ],
    [
        'id' => 'P07927',
        'name' => 'Kem phục hồi da và hỗ trợ ngăn ngừa sẹo Bioderma Cicabio Crème+ (40ml)',
        'price' => '395.000',
        'old_price' => '',
        'discount' => '',
        'img' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20260804023943-0-P07927.png?versionId=G1Ki8vDnyBh_.gRlgoEW7pTSKVNbqCvV'
    ],
    [
        'id' => 'P09483',
        'name' => 'Sữa Rửa Mặt SENKA Perfect Whip Facial Foam Wash Tạo Bọt Tơ Tằm (120g)',
        'price' => '117.000',
        'old_price' => '',
        'discount' => '',
        'img' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20250415090450-0-P09483.jpg?versionId=1td0LM4UYzaD3XnjEkKOyuXtfJ3EXNYe'
    ]
];
?>

<main class="bg-white min-h-screen pb-12">
  <!-- Breadcrumb -->
  <div class="bg-slate-100 py-2.5 mb-6">
    <div class="container mx-auto px-4 md:max-w-[1384px] flex items-center gap-2 text-xs text-slate-500">
      <a href="/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
      <span>/</span>
      <a href="/index.php?route=category&name=Goc+lam+dep" class="hover:text-blue-600">Góc làm đẹp</a>
      <span>/</span>
      <span class="font-bold text-slate-800">Chăm sóc da & Dược Mỹ Phẩm</span>
    </div>
  </div>

  <div class="container mx-auto px-4 md:max-w-[1384px] space-y-8">
    
    <!-- Top Hero Banner Carousel -->
    <div class="w-full h-[180px] md:h-[240px] rounded-2xl overflow-hidden shadow-sm relative bg-rose-900">
      <img class="w-full h-full object-cover" src="https://production-cdn.pharmacity.io/digital/1590x0/plain/e-com/images/banners/20250805101744-0-1200x200.png?versionId=PVQpJRqKDgcWogNO6uQwGgLxNnYFtA7g" alt="Beauty Skincare Banner">
      <div class="absolute inset-0 bg-gradient-to-r from-rose-950/70 via-rose-900/30 to-transparent p-6 md:p-10 flex flex-col justify-center text-white">
        <span class="bg-rose-500 text-white text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-md w-fit mb-2">Chính Hãng 100%</span>
        <h1 class="text-2xl md:text-4xl font-extrabold tracking-tight">Chăm Da Chuẩn - Dược Mỹ Phẩm Nhập Khẩu</h1>
        <p class="text-xs md:text-sm text-rose-100 mt-2 max-w-lg">Giải pháp chăm sóc làn da khoa học từ thương hiệu uy tín thế giới (Paula's Choice, Bioderma, Anessa, Senka...).</p>
      </div>
    </div>

    <!-- Section 1: Loại Da -->
    <section>
      <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
        <span>Phân loại theo Loại Da</span>
      </h2>
      <div class="flex gap-4 overflow-x-auto pb-2 scrollbar-hide">
        <?php foreach ($skinTypes as $st): ?>
          <a href="/index.php?route=category&name=<?= urlencode($st['name']) ?>" class="group flex flex-col items-center gap-2 min-w-[140px] md:min-w-[200px] shrink-0 bg-slate-50 hover:bg-rose-50 p-3 rounded-2xl border border-slate-200 hover:border-rose-300 transition-all shadow-2xs">
            <div class="h-36 md:h-48 w-full rounded-xl overflow-hidden bg-white">
              <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="<?= $st['img'] ?>" alt="<?= htmlspecialchars($st['name']) ?>">
            </div>
            <span class="font-bold text-sm text-slate-800 group-hover:text-rose-600"><?= htmlspecialchars($st['name']) ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Section 2: Tình Trạng Da -->
    <section>
      <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
        <span>Tình Trạng Da Cần Điều Trị</span>
      </h2>
      <div class="grid grid-cols-4 md:grid-cols-8 gap-3">
        <?php foreach ($skinConditions as $sc): ?>
          <a href="/index.php?route=category&name=<?= urlencode($sc['name']) ?>" class="group flex flex-col items-center gap-2 text-center p-2 rounded-2xl hover:bg-rose-50 transition-all">
            <img class="w-16 h-16 md:w-20 md:h-20 rounded-full object-cover border-2 border-slate-100 group-hover:border-rose-400 group-hover:scale-105 transition-all shadow-2xs" src="<?= $sc['img'] ?>" alt="<?= htmlspecialchars($sc['name']) ?>">
            <span class="text-xs font-semibold text-slate-700 group-hover:text-rose-600 line-clamp-2"><?= htmlspecialchars($sc['name']) ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Section 3: Brand Banner Wall -->
    <section class="bg-rose-50/50 p-5 rounded-3xl border border-rose-100">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 mb-3">Thương Hiệu Dược Mỹ Phẩm Nổi Bật</h2>
      <div class="flex items-center gap-3 overflow-x-auto pb-1 scrollbar-hide">
        <a href="/index.php?route=category&name=Paulas+Choice" class="bg-white px-5 py-2.5 rounded-xl border border-slate-200 font-extrabold text-xs text-slate-800 hover:border-rose-400 hover:text-rose-600 whitespace-nowrap shadow-2xs">Paula's Choice</a>
        <a href="/index.php?route=category&name=Cetaphil" class="bg-white px-5 py-2.5 rounded-xl border border-slate-200 font-extrabold text-xs text-slate-800 hover:border-rose-400 hover:text-rose-600 whitespace-nowrap shadow-2xs">Cetaphil</a>
        <a href="/index.php?route=category&name=Bioderma" class="bg-white px-5 py-2.5 rounded-xl border border-slate-200 font-extrabold text-xs text-slate-800 hover:border-rose-400 hover:text-rose-600 whitespace-nowrap shadow-2xs">Bioderma</a>
        <a href="/index.php?route=category&name=Anessa" class="bg-white px-5 py-2.5 rounded-xl border border-slate-200 font-extrabold text-xs text-slate-800 hover:border-rose-400 hover:text-rose-600 whitespace-nowrap shadow-2xs">Anessa</a>
        <a href="/index.php?route=category&name=La+Roche+Posay" class="bg-white px-5 py-2.5 rounded-xl border border-slate-200 font-extrabold text-xs text-slate-800 hover:border-rose-400 hover:text-rose-600 whitespace-nowrap shadow-2xs">La Roche-Posay</a>
        <a href="/index.php?route=category&name=Senka" class="bg-white px-5 py-2.5 rounded-xl border border-slate-200 font-extrabold text-xs text-slate-800 hover:border-rose-400 hover:text-rose-600 whitespace-nowrap shadow-2xs">Senka</a>
        <a href="/index.php?route=category&name=Cocoon" class="bg-white px-5 py-2.5 rounded-xl border border-slate-200 font-extrabold text-xs text-slate-800 hover:border-rose-400 hover:text-rose-600 whitespace-nowrap shadow-2xs">Cocoon</a>
      </div>
    </section>

    <!-- Main Section: Filter Sidebar (Left) + Skincare Product List (Right) -->
    <div class="grid grid-cols-1 md:grid-cols-[260px,1fr] gap-6 items-start">
      
      <!-- Filter Sidebar Container -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-6 sticky top-24">
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
          <h3 class="font-bold text-slate-900 text-base">Bộ Lọc Sản Phẩm</h3>
          <button onclick="resetFilters()" class="text-xs text-rose-600 font-bold hover:underline">Thiết lập lại</button>
        </div>

        <!-- Filter 1: Price Range -->
        <div class="space-y-2">
          <label class="font-bold text-xs uppercase text-slate-700 tracking-wider">Khoảng Giá</label>
          <div class="space-y-1.5 text-xs text-slate-600">
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="radio" name="price" class="text-rose-600 focus:ring-rose-500">
              <span>Dưới 100.000 ₫</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="radio" name="price" class="text-rose-600 focus:ring-rose-500">
              <span>100.000 ₫ - 300.000 ₫</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="radio" name="price" class="text-rose-600 focus:ring-rose-500">
              <span>300.000 ₫ - 500.000 ₫</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="radio" name="price" class="text-rose-600 focus:ring-rose-500">
              <span>Trên 500.000 ₫</span>
            </label>
          </div>
        </div>

        <!-- Filter 2: Texture -->
        <div class="space-y-2 border-t border-slate-100 pt-4">
          <label class="font-bold text-xs uppercase text-slate-700 tracking-wider">Kết Cấu</label>
          <div class="space-y-1.5 text-xs text-slate-600">
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="checkbox" class="rounded text-rose-600 focus:ring-rose-500">
              <span>Serum / Tinh chất</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="checkbox" class="rounded text-rose-600 focus:ring-rose-500">
              <span>Dạng Gel rửa mặt</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="checkbox" class="rounded text-rose-600 focus:ring-rose-500">
              <span>Dạng Kem dưỡng</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="checkbox" class="rounded text-rose-600 focus:ring-rose-500">
              <span>Mặt nạ dưỡng da</span>
            </label>
          </div>
        </div>

        <!-- Filter 3: Main Benefit -->
        <div class="space-y-2 border-t border-slate-100 pt-4">
          <label class="font-bold text-xs uppercase text-slate-700 tracking-wider">Công Dụng Chính</label>
          <div class="space-y-1.5 text-xs text-slate-600">
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="checkbox" class="rounded text-rose-600 focus:ring-rose-500">
              <span>Cấp ẩm chuyên sâu</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="checkbox" class="rounded text-rose-600 focus:ring-rose-500">
              <span>Làm dịu & Phục hồi da</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer hover:text-slate-900">
              <input type="checkbox" class="rounded text-rose-600 focus:ring-rose-500">
              <span>Giảm mụn & Kiểm soát nhờn</span>
            </label>
          </div>
        </div>
      </div>

      <!-- Skincare Product Cards Grid Container -->
      <div class="space-y-4">
        <div class="flex items-center justify-between bg-slate-50 p-3.5 rounded-2xl border border-slate-200 text-xs">
          <span class="font-bold text-slate-800">Hiển thị <strong class="text-rose-600 text-sm font-extrabold"><?= count($skincareProducts) ?></strong> sản phẩm chăm da chuẩn</span>
          <div class="flex items-center gap-2">
            <span class="text-slate-500 font-medium">Sắp xếp:</span>
            <select class="bg-white border border-slate-200 rounded-xl px-2.5 py-1 text-xs font-semibold focus:outline-none focus:border-rose-500">
              <option>Bán chạy nhất</option>
              <option>Giá thấp đến cao</option>
              <option>Giá cao đến thấp</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
          <?php foreach ($skincareProducts as $p): ?>
            <div class="bg-white rounded-2xl border border-slate-200 p-3.5 flex flex-col justify-between hover:border-rose-300 hover:shadow-md transition-all relative group">
              
              <?php if (!empty($p['discount'])): ?>
                <span class="absolute top-3 left-3 bg-rose-500 text-white text-[10px] font-extrabold px-2 py-0.5 rounded-md z-10">
                  <?= htmlspecialchars($p['discount']) ?>
                </span>
              <?php endif; ?>

              <div class="space-y-2">
                <div class="h-40 md:h-48 w-full rounded-xl overflow-hidden bg-slate-50 p-2">
                  <img class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['name']) ?>">
                </div>

                <h3 class="text-xs md:text-sm font-bold text-slate-800 line-clamp-2 leading-snug group-hover:text-rose-600 transition-colors">
                  <?= htmlspecialchars($p['name']) ?>
                </h3>
              </div>

              <div class="pt-3 border-t border-slate-100 mt-3 space-y-2">
                <div class="flex items-baseline gap-1.5 flex-wrap">
                  <span class="text-sm md:text-base font-extrabold text-slate-900"><?= htmlspecialchars($p['price']) ?> ₫</span>
                  <?php if (!empty($p['old_price'])): ?>
                    <span class="text-[11px] text-slate-400 line-through"><?= htmlspecialchars($p['old_price']) ?> ₫</span>
                  <?php endif; ?>
                </div>

                <button type="button" onclick="openQuickViewModal('<?= $p['id'] ?>', '<?= addslashes($p['name']) ?>', '<?= $p['price'] ?>', '<?= $p['old_price'] ?? '' ?>', '<?= $p['img'] ?>')" class="w-full bg-rose-50 hover:bg-rose-500 text-rose-600 hover:text-white font-bold py-2 rounded-xl text-xs flex items-center justify-center gap-1 transition-all">
                  <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg>
                  <span>Chọn mua</span>
                </button>
              </div>

            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

  </div>
</main>

<script>
  function resetFilters() {
    document.querySelectorAll('input[type="radio"], input[type="checkbox"]').forEach(i => i.checked = false);
  }
</script>

<?php require __DIR__ . '/../layout/footer.php'; ?>
