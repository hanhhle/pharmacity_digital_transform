<?php require __DIR__ . '/../layout/header.php'; ?>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-6">
    <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=cart" class="hover:text-blue-600">Giỏ hàng</a>
    <span>/</span>
    <span class="font-semibold text-slate-800">Thanh toán & Đặt hàng</span>
  </div>

  <?php
    $subtotal = 0;
    $totalOriginal = 0;
    $totalQty = 0;

    foreach ($cartItems as $item) {
        $qty = intval($item['cart_quantity'] ?? 1);
        $itemPrice = floatval($item['price']);
        $itemOriginal = floatval($item['original_price'] ?? $itemPrice);
        
        $subtotal += ($itemPrice * $qty);
        $totalOriginal += ($itemOriginal * $qty);
        $totalQty += $qty;
    }

    $productDiscount = max(0, $totalOriginal - $subtotal);
  ?>

  <div class="grid grid-cols-1 lg:grid-cols-[min(70%,calc(791rem/16)),1fr] gap-6 items-start">
    
    <!-- LEFT COLUMN: Product List + Fulfillment + Payment -->
    <div class="space-y-6">
      
      <!-- SECTION 1: DANH SÁCH SẢN PHẨM PHẢI THUỘC ĐƠN HÀNG -->
      <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm space-y-4">
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
          <h2 class="text-base md:text-xl font-bold text-slate-900">
            Danh sách sản phẩm (<span id="cart-qty-count"><?= $totalQty ?></span>)
          </h2>
          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=cart" class="text-xs font-bold text-blue-600 hover:underline">
            ← Chỉnh sửa giỏ hàng
          </a>
        </div>

        <?php if (empty($cartItems)): ?>
          <div class="py-8 text-center space-y-3">
            <div class="text-4xl">🛒</div>
            <p class="text-sm font-bold text-slate-700">Chưa có sản phẩm nào được chọn để thanh toán.</p>
            <p class="text-xs text-slate-500">Vui lòng quay lại giỏ hàng và tích chọn các món bạn muốn mua.</p>
            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=cart" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-5 py-2.5 rounded-xl transition-all shadow-sm">
              Quay lại giỏ hàng
            </a>
          </div>
        <?php else: ?>
          <div class="divide-y divide-slate-100">
            <?php foreach ($cartItems as $item): 
              $dealTag = $item['deal_tag'] ?? '';
              if (empty($dealTag)) {
                  if ($item['id'] == 15) $dealTag = 'Mua 2 Tặng 1';
                  elseif ($item['id'] == 16) $dealTag = 'Độc Quyền Online - Deal Online Giảm 50%';
                  elseif ($item['id'] == 17) $dealTag = 'Deal Combo giá chỉ 120K - Duy nhất hôm nay';
              }
              $itemQty = intval($item['cart_quantity'] ?? 1);
              $itemSubtotal = $item['price'] * $itemQty;
            ?>
              <div class="py-4 first:pt-0 last:pb-0 flex flex-col md:flex-row gap-4 justify-between items-start md:items-center">
                
                <div class="flex flex-1 gap-3 items-start">
                  <!-- Strict Fixed Dimensions for Thumbnail Image (Max 80px x 80px) -->
                  <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=<?= $item['id'] ?>" class="shrink-0">
                    <div class="w-[80px] h-[80px] min-w-[80px] min-h-[80px] max-w-[80px] max-h-[80px] shrink-0 rounded-xl border border-slate-200 overflow-hidden bg-slate-50 p-1 flex items-center justify-center">
                      <img class="max-w-full max-h-full object-contain shrink-0" src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>">
                    </div>
                  </a>

                  <div class="space-y-1 flex-1">
                    <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=<?= $item['id'] ?>">
                      <h3 class="font-bold text-xs md:text-sm text-slate-800 line-clamp-2 hover:text-blue-600 transition-colors leading-snug">
                        <?= htmlspecialchars($item['name']) ?>
                      </h3>
                    </a>
                    <p class="text-xs text-slate-500">
                      Phân loại: <span class="bg-slate-100 text-slate-700 font-semibold px-2 py-0.5 rounded-full text-[11px]"><?= htmlspecialchars($item['unit'] ?? 'Hộp') ?></span>
                    </p>

                    <?php if (!empty($dealTag)): ?>
                      <div class="pt-1">
                        <span class="inline-flex items-center gap-1 rounded-md px-2 py-0.5 bg-emerald-600 text-white text-[10px] font-bold">
                          🏷️ <?= htmlspecialchars($dealTag) ?>
                        </span>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>

                <!-- Quantity & Price Column -->
                <div class="flex items-center justify-between w-full md:w-auto md:justify-end gap-6 border-t md:border-t-0 border-slate-100 pt-2 md:pt-0 shrink-0">
                  <span class="text-xs md:text-sm font-bold text-slate-700">x<?= $itemQty ?></span>

                  <div class="text-right">
                    <span class="font-extrabold text-sm md:text-base text-blue-600 block">
                      <?= number_format($itemSubtotal, 0, ',', '.') ?> ₫
                    </span>
                    <?php if (!empty($item['original_price']) && $item['original_price'] > $item['price']): ?>
                      <span class="text-[11px] text-slate-400 line-through block">
                        <?= number_format($item['original_price'] * $itemQty, 0, ',', '.') ?> ₫
                      </span>
                    <?php endif; ?>
                  </div>
                </div>

              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- SECTION 2: HÌNH THỨC NHẬN HÀNG (FULLFILLMENT) -->
      <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm space-y-6">
        <h2 class="text-base md:text-xl font-bold text-slate-900 border-b border-slate-100 pb-3">
          Hình thức nhận hàng
        </h2>

        <!-- Tabs Switch: Giao hàng tận nơi vs Nhận tại nhà thuốc -->
        <div class="bg-slate-100 p-1.5 rounded-xl flex items-center max-w-lg mx-auto text-xs md:text-sm font-bold text-slate-600">
          <button type="button" id="tab-btn-delivery" onclick="switchFulfillmentTab('delivery')" class="flex-1 py-2.5 rounded-lg text-center transition-all bg-white text-blue-600 shadow-xs">
            🚚 Giao hàng tận nơi
          </button>
          <button type="button" id="tab-btn-pickup" onclick="switchFulfillmentTab('pickup')" class="flex-1 py-2.5 rounded-lg text-center transition-all hover:text-slate-900">
            🏬 Nhận tại nhà thuốc
          </button>
        </div>

        <!-- TAB CONTENT 1: GIAO HÀNG TẬN NƠI -->
        <div id="tab-content-delivery" class="space-y-5">
          <!-- Delivery Options Radio List -->
          <div class="space-y-3">
            <label class="font-bold text-xs uppercase text-slate-700 tracking-wider block">Chọn phương thức vận chuyển</label>
            
            <!-- Option A: Giao Siêu Tốc 1H -->
            <label onclick="updateDeliveryOption('express')" class="delivery-option-card border-2 border-blue-600 bg-blue-50/50 p-4 rounded-xl flex items-start gap-3 cursor-pointer hover:border-blue-600 transition-all">
              <input type="radio" name="shipping_method" value="express" checked class="mt-1 text-blue-600 focus:ring-blue-500">
              <div class="space-y-1">
                <div class="flex items-center gap-2">
                  <strong class="text-sm font-extrabold text-blue-700">⚡ Giao Siêu Tốc 1H (GrabExpress / Lalamove)</strong>
                  <span class="bg-emerald-600 text-white text-[10px] font-extrabold px-2 py-0.5 rounded">MIỄN PHÍ SHIP ĐƠN TỪ 150K</span>
                </div>
                <p class="text-xs text-slate-600">Giao nhanh từ nhà thuốc Pharmacity PMC Q1 gần bạn nhất (0.8km). Dự kiến nhận trong 45 - 60 phút.</p>
              </div>
            </label>

            <!-- Option B: VNPost Express -->
            <label onclick="updateDeliveryOption('standard')" class="delivery-option-card border border-slate-200 bg-white p-4 rounded-xl flex items-start gap-3 cursor-pointer hover:border-blue-600 transition-all">
              <input type="radio" name="shipping_method" value="standard" class="mt-1 text-blue-600 focus:ring-blue-500">
              <div class="space-y-1">
                <strong class="text-sm font-extrabold text-slate-800">🚚 Giao hàng tiêu chuẩn qua VNPost Express</strong>
                <p class="text-xs text-slate-600">Giao hàng tận nơi toàn quốc. Thời gian nhận hàng 1 - 2 ngày làm việc.</p>
              </div>
            </label>
          </div>

          <!-- Shipping Address Box -->
          <div class="border-t border-slate-100 pt-4 space-y-3">
            <div class="flex items-center justify-between">
              <label class="font-bold text-xs uppercase text-slate-700 tracking-wider">Địa chỉ nhận hàng</label>
              <button type="button" onclick="toggleEditAddressModal()" class="text-xs font-bold text-blue-600 hover:underline">
                Thay đổi địa chỉ
              </button>
            </div>

            <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200 flex items-start gap-3 text-xs">
              <span class="text-base">📍</span>
              <div>
                <strong class="text-slate-900 font-extrabold block text-sm">Nguyễn Văn A (0908 123 456)</strong>
                <p id="display-shipping-address" class="text-slate-600 mt-0.5">205 Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, TP. Hồ Chí Minh</p>
              </div>
            </div>

            <!-- Address Edit Form (Toggle) -->
            <div id="address-edit-box" class="hidden bg-blue-50/50 p-4 rounded-xl border border-blue-200 space-y-3 text-xs">
              <h4 class="font-bold text-blue-900 text-xs uppercase">Cập Nhật Địa Chỉ Mới</h4>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <input type="text" id="input-fullname" value="Nguyễn Văn A" placeholder="Họ và tên người nhận" class="p-2 border border-slate-300 rounded-lg bg-white">
                <input type="text" id="input-phone" value="0908 123 456" placeholder="Số điện thoại" class="p-2 border border-slate-300 rounded-lg bg-white">
              </div>
              <input type="text" id="input-address" value="205 Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, TP. Hồ Chí Minh" placeholder="Số nhà, tên đường, Phường/Xã, Quận/Huyện, TP" class="w-full p-2 border border-slate-300 rounded-lg bg-white">
              <button type="button" onclick="saveNewAddress()" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded-lg transition-all">Lưu địa chỉ</button>
            </div>
          </div>

          <!-- Order Note Input -->
          <div class="border-t border-slate-100 pt-4 space-y-1.5">
            <label for="order-note-input" class="font-bold text-xs text-slate-700 block">Ghi chú cho đơn hàng (không bắt buộc)</label>
            <input type="text" id="order-note-input" maxlength="150" placeholder="Ví dụ: Giao hàng giờ hành chính, gọi điện trước khi giao 15 phút..." class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:bg-white focus:border-blue-600 focus:outline-none transition-all">
          </div>
        </div>

        <!-- TAB CONTENT 2: NHẬN TẠI NHÀ THUỐC (CLICK & COLLECT) -->
        <div id="tab-content-pickup" class="hidden space-y-4">
          <div class="bg-amber-50 border border-amber-200 p-4 rounded-xl text-xs space-y-1 text-amber-900">
            <strong class="font-bold block text-sm">🏬 Dịch vụ Click & Collect - Nhận tại nhà thuốc trong 30 phút</strong>
            <p>Dược sĩ Pharmacity sẽ soạn sẵn đơn hàng của bạn. Bạn chỉ cần tới quầy đọc Tên / SĐT để nhận hàng ngay mà không phải chờ đợi.</p>
          </div>

          <div class="space-y-2">
            <label class="font-bold text-xs uppercase text-slate-700 tracking-wider block">Chọn nhà thuốc Pharmacity gần bạn nhất</label>
            <select id="pickup-store-select" onchange="updatePickupStore(this.value)" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl text-xs md:text-sm font-semibold text-slate-800 focus:outline-none focus:border-blue-600">
              <option value="PMC 205 Nguyễn Trãi, Q1">Pharmacity 205 Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, TP.HCM (Cách 0.8km - Mở cửa 24h)</option>
              <option value="PMC 77 Nguyễn Hữu Cầu, Q1">Pharmacity 77 Nguyễn Hữu Cầu, Phường Tân Định, Quận 1, TP.HCM (Cách 1.2km)</option>
              <option value="PMC 280 Phan Xích Long, Phú Nhuận">Pharmacity 280 Phan Xích Long, Phường 07, Quận Phú Nhuận, TP.HCM (Cách 2.5km)</option>
              <option value="PMC 392A Dương Quảng Hàm, Gò Vấp">Pharmacity 392A Dương Quảng Hàm, Phường 05, Quận Gò Vấp, TP.HCM (Cách 3.8km)</option>
              <option value="PMC 364 Cộng Hòa, Tân Bình">Pharmacity 364 Cộng Hòa, Phường 13, Quận Tân Bình, TP.HCM (Cách 4.2km)</option>
            </select>
          </div>
        </div>

        <!-- OPTION ĐĂNG KÝ ĐỊNH KỲ (SUBSCRIPTION CHECKBOX) -->
        <div class="border-t border-slate-100 pt-4">
          <label class="flex items-start gap-2.5 cursor-pointer bg-slate-50 hover:bg-blue-50/50 p-3.5 rounded-xl border border-slate-200 transition-all">
            <input type="checkbox" id="subscription-checkbox" onchange="toggleSubscriptionOptions(this.checked)" class="mt-0.5 w-4 h-4 text-blue-600 rounded border-slate-300 focus:ring-blue-500">
            <div>
              <span class="font-extrabold text-xs md:text-sm text-slate-800 block">🔄 Đăng ký giao hàng tự động định kỳ (Tiết kiệm thêm 10%)</span>
              <span class="text-xs text-slate-500 block mt-0.5">Tự động giao thuốc / TPCN đúng ngày mỗi tháng mà không cần đặt lại thủ công. Hủy bất kỳ lúc nào.</span>
            </div>
          </label>

          <!-- Cycle Selector Dropdown -->
          <div id="subscription-cycle-box" class="hidden mt-3 pl-7 space-y-2">
            <label class="font-bold text-xs text-blue-700 block">Chọn chu kỳ giao tự động:</label>
            <select id="subscription-cycle-select" onchange="recalculateTotals()" class="w-full md:w-72 p-2.5 bg-white border border-blue-300 rounded-xl text-xs font-bold text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="30">🔄 Hàng tháng (Mỗi 30 ngày) - Giảm 10%</option>
              <option value="60">🔄 Mỗi 2 tháng (Mỗi 60 ngày) - Giảm 10%</option>
              <option value="90">🔄 Mỗi 3 tháng (Mỗi 90 ngày) - Giảm 10%</option>
            </select>
          </div>
        </div>

      </div>

      <!-- SECTION 3: PHƯƠNG THỨC THANH TOÁN TÍCH HỢP ECOSYSTEM -->
      <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm space-y-4">
        <h2 class="text-base md:text-xl font-bold text-slate-900 border-b border-slate-100 pb-3">
          Phương thức thanh toán
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-xs">
          <!-- COD -->
          <label class="payment-method-card border border-slate-200 bg-slate-50 hover:bg-blue-50 p-3.5 rounded-xl flex items-center gap-3 cursor-pointer transition-all">
            <input type="radio" name="payment_method" value="cod" checked class="text-blue-600 focus:ring-blue-500">
            <div class="w-10 h-10 rounded-lg border border-slate-200 bg-white p-1 flex items-center justify-center shrink-0">
              <img src="https://prod-cdn.pharmacity.io/e-com/images/payment-methods/20240219101736-0-COD.png" class="w-full h-full object-contain" alt="COD">
            </div>
            <div>
              <strong class="text-slate-800 text-sm block">Tiền mặt khi nhận hàng (COD)</strong>
              <span class="text-slate-400 text-[11px]">Thanh toán trực tiếp cho shipper</span>
            </div>
          </label>

          <!-- MoMo -->
          <label class="payment-method-card border border-slate-200 bg-slate-50 hover:bg-blue-50 p-3.5 rounded-xl flex items-center gap-3 cursor-pointer transition-all">
            <input type="radio" name="payment_method" value="momo" class="text-blue-600 focus:ring-blue-500">
            <div class="w-10 h-10 rounded-lg border border-slate-200 bg-white p-1 flex items-center justify-center shrink-0">
              <img src="https://prod-cdn.pharmacity.io/e-com/images/payment-methods/20240219102059-0-Momo.png" class="w-full h-full object-contain" alt="MoMo">
            </div>
            <div>
              <strong class="text-slate-800 text-sm block">Ví điện tử MoMo</strong>
              <span class="text-slate-400 text-[11px]">Quét mã QR MoMo App</span>
            </div>
          </label>

          <!-- ZaloPay -->
          <label class="payment-method-card border border-slate-200 bg-slate-50 hover:bg-blue-50 p-3.5 rounded-xl flex items-center gap-3 cursor-pointer transition-all">
            <input type="radio" name="payment_method" value="zalopay" class="text-blue-600 focus:ring-blue-500">
            <div class="w-10 h-10 rounded-lg border border-slate-200 bg-white p-1 flex items-center justify-center shrink-0">
              <img src="https://prod-cdn.pharmacity.io/e-com/images/payment-methods/20240219102305-0-Viettelmoney%20%281%29.png" class="w-full h-full object-contain" alt="ZaloPay">
            </div>
            <div>
              <strong class="text-slate-800 text-sm block">Ví ZaloPay / Viettel Money</strong>
              <span class="text-slate-400 text-[11px]">Thanh toán nhanh qua ví điện tử</span>
            </div>
          </label>

          <!-- ATM -->
          <label class="payment-method-card border border-slate-200 bg-slate-50 hover:bg-blue-50 p-3.5 rounded-xl flex items-center gap-3 cursor-pointer transition-all">
            <input type="radio" name="payment_method" value="atm" class="text-blue-600 focus:ring-blue-500">
            <div class="w-10 h-10 rounded-lg border border-slate-200 bg-white p-1 flex items-center justify-center shrink-0">
              <img src="https://prod-cdn.pharmacity.io/e-com/images/payment-methods/20240219102148-0-ATM.png" class="w-full h-full object-contain" alt="ATM">
            </div>
            <div>
              <strong class="text-slate-800 text-sm block">Thẻ ATM Nội Địa</strong>
              <span class="text-slate-400 text-[11px]">Cổng Internet Banking 40+ Ngân hàng</span>
            </div>
          </label>

          <!-- VISA -->
          <label class="payment-method-card border border-slate-200 bg-slate-50 hover:bg-blue-50 p-3.5 rounded-xl flex items-center gap-3 cursor-pointer transition-all">
            <input type="radio" name="payment_method" value="visa" class="text-blue-600 focus:ring-blue-500">
            <div class="w-10 h-10 rounded-lg border border-slate-200 bg-white p-1 flex items-center justify-center shrink-0">
              <img src="https://prod-cdn.pharmacity.io/e-com/images/payment-methods/20240219102227-0-Visa.png" class="w-full h-full object-contain" alt="Visa">
            </div>
            <div>
              <strong class="text-slate-800 text-sm block">Thẻ Quốc Tế (Visa / Mastercard)</strong>
              <span class="text-slate-400 text-[11px]">Bảo mật thẻ quốc tế 3D Secure</span>
            </div>
          </label>

          <!-- PayLater / Apple Pay -->
          <label class="payment-method-card border border-slate-200 bg-slate-50 hover:bg-blue-50 p-3.5 rounded-xl flex items-center gap-3 cursor-pointer transition-all">
            <input type="radio" name="payment_method" value="paylater" class="text-blue-600 focus:ring-blue-500">
            <div class="w-10 h-10 rounded-lg border border-slate-200 bg-white p-1 flex items-center justify-center shrink-0">
              <img src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20251114030510-0-logo-paylater.png" class="w-full h-full object-contain" alt="Paylater">
            </div>
            <div>
              <strong class="text-slate-800 text-sm block">Ví Trả Sau MoMo / Apple Pay</strong>
              <span class="text-slate-400 text-[11px]">Mua trước trả sau 0% lãi suất</span>
            </div>
          </label>
        </div>
      </div>

    </div>

    <!-- RIGHT COLUMN: Sticky Order Summary & Price Breakdown -->
    <div class="sticky top-24 space-y-4">
      
      <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm space-y-4">
        
        <!-- Promo Code Voucher Selector -->
        <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2">
            <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 text-amber-500"><path fill="currentColor" d="M19.82 7.714a.964.964 0 0 0-.964-.964H5.142a.964.964 0 0 0-.964.964v1.264a3.522 3.522 0 0 1 0 6.044v1.264c0 .532.431.964.964.964h13.714a.964.964 0 0 0 .964-.964v-1.264a3.523 3.523 0 0 1 0-6.043zm1.5 1.513c0 .405-.227.773-.584.957h.001l-.038.02-.002.001a2.022 2.022 0 0 0-.098 3.536l.126.069h.002l.128.077c.285.197.465.525.465.886v1.513a2.464 2.464 0 0 1-2.464 2.464H5.142a2.464 2.464 0 0 1-2.464-2.464v-1.513c0-.409.232-.78.593-.963h.002l.126-.069a2.022 2.022 0 0 0 0-3.482l-.126-.069h-.002a1.08 1.08 0 0 1-.593-.963V7.714A2.464 2.464 0 0 1 5.142 5.25h13.714a2.464 2.464 0 0 1 2.464 2.464z"></path></svg>
            <span class="font-bold text-slate-800">Pharmacity Khuyến Mãi</span>
          </div>
          <button type="button" onclick="alert('Đã áp dụng Mã Khuyến Mãi Voucher Pharmacity 15.000đ!')" class="font-extrabold text-blue-600 hover:underline">
            Chọn mã
          </button>
        </div>

        <!-- P-Xu Extra Loyalty Points Option -->
        <div class="bg-amber-50/50 p-3 rounded-xl border border-amber-200/60 flex items-center justify-between text-xs">
          <label class="flex items-center gap-2 cursor-pointer font-bold text-amber-900">
            <input type="checkbox" id="pxu-checkbox" onchange="recalculateTotals()" class="w-4 h-4 text-amber-600 rounded border-amber-400 focus:ring-amber-500">
            <span>Dùng 2.450 P-Xu Đồng</span>
          </label>
          <span class="font-extrabold text-amber-700">-24.500 ₫</span>
        </div>

        <!-- VAT Invoice Option -->
        <div class="flex items-center justify-between text-xs border-t border-slate-100 pt-3">
          <label class="font-bold text-slate-700 cursor-pointer flex items-center gap-2">
            <input type="checkbox" id="vat-checkbox" class="w-4 h-4 text-blue-600 rounded border-slate-300">
            <span>Yêu cầu xuất hóa đơn VAT</span>
          </label>
        </div>

        <!-- Hide Product Info Option (Switch Toggle) -->
        <div class="flex items-center justify-between text-xs border-t border-slate-100 pt-3">
          <div>
            <span class="font-bold text-slate-800 block">Ẩn thông tin sản phẩm</span>
            <span class="text-[11px] text-slate-400">Ẩn tên thuốc nhạy cảm trên Phiếu gửi hàng</span>
          </div>
          <label class="relative inline-flex items-center cursor-pointer">
            <input type="checkbox" id="hide-info-toggle" class="sr-only peer">
            <div class="w-9 h-5 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-blue-600"></div>
          </label>
        </div>

        <!-- Price Breakdown Box (Calculated Automatically) -->
        <div class="space-y-2 text-xs border-t border-slate-100 pt-4">
          <div class="flex justify-between text-slate-600">
            <span>Tạm tính (<strong id="summary-items-count"><?= $totalQty ?></strong> sản phẩm):</span>
            <span id="summary-subtotal-val" class="font-bold text-slate-800"><?= number_format($subtotal, 0, ',', '.') ?> ₫</span>
          </div>

          <div class="flex justify-between text-slate-600">
            <span>Phí vận chuyển:</span>
            <span id="summary-shipping-val" class="font-bold text-emerald-600">Miễn phí</span>
          </div>

          <?php if ($productDiscount > 0): ?>
            <div class="flex justify-between text-slate-600">
              <span>Giảm giá sản phẩm (Deals):</span>
              <span id="summary-product-discount-val" class="font-bold text-emerald-600">-<?= number_format($productDiscount, 0, ',', '.') ?> ₫</span>
            </div>
          <?php endif; ?>

          <div id="summary-subscription-row" class="hidden justify-between text-slate-600">
            <span>Ưu đãi Đăng ký định kỳ (-10%):</span>
            <span id="summary-subscription-val" class="font-bold text-emerald-600">-0 ₫</span>
          </div>

          <div id="summary-pxu-row" class="hidden justify-between text-slate-600">
            <span>Trừ P-Xu Đồng:</span>
            <span id="summary-pxu-val" class="font-bold text-amber-600">-24.500 ₫</span>
          </div>

          <!-- Total Amount Row -->
          <div class="border-t border-slate-200 pt-3 flex justify-between items-baseline">
            <div>
              <span class="font-bold text-base text-slate-900 block">Tổng tiền thanh toán</span>
              <span class="text-[11px] text-slate-400">(Đã bao gồm VAT & Miễn phí ship)</span>
            </div>
            <span id="summary-final-total" class="font-extrabold text-2xl text-blue-600">
              <?= number_format(max(0, $subtotal), 0, ',', '.') ?> ₫
            </span>
          </div>
        </div>

        <!-- Terms Agreement Checkbox (REQUIRED) -->
        <div class="border-t border-slate-100 pt-3">
          <label class="flex items-start gap-2 cursor-pointer text-xs text-slate-600 leading-relaxed">
            <input type="checkbox" id="terms-checkbox" onchange="toggleTermsAgreement(this.checked)" class="mt-0.5 w-4 h-4 text-blue-600 rounded border-slate-300 focus:ring-blue-500">
            <span>Bằng cách tích vào ô chọn, bạn đã đồng ý với <a href="#" class="text-blue-600 font-bold hover:underline">Điều khoản Pharmacity</a> và xác nhận đã đọc kỹ thông tin sản phẩm.</span>
          </label>
        </div>

        <!-- Place Order Button (Disabled until terms checked) -->
        <button type="button" id="btn-submit-order" onclick="submitPharmacityOrder()" disabled class="w-full bg-slate-400 opacity-50 cursor-not-allowed text-white font-extrabold py-3.5 rounded-xl text-base transition-all shadow-md flex items-center justify-center gap-2">
          <span>🚀 XÁC NHẬN ĐẶT HÀNG</span>
        </button>

      </div>

    </div>

  </div>
</main>

<script>
  let baseSubtotal = <?= $subtotal ?>;
  let currentFulfillment = 'delivery';
  let currentShippingMethod = 'express';

  function toggleTermsAgreement(isAgreed) {
    const btn = document.getElementById('btn-submit-order');
    if (!btn) return;
    if (isAgreed) {
      btn.disabled = false;
      btn.className = 'w-full bg-blue-600 hover:bg-blue-700 text-white font-extrabold py-3.5 rounded-xl text-base transition-all shadow-md flex items-center justify-center gap-2 cursor-pointer';
    } else {
      btn.disabled = true;
      btn.className = 'w-full bg-slate-400 opacity-50 cursor-not-allowed text-white font-extrabold py-3.5 rounded-xl text-base transition-all shadow-md flex items-center justify-center gap-2';
    }
  }

  function switchFulfillmentTab(type) {
    currentFulfillment = type;
    const btnDelivery = document.getElementById('tab-btn-delivery');
    const btnPickup = document.getElementById('tab-btn-pickup');
    const contentDelivery = document.getElementById('tab-content-delivery');
    const contentPickup = document.getElementById('tab-content-pickup');

    if (type === 'delivery') {
      btnDelivery.className = 'flex-1 py-2.5 rounded-lg text-center transition-all bg-white text-blue-600 shadow-xs font-bold';
      btnPickup.className = 'flex-1 py-2.5 rounded-lg text-center transition-all hover:text-slate-900 font-bold';
      contentDelivery.classList.remove('hidden');
      contentPickup.classList.add('hidden');
    } else {
      btnPickup.className = 'flex-1 py-2.5 rounded-lg text-center transition-all bg-white text-blue-600 shadow-xs font-bold';
      btnDelivery.className = 'flex-1 py-2.5 rounded-lg text-center transition-all hover:text-slate-900 font-bold';
      contentPickup.classList.remove('hidden');
      contentDelivery.classList.add('hidden');
    }

    recalculateTotals();
  }

  function updateDeliveryOption(method) {
    currentShippingMethod = method;
    recalculateTotals();
  }

  function toggleEditAddressModal() {
    const box = document.getElementById('address-edit-box');
    if (box) box.classList.toggle('hidden');
  }

  function saveNewAddress() {
    const fn = document.getElementById('input-fullname').value;
    const phone = document.getElementById('input-phone').value;
    const addr = document.getElementById('input-address').value;
    
    document.getElementById('display-shipping-address').innerText = addr + ' (' + fn + ' - ' + phone + ')';
    toggleEditAddressModal();
  }

  function toggleSubscriptionOptions(isChecked) {
    const box = document.getElementById('subscription-cycle-box');
    if (box) {
      if (isChecked) box.classList.remove('hidden');
      else box.classList.add('hidden');
    }
    recalculateTotals();
  }

  function recalculateTotals() {
    let shippingFee = 0;
    
    if (currentFulfillment === 'delivery') {
      if (baseSubtotal < 150000 && currentShippingMethod === 'express') {
        shippingFee = 15000;
      } else if (currentShippingMethod === 'standard') {
        shippingFee = (baseSubtotal >= 250000) ? 0 : 20000;
      } else {
        shippingFee = 0;
      }
    } else {
      shippingFee = 0;
    }

    const shippingEl = document.getElementById('summary-shipping-val');
    if (shippingEl) {
      shippingEl.innerText = (shippingFee === 0) ? 'Miễn phí' : shippingFee.toLocaleString('vi-VN') + ' ₫';
    }

    let subDiscount = 0;
    const isSubscribed = document.getElementById('subscription-checkbox')?.checked;
    const subRow = document.getElementById('summary-subscription-row');
    const subVal = document.getElementById('summary-subscription-val');

    if (isSubscribed) {
      subDiscount = Math.round(baseSubtotal * 0.1);
      if (subRow) subRow.classList.remove('hidden');
      if (subVal) subVal.innerText = '-' + subDiscount.toLocaleString('vi-VN') + ' ₫';
    } else {
      if (subRow) subRow.classList.add('hidden');
    }

    let pxuDiscount = 0;
    const isPxuUsed = document.getElementById('pxu-checkbox')?.checked;
    const pxuRow = document.getElementById('summary-pxu-row');

    if (isPxuUsed) {
      pxuDiscount = 24500;
      if (pxuRow) pxuRow.classList.remove('hidden');
    } else {
      if (pxuRow) pxuRow.classList.add('hidden');
    }

    let finalTotal = Math.max(0, baseSubtotal + shippingFee - subDiscount - pxuDiscount);
    const finalEl = document.getElementById('summary-final-total');
    if (finalEl) {
      finalEl.innerText = finalTotal.toLocaleString('vi-VN') + ' ₫';
    }
  }

  function submitPharmacityOrder() {
    const terms = document.getElementById('terms-checkbox')?.checked;
    if (!terms) {
      alert('⚠️ Bạn chưa tích đồng ý với Điều khoản Pharmacity! Vui lòng tích chọn ô điều khoản trước khi đặt hàng.');
      return;
    }

    const orderCode = 'PMC-ORD-2026-' + Math.floor(100 + Math.random() * 900);
    alert('🎉 ĐẶT HÀNG THÀNH CÔNG! (Mã đơn: ' + orderCode + ')\nDược sĩ Pharmacity đang tiến hành đóng gói và giao hàng cho bạn.');
    window.location.href = '<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account#prescriptions';
  }
</script>

<?php require __DIR__ . '/../layout/footer.php'; ?>
