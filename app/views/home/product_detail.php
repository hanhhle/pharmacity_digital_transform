<?php require __DIR__ . '/../layout/header.php'; ?>

<?php
$productId = $_GET['id'] ?? 1;
$product = ProductModel::getProductById($productId) ?? [
  'id' => 1,
  'name' => 'Chai xịt Lineabon D3 + K2 Spray hỗ trợ hệ xương và răng chắc khỏe cho bé (Chai 10ml)',
  'sku' => 'P28131',
  'category' => 'Bổ sung vitamin D cho trẻ',
  'brand' => 'LineaBon',
  'price' => 330000,
  'original_price' => 380000,
  'unit' => 'Hộp',
  'image' => 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260730095006-3-P28131.png',
  'description' => 'Bổ sung Vitamin D3 và Vitamin K2, giúp hấp thu canxi hiệu quả, cải thiện mật độ xương, giúp cho hệ xương và răng chắc khỏe.',
  'dosage' => 'Trẻ 0-12 tháng: 3 xịt/ngày. Trẻ 1-3 tuổi: 3-4 xịt/ngày.',
  'ai_reason' => 'Được kiểm duyệt lâm sàng bởi hội đồng y khoa Pharmacity.'
];

$brandName = $product['brand'] ?? 'Pharmacity Official';
$productSku = $product['sku'] ?? ('P' . str_pad($product['id'], 5, '0', STR_PAD_LEFT));
$unitName = $product['unit'] ?? 'Hộp';
$priceFormatted = number_format($product['price'], 0, ',', '.');
$oldPriceFormatted = !empty($product['original_price']) ? number_format($product['original_price'], 0, ',', '.') : null;
$pointsEarned = number_format(floor($product['price'] * 0.01), 0, ',', '.');

$relatedProducts = ProductModel::getAllProducts();
?>

<!-- Toast Notification when item added to cart -->
<?php if (!empty($_SESSION['cart_toast'])): ?>
  <div class="container mx-auto px-4 mt-4">
    <div id="cart-toast-alert" class="bg-emerald-600 text-white p-4 rounded-2xl shadow-lg flex items-center justify-between animate-bounce">
      <div class="flex items-center gap-2 text-sm font-bold">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span><?= htmlspecialchars($_SESSION['cart_toast']) ?></span>
      </div>
      <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=checkout" class="bg-white text-emerald-800 font-extrabold text-xs px-3.5 py-1.5 rounded-xl hover:bg-slate-100 transition-all">
        Xem giỏ hàng →
      </a>
    </div>
  </div>
  <?php unset($_SESSION['cart_toast']); ?>
<?php endif; ?>

<div class="md:pb-0 pb-[0px]">
  <div class="bg-white">
    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 md:max-w-[1384px]">
      <nav aria-label="Breadcrumb">
        <ul data-slot="breadcrumb-list" class="flex flex-wrap items-center gap-x-1 py-2 sm:gap-x-2 md:gap-x-3">
          <li data-slot="breadcrumb-item">
            <a data-slot="breadcrumb-link" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=home">
              <span class="font-base text-[12px] leading-12 font-normal md:text-sm md:leading-14 md:font-normal text-content-medium hover:text-content-strong">Trang chủ</span>
            </a>
          </li>
          <li data-slot="breadcrumb-separator" role="presentation" aria-hidden="true" class="flex items-center">
            <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="shrink-0 w-3 h-3 hidden text-content-medium md:block"><path fill="currentColor" d="M8.752 2.192A.858.858 0 0 0 7.546 3.4l.059.064L16.142 12l-8.537 8.537-.06.065a.857.857 0 0 0 1.207 1.206l.065-.059 8.783-8.783a1.365 1.365 0 0 0 0-1.931L8.817 2.25z"></path></svg>
            <span class="px-0.5 text-xs text-content-neutral-disabled md:hidden">/</span>
          </li>
          <li data-slot="breadcrumb-item">
            <a data-slot="breadcrumb-link" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=<?= urlencode($product['category']) ?>">
              <span class="font-base text-[12px] leading-12 font-normal md:text-sm md:leading-14 md:font-normal text-content-medium hover:text-content-strong"><?= htmlspecialchars($product['category']) ?></span>
            </a>
          </li>
          <li data-slot="breadcrumb-separator" role="presentation" aria-hidden="true" class="flex items-center">
            <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="shrink-0 w-3 h-3 hidden text-content-medium md:block"><path fill="currentColor" d="M8.752 2.192A.858.858 0 0 0 7.546 3.4l.059.064L16.142 12l-8.537 8.537-.06.065a.857.857 0 0 0 1.207 1.206l.065-.059 8.783-8.783a1.365 1.365 0 0 0 0-1.931L8.817 2.25z"></path></svg>
            <span class="px-0.5 text-xs text-content-neutral-disabled md:hidden">/</span>
          </li>
          <li data-slot="breadcrumb-item">
            <a role="link" aria-current="page" aria-disabled="true" data-slot="breadcrumb-page" class="pointer-events-none" href="#">
              <span class="font-base text-[12px] leading-12 font-normal md:text-sm md:leading-14 md:font-normal text-content-strong line-clamp-1"><?= htmlspecialchars($product['name']) ?></span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Main Product Detail Container -->
    <div class="container mx-auto px-4 md:max-w-[1384px]">
      <div class="mb-4 grid grid-cols-1 gap-6 lg:grid-cols-2 lg:items-start">
        
        <!-- Left Column: Product Image Gallery Carousel -->
        <div class="lg:sticky lg:top-6">
          <div>
            <div class="relative aspect-square overflow-y-hidden rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center p-4">
              <img id="main-product-img" class="h-full w-full object-contain" src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" loading="lazy">
              <div class="absolute bottom-0 z-[1] flex h-12 w-full md:h-[54px]">
                <img class="h-full w-auto" src="https://prod-cdn.pharmacity.io/e-com/images/promotion/20241107094838-0-eQuaTang.png" alt="Quà tặng kèm" loading="lazy" title="Tặng 1 Yếm chống thấm Nutrimax">
              </div>
            </div>

            <div class="mt-2 hidden bg-blue-50 px-3 py-1.5 text-center text-xs font-medium text-blue-700 rounded-lg md:block">
              Sản phẩm 100% chính hãng, mẫu mã có thể thay đổi theo lô hàng, hình ảnh sản phẩm có thể chênh lệch so với màu sắc thực tế
            </div>

            <!-- Thumbnail List Carousel -->
            <div class="mt-3 hidden md:block">
              <div class="flex gap-3">
                <div onclick="document.getElementById('main-product-img').src='<?= htmlspecialchars($product['image']) ?>'" class="cursor-pointer border-2 border-blue-600 rounded-xl overflow-hidden p-1 bg-white w-20 h-20">
                  <img class="w-full h-full object-contain" src="<?= htmlspecialchars($product['image']) ?>" alt="Thumb 1">
                </div>
                <div onclick="document.getElementById('main-product-img').src='https://production-cdn.pharmacity.io/digital/1080x1080/plain/e-com/images/product/20260319083634-0-P28131_1.jpg'" class="cursor-pointer border border-slate-200 hover:border-blue-500 rounded-xl overflow-hidden p-1 bg-white w-20 h-20">
                  <img class="w-full h-full object-contain opacity-80 hover:opacity-100" src="https://production-cdn.pharmacity.io/digital/1080x1080/plain/e-com/images/product/20260319083634-0-P28131_1.jpg" alt="Thumb 2">
                </div>
                <div onclick="document.getElementById('main-product-img').src='https://production-cdn.pharmacity.io/digital/1080x1080/plain/e-com/images/product/20260319083713-0-P28131_5.jpg'" class="cursor-pointer border border-slate-200 hover:border-blue-500 rounded-xl overflow-hidden p-1 bg-white w-20 h-20">
                  <img class="w-full h-full object-contain opacity-80 hover:opacity-100" src="https://production-cdn.pharmacity.io/digital/1080x1080/plain/e-com/images/product/20260319083713-0-P28131_5.jpg" alt="Thumb 3">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column: Product Purchasing Specs & Info -->
        <div class="grid grid-cols-1 gap-4">
          <div>
            <div class="flex flex-col gap-4">
              
              <!-- Badges Header -->
              <div class="flex flex-wrap items-center gap-2">
                <div class="inline-flex items-center gap-1.5 rounded-lg bg-emerald-600 px-2.5 py-1 text-white text-xs font-bold shadow-xs">
                  <svg fill="none" viewBox="0 0 16 16" aria-hidden="true" class="inline-block shrink-0 w-4 h-4"><path fill="#fff" d="M14.666 7.999c0 .569-.699 1.037-.838 1.562-.145.542.22 1.298-.054 1.772-.279.482-1.118.54-1.509.931s-.449 1.23-.93 1.51c-.475.274-1.23-.092-1.773.053-.525.14-.993.838-1.562.838s-1.038-.698-1.563-.838c-.542-.145-1.297.22-1.772-.054-.482-.279-.54-1.118-.93-1.509-.392-.39-1.23-.449-1.51-.93-.274-.475.091-1.23-.053-1.773-.14-.525-.839-.993-.839-1.562s.699-1.038.839-1.563c.144-.542-.221-1.297.053-1.772.28-.482 1.118-.54 1.51-.93.39-.392.448-1.23.93-1.51.475-.274 1.23.091 1.772-.053.525-.14.994-.839 1.563-.839s1.037.699 1.562.839c.542.144 1.298-.221 1.772.053.482.28.54 1.118.931 1.51.391.39 1.23.448 1.51.93.274.475-.092 1.23.053 1.772.14.525.838.994.838 1.563"></path><path fill="#01C091" d="M9.927 6.015 7.39 8.553 6.074 7.238a.732.732 0 0 0-1.035 1.035l1.846 1.845a.71.71 0 0 0 1.007 0L10.96 7.05a.732.732 0 0 0-1.033-1.034"></path></svg>
                  <span>Chính hãng 100%</span>
                </div>
                <div class="inline-flex items-center rounded-lg bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-700">
                  <span>Thương hiệu: <?= htmlspecialchars($brandName) ?></span>
                </div>
              </div>

              <!-- Title -->
              <h1 class="text-xl md:text-2xl font-extrabold text-blue-950 leading-tight"><?= htmlspecialchars($product['name']) ?></h1>

              <!-- Code & Likes & Verified Document Link -->
              <div class="flex flex-wrap items-center justify-between text-xs text-slate-500 py-1 border-b border-slate-100">
                <div class="flex items-center gap-3">
                  <span>Mã: <strong><?= htmlspecialchars($productSku) ?></strong></span>
                  <span>•</span>
                  <span>Yêu thích: <strong>99.7k</strong></span>
                </div>
                <a href="https://prod-cdn.pharmacity.io/e-com/attachments/product-notification/20250429075749-0-790467fb7409956b69b659c2f2a56e7f.pdf" target="_blank" class="text-blue-600 font-bold hover:underline flex items-center gap-1">
                  <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="w-4 h-4"><path fill="currentColor" d="M18.25 10a6.25 6.25 0 1 0-12.5 0 6.25 6.25 0 0 0 12.5 0m1.5 0a7.75 7.75 0 1 1-15.5 0 7.75 7.75 0 0 1 15.5 0"></path><path fill="currentColor" d="M14.25 10a2.25 2.25 0 1 0-4.5 0 2.25 2.25 0 0 0 4.5 0m1.5 0a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0M16.75 21.278c0 .819-.766 1.4-1.535 1.218l-.153-.047L12 21.301l-3.062 1.148a1.25 1.25 0 0 1-1.678-1.01l-.01-.16V16a.75.75 0 0 1 1.5 0v4.917l2.812-1.054.106-.034c.217-.06.447-.06.664 0l.106.034 2.812 1.054V16a.75.75 0 0 1 1.5 0z"></path></svg>
                  <span>Xem giấy công bố sản phẩm</span>
                </a>
              </div>

              <!-- Price Box & P-Xu Points -->
              <div class="rounded-2xl bg-slate-50 p-4 border border-slate-100">
                <div class="flex items-baseline gap-3">
                  <span class="text-3xl font-extrabold text-blue-600"><?= $priceFormatted ?> ₫/<?= htmlspecialchars($unitName) ?></span>
                  <?php if ($oldPriceFormatted): ?>
                    <span class="text-sm text-slate-400 line-through"><?= $oldPriceFormatted ?> ₫</span>
                  <?php endif; ?>
                </div>
                <p class="text-xs text-slate-500 my-1">Giá đã bao gồm thuế. Phí vận chuyển và các chi phí khác (nếu có) sẽ được thể hiện khi đặt hàng.</p>
                <div class="mt-2 inline-flex items-center gap-1.5 rounded-lg bg-amber-50 border border-amber-200 px-3 py-1 text-xs font-semibold text-slate-700">
                  <span>Tích lũy</span>
                  <span class="text-amber-700 font-extrabold">+<?= $pointsEarned ?> P-Xu Đồng</span>
                </div>
              </div>

              <!-- Real-Time Stores Inventory Link -->
              <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-3 text-xs text-emerald-900">
                <div class="flex items-center justify-between font-bold mb-1">
                  <span class="flex items-center gap-1.5 text-emerald-700">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    Tồn kho Real-Time: Còn hàng tại 982/1.000+ Nhà thuốc
                  </span>
                  <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=stores" class="text-blue-600 font-extrabold hover:underline">Xem bản đồ shop gần bạn →</a>
                </div>
                <p class="text-slate-600">Sẵn sàng giao siêu tốc 1H hoặc Click & Collect (Nhận tại nhà thuốc sau 15 phút).</p>
              </div>

              <!-- Phân loại sản phẩm -->
              <div class="space-y-2">
                <label class="font-bold text-xs uppercase text-slate-700">Phân loại sản phẩm</label>
                <div class="flex items-center gap-2">
                  <button class="px-4 py-1.5 rounded-full bg-blue-50 border border-blue-600 text-blue-700 font-bold text-xs">
                    <?= htmlspecialchars($unitName) ?>
                  </button>
                </div>
              </div>

              <!-- Quantity Selector -->
              <div class="flex items-center gap-4 my-2">
                <label class="font-bold text-xs uppercase text-slate-700">Số lượng</label>
                <div class="flex items-center gap-2">
                  <button type="button" onclick="changeProductQty(-1)" class="w-9 h-9 flex items-center justify-center rounded-xl bg-slate-100 hover:bg-slate-200 font-bold text-slate-700 border border-slate-200">-</button>
                  <input type="text" id="visible-product-qty" value="1" readonly class="w-12 h-9 text-center font-bold text-slate-800 bg-white border border-slate-200 rounded-xl text-sm">
                  <button type="button" onclick="changeProductQty(1)" class="w-9 h-9 flex items-center justify-center rounded-xl bg-slate-100 hover:bg-slate-200 font-bold text-slate-700 border border-slate-200">+</button>
                </div>
              </div>

              <!-- Action Buttons -->
              <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=cart" method="POST" class="grid grid-cols-2 gap-3">
                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                <input type="hidden" id="form-product-qty" name="quantity" value="1">
                
                <button type="submit" name="action" value="add_to_cart" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-xl font-extrabold transition-all border border-blue-600 bg-white text-blue-600 hover:bg-blue-50 h-13 px-4 py-3 text-base w-full shadow-xs">
                  <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5"><path fill="currentColor" d="M19.403 5.783a2.75 2.75 0 0 1 2.698 3.29l-.039.162-1.478 5.596a2.75 2.75 0 0 1-2.42 2.038l-8.4.73a2.75 2.75 0 0 1-2.907-2.07l-2.21-8.813a.75.75 0 0 1 .727-.933zm-11.09 9.381c.149.595.71.995 1.32.941l8.401-.73a1.25 1.25 0 0 0 1.1-.927l1.478-5.596.03-.148a1.25 1.25 0 0 0-1.239-1.42H6.336z"></path><path fill="currentColor" d="m4.608 2.25.13.012a.75.75 0 0 1 .604.579l.764 3.533.013.076a.75.75 0 0 1-1.458.316l-.02-.075-.638-2.941H2.578a.75.75 0 0 1 0-1.5zM18.072 18.522c.784.04 1.406.684 1.41 1.474V20l-.007.151a1.483 1.483 0 0 1-2.95 0L16.518 20a1.474 1.474 0 0 1 1.4-1.477 1 1 0 0 1 .078-.005zM9.073 18.52A1.482 1.482 0 0 1 9 21.484c-.81 0-1.479-.655-1.478-1.477H7.52v-.015c0-.792.623-1.429 1.399-1.47a1 1 0 0 1 .078-.004z"></path></svg>
                  Thêm vào giỏ
                </button>
                
                <button type="submit" name="action" value="buy_now" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-xl font-extrabold transition-all bg-blue-600 text-white hover:bg-blue-700 h-13 px-4 py-3 text-base w-full shadow-md">
                  Mua ngay
                </button>
              </form>

              <!-- Khuyến mãi -->
              <div class="rounded-2xl bg-amber-50/60 p-4 border border-amber-200/60">
                <h5 class="font-bold text-sm text-slate-800 mb-2">Khuyến mãi & Ưu đãi quà tặng</h5>
                <div class="flex items-center gap-2 text-xs font-semibold text-slate-700">
                  <img class="w-6 h-6 object-contain" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240222060820-0-Group.png" alt="Icon promo">
                  <span>Tặng 1 Yếm chống thấm Nutrimax cao cấp cho đơn hàng mẹ & bé</span>
                </div>
              </div>

              <!-- Thông tin chi tiết Specs -->
              <div class="rounded-2xl bg-slate-50 p-4 border border-slate-100 space-y-3">
                <p class="font-bold text-sm text-slate-900 border-b border-slate-200 pb-2">Thông tin sản phẩm</p>
                <div class="grid grid-cols-1 md:grid-cols-[140px_1fr] text-xs gap-1 pb-2 border-b border-slate-200/60">
                  <span class="text-slate-500">Danh mục:</span>
                  <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=<?= urlencode($product['category']) ?>" class="font-bold text-blue-600 hover:underline"><?= htmlspecialchars($product['category']) ?></a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-[140px_1fr] text-xs gap-1 pb-2 border-b border-slate-200/60">
                  <span class="text-slate-500">Công dụng:</span>
                  <span class="text-slate-800"><?= htmlspecialchars($product['description']) ?></span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-[140px_1fr] text-xs gap-1 pb-2 border-b border-slate-200/60">
                  <span class="text-slate-500">Quy cách:</span>
                  <span class="text-slate-800"><?= htmlspecialchars($unitName) ?></span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-[140px_1fr] text-xs gap-1">
                  <span class="text-slate-500">Lưu ý:</span>
                  <span class="text-slate-600">Thực phẩm này không phải là thuốc, không có tác dụng thay thế thuốc chữa bệnh. Đọc kỹ hướng dẫn sử dụng trước khi dùng.</span>
                </div>
              </div>

              <!-- Feature Grid Badges -->
              <div class="grid grid-cols-3 gap-2 bg-blue-50/50 p-3 rounded-2xl border border-blue-100/60 text-center text-xs">
                <div class="flex flex-col items-center gap-1">
                  <span class="text-xl">🚀</span>
                  <span class="font-bold text-slate-800">Giao hàng siêu tốc 1H</span>
                </div>
                <div class="flex flex-col items-center gap-1">
                  <span class="text-xl">🚚</span>
                  <span class="font-bold text-slate-800">Miễn phí vận chuyển</span>
                </div>
                <div class="flex flex-col items-center gap-1">
                  <span class="text-xl">💊</span>
                  <span class="font-bold text-slate-800">Đủ thuốc chuẩn 100%</span>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Full-Width Sticky Left Navigation & Description Section -->
  <div class="w-full bg-slate-50 py-6 border-t border-slate-200">
    <div class="container mx-auto px-4 md:max-w-[1384px]">
      <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden flex flex-col md:flex-row">
        
        <!-- Left Sidebar Navigation (Sticky) -->
        <div class="w-full md:w-64 bg-slate-50/80 border-b md:border-b-0 md:border-r border-slate-200 p-4 shrink-0">
          <div class="sticky top-24 space-y-1">
            <a href="#thanh-phan" class="block p-3 rounded-xl font-bold text-xs md:text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-600 transition-all">Thành phần</a>
            <a href="#cong-dung" class="block p-3 rounded-xl font-bold text-xs md:text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-600 transition-all">Công dụng</a>
            <a href="#cach-su-dung" class="block p-3 rounded-xl font-bold text-xs md:text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-600 transition-all">Cách sử dụng</a>
            <a href="#thong-tin-san-xuat" class="block p-3 rounded-xl font-bold text-xs md:text-sm bg-blue-600 text-white shadow-xs">Thông tin sản xuất</a>
          </div>
        </div>

        <!-- Right Main Description Content -->
        <div class="flex-1 p-6 space-y-6 text-xs md:text-sm text-slate-800">
          <div id="thanh-phan" class="scroll-mt-24 space-y-2 border-b border-slate-100 pb-4">
            <h3 class="text-base font-extrabold text-slate-900">Thành phần</h3>
            <p>Trong mỗi 0,2ml sản phẩm chứa:</p>
            <ul class="list-disc pl-5 space-y-1 text-slate-700">
              <li>Vitamin K2 (MK-7): 22,5 mcg</li>
              <li>Vitamin D3: 400 IU</li>
              <li>Phụ liệu vừa đủ.</li>
            </ul>
          </div>

          <div id="cong-dung" class="scroll-mt-24 space-y-2 border-b border-slate-100 pb-4">
            <h3 class="text-base font-extrabold text-slate-900">Công dụng</h3>
            <p><?= htmlspecialchars($product['description']) ?></p>
          </div>

          <div id="cach-su-dung" class="scroll-mt-24 space-y-2 border-b border-slate-100 pb-4">
            <h3 class="text-base font-extrabold text-slate-900">Cách sử dụng</h3>
            <p><strong>Liều dùng cho trẻ em:</strong></p>
            <ul class="list-disc pl-5 space-y-1 text-slate-700">
              <li>0 - 12 tháng: 3 xịt mỗi ngày</li>
              <li>1 - 3 tuổi: 3-4 xịt mỗi ngày</li>
              <li>3 - 12 tuổi: 4-6 xịt mỗi ngày</li>
            </ul>
            <p><strong>Người lớn:</strong> 6 xịt mỗi ngày.</p>
          </div>

          <div id="thong-tin-san-xuat" class="scroll-mt-24 space-y-2">
            <h3 class="text-base font-extrabold text-slate-900">Thông tin sản xuất</h3>
            <p><strong>Bảo quản:</strong> Nơi khô ráo, thoáng mát dưới 25°C, tránh ánh nắng trực tiếp.</p>
            <p><strong>Thương hiệu:</strong> <?= htmlspecialchars($brandName) ?></p>
            <p><strong>Công ty phân phối:</strong> Công ty Cổ phần Dược phẩm Pharmacity</p>
            <p><strong>Số GP công bố:</strong> 5053/2021/DDKSP</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Buyer Reviews Section -->
  <div class="container mx-auto px-4 md:max-w-[1384px] my-6">
    <section class="rounded-2xl bg-white p-6 border border-slate-200 shadow-2xs">
      <h4 class="font-extrabold text-lg md:text-xl text-slate-900 mb-4">Đánh giá từ người mua</h4>
      <div class="flex flex-col items-center justify-center py-6 text-center space-y-3">
        <img src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20260714101754-0-product-rating.svg" alt="Rating Icon" class="w-24 h-24">
        <span class="font-bold text-slate-800 text-base">Chưa có đánh giá nào</span>
        <p class="text-xs text-slate-500">Hãy là người đầu tiên chia sẻ trải nghiệm sử dụng sản phẩm của bạn.</p>
        <button class="bg-blue-600 text-white font-bold text-xs md:text-sm px-6 py-2.5 rounded-xl hover:bg-blue-700 transition-all shadow-md">
          Viết đánh giá
        </button>
      </div>
    </section>
  </div>

  <!-- Pharmacist Verification Section -->
  <div class="container mx-auto px-4 md:max-w-[1384px] my-6">
    <section class="rounded-2xl bg-white p-6 border border-slate-200 flex flex-col md:flex-row items-center md:items-start gap-6">
      <img class="rounded-full w-20 h-20 shrink-0 object-cover border-2 border-blue-500" src="https://prod-cdn.pharmacity.io/e-com/images/pharmacist/20260729093043-0-pharmacist_1785317443156.jpg" alt="Dược sĩ Nguyễn Thị Mỹ Quyên">
      <div class="space-y-1.5 text-center md:text-left">
        <p class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Dược sĩ - Giám sát dịch vụ Dược Pharmacity</p>
        <h2 class="text-lg font-bold text-slate-900">DS. Nguyễn Thị Mỹ Quyên</h2>
        <div class="inline-flex items-center gap-1 text-emerald-600 text-xs font-bold bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-100">
          <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>Đã kiểm duyệt chuyên môn y khoa</span>
        </div>
        <p class="text-xs text-slate-600 max-w-3xl pt-1">Hơn 7 năm kinh nghiệm quản lý lâm sàng và thực hành nhà thuốc GPP Pharmacity, đảm bảo tư vấn thuốc an toàn, tận tâm và đạt hiệu quả tối ưu cho sức khỏe gia đình bạn.</p>
      </div>
    </section>
  </div>

  <!-- Q&A Comments Section -->
  <div class="container mx-auto px-4 md:max-w-[1384px] my-6">
    <div class="rounded-2xl bg-white p-6 border border-slate-200 space-y-4">
      <h2 class="font-extrabold text-lg md:text-xl text-slate-900">Hỏi &amp; Đáp (7)</h2>
      
      <!-- Comment Form Input -->
      <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 flex gap-3">
        <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center shrink-0 text-xs">KH</div>
        <div class="flex-1 space-y-2">
          <textarea class="w-full bg-white border border-slate-200 rounded-xl p-3 text-xs outline-none focus:border-blue-600" rows="2" placeholder="Nhập câu hỏi của bạn về sản phẩm..."></textarea>
          <button class="bg-blue-600 text-white font-bold text-xs px-5 py-2 rounded-xl hover:bg-blue-700 transition-all flex items-center gap-1.5 ml-auto">
            <span>Gửi câu hỏi</span>
            <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" /></svg>
          </button>
        </div>
      </div>

      <!-- Verified Comments Thread -->
      <div class="space-y-4 pt-2">
        <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 space-y-3">
          <div class="flex items-center gap-2">
            <span class="font-bold text-xs text-slate-900">Khách hàng</span>
            <span class="bg-emerald-600 text-white text-[10px] font-bold px-2 py-0.5 rounded">Hữu ích nhất</span>
            <span class="text-[11px] text-slate-400 ml-auto">11:35 09-01-2026</span>
          </div>
          <p class="text-xs text-slate-700">Dược sĩ cho mình hỏi chai xịt này dùng cho bé 3 tháng tuổi xịt trực tiếp vào miệng hay pha với sữa được ạ?</p>
          
          <!-- Pharmacity Reply -->
          <div class="ml-6 pl-4 border-l-2 border-blue-600 bg-white p-3 rounded-xl border border-slate-100 space-y-1">
            <div class="flex items-center gap-1.5 font-bold text-xs text-blue-900">
              <span>Pharmacity Official</span>
              <img class="w-4 h-4" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706153648-0-blue-tick.svg" alt="Blue tick">
              <span class="text-[10px] text-slate-400 ml-auto font-normal">15:12 09-01-2026</span>
            </div>
            <p class="text-xs text-slate-600">Pharmacity xin chào! Sản phẩm Chai xịt Lineabon D3 + K2 Spray được thiết kế dạng vòi xịt phân sương chuẩn liều, bạn nên xịt trực tiếp vào niêm mạc miệng bé (bên má trong) để dưỡng chất hấp thu nhanh nhất qua mao mạch nhé!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Related Products Carousel Slider -->
  <div class="container mx-auto px-4 md:max-w-[1384px] my-8">
    <h3 class="text-lg md:text-xl font-extrabold text-slate-900 mb-4">Sản phẩm cùng thương hiệu</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
      <?php foreach (array_slice($relatedProducts, 0, 6) as $rp): ?>
        <div class="bg-white rounded-2xl p-3 border border-slate-200 flex flex-col justify-between hover:shadow-md transition-all">
          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=<?= $rp['id'] ?>">
            <img src="<?= htmlspecialchars($rp['image']) ?>" alt="<?= htmlspecialchars($rp['name']) ?>" class="w-full h-32 object-contain my-2">
            <h4 class="text-xs font-semibold text-slate-900 line-clamp-2 h-8 my-1"><?= htmlspecialchars($rp['name']) ?></h4>
          </a>
          <div class="mt-2 pt-2 border-t border-slate-100">
            <span class="text-sm font-extrabold text-blue-600 block"><?= number_format($rp['price'], 0, ',', '.') ?> ₫</span>
            <button onclick="openQuickViewModal(<?= $rp['id'] ?>, '<?= addslashes($rp['name']) ?>', <?= $rp['price'] ?>, '<?= $rp['original_price'] ?? '' ?>', '<?= $rp['image'] ?>')" class="mt-2 w-full border border-blue-600 text-blue-600 font-bold text-xs py-2 rounded-xl hover:bg-blue-600 hover:text-white transition-all flex items-center justify-center gap-1">
              <span>+ Chọn mua</span>
            </button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<script>
  function changeProductQty(delta) {
    const input = document.getElementById('visible-product-qty');
    const formInput = document.getElementById('form-product-qty');
    let val = parseInt(input.value) || 1;
    val = Math.max(1, val + delta);
    input.value = val;
    formInput.value = val;
  }
</script>

<?php require __DIR__ . '/../layout/footer.php'; ?>
