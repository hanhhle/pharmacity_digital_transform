<?php require __DIR__ . '/../layout/header.php'; ?>

<main id="pmc-v2" class="new-ui bg-[#F8FAFC] pb-12">
  <div id="pmc-box-search_anchor"></div>

  <div class="bg-white pt-[--pt-main-pt] lg:pt-0">
    <h1 class="sr-only">Hệ thống nhà thuốc Pharmacity | Hiệu thuốc - Nhà thuốc online</h1>
    
    <div class="flex flex-col space-y-4 md:space-y-8">
      
      <!-- Top Fluid Banner & Authentic Search Section -->
      <div class="w-full" data-home-section="banner_top">
        <section class="relative bg-background max-md:hidden" id="fluid-banner">
          <div class="relative hidden md:block">
            <div class="overflow-visible">
              <div class="flex">
                <div class="container mx-auto px-4 md:max-w-[1384px] relative z-10 pt-4">
                  <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Gia+dinh+vui+khoe">
                    <div class="relative h-[286px] rounded-2xl overflow-hidden shadow-sm">
                      <img class="w-full h-full object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/banners/20260731041315-0-imaget8.png?versionId=uX2n4Zbnx9m_oAMvbi3qjabhH8op4PJX" alt="Gia đình vui khỏe" loading="lazy">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Pharmacity Center Search Box -->
          <div id="pmc-box-search" class="relative mt-4">
            <div class="flex flex-col rounded-2xl bg-white shadow-md border border-slate-200/80 w-[768px] mx-auto p-4">
              <div class="relative flex items-center h-12 border-b border-blue-600 mb-3">
                <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="shrink-0 w-6 h-6 text-slate-400 mr-2">
                  <path fill="currentColor" d="M17.25 11a6.25 6.25 0 1 0-12.5 0 6.25 6.25 0 0 0 12.5 0m1.5 0a7.75 7.75 0 1 1-15.5 0 7.75 7.75 0 0 1 15.5 0"></path>
                  <path fill="currentColor" d="M15.676 15.676a.75.75 0 0 1 1.004-.052l.057.052 4.794 4.793.05.058a.75.75 0 0 1-1.054 1.054l-.058-.05-4.793-4.794-.052-.057a.75.75 0 0 1 .052-1.004"></path>
                </svg>
                <input type="text" class="w-full text-base outline-none text-slate-800 placeholder:text-slate-400 font-medium" placeholder="Tìm tên thuốc, triệu chứng, thương hiệu...">
              </div>

              <!-- Keyword pills -->
              <div class="flex gap-2 overflow-x-auto pb-2 text-xs text-slate-600 font-medium whitespace-nowrap scrollbar-hide">
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Tăng+đề+kháng" class="bg-slate-100 px-3 py-1 rounded-full hover:bg-blue-50 hover:text-blue-600">tăng đề kháng</a>
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Khẩu+trang" class="bg-slate-100 px-3 py-1 rounded-full hover:bg-blue-50 hover:text-blue-600">khẩu trang</a>
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Nước+nhỏ+mắt" class="bg-slate-100 px-3 py-1 rounded-full hover:bg-blue-50 hover:text-blue-600">nước nhỏ mắt</a>
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Collagen" class="bg-slate-100 px-3 py-1 rounded-full hover:bg-blue-50 hover:text-blue-600">collagen</a>
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Omega+3" class="bg-slate-100 px-3 py-1 rounded-full hover:bg-blue-50 hover:text-blue-600">omega 3</a>
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Kẽm" class="bg-slate-100 px-3 py-1 rounded-full hover:bg-blue-50 hover:text-blue-600">kẽm</a>
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Probiotics" class="bg-slate-100 px-3 py-1 rounded-full hover:bg-blue-50 hover:text-blue-600">probiotics</a>
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Mua+1+Tặng+1" class="bg-amber-100 text-amber-800 font-bold px-3 py-1 rounded-full hover:bg-amber-200">Mua 1 Tặng 1</a>
              </div>

              <div class="flex items-center justify-between border-t border-slate-100 pt-3 mt-1 text-xs">
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=telemedicine" class="flex items-center gap-1.5 font-semibold text-slate-800 hover:text-blue-600">
                  <img class="h-6 w-6 rounded-full" src="https://production-cdn.pharmacity.io/digital/original/plain/e-com/images/static-website/20260105073249-0-nurse.png" alt="Liên hệ dược sĩ">
                  <span>Liên hệ dược sĩ</span>
                </a>
                <span class="text-slate-300">|</span>
                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=stores" class="flex items-center gap-1.5 font-semibold text-slate-800 hover:text-blue-600">
                  <img class="h-6 w-6 rounded-full" src="https://production-cdn.pharmacity.io/digital/original/plain/e-com/images/static-website/20260104134659-0-near-by-store.png" alt="Tìm nhà thuốc">
                  <span>Tìm nhà thuốc gần nhất</span>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- Quick Services Grid (Services Data Section - All 11 Items) -->
      <div class="container mx-auto px-4 md:max-w-[1384px]" data-home-section="services">
        <div class="flex items-center gap-3 overflow-x-auto pb-2 scrollbar-hide">
          
          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=prescription" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-red-50 border border-red-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121071907-0-99.png" alt="Tư vấn mua thuốc">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Tư vấn mua thuốc</span>
              <span class="text-[10px] text-slate-500 font-medium">Upload đơn thuốc OCR</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=stores" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-blue-50 border border-blue-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121070713-0-2.png" alt="Hệ thống nhà thuốc">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Hệ thống nhà thuốc</span>
              <span class="text-[10px] text-slate-500 font-medium">1.000+ Nhà thuốc & Kiosk</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=telemedicine" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-emerald-50 border border-emerald-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121070458-0-1.png" alt="Liên hệ dược sĩ">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Liên hệ dược sĩ</span>
              <span class="text-[10px] text-slate-500 font-medium">Tư vấn khám Video 24/7</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-amber-50 border border-amber-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121070933-0-3.png" alt="Mã giảm giá riêng">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Mã giảm giá riêng</span>
              <span class="text-[10px] text-slate-500 font-medium">Ưu đãi P-Xu thành viên</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=ecosystem" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-purple-50 border border-purple-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121072006-0-100.png" alt="Kiểm tra sức khỏe">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Kiểm tra sức khỏe</span>
              <span class="text-[10px] text-slate-500 font-medium">Liên thông Đơn thuốc QG</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=skincare" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-rose-50 border border-rose-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121071703-0-77.png" alt="Chăm da chuẩn">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Chăm da chuẩn</span>
              <span class="text-[10px] text-slate-500 font-medium">Dược mỹ phẩm chính hãng</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account#reminders" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-blue-50 border border-blue-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121083013-0-107.png" alt="Nhắc thuốc">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Nhắc thuốc</span>
              <span class="text-[10px] text-slate-500 font-medium">Lịch uống thuốc thông minh</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account#loyalty" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-emerald-50 border border-emerald-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121075524-0-105.png" alt="Lịch sử P-Xu Đồng">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Lịch sử P-Xu Đồng</span>
              <span class="text-[10px] text-slate-500 font-medium">Tích & Đổi điểm thưởng</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account#metrics" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-amber-50 border border-amber-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121072255-0-102.png" alt="Hồ sơ sức khỏe">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Hồ sơ sức khỏe</span>
              <span class="text-[10px] text-slate-500 font-medium">Chỉ số sinh hiệu EMR</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Deal+hot" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-purple-50 border border-purple-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121073228-0-104.png" alt="Deal hot tháng 08">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Deal hot tháng 08</span>
              <span class="text-[10px] text-slate-500 font-medium">Khuyến mãi độc quyền</span>
            </div>
          </a>

          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=admin" class="flex min-w-[200px] md:min-w-[220px] shrink-0 items-center gap-3 rounded-2xl p-3 md:p-4 bg-rose-50 border border-rose-100 hover:shadow-md transition-all">
            <img class="h-10 w-10 md:h-14 md:w-14 object-cover shrink-0" src="https://production-cdn.pharmacity.io/digital/186x186/plain/e-com/images/icon/20260121072148-0-101.png" alt="Chi tiêu sức khỏe">
            <div class="flex flex-col">
              <span class="text-xs md:text-sm font-bold text-slate-800">Chi tiêu sức khỏe</span>
              <span class="text-[10px] text-slate-500 font-medium">Dự báo chi phí AI</span>
            </div>
          </a>

        </div>
      </div>

      <!-- Featured Categories (Danh Mục Tủ Thuốc) -->
      <div class="container mx-auto px-4 md:max-w-[1384px] pt-2" data-home-section="featured_category">
        <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm">
          <h2 class="text-lg md:text-xl font-bold text-slate-800 mb-4">Danh mục tủ thuốc chuẩn chăm sức khỏe</h2>

          <div class="grid grid-cols-4 md:grid-cols-7 lg:grid-cols-10 gap-3">
            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Sức+khỏe+sinh+sản" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240919065941-0-17.png" alt="Sức khỏe sinh sản">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Sức khỏe sinh sản</span>
            </a>

            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Mắt" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240919065940-0-14.png" alt="Mắt">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Mắt</span>
            </a>

            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Tai+-+Mũi+-+Họng" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240919065941-0-13.png" alt="Tai - Mũi - Họng">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Tai - Mũi - Họng</span>
            </a>

            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Hô+hấp" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240919065940-0-1.png" alt="Hô hấp">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Hô hấp</span>
            </a>

            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Thuốc+ký+sinh" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240920031659-0-22.png" alt="Trị ký sinh">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Thuốc ký sinh</span>
            </a>

            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Tâm+thần" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240919065940-0-9.png" alt="Tâm thần">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Tâm thần</span>
            </a>

            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Cơ+-+Xương+-+Khớp" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240919065941-0-11.png" alt="Cơ - Xương - Khớp">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Cơ - Xương - Khớp</span>
            </a>

            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Ung+thư" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240919065941-0-19.png" alt="Ung thư">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Ung thư</span>
            </a>

            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Tim+mạch" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240919065940-0-12.png" alt="Tim mạch">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Tim mạch</span>
            </a>

            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Gan+%26+Tiêu+hóa" class="flex flex-col items-center p-2 rounded-xl bg-slate-100 hover:bg-blue-50 transition-all text-center">
              <img class="w-12 h-12 md:w-14 md:h-14 object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240919065941-0-20.png" alt="Gan">
              <span class="text-xs font-medium text-slate-700 mt-1 line-clamp-2">Gan & Tiêu hóa</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Authentic Pharmacity Flash Sale Carousel -->
      <div class="container mx-auto px-4 md:max-w-[1384px] pt-2" data-home-section="flash_sale">
        <div class="bg-gradient-to-br from-[#FF5722] to-[#E64A19] rounded-2xl p-4 md:p-6 text-white shadow-lg">
          
          <div class="flex flex-wrap items-center justify-between gap-3 mb-4">
            <div class="flex items-center gap-3">
              <h2 class="text-xl md:text-2xl font-black italic tracking-wide">FLASH SALE</h2>
              <div class="flex items-center gap-1.5 text-xs font-bold text-slate-900">
                <span class="bg-white px-2 py-1 rounded shadow">02</span> :
                <span class="bg-white px-2 py-1 rounded shadow">58</span> :
                <span class="bg-white px-2 py-1 rounded shadow">49</span>
              </div>
            </div>
            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Flash+Sale" class="text-xs md:text-sm font-bold text-yellow-200 hover:underline">Xem tất cả Flash Sale →</a>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
            <?php foreach (array_slice($products, 0, 6) as $p): ?>
              <div class="bg-white rounded-xl p-3 text-slate-800 flex flex-col justify-between shadow relative hover:shadow-md transition-all">
                <span class="absolute top-2 left-2 bg-red-600 text-white text-[10px] font-extrabold px-1.5 py-0.5 rounded">
                  Giảm 20%
                </span>

                <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=<?= $p['id'] ?>">
                  <img class="w-full h-28 object-contain my-2" src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>">
                  <span class="text-[10px] font-bold text-slate-400 uppercase block truncate"><?= htmlspecialchars($p['category']) ?></span>
                  <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1"><?= htmlspecialchars($p['name']) ?></h3>
                </a>

                <div>
                  <div class="text-sm font-extrabold text-blue-600"><?= number_format($p['price'], 0, ',', '.') ?> ₫</div>
                  <?php if (!empty($p['original_price'])): ?>
                    <div class="text-[11px] text-slate-400 line-through"><?= number_format($p['original_price'], 0, ',', '.') ?> ₫</div>
                  <?php endif; ?>

                  <button onclick="window.location.href='<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=<?= $p['id'] ?>'" class="mt-3 w-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold text-xs py-1.5 rounded-lg transition-all">
                    + Chọn mua
                  </button>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>

      <!-- AI Health Personalized Recommendation Engine Section -->
      <div class="container mx-auto px-4 md:max-w-[1384px] pt-2">
        <div class="bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 rounded-2xl p-4 md:p-6 text-white shadow-xl">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
              <span class="bg-blue-500/20 text-blue-300 p-2 rounded-xl text-xl">🤖</span>
              <div>
                <h3 class="text-lg md:text-xl font-bold">Gợi Ý Sức Khỏe AI Cho Bạn</h3>
                <p class="text-xs text-blue-200">Dựa trên thời tiết, lịch sử chăm sóc & chỉ số sức khoẻ</p>
              </div>
            </div>
            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account" class="text-xs font-semibold text-blue-300 hover:underline hidden sm:block">Xem phân tích sức khỏe →</a>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <?php foreach (array_slice($aiRecommendations ?? [], 0, 4) as $rec): ?>
              <div class="bg-white/10 backdrop-blur border border-white/10 rounded-xl p-3 flex flex-col justify-between hover:bg-white/15 transition-all">
                <div>
                  <div class="flex items-center justify-between mb-2">
                    <span class="text-[10px] bg-blue-500 text-white font-bold px-2 py-0.5 rounded-full">AI Match 98%</span>
                    <span class="text-[11px] text-yellow-300 font-semibold"><?= number_format($rec['price'], 0, ',', '.') ?> ₫</span>
                  </div>
                  <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=<?= $rec['id'] ?>" class="font-semibold text-sm text-white hover:text-blue-300 line-clamp-2 mb-2">
                    <?= htmlspecialchars($rec['name']) ?>
                  </a>
                  <p class="text-[11px] text-slate-300 italic line-clamp-2">
                    💡 <?= htmlspecialchars($rec['ai_reason'] ?? 'Gợi ý phối hợp chuẩn y khoa') ?>
                  </p>
                </div>
                <button onclick="window.location.href='<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=<?= $rec['id'] ?>'" class="mt-3 w-full bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs py-2 rounded-lg transition-all">
                  Xem chi tiết & Mua ngay
                </button>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Promo Sub Banners (data-home-section="promo_banners") -->
      <div class="container mx-auto px-4 md:max-w-[1384px] pt-2" data-home-section="promo_banners">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <a class="block h-36 md:h-[220px] overflow-hidden rounded-2xl shadow-sm hover:shadow-md transition-all" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Tu+thuoc+chu+toan">
            <img class="h-full w-full object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/banners/20260601033544-0-subbannerupdate.png?versionId=a5UvNWmCtXPjMmnNf3CSx5AzqrR4sXgH" alt="Tủ thuốc chu toàn gia đạo bình an" loading="lazy">
          </a>
          <a class="block h-36 md:h-[220px] overflow-hidden rounded-2xl shadow-sm hover:shadow-md transition-all" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Giai+phap+thao+moc+gan">
            <img class="h-full w-full object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/banners/20260731163103-0-592x254-gan.png?versionId=2qIGFPLErsJ3lKqx_n04.zTQER2g1A1A" alt="Giải pháp thảo mộc tăng cường chức năng gan" loading="lazy">
          </a>
        </div>
      </div>

      <!-- Page Collections (data-home-section="page_collections") -->
      <div class="container mx-auto px-4 md:max-w-[1384px] pt-2 space-y-6" data-home-section="page_collections">
        
        <!-- Collection 1: Tủ thuốc chuẩn chăm sức khỏe cả nhà -->
        <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm" data-collection-code="tu-thuoc-chuan-cham-suc-khoe-ca-nha">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg md:text-2xl font-bold text-slate-800">Tủ thuốc chuẩn chăm sức khỏe cả nhà</h2>
            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Tu+thuoc+gia+dinh" class="text-xs md:text-sm font-bold text-blue-600 hover:underline flex items-center gap-1">
              Xem tất cả →
            </a>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3">
            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=1">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260527074753-0-OL00319.png" class="w-full h-28 object-contain my-2" alt="Cảm cúm trẻ">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Nhóm sản phẩm giảm cảm cúm cho trẻ 6-10 tuổi</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">198.800 ₫/Bộ</span>
                <button onclick="openQuickViewById(1)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=2">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20260529023827-0-OL00326.png" class="w-full h-28 object-contain my-2" alt="Đau răng trẻ">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Nhóm sản phẩm giảm đau răng cho trẻ 6-10 tuổi</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">198.800 ₫/Bộ</span>
                <button onclick="openQuickViewById(2)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=3">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20260529023827-0-OL00328.png" class="w-full h-28 object-contain my-2" alt="Tiêu chảy trẻ">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Nhóm sản phẩm giảm tiêu chảy cho trẻ 6-10 tuổi</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">175.800 ₫/Bộ</span>
                <button onclick="openQuickViewById(3)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=4">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260527074824-0-OL00317.png" class="w-full h-28 object-contain my-2" alt="Đau bụng tới kỳ">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Nhóm sản phẩm giảm đau bụng tới kì cho phụ nữ</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">69.000 ₫/Bộ</span>
                <button onclick="openQuickViewById(4)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all hidden lg:flex">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=5">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20260529023827-0-OL00327.png" class="w-full h-28 object-contain my-2" alt="Tiêu chảy 2-5t">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Nhóm sản phẩm giảm tiêu chảy cho trẻ 2-5 tuổi</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">161.000 ₫/Bộ</span>
                <button onclick="openQuickViewById(5)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all hidden lg:flex">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=6">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260527075055-0-OL00318.png" class="w-full h-28 object-contain my-2" alt="Cảm cúm 2-5t">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Nhóm sản phẩm giảm cảm cúm cho trẻ 2-5 tuổi</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">199.000 ₫/Bộ</span>
                <button onclick="openQuickViewById(6)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Collection 2: Chọn sống khỏe - Chọn giá tốt -->
        <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm" data-collection-code="sieu-deals-online">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg md:text-2xl font-bold text-slate-800">Chọn sống khỏe – Chọn giá tốt</h2>
            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Chon+song+khoe" class="text-xs md:text-sm font-bold text-blue-600 hover:underline flex items-center gap-1">
              Xem tất cả →
            </a>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3">
            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all relative">
              <span class="absolute top-2 left-2 bg-red-600 text-white text-[10px] font-extrabold px-1.5 py-0.5 rounded">Giảm 15%</span>
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=5">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260803030945-1-P37209.png" class="w-full h-28 object-contain my-2" alt="Cerave Sunscreen">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Sữa chống nắng Cerave Invisible Dry Touch SPF50+ (50ml)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">335.750 ₫</span>
                <span class="text-[11px] text-slate-400 line-through">395.000 ₫</span>
                <button onclick="openQuickViewById(14)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all relative">
              <span class="absolute top-2 left-2 bg-red-600 text-white text-[10px] font-extrabold px-1.5 py-0.5 rounded">Giảm 10%</span>
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=6">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260731033844-0-P17180.png" class="w-full h-28 object-contain my-2" alt="Blackmores Bio Magnesium">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Viên uống Blackmores Bio Magnesium cơ bắp (100 viên)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">661.500 ₫</span>
                <span class="text-[11px] text-slate-400 line-through">735.000 ₫</span>
                <button onclick="openQuickViewById(6)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=7">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260730095006-3-P28131.png" class="w-full h-28 object-contain my-2" alt="Lineabon D3K2">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Chai xịt Lineabon D3 + K2 Spray cho bé (10ml)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">330.000 ₫</span>
                <button onclick="openQuickViewById(11)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=8">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260730095006-8-P29722.png" class="w-full h-28 object-contain my-2" alt="VitaHealth Multivitamin">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">TPBVSK VitaHealth Multivitamin+ tăng đề kháng (30 viên)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">309.000 ₫</span>
                <button onclick="openQuickViewById(8)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all relative hidden lg:flex">
              <span class="absolute top-2 left-2 bg-red-600 text-white text-[10px] font-extrabold px-1.5 py-0.5 rounded">Giảm 20%</span>
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=3">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260730095006-0-P30519.png" class="w-full h-28 object-contain my-2" alt="Effaclar Duo+ M">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Kem giảm mụn La Roche Posay Effaclar Duo+ M (40ml)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">432.000 ₫</span>
                <span class="text-[11px] text-slate-400 line-through">540.000 ₫</span>
                <button onclick="openQuickViewById(3)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all hidden lg:flex">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=4">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260730095006-6-P30526.png" class="w-full h-28 object-contain my-2" alt="Abbott Glucerna">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Sữa bột Abbott Glucerna cho người tiểu đường (800g)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">869.000 ₫</span>
                <span class="text-[11px] text-slate-400 line-through">920.000 ₫</span>
                <button onclick="openQuickViewById(4)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Collection 3: Cần gấp có Pharmacity giao ngay -->
        <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm" data-collection-code="can-gap-co-pharmacity-giao-ngay">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg md:text-2xl font-bold text-slate-800">Cần gấp có Pharmacity giao ngay (1H)</h2>
            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Giao+ngay+1h" class="text-xs md:text-sm font-bold text-blue-600 hover:underline flex items-center gap-1">
              Xem tất cả →
            </a>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3">
            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=9">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20260408081458-0-P00779.jpg" class="w-full h-28 object-contain my-2" alt="Fugacar">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Thuốc Fugacar Janssen điều trị nhiễm giun (1 viên)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">21.990 ₫/Hộp</span>
                <button onclick="openQuickViewById(12)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=10">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20250415090632-0-P00075.jpg" class="w-full h-28 object-contain my-2" alt="Sensa Cools">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Bột thanh nhiệt SENSA COOLS (6 gói x 7g)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">26.500 ₫/Hộp</span>
                <button onclick="openQuickViewById(7)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=11">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20241107084413-0-P00189.png" class="w-full h-28 object-contain my-2" alt="Magne B6">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Viên nén Magne-B6 Corbière Sanofi (5 vỉ x 10 viên)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">21.200 ₫/Vỉ</span>
                <button onclick="openQuickViewById(13)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=12">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20251230091832-0-P29594.png" class="w-full h-28 object-contain my-2" alt="Nước muối sinh lý">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Nước muối sinh lý Pharmacity Natri Clorid 0,9% (500ml)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">11.000 ₫/Chai</span>
                <button onclick="openQuickViewById(9)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all hidden lg:flex">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=13">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20241107084419-0-P09747.png" class="w-full h-28 object-contain my-2" alt="Panadol Extra">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Viên nén Panadol Extra With Optizorb GSK (10 viên/vỉ)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">19.000 ₫/Vỉ</span>
                <button onclick="openQuickViewById(10)" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex flex-col justify-between hover:shadow-md transition-all hidden lg:flex">
              <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=14">
                <img src="https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20250415090510-0-P05403.jpg" class="w-full h-28 object-contain my-2" alt="V.Rohto Vitamin">
                <h3 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1">Thuốc nhỏ mắt V.Rohto Vitamin làm dịu mắt (13ml)</h3>
              </a>
              <div>
                <span class="text-sm font-extrabold text-blue-600 block">55.000 ₫/Hộp</span>
                <button onclick="window.location.href='<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=14'" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

</main>

<?php require __DIR__ . '/../layout/footer.php'; ?>
