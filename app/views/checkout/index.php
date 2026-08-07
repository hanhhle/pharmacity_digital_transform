<?php require __DIR__ . '/../layout/header.php'; ?>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-6">
    <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <span class="font-semibold text-slate-800">Đặt Hàng Omnichannel & Giao Siêu Tốc 1H</span>
  </div>

  <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm mb-8">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-100 pb-4 mb-6 gap-3">
      <div>
        <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">DX PILLAR #5</span>
        <h1 class="text-xl font-bold text-slate-900 mt-1">Đặt Hàng Omnichannel & Giao Hàng Siêu Tốc 1 Giờ</h1>
        <p class="text-xs text-slate-500 mt-0.5">Lựa chọn linh hoạt: Giao siêu tốc 1H, Nhận tại cửa hàng (Click & Collect), hoặc Đăng ký định kỳ (Subscription).</p>
      </div>
      <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=home" class="text-xs font-bold text-blue-600 hover:underline">← Tiếp tục mua sắm</a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      
      <!-- Checkout Options -->
      <div class="lg:col-span-2 space-y-6">
        <div>
          <h3 class="text-base font-bold text-slate-800 mb-3">1. Lựa Chọn Phương Thức Giao Hàng (Omnichannel Fulfillment)</h3>
          
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
            <!-- 1-Hour Delivery -->
            <div class="border-2 border-blue-600 bg-blue-50/60 p-4 rounded-xl cursor-pointer">
              <div class="text-2xl mb-1">🚀</div>
              <strong class="text-blue-600 text-sm font-bold block">Giao Siêu Tốc 1H</strong>
              <p class="text-[11px] text-slate-500 mt-1">Giao từ cửa hàng PMC Q1 (0.8km). Miễn phí ship đơn từ 150k.</p>
            </div>

            <!-- Click & Collect -->
            <div class="border border-slate-200 bg-slate-50 p-4 rounded-xl cursor-pointer hover:border-blue-600 transition-all">
              <div class="text-2xl mb-1">🏬</div>
              <strong class="text-slate-800 text-sm font-bold block">Click & Collect</strong>
              <p class="text-[11px] text-slate-500 mt-1">Tự đến nhận tại PMC 205 Nguyễn Trãi trong 30 phút.</p>
            </div>

            <!-- Auto Subscription -->
            <div class="border border-slate-200 bg-slate-50 p-4 rounded-xl cursor-pointer hover:border-blue-600 transition-all">
              <div class="text-2xl mb-1">🔄</div>
              <strong class="text-slate-800 text-sm font-bold block">Đăng Ký Định Kỳ</strong>
              <p class="text-[11px] text-amber-600 font-bold mt-1">Giảm 10% cho giao hàng tự động hàng tháng.</p>
            </div>
          </div>

          <!-- Live Courier Map Tracking Animation -->
          <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4">
            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
              <h4 class="font-bold text-slate-900 text-xs md:text-sm">📍 Live Tracking - Theo Dõi Tài Xế GrabExpress (Giao 1H)</h4>
              <span class="bg-emerald-600 text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase">ĐANG GIAO HÀNG (Dự kiến 18 phút)</span>
            </div>

            <div class="bg-slate-200 h-28 rounded-xl relative overflow-hidden flex items-center justify-center p-4">
              <div class="text-center text-slate-600">
                <div class="text-3xl">🗺️ 🛵 💨</div>
                <p class="text-xs font-bold text-slate-800 mt-1">Tài xế Nguyễn Văn B đang di chuyển từ PMC 205 Nguyễn Trãi đến nhà bạn</p>
              </div>
            </div>
          </div>
        </div>

        <div>
          <h3 class="text-base font-bold text-slate-800 mb-3">2. Phương Thức Thanh Toán Tích Hợp Ecosystem (DX #7)</h3>
          <div class="space-y-2">
            <label class="border border-slate-200 p-3 rounded-xl flex items-center gap-3 cursor-pointer text-xs font-medium text-slate-800 hover:border-blue-600 transition-all bg-white">
              <input type="radio" name="payment" checked class="text-blue-600"> ⚡ Ví MoMo / ZaloPay / VNPAY QR / Apple Pay
            </label>
            <label class="border border-slate-200 p-3 rounded-xl flex items-center gap-3 cursor-pointer text-xs font-medium text-slate-800 hover:border-blue-600 transition-all bg-white">
              <input type="radio" name="payment" class="text-blue-600"> 💳 Thẻ ATM Nội Địa / Visa / Mastercard / JCB
            </label>
            <label class="border border-slate-200 p-3 rounded-xl flex items-center gap-3 cursor-pointer text-xs font-medium text-slate-800 hover:border-blue-600 transition-all bg-white">
              <input type="radio" name="payment" class="text-blue-600"> 💵 Tiền mặt khi nhận hàng (COD)
            </label>
          </div>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 flex flex-col justify-between">
        <div>
          <h3 class="font-bold text-slate-900 text-base mb-3 pb-2 border-b border-slate-200">Tóm Tắt Đơn Hàng</h3>

          <?php 
            $subtotal = 0;
            foreach ($cartItems as $item): 
              $itemQty = intval($item['cart_quantity'] ?? 1);
              $itemSubtotal = $item['price'] * $itemQty;
              $subtotal += $itemSubtotal;
          ?>
            <div class="flex items-center justify-between text-xs py-1.5 border-b border-slate-100">
              <div>
                <span class="font-bold text-slate-800 block"><?= htmlspecialchars($item['name']) ?></span>
                <span class="text-slate-400 text-[11px]">x<?= $itemQty ?> <?= htmlspecialchars($item['unit'] ?? 'Hộp') ?></span>
              </div>
              <span class="font-bold text-blue-600"><?= number_format($itemSubtotal, 0, ',', '.') ?> đ</span>
            </div>
          <?php endforeach; ?>

          <div class="space-y-1.5 text-xs text-slate-600 mt-4 pt-3 border-t border-slate-200">
            <div class="flex justify-between">
              <span>Tạm tính:</span>
              <span class="font-bold text-slate-800"><?= number_format($subtotal, 0, ',', '.') ?> ₫</span>
            </div>
            <div class="flex justify-between">
              <span>Phí vận chuyển 1H:</span>
              <span class="text-emerald-600 font-bold">Miễn phí</span>
            </div>
            <div class="flex justify-between">
              <span>Giảm giá P-Xu Extra:</span>
              <span class="text-amber-600 font-bold">-15.000 đ</span>
            </div>
            <div class="flex justify-between text-sm font-bold text-slate-900 pt-2 border-t border-slate-200">
              <span>Tổng thanh toán:</span>
              <span class="text-xl font-black text-blue-600"><?= number_format(max(0, $subtotal - 15000), 0, ',', '.') ?> ₫</span>
            </div>
          </div>
        </div>

        <button onclick="alert('🎉 Đơn hàng đã được xác nhận thành công! Dược sĩ Pharmacity đang tiến hành lấy hàng và bàn giao cho tài xế giao 1H.'); window.location.href='<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account';" class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm py-3 rounded-xl transition-all shadow-md">
          ✅ Xác Nhận Thanh Toán & Đặt Hàng
        </button>
      </div>

    </div>
  </div>
</main>

<?php require __DIR__ . '/../layout/footer.php'; ?>
