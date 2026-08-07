<?php require __DIR__ . '/../layout/header.php'; ?>

<?php 
$catName = $_GET['name'] ?? 'Danh mục sản phẩm';
?>

<main class="container mx-auto px-4 md:max-w-[1384px] py-6">
  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-xs text-slate-500 mb-4">
    <a href="/index.php?route=home" class="hover:text-blue-600">Trang chủ</a>
    <span>/</span>
    <span class="font-semibold text-slate-800"><?= htmlspecialchars($catName) ?></span>
  </div>

  <div class="flex flex-col lg:flex-row gap-6">
    <!-- Sidebar Filters -->
    <aside class="w-full lg:w-64 shrink-0 bg-white p-4 rounded-xl border border-slate-200 shadow-sm h-fit">
      <h3 class="font-bold text-sm text-slate-800 mb-3 pb-2 border-b border-slate-100">Bộ lọc tìm kiếm</h3>
      
      <!-- Price range filter -->
      <div class="mb-4">
        <label class="text-xs font-semibold text-slate-600 block mb-2">Khoảng giá</label>
        <div class="grid grid-cols-2 gap-2">
          <input type="text" placeholder="Tối thiểu" class="w-full text-xs p-2 rounded border border-slate-200 outline-none">
          <input type="text" placeholder="Tối đa" class="w-full text-xs p-2 rounded border border-slate-200 outline-none">
        </div>
        <button class="w-full mt-2 bg-blue-600 text-white font-bold text-xs py-1.5 rounded hover:bg-blue-700">Áp dụng</button>
      </div>

      <!-- Brand filter -->
      <div class="mb-4">
        <label class="text-xs font-semibold text-slate-600 block mb-2">Thương hiệu nổi bật</label>
        <div class="space-y-1.5 text-xs text-slate-700">
          <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" checked class="rounded text-blue-600"> Pharmacity Brand</label>
          <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="rounded text-blue-600"> Blackmores</label>
          <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="rounded text-blue-600"> Nucos Japan</label>
          <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="rounded text-blue-600"> La Roche-Posay</label>
        </div>
      </div>
    </aside>

    <!-- Main Category Product Listing -->
    <div class="flex-1">
      <div class="flex justify-between items-center bg-white p-3 rounded-xl border border-slate-200 mb-4">
        <h1 class="text-lg font-bold text-slate-800"><?= htmlspecialchars($catName) ?></h1>
        <div class="flex items-center gap-2 text-xs text-slate-600">
          <span>Sắp xếp theo:</span>
          <select class="border border-slate-200 rounded px-2 py-1 outline-none text-xs bg-white font-medium">
            <option>Đề xuất mới nhất</option>
            <option>Giá tăng dần</option>
            <option>Giá giảm dần</option>
            <option>Bán chạy nhất</option>
          </select>
        </div>
      </div>

      <!-- Category Products Grid -->
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
        <?php foreach ($products as $p): ?>
          <div class="bg-white border border-slate-200 rounded-xl p-3 flex flex-col justify-between relative shadow-sm hover:shadow-md transition-all">
            <span class="absolute top-2 left-2 bg-red-600 text-white text-[10px] font-extrabold px-1.5 py-0.5 rounded z-10">Giảm 15%</span>
            <a href="/index.php?route=product&id=<?= $p['id'] ?>">
              <img class="w-full h-36 object-contain my-2" src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>">
            </a>
            <div>
              <div class="text-[10px] font-bold text-slate-400 uppercase"><?= htmlspecialchars($p['category']) ?></div>
              <h3 class="text-xs font-semibold text-slate-800 line-clamp-2 h-8 my-1">
                <a href="/index.php?route=product&id=<?= $p['id'] ?>" class="hover:text-blue-600"><?= htmlspecialchars($p['name']) ?></a>
              </h3>
              <div class="text-sm font-extrabold text-slate-900"><?= number_format($p['price'], 0, ',', '.') ?> ₫</div>
            </div>
            <button onclick="window.location.href='/index.php?route=product&id=<?= $p['id'] ?>'" class="mt-3 w-full border border-blue-600 text-blue-600 font-bold text-xs py-1.5 rounded-lg hover:bg-blue-600 hover:text-white transition-all">+ Chọn mua</button>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</main>

<?php require __DIR__ . '/../layout/footer.php'; ?>
