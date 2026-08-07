<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Nhà thuốc Pharmacity | Đúng thuốc, tận tâm, giá tốt</title>
  <meta name="description" content="Pharmacity là hệ thống nhà thuốc, hiệu thuốc online uy tín tại Việt Nam, chuyên cung cấp đa dạng thuốc, thuốc theo đơn, vitamin & TPCN, dược mỹ phẩm... Thuộc CTCP Dược phẩm Pharmacity.">
  <meta name="theme-color" content="#1B51A3">
  
  <!-- OpenGraph Metadata -->
  <meta property="og:title" content="Nhà thuốc Pharmacity | Đúng thuốc, tận tâm, giá tốt">
  <meta property="og:description" content="Pharmacity là hệ thống nhà thuốc, hiệu thuốc online uy tín tại Việt Nam, chuyên cung cấp đa dạng thuốc, thuốc theo đơn, vitamin & TPCN, dược mỹ phẩm...">
  <meta property="og:site_name" content="Nhà thuốc Pharmacity">
  <meta property="og:locale" content="vi">
  <meta property="og:image" content="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706162028-0-pharmacity-thumbnail.png">
  <meta property="og:type" content="website">

  <!-- Tailwind CSS CDN for exact Pharmacity new UI utility classes -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'surface-primary-default': '#005EC4',
            'surface-background': '#F8FAFC',
            'border-invert-default': 'rgba(255,255,255,0.3)',
            'border-primary-default': '#005EC4',
            'content-primary-default': '#005EC4',
            'content-neutral-strong': '#1E293B',
            'content-neutral-medium': '#64748B',
            'content-neutral-invert-strong': '#FFFFFF',
            'content-neutral-invert-subdued': '#E2E8F0',
          }
        }
      }
    };
  </script>

  <!-- Official Pharmacity Next.js Stylesheets -->
  <link rel="stylesheet" href="https://prod-cdn.pharmacity.io/assets/20260805/_next/static/css/8e67e0f57bfac118.css">
  <link rel="stylesheet" href="https://prod-cdn.pharmacity.io/assets/20260805/_next/static/css/e572da9bf7fcee9f.css">
  <link rel="stylesheet" href="https://prod-cdn.pharmacity.io/assets/20260805/_next/static/css/ef7bf05a6bd0bde1.css">
  <link rel="stylesheet" href="https://prod-cdn.pharmacity.io/assets/20260805/_next/static/css/e86bd941f2ec85dc.css">
  <link rel="stylesheet" href="https://prod-cdn.pharmacity.io/assets/20260805/_next/static/css/846ec66b770bde6c.css">
  <link rel="stylesheet" href="https://prod-cdn.pharmacity.io/assets/20260805/_next/static/css/64ea00620e160aae.css">
  <link rel="stylesheet" href="https://prod-cdn.pharmacity.io/assets/20260805/_next/static/css/94b9fda2336e421b.css">
  <link rel="stylesheet" href="https://prod-cdn.pharmacity.io/assets/20260805/_next/static/css/e18fe9e02232d51a.css">

  <link rel="stylesheet" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/public/css/style.css">
  <link rel="shortcut icon" href="https://www.pharmacity.vn/favicon.ico" type="image/x-icon">
</head>
<body class="overflow-x-hidden bg-neutral-100 md:h-[100%] new-ui">

  <div class="hidden md:block">
    <div data-topbanner="false" class="top-banner peer relative z-10 h-[47px] bg-white data-[topbanner='true']:block data-[topbanner='false']:hidden md:h-[50px]"></div>
  </div>

  <!-- ============================================================
       RESPONSIVE MOBILE & DESKTOP PHARMACITY HEADER
       ============================================================ -->
  <header id="pmc-main-header" class="new-ui !sticky top-0 z-50 bg-surface-primary-default">
    <div class="bg-surface-background">
      <div class="container md:max-w-[1384px] mx-auto px-4">
        <div class="hidden h-9 flex-row items-center justify-end gap-6 bg-surface-background md:flex">
          <div data-state="closed" class="focus-visible:outline-none flex">
            <div class="flex cursor-pointer items-center gap-1 whitespace-nowrap text-xs">
              <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-5 h-5 p-0">
                <path fill="currentColor" d="M14.625 5.025c0 .653-.466 1.425-1.312 1.425H9.937c-.846 0-1.312-.772-1.312-1.425V3a.75.75 0 0 1 1.5 0v1.95h3V3a.75.75 0 0 1 1.5 0zM12.884 17.438l.077.003a.75.75 0 0 1 0 1.493l-.077.003h-2.52a.75.75 0 1 1 0-1.5z"></path>
                <path fill="currentColor" d="M16.5 5c0-.69-.56-1.25-1.25-1.25H8c-.69 0-1.25.56-1.25 1.25v14c0 .69.56 1.25 1.25 1.25h7.25c.69 0 1.25-.56 1.25-1.25zM18 19a2.75 2.75 0 0 1-2.75 2.75H8A2.75 2.75 0 0 1 5.25 19V5A2.75 2.75 0 0 1 8 2.25h7.25A2.75 2.75 0 0 1 18 5z"></path>
              </svg>
              <label class="font-base text-sm leading-14 font-medium cursor-pointer">Tải ứng dụng</label>
            </div>
          </div>
          <div class="flex cursor-pointer items-center gap-1">
            <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-5 h-5">
              <path fill="currentColor" d="M5.031 4.055a2.75 2.75 0 0 1 3.89 0l1.172 1.174.158.175c.688.846.645 2.041-.078 2.91l-.165.181-.82.82-.004.005a11.9 11.9 0 0 0 2.477 3.57 11.9 11.9 0 0 0 3.57 2.476l.007-.004.902-.903.17-.154a2.25 2.25 0 0 1 3.012.153l1.173 1.174.189.208a2.75 2.75 0 0 1-.189 3.68l-.651.65c-.869.87-2.087 1.252-3.297 1.097l-.242-.04c-2.781-.525-5.774-2.126-8.315-4.666-2.381-2.382-3.938-5.162-4.556-7.791l-.112-.524c-.243-1.288.13-2.613 1.057-3.54h.001zM7.86 5.116a1.25 1.25 0 0 0-1.673-.086l-.095.086-.652.652-.001-.001c-.555.555-.799 1.37-.642 2.2l.098.462c.547 2.323 1.946 4.86 4.156 7.07 2.358 2.358 5.087 3.793 7.532 4.255l.155.024c.777.1 1.525-.147 2.045-.668l.652-.651a1.25 1.25 0 0 0 .085-1.672l-.085-.095-1.174-1.172a.75.75 0 0 0-1.003-.053l-.057.052-.903.904a1.5 1.5 0 0 1-1.55.365l-.11-.043a13.3 13.3 0 0 1-3.568-2.347l-.47-.448a13.4 13.4 0 0 1-2.793-4.037l-.001-.002a1.5 1.5 0 0 1 .322-1.657l.82-.82.07-.077c.283-.335.274-.703.104-.959l-.09-.109z"></path>
            </svg>
            <a rel="noopener noreferrer" target="_blank" class="flex items-center gap-1 " href="tel:18006821">
              <label class="font-base text-sm leading-14 font-medium cursor-pointer">Hotline</label>
              <span class="font-base text-sm leading-14 font-semibold truncate text-blue-600">1800 6821</span>
            </a>
          </div>
          <a rel="noopener noreferrer" target="_blank" class="grid grid-flow-col items-center justify-start gap-1" href="#">
            <label class="font-base text-sm leading-14 font-medium cursor-pointer truncate" title="Doanh nghiệp">Doanh nghiệp</label>
            <div class="relative h-4 w-8">
              <img class="object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240520103330-0-20240403091737-0-new-bagde.png" alt="Doanh nghiệp" loading="lazy">
            </div>
          </a>
          <a rel="noopener noreferrer" target="_blank" class="grid grid-flow-col items-center justify-start gap-1" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Deal+hot">
            <label class="font-base text-sm leading-14 font-medium cursor-pointer truncate" title="Deal hot tháng 08 🔥">Deal hot tháng 08 🔥</label>
          </a>
          <a target="_self" class="grid grid-flow-col items-center justify-start gap-1" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=checkout">
            <label class="font-base text-sm leading-14 font-medium cursor-pointer truncate" title="Tra cứu đơn hàng">Tra cứu đơn hàng</label>
            <div class="relative h-4 w-8">
              <img class="object-cover" src="https://prod-cdn.pharmacity.io/e-com/images/ecommerce/20240816073820-0-Frame%2024020.png" alt="Tra cứu đơn hàng" loading="lazy">
            </div>
          </a>
          <a rel="noopener noreferrer" target="_blank" class="grid grid-flow-col items-center justify-start gap-1" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Goc+suc+khoe">
            <label class="font-base text-sm leading-14 font-medium cursor-pointer truncate" title="Góc sức khỏe">Góc sức khỏe</label>
          </a>
          <a target="_self" class="grid grid-flow-col items-center justify-start gap-1" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=kiosk">
            <label class="font-base text-sm leading-14 font-medium cursor-pointer truncate" title="Hệ thống nhà thuốc">Hệ thống nhà thuốc</label>
          </a>
        </div>
      </div>
    </div>

    <div id="pmc-main-header-container" class="container relative gap-3 bg-surface-primary-default py-3 transition-all md:max-w-[1384px] mx-auto px-4">
      <div class="flex items-center justify-between gap-3 md:gap-4 xl:gap-12">
        <div class="flex items-center gap-2">
          <div class="max-md:h-10">
            <div data-state="closed">
              <div class="flex h-10 w-10 items-center justify-center rounded-2xs border border-border-invert-default md:hidden cursor-pointer">
                <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-6 h-6 text-white">
                  <path fill="currentColor" d="M9.25 4A.25.25 0 0 0 9 3.75H4a.25.25 0 0 0-.25.25v5c0 .138.112.25.25.25h5A.25.25 0 0 0 9.25 9zm1.5 5A1.75 1.75 0 0 1 9 10.75H4A1.75 1.75 0 0 1 2.25 9V4c0-.966.784-1.75 1.75-1.75h5c.966 0 1.75.784 1.75 1.75zM20.25 4a.25.25 0 0 0-.25-.25h-5a.25.25 0 0 0-.25.25v5c0 .138.112.25.25.25h5a.25.25 0 0 0 .25-.25zm1.5 5A1.75 1.75 0 0 1 20 10.75h-5A1.75 1.75 0 0 1 13.25 9V4c0-.966.784-1.75 1.75-1.75h5c.966 0 1.75.784 1.75 1.75zM9.25 15a.25.25 0 0 0-.25-.25H4a.25.25 0 0 0-.25.25v5c0 .138.112.25.25.25h5a.25.25 0 0 0 .25-.25zm1.5 5A1.75 1.75 0 0 1 9 21.75H4A1.75 1.75 0 0 1 2.25 20v-5c0-.966.784-1.75 1.75-1.75h5c.966 0 1.75.784 1.75 1.75zM20.25 15a.25.25 0 0 0-.25-.25h-5a.25.25 0 0 0-.25.25v5c0 .138.112.25.25.25h5a.25.25 0 0 0 .25-.25zm1.5 5A1.75 1.75 0 0 1 20 21.75h-5A1.75 1.75 0 0 1 13.25 20v-5c0-.966.784-1.75 1.75-1.75h5c.966 0 1.75.784 1.75 1.75z"></path>
                </svg>
              </div>
            </div>
          </div>
          <a id="pmc-logo" class="flex items-center shrink-0" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=home">
            <img class="h-8 object-cover md:h-[60px] md:min-w-[150px]" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/pharmacity-logo.svg" alt="Pharmacity Logo" loading="lazy">
          </a>
        </div>

        <div class="flex flex-1 items-center gap-1 md:gap-6">
          <div class="category">
            <button onclick="window.location.href='<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Tat+ca+danh+muc'" class="items-center justify-center whitespace-nowrap rounded-2xs font-semibold hidden h-11 gap-2 border border-white/30 bg-white/10 px-4 py-2.5 text-white hover:bg-white/20 md:flex">
              <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-6 h-6 text-white">
                <path fill="currentColor" d="M9.25 4A.25.25 0 0 0 9 3.75H4a.25.25 0 0 0-.25.25v5c0 .138.112.25.25.25h5A.25.25 0 0 0 9.25 9zm1.5 5A1.75 1.75 0 0 1 9 10.75H4A1.75 1.75 0 0 1 2.25 9V4c0-.966.784-1.75 1.75-1.75h5c.966 0 1.75.784 1.75 1.75zM20.25 4a.25.25 0 0 0-.25-.25h-5a.25.25 0 0 0-.25.25v5c0 .138.112.25.25.25h5a.25.25 0 0 0 .25-.25zm1.5 5A1.75 1.75 0 0 1 20 10.75h-5A1.75 1.75 0 0 1 13.25 9V4c0-.966.784-1.75 1.75-1.75h5c.966 0 1.75.784 1.75 1.75zM9.25 15a.25.25 0 0 0-.25-.25H4a.25.25 0 0 0-.25.25v5c0 .138.112.25.25.25h5a.25.25 0 0 0 .25-.25zm1.5 5A1.75 1.75 0 0 1 9 21.75H4A1.75 1.75 0 0 1 2.25 20v-5c0-.966.784-1.75 1.75-1.75h5c.966 0 1.75.784 1.75 1.75zM20.25 15a.25.25 0 0 0-.25-.25h-5a.25.25 0 0 0-.25.25v5c0 .138.112.25.25.25h5a.25.25 0 0 0 .25-.25zm1.5 5A1.75 1.75 0 0 1 20 21.75h-5A1.75 1.75 0 0 1 13.25 20v-5c0-.966.784-1.75 1.75-1.75h5c.966 0 1.75.784 1.75 1.75z"></path>
              </svg>
              <span class="font-base text-base leading-16 hidden font-medium text-white md:block">Danh mục</span>
              <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="shrink-0 w-5 h-5 hidden text-white md:block">
                <path fill="currentColor" d="M21.808 8.752A.858.858 0 0 0 20.6 7.546l-.064.059L12 16.142 3.463 7.605l-.064-.06a.857.857 0 0 0-1.207 1.207l.06.065 8.783 8.783a1.365 1.365 0 0 0 1.93 0l8.784-8.783z"></path>
              </svg>
            </button>
          </div>

          <!-- Desktop Top Links (Hidden on Mobile) -->
          <div id="pmc-top-category" class="w-full items-center gap-6 transition-all hidden md:flex">
            <a class="flex items-center hover:opacity-90" title="Thuốc" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Thuoc">
              <span class="font-base text-sm leading-14 font-semibold text-white">Thuốc</span>
            </a>
            <a class="flex items-center hover:opacity-90" title="Tra cứu bệnh" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Tra+cuu+benh">
              <span class="font-base text-sm leading-14 font-semibold text-white">Tra cứu bệnh</span>
            </a>
            <a class="flex items-center hover:opacity-90" title="Thực phẩm bảo vệ sức khỏe" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Thuc+pham+bao+ve+suc+khoe">
              <span class="font-base text-sm leading-14 font-semibold text-white">Thực phẩm bảo vệ sức khỏe</span>
            </a>
            <a class="flex items-center hover:opacity-90" title="Mẹ và bé" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Me+va+be">
              <span class="font-base text-sm leading-14 font-semibold text-white">Mẹ và bé</span>
            </a>
            <a class="flex items-center hover:opacity-90" title="Nhãn hàng Pharmacity" href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=category&name=Nhan+hang+Pharmacity">
              <span class="font-base text-sm leading-14 font-semibold text-white">Nhãn hàng Pharmacity</span>
            </a>
          </div>

          <!-- Mobile Compact Search Input inside Header -->
          <div id="pmc-box-search_child" class="flex-1 md:hidden">
            <div class="relative w-full">
              <input type="text" class="w-full h-10 pl-9 pr-3 rounded-lg text-slate-800 text-xs outline-none bg-white font-medium" placeholder="Tìm kiếm theo triệu chứng...">
              <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="absolute left-2.5 top-2.5 w-4 h-4 text-slate-400">
                <path fill="currentColor" d="M17.25 11a6.25 6.25 0 1 0-12.5 0 6.25 6.25 0 0 0 12.5 0m1.5 0a7.75 7.75 0 1 1-15.5 0 7.75 7.75 0 0 1 15.5 0"></path>
                <path fill="currentColor" d="M15.676 15.676a.75.75 0 0 1 1.004-.052l.057.052 4.794 4.793.05.058a.75.75 0 0 1-1.054 1.054l-.058-.05-4.793-4.794-.052-.057a.75.75 0 0 1 .052-1.004"></path>
              </svg>
            </div>
          </div>
        </div>

        <div class="ml-auto flex items-center gap-2 md:gap-4 shrink-0">
          <!-- Notification Bell -->
          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account" class="relative flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20">
            <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-5 h-5">
              <path fill="currentColor" d="M11.999 2.167c4.557 0 6.876 3.684 6.876 6.82v3.108c0 .367.147.72.407.981l.713.713.202.224c.446.543.693 1.227.693 1.936a2.933 2.933 0 0 1-2.933 2.934h-2.605a3.38 3.38 0 0 1-6.704 0H6.044a2.933 2.933 0 0 1-2.933-2.934c0-.81.322-1.587.895-2.16l.713-.713.092-.101c.202-.248.314-.559.314-.88V8.987c0-3.137 2.316-6.82 6.874-6.82m-1.656 18.716a1.712 1.712 0 0 0 3.313 0zm1.656-15.05c-3.442 0-5.207 2.73-5.207 5.154v3.108c0 .709-.247 1.393-.692 1.936l-.204.224-.711.712c-.261.26-.408.615-.408.982 0 .7.567 1.267 1.267 1.267h8.481l.022-.001h3.41c.7 0 1.267-.566 1.267-1.266a1.4 1.4 0 0 0-.316-.88l-.092-.102-.712-.712a3.06 3.06 0 0 1-.895-2.16V8.987c0-2.423-1.767-5.154-5.21-5.154"></path>
            </svg>
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full">3</span>
          </a>

<?php
require_once __DIR__ . '/../../models/CartModel.php';
$cartBadgeCount = CartModel::getCartCount(1);
?>
          <!-- Cart Icon -->
          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=cart" class="relative flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20" title="Giỏ hàng">
            <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-5 h-5">
              <path fill="currentColor" d="M19.403 5.783a2.75 2.75 0 0 1 2.698 3.29l-.039.162-1.478 5.596a2.75 2.75 0 0 1-2.42 2.038l-8.4.73a2.75 2.75 0 0 1-2.907-2.07l-2.21-8.813a.75.75 0 0 1 .727-.933zm-11.09 9.381c.149.595.71.995 1.32.941l8.401-.73a1.25 1.25 0 0 0 1.1-.927l1.478-5.596.03-.148a1.25 1.25 0 0 0-1.239-1.42H6.336z"></path>
              <path fill="currentColor" d="m4.608 2.25.13.012a.75.75 0 0 1 .604.579l.764 3.533.013.076a.75.75 0 0 1-1.458.316l-.02-.075-.638-2.941H2.578a.75.75 0 0 1 0-1.5zM18.072 18.522c.784.04 1.406.684 1.41 1.474V20l-.007.151a1.483 1.483 0 0 1-2.95 0L16.518 20a1.474 1.474 0 0 1 1.4-1.477 1 1 0 0 1 .078-.005zM9.073 18.52A1.482 1.482 0 0 1 9 21.484c-.81 0-1.479-.655-1.478-1.477H7.52v-.015c0-.792.623-1.429 1.399-1.47a1 1 0 0 1 .078-.004z"></path>
            </svg>
            <span id="header-cart-badge" class="absolute -top-1 -right-1 bg-amber-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full"><?= $cartBadgeCount ?></span>
          </a>

          <!-- User Login Profile -->
          <a href="<?= (defined('BASE_URL') ? BASE_URL : '') ?>/index.php?route=account" class="hidden md:flex items-center gap-1.5 text-white hover:text-slate-100">
            <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 h-6 w-6">
              <path fill="currentColor" d="M20.25 12a8.25 8.25 0 1 0-16.5 0 8.25 8.25 0 0 0 16.5 0m1.5 0c0 5.385-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12 6.615 2.25 12 2.25s9.75 4.365 9.75 9.75"></path>
              <path fill="currentColor" d="M14.443 9.19a2.44 2.44 0 1 0-4.88 0 2.44 2.44 0 0 0 4.88 0m1.5 0a3.94 3.94 0 1 1-7.88-.001 3.94 3.94 0 0 1 7.88 0M5.25 18.5v-.87A3.75 3.75 0 0 1 9 13.88h3.894l.076.004a.75.75 0 0 1 0 1.492l-.076.004H9a2.25 2.25 0 0 1-2.25 2.25v.87a.75.75 0 0 1-1.5 0"></path>
              <path fill="currentColor" d="M18.75 18.5v-.87A3.75 3.75 0 0 0 15 13.88h-2.637l-.077.004a.75.75 0 0 0 0 1.492l.077.004H15a2.25 2.25 0 0 1 2.25 2.25v.87a.75.75 0 0 0 1.5 0"></path>
            </svg>
            <div class="flex flex-col items-start leading-tight">
              <span class="text-[11px] opacity-80">Xin Chào</span>
              <span class="text-sm font-semibold">Đăng nhập</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </header>
  <div id="pmc-box-search_anchor"></div>
