<?php require __DIR__ . '/../layout/header.php'; ?>

<main id="mainContent" class="z-20 mx-auto min-h-screen bg-slate-100 pt-[44px] md:min-h-fit md:pt-0">
  <div class="bg-white xl:bg-slate-100">
    <div class="lg:mt-4">
      <div class="container mx-auto px-4 md:max-w-[1384px] flex flex-col gap-2 max-lg:px-0">
        
        <!-- Header Title -->
        <div class="mt-2 max-lg:px-4 md:mb-3 md:mt-4">
          <h1 class="font-extrabold text-xl leading-snug tracking-tight md:text-3xl text-slate-900">
            Giỏ hàng (<?= count($cartItems) ?>)
          </h1>
        </div>

        <?php if (empty($cartItems)): ?>
          <!-- Empty Cart View -->
          <div class="bg-white rounded-2xl p-12 text-center border border-slate-200 space-y-4 my-6">
            <div class="w-24 h-24 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto text-4xl">
              🛒
            </div>
            <h2 class="text-xl font-bold text-slate-800">Giỏ hàng của bạn đang trống</h2>
            <p class="text-slate-500 text-sm">Hãy khám phá hàng ngàn sản phẩm thuốc, TPCN và dược mỹ phẩm chính hãng tại Pharmacity!</p>
            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=home" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3 rounded-xl transition-all shadow-md">
              Khám phá sản phẩm ngay
            </a>
          </div>
        <?php else: ?>

          <!-- Main Cart Grid -->
          <div class="relative grid items-start gap-4 md:grid-cols-1 md:pb-4 lg:grid-cols-[min(70%,calc(791rem/16)),1fr]">
            
            <!-- Left Column: Products List Table -->
            <div class="grid gap-4">
              
              <!-- Free Shipping Top Banner -->
              <div class="flex items-center justify-center gap-2 bg-blue-600 p-4 lg:rounded-t-2xl">
                <label class="font-bold text-sm text-white flex items-center gap-2">
                  <span>🚚 Miễn phí vận chuyển cho mọi đơn hàng từ 0đ</span>
                </label>
              </div>

              <!-- Cart Items List Container -->
              <div class="grid gap-6 rounded-b-2xl bg-white p-4 md:p-6 border border-slate-200/80 shadow-xs">
                
                <!-- Table Header Actions -->
                <div class="grid grid-cols-[auto_1fr_auto] items-center gap-4 border-b border-slate-100 pb-3">
                  <div class="flex items-center">
                    <input type="checkbox" id="select-all-checkbox" onchange="toggleSelectAll(this.checked)" class="w-4 h-4 text-blue-600 rounded border-slate-300 focus:ring-blue-500 cursor-pointer">
                  </div>
                  
                  <div class="flex items-center justify-between space-x-4">
                    <div class="flex flex-1 items-start gap-2">
                      <label for="select-all-checkbox" class="font-bold text-xs md:text-sm uppercase tracking-wider text-slate-700 cursor-pointer select-none">Sản phẩm</label>
                      <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=cart" method="POST" class="inline">
                        <input type="hidden" name="action" value="clear">
                        <button type="submit" onclick="return confirm('Bạn có chắc muốn xóa tất cả sản phẩm khỏi giỏ hàng?')" class="font-bold text-xs text-blue-600 hover:underline border-l border-slate-300 pl-3">
                          Xóa tất cả
                        </button>
                      </form>
                    </div>

                    <div class="hidden justify-center space-x-12 md:flex text-xs font-bold text-slate-700 uppercase tracking-wider">
                      <span class="w-28 text-center">Đơn giá</span>
                      <span class="w-24 text-center">Số lượng</span>
                    </div>
                  </div>

                  <div class="w-6"></div>
                </div>

                <!-- Loop Products -->
                <?php foreach ($cartItems as $index => $item): 
                  $dealTag = $item['deal_tag'] ?? '';
                  if (empty($dealTag)) {
                      if ($item['id'] == 15) $dealTag = 'Mua 2 Tặng 1';
                      elseif ($item['id'] == 16) $dealTag = 'Độc Quyền Online - Deal Online Giảm 50%';
                      elseif ($item['id'] == 17) $dealTag = 'Deal Combo giá chỉ 120K - Duy nhất hôm nay';
                  }
                  $isAutoChecked = !empty($item['auto_checked']);
                ?>
                  <div class="cart-item-row grid items-start gap-3 md:gap-4 md:grid-cols-[auto_1fr_auto] border-b border-slate-100 pb-4 last:border-b-0 last:pb-0"
                       data-price="<?= $item['price'] ?>"
                       data-original-price="<?= $item['original_price'] ?? $item['price'] ?>"
                       data-deal="<?= htmlspecialchars($dealTag) ?>"
                       data-id="<?= $item['id'] ?>">
                    
                    <!-- Item Checkbox -->
                    <div class="pt-2">
                      <input type="checkbox" 
                             class="cart-item-checkbox w-4 h-4 text-blue-600 rounded border-slate-300 focus:ring-blue-500 cursor-pointer"
                             onchange="updateCartCalculations()"
                             <?= $isAutoChecked ? 'checked' : '' ?>>
                    </div>

                    <!-- Product Info & Quantity controls -->
                    <div class="space-y-2">
                      <div class="grid grid-cols-[68px_1fr] items-start gap-3">
                        
                        <!-- Thumbnail Link -->
                        <div class="relative h-18 w-18 rounded-xl border border-slate-200 overflow-hidden bg-slate-50 shrink-0">
                          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=<?= $item['id'] ?>">
                            <img class="w-full h-full object-contain p-1" src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>">
                          </a>
                        </div>

                        <!-- Details Row -->
                        <div class="flex flex-col md:flex-row justify-between md:space-x-4">
                          <div class="grid flex-1 content-start gap-1">
                            <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=product&id=<?= $item['id'] ?>">
                              <h3 class="font-bold text-xs md:text-sm text-slate-800 line-clamp-2 hover:text-blue-600 transition-all">
                                <?= htmlspecialchars($item['name']) ?>
                              </h3>
                            </a>
                            <div class="flex items-center gap-1 text-xs text-slate-500">
                              <span>Phân loại:</span>
                              <span class="bg-slate-100 text-slate-700 font-semibold px-2.5 py-0.5 rounded-full text-[11px]">
                                <?= htmlspecialchars($item['unit'] ?? 'Hộp') ?>
                              </span>
                            </div>
                          </div>

                          <!-- Price & Quantity -->
                          <div class="flex items-center justify-between md:justify-center space-x-4 mt-2 md:mt-0">
                            <div class="flex flex-col md:w-28 md:items-center">
                              <span class="font-extrabold text-sm md:text-base text-blue-600">
                                <?= number_format($item['price'], 0, ',', '.') ?> ₫
                              </span>
                              <?php if (!empty($item['original_price']) && $item['original_price'] > $item['price']): ?>
                                <span class="text-[11px] text-slate-400 line-through">
                                  <?= number_format($item['original_price'], 0, ',', '.') ?> ₫
                                </span>
                              <?php endif; ?>
                            </div>

                            <!-- Quantity Adjuster Form -->
                            <div class="flex items-center gap-1">
                              <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=cart" method="POST" class="inline">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                                <input type="hidden" name="quantity" value="<?= $item['cart_quantity'] - 1 ?>">
                                <button type="submit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-slate-100 hover:bg-slate-200 font-bold text-slate-700 text-sm border border-slate-200">-</button>
                              </form>

                              <span class="cart-item-qty w-8 text-center font-bold text-slate-800 text-sm" data-qty="<?= $item['cart_quantity'] ?>">
                                <?= $item['cart_quantity'] ?>
                              </span>

                              <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=cart" method="POST" class="inline">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                                <input type="hidden" name="quantity" value="<?= $item['cart_quantity'] + 1 ?>">
                                <button type="submit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-slate-100 hover:bg-slate-200 font-bold text-slate-700 text-sm border border-slate-200">+</button>
                              </form>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Deal Promotion Tag Badge -->
                      <?php if (!empty($dealTag)): ?>
                        <div class="flex flex-wrap gap-1 pt-1">
                          <span class="inline-flex items-center gap-1 rounded-md px-2.5 py-1 bg-emerald-600 text-white text-[11px] font-bold shadow-2xs">
                            🏷️ <?= htmlspecialchars($dealTag) ?>
                          </span>
                        </div>
                      <?php endif; ?>
                    </div>

                    <!-- Delete Button -->
                    <div class="pt-2">
                      <form action="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=cart" method="POST">
                        <input type="hidden" name="action" value="remove">
                        <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                        <button type="submit" title="Xóa khỏi giỏ" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-red-50 hover:text-red-600 text-slate-400 flex items-center justify-center transition-all">
                          <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                        </button>
                      </form>
                    </div>

                  </div>
                <?php endforeach; ?>

              </div>
            </div>

            <!-- Right Column: Order Summary Box (Sticky) -->
            <div class="sticky top-24 space-y-3 rounded-2xl bg-white p-4 md:p-6 border border-slate-200/80 shadow-xs">
              
              <h3 class="font-bold text-base text-slate-900 border-b border-slate-100 pb-3">Tổng quan đơn hàng</h3>

              <!-- Promo Code Voucher Selection -->
              <div class="flex items-center justify-between rounded-xl bg-slate-50 p-3 border border-slate-100">
                <div class="flex items-center gap-2">
                  <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 text-blue-600"><path fill="currentColor" d="M19.82 7.714a.964.964 0 0 0-.964-.964H5.142a.964.964 0 0 0-.964.964v1.264a3.522 3.522 0 0 1 0 6.044v1.264c0 .532.431.964.964.964h13.714a.964.964 0 0 0 .964-.964v-1.264a3.523 3.523 0 0 1 0-6.043zm1.5 1.513c0 .405-.227.773-.584.957h.001l-.038.02-.002.001a2.022 2.022 0 0 0-.098 3.536l.126.069h.002l.128.077c.285.197.465.525.465.886v1.513a2.464 2.464 0 0 1-2.464 2.464H5.142a2.464 2.464 0 0 1-2.464-2.464v-1.513c0-.409.232-.78.593-.963h.002l.126-.069a2.022 2.022 0 0 0 0-3.482l-.126-.069h-.002a1.08 1.08 0 0 1-.593-.963V7.714A2.464 2.464 0 0 1 5.142 5.25h13.714a2.464 2.464 0 0 1 2.464 2.464z"></path></svg>
                  <span class="font-bold text-xs text-blue-700">Mã khuyến mãi</span>
                </div>
                <button type="button" class="text-xs font-extrabold text-blue-600 hover:underline">Chọn mã</button>
              </div>

              <!-- Price Breakdown (Calculated ONLY for checked items) -->
              <div class="space-y-2 text-xs pt-2">
                <div class="flex justify-between text-slate-600">
                  <span>Tạm tính</span>
                  <span id="summary-subtotal" class="font-bold text-slate-800">0 ₫</span>
                </div>
                <div class="flex justify-between text-slate-600">
                  <span>Giảm giá ưu đãi (Deals)</span>
                  <span id="summary-discount" class="font-bold text-emerald-600">- 0 ₫</span>
                </div>
                <div class="flex justify-between text-slate-600">
                  <span>Phí vận chuyển</span>
                  <span class="font-bold text-emerald-600">Miễn phí</span>
                </div>
                
                <div class="border-t border-slate-100 pt-3 flex justify-between items-baseline">
                  <span class="font-bold text-sm text-slate-900">Tổng tiền</span>
                  <span id="summary-total" class="font-extrabold text-xl text-blue-600">0 ₫</span>
                </div>
              </div>

              <!-- Proceed to Checkout Button -->
              <a id="checkout-btn" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=checkout" class="block w-full text-center font-extrabold rounded-xl bg-blue-600 hover:bg-blue-700 text-white py-3.5 text-sm transition-all shadow-md">
                Mua hàng (<span id="checked-count">0</span>)
              </a>

            </div>

          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</main>

<script>
  function formatMoney(amount) {
    return new Intl.NumberFormat('vi-VN').format(Math.max(0, amount)) + ' ₫';
  }

  function toggleSelectAll(isChecked) {
    const checkboxes = document.querySelectorAll('.cart-item-checkbox');
    checkboxes.forEach(cb => {
      cb.checked = isChecked;
    });
    updateCartCalculations();
  }

  function updateCartCalculations() {
    const rows = document.querySelectorAll('.cart-item-row');
    const selectAllCb = document.getElementById('select-all-checkbox');
    
    let checkedCount = 0;
    let totalRows = rows.length;
    let subtotal = 0;
    let totalDiscount = 0;

    rows.forEach(row => {
      const cb = row.querySelector('.cart-item-checkbox');
      if (cb && cb.checked) {
        checkedCount++;
        const price = parseFloat(row.dataset.price) || 0;
        const origPrice = parseFloat(row.dataset.originalPrice) || price;
        const qtyEl = row.querySelector('.cart-item-qty');
        const qty = parseInt(qtyEl ? qtyEl.dataset.qty : 1) || 1;
        const deal = row.dataset.deal || '';

        let rowSubtotal = price * qty;
        subtotal += rowSubtotal;

        // Deal Discounts Logic
        if (deal.includes('Mua 2 Tặng 1')) {
          if (qty >= 2) {
            // Free 1 item price when buying >= 2
            totalDiscount += price;
          }
        } else if (deal.includes('Giảm 50%')) {
          let itemDiscount = (origPrice > price ? (origPrice - price) : (price * 0.5)) * qty;
          totalDiscount += itemDiscount;
        } else if (deal.includes('120K')) {
          let itemDiscount = (origPrice > 120000 ? (origPrice - 120000) : 0) * qty;
          totalDiscount += itemDiscount;
        }
      }
    });

    // Update Select All Checkbox state dynamically
    if (selectAllCb) {
      selectAllCb.checked = (totalRows > 0 && checkedCount === totalRows);
    }

    // Calculate final total
    let finalTotal = Math.max(0, subtotal - totalDiscount);

    // Update DOM text
    const subtotalEl = document.getElementById('summary-subtotal');
    const discountEl = document.getElementById('summary-discount');
    const totalEl = document.getElementById('summary-total');
    const checkedCountEl = document.getElementById('checked-count');
    const checkoutBtn = document.getElementById('checkout-btn');

    if (subtotalEl) subtotalEl.innerText = formatMoney(subtotal);
    if (discountEl) discountEl.innerText = (totalDiscount > 0 ? '- ' + formatMoney(totalDiscount) : '- 0 ₫');
    if (totalEl) totalEl.innerText = formatMoney(finalTotal);
    if (checkedCountEl) checkedCountEl.innerText = checkedCount;

    if (checkoutBtn) {
      if (checkedCount === 0) {
        checkoutBtn.classList.add('opacity-50', 'pointer-events-none');
        checkoutBtn.innerText = 'Vui lòng chọn sản phẩm (0)';
      } else {
        checkoutBtn.classList.remove('opacity-50', 'pointer-events-none');
        checkoutBtn.innerText = 'Mua hàng (' + checkedCount + ')';
      }
    }
  }

  // Initial Calculation on Page Load
  document.addEventListener('DOMContentLoaded', () => {
    updateCartCalculations();
  });
</script>

<?php require __DIR__ . '/../layout/footer.php'; ?>
