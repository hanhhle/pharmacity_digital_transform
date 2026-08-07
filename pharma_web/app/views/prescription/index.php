<?php require __DIR__ . '/../layout/header.php'; ?>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-6">
    <a href="/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <span class="font-semibold text-slate-800">Upload Đơn Thuốc Điện Tử AI OCR</span>
  </div>

  <div class="bg-white rounded-2xl p-4 md:p-6 border border-slate-200 shadow-sm mb-8">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-100 pb-4 mb-6 gap-3">
      <div>
        <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">DX PILLAR #1</span>
        <h1 class="text-xl font-bold text-slate-900 mt-1">Upload Đơn Thuốc Điện Tử AI OCR</h1>
        <p class="text-xs text-slate-500 mt-0.5">Chụp hoặc tải ảnh đơn thuốc bác sĩ kê $\rightarrow$ AI OCR trích xuất tên thuốc $\rightarrow$ Dược sĩ Pharmacity kiểm tra & giao hàng 1H.</p>
      </div>
      <a href="/index.php?route=home" class="text-xs font-bold text-blue-600 hover:underline">← Quay lại cửa hàng</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Upload Box -->
      <div>
        <form action="/index.php?route=prescription" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="upload_ocr">
          
          <div class="border-2 border-dashed border-blue-500 bg-blue-50/50 p-8 rounded-2xl text-center cursor-pointer hover:bg-blue-50 transition-all" onclick="document.getElementById('fileInput').click();">
            <div class="text-4xl mb-2">📄</div>
            <h3 class="font-bold text-blue-600 text-sm md:text-base mb-1">Kéo & Thả hoặc Bấm Để Chọn Ảnh Đơn Thuốc</h3>
            <p class="text-xs text-slate-400">Hỗ trợ định dạng JPG, PNG, PDF. Kích thước tối đa 10MB.</p>
            <input type="file" id="fileInput" name="prescription_file" class="hidden" onchange="this.form.submit();">
          </div>

          <button type="submit" class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm py-3 rounded-xl transition-all shadow-md">
            🔍 Quét OCR & Phân Tích Đơn Thuốc
          </button>
        </form>

        <div class="mt-6 bg-slate-50 p-4 rounded-xl border border-slate-200 text-xs">
          <h4 class="font-bold text-blue-600 mb-2">⚡ Quy Trình Xử Lý AI OCR Pharmacity</h4>
          <ol class="list-decimal list-inside space-y-1.5 text-slate-600">
            <li><strong>AI Vision OCR:</strong> Quét chữ viết tay / in của bác sĩ với độ chính xác 98.6%.</li>
            <li><strong>Dược Sĩ Xác Thực:</strong> Dược sĩ chuyên môn đối chiếu đơn thuốc theo quy định Bộ Y Tế.</li>
            <li><strong>Đối Chiếu Tồn Kho:</strong> Kiểm tra kho 1.000+ cửa hàng gần bạn nhất.</li>
            <li><strong>Giao Hàng 1H:</strong> Đóng gói niêm phong và giao tận nhà.</li>
          </ol>
        </div>
      </div>

      <!-- OCR Results View -->
      <div>
        <?php if (!empty($ocrResult)): ?>
          <div class="bg-blue-50/80 border-2 border-emerald-500 rounded-2xl p-5 shadow-sm space-y-4">
            <div class="flex items-center justify-between">
              <span class="bg-emerald-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-md">
                ✓ <?= htmlspecialchars($ocrResult['status']) ?>
              </span>
              <span class="text-xs text-slate-500">Độ tin cậy OCR: <strong class="text-slate-800"><?= $ocrResult['ocr_confidence'] ?>%</strong></span>
            </div>

            <div class="text-xs text-slate-700 space-y-1">
              <div>Bệnh nhân: <strong><?= htmlspecialchars($ocrResult['patient_name']) ?></strong></div>
              <div>Bác sĩ kê đơn: <strong><?= htmlspecialchars($ocrResult['doctor_name']) ?></strong> (<?= htmlspecialchars($ocrResult['clinic']) ?>)</div>
              <div>Chẩn đoán: <strong><?= htmlspecialchars($ocrResult['diagnosis']) ?></strong></div>
            </div>

            <div class="border-t border-slate-200 pt-3">
              <h4 class="font-bold text-blue-900 text-xs md:text-sm mb-3">
                📋 Danh Mục Thuốc Trích Xuất Tự Động (AI Extracted)
              </h4>

              <div class="space-y-2">
                <?php foreach ($ocrResult['medicines'] as $med): ?>
                  <div class="bg-white p-3 rounded-xl border border-slate-200 flex items-center justify-between text-xs">
                    <div>
                      <strong class="text-blue-600 text-sm"><?= htmlspecialchars($med['name']) ?></strong>
                      <p class="text-slate-400 text-[11px]"><?= htmlspecialchars($med['dosage']) ?></p>
                    </div>
                    <div class="text-right">
                      <span class="font-bold text-slate-900 text-xs block"><?= number_format($med['price'], 0, ',', '.') ?> đ</span>
                      <span class="text-[10px] text-emerald-600 font-semibold">✓ Có hàng tại PMC Q1</span>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="border-t-2 border-blue-600 pt-3 flex flex-wrap items-center justify-between gap-3">
              <div>
                <span class="text-xs text-slate-500">Tổng tiền thuốc kê đơn:</span>
                <div class="text-xl font-black text-blue-600"><?= number_format($ocrResult['total_amount'], 0, ',', '.') ?> đ</div>
              </div>
              <a href="/index.php?route=checkout" class="bg-orange-600 hover:bg-orange-700 text-white font-bold text-xs md:text-sm px-5 py-2.5 rounded-xl transition-all shadow">
                🚀 Đặt Mua 1-Click (Giao 1 Giờ)
              </a>
            </div>
          </div>
        <?php else: ?>
          <div class="bg-slate-50 border border-slate-200 rounded-2xl p-10 text-center">
            <div class="text-5xl mb-3 opacity-40">📋</div>
            <h4 class="font-bold text-slate-600 text-sm">Chưa có đơn thuốc nào được tải lên</h4>
            <p class="text-xs text-slate-400 max-w-xs mx-auto mt-1">Vui lòng chọn ảnh đơn thuốc ở ô bên trái để chạy phân tích nhận diện AI OCR.</p>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</main>

<?php require __DIR__ . '/../layout/footer.php'; ?>
