  <!-- ============================================================
       MOBILE BOTTOM STICKY NAVIGATION BAR (AUTHENTIC PHARMACITY APP)
       ============================================================ -->
  <div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events: none;">
    <ol tabindex="-1" class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:right-0 sm:flex-col md:max-w-[420px] new-ui"></ol>
  </div>

  <div class="new-ui fixed bottom-0 z-20 grid h-[4.5rem] w-full grid-cols-5 justify-items-stretch bg-white shadow-[0_-2px_6px_rgba(0,0,0,0.12)] md:hidden">
    <!-- 1. Trang chủ -->
    <button onclick="window.location.href='/index.php?route=home'" class="items-center justify-center gap-2 whitespace-nowrap rounded-2xs transition-all outline-none align-center grid h-full grid-rows-2 border-0 px-1 py-2 text-center font-medium hover:text-blue-600 text-content-info-default" type="button">
      <span class="mb-1 flex items-center justify-center mx-auto rounded-full px-4 py-2 bg-blue-50 text-blue-600">
        <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-6 h-6"><path fill="currentColor" d="M11.633 2.295a.79.79 0 0 1 .843.07l8.477 6.358.064.052a.795.795 0 0 1-.95 1.264L20 9.994l-8.001-6-8.001 6a.795.795 0 0 1-.953-1.271l8.477-6.359zM3.786 12.273a.795.795 0 0 1 1.59 0v7.682h13.246v-7.682a.795.795 0 0 1 1.59 0v8.477a.795.795 0 0 1-.795.795H4.581a.795.795 0 0 1-.795-.795z"></path></svg>
      </span>
      <p class="font-base text-[10px] leading-10 font-normal text-slate-800">Trang chủ</p>
    </button>

    <!-- 2. Danh mục -->
    <button onclick="window.location.href='/index.php?route=category&name=Tat+ca+danh+muc'" class="items-center justify-center gap-2 whitespace-nowrap rounded-2xs transition-all outline-none align-center grid h-full grid-rows-2 border-0 px-1 py-2 text-center font-medium hover:text-blue-600 text-content-neutral-medium" type="button">
      <span class="mb-1 flex items-center justify-center mx-auto rounded-full px-4 py-2">
        <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-6 h-6"><path fill="currentColor" d="M9.173 4a.25.25 0 0 0-.25-.25H4a.25.25 0 0 0-.25.25v4.923c0 .138.112.25.25.25h4.923a.25.25 0 0 0 .25-.25zm1.5 4.923a1.75 1.75 0 0 1-1.75 1.75H4a1.75 1.75 0 0 1-1.75-1.75V4c0-.966.784-1.75 1.75-1.75h4.923c.966 0 1.75.784 1.75 1.75zM9.173 15a.25.25 0 0 0-.25-.25H4a.25.25 0 0 0-.25.25v4.923c0 .138.112.25.25.25h4.923a.25.25 0 0 0 .25-.25zm1.5 4.923a1.75 1.75 0 0 1-1.75 1.75H4a1.75 1.75 0 0 1-1.75-1.75V15c0-.966.784-1.75 1.75-1.75h4.923c.966 0 1.75.784 1.75 1.75zM20.25 4a.25.25 0 0 0-.25-.25h-4.923a.25.25 0 0 0-.25.25v4.923c0 .138.112.25.25.25H20a.25.25 0 0 0 .25-.25zm1.5 4.923a1.75 1.75 0 0 1-1.75 1.75h-4.923a1.75 1.75 0 0 1-1.75-1.75V4c0-.966.783-1.75 1.75-1.75H20c.966 0 1.75.784 1.75 1.75zM18.5 21.25a.75.75 0 0 1-1.5 0v-7.5a.75.75 0 0 1 1.5 0z"></path><path fill="currentColor" d="M13.75 18.5a.75.75 0 0 1 0-1.5h7.5a.75.75 0 0 1 0 1.5z"></path></svg>
      </span>
      <p class="font-base text-[10px] leading-10 font-normal text-slate-800">Danh mục</p>
    </button>

    <!-- 3. Tư vấn (Center Highlight Floating Button) -->
    <button onclick="window.location.href='/index.php?route=telemedicine'" class="items-center justify-center gap-2 whitespace-nowrap rounded-2xs transition-all outline-none align-center grid h-full grid-rows-2 border-0 px-1 py-2 text-center font-medium hover:text-blue-600 text-content-neutral-medium" type="button">
      <span class="mb-1 flex items-center justify-center mx-auto mt-[-32px] h-14 w-14 rounded-full border-4 border-white bg-blue-600 p-3 text-xl text-white shadow-[0_-4px_8px_-4px_rgba(0,0,0,0.12)]">
        <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-6 h-6"><path fill="currentColor" d="M19.25 17.167V11a7.25 7.25 0 1 0-14.5 0v3h-1.5v-3a8.75 8.75 0 0 1 17.5 0v6.167a3.583 3.583 0 0 1-3.583 3.583H14v-1.5h3.167c1.15 0 2.083-.933 2.083-2.083"></path><path fill="currentColor" d="M7.25 13a1.25 1.25 0 1 0-2.5 0v2a1.25 1.25 0 1 0 2.5 0zm1.5 2a2.75 2.75 0 1 1-5.5 0v-2a2.75 2.75 0 1 1 5.5 0zM19.25 13a1.25 1.25 0 1 0-2.5 0v2a1.25 1.25 0 1 0 2.5 0zm1.5 2a2.75 2.75 0 1 1-5.5 0v-2a2.75 2.75 0 1 1 5.5 0zM13.25 20a1.25 1.25 0 1 0-2.5 0 1.25 1.25 0 0 0 2.5 0m1.5 0a2.75 2.75 0 1 1-5.5 0 2.75 2.75 0 0 1 5.5 0"></path></svg>
      </span>
      <p class="font-base text-[10px] leading-10 font-normal text-slate-800">Tư vấn</p>
    </button>

    <!-- 4. Đơn hàng -->
    <button onclick="window.location.href='/index.php?route=checkout'" class="items-center justify-center gap-2 whitespace-nowrap rounded-2xs transition-all outline-none align-center grid h-full grid-rows-2 border-0 px-1 py-2 text-center font-medium hover:text-blue-600 text-content-neutral-medium" type="button">
      <span class="mb-1 flex items-center justify-center mx-auto rounded-full px-4 py-2">
        <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-6 h-6"><path fill="currentColor" d="M11.25 7.999V2.997a.75.75 0 0 1 1.5 0v5.002a.75.75 0 0 1-1.5 0M8.999 16.252l.076.004a.75.75 0 0 1 0 1.492L9 17.752H6.998a.75.75 0 0 1 0-1.5z"></path><path fill="currentColor" d="M20.254 10c0-.691-.56-1.251-1.251-1.251H4.997c-.69 0-1.25.56-1.25 1.25a.75.75 0 0 1-1.5 0 2.75 2.75 0 0 1 2.75-2.75h14.006a2.75 2.75 0 0 1 2.75 2.75.75.75 0 0 1-1.5 0"></path><path fill="currentColor" d="M2.246 18.753V8.5c0-.642.13-1.278.383-1.868L3.723 4.07l.095-.203a3 3 0 0 1 2.664-1.62h11.035a3 3 0 0 1 2.757 1.82l1.102 2.565.001.003.088.224c.192.525.29 1.08.289 1.64v10.505c0 1.52-1.232 2.751-2.751 2.751H5.247a3 3 0 0 1-2.997-2.846zm1.508.154a1.5 1.5 0 0 0 1.493 1.347h13.756c.69 0 1.25-.56 1.25-1.25V8.496l-.003-.164a3.2 3.2 0 0 0-.253-1.11l-1.1-2.564a1.5 1.5 0 0 0-1.27-.909l-.11-.003H6.482a1.5 1.5 0 0 0-1.332.81l-.047.1-1.095 2.564v.002A3.2 3.2 0 0 0 3.746 8.5v10.254z"></path></svg>
      </span>
      <p class="font-base text-[10px] leading-10 font-normal text-slate-800">Đơn hàng</p>
    </button>

    <!-- 5. Tài khoản -->
    <button onclick="window.location.href='/index.php?route=account'" class="items-center justify-center gap-2 whitespace-nowrap rounded-2xs transition-all outline-none align-center grid h-full grid-rows-2 border-0 px-1 py-2 text-center font-medium hover:text-blue-600 text-content-neutral-medium" type="button">
      <span class="mb-1 flex items-center justify-center mx-auto rounded-full px-4 py-2">
        <svg fill="none" viewBox="0 0 24 24" aria-hidden="true" class="inline-block shrink-0 w-6 h-6"><path fill="currentColor" d="M20.25 12a8.25 8.25 0 1 0-16.5 0 8.25 8.25 0 0 0 16.5 0m1.5 0c0 5.385-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12 6.615 2.25 12 2.25s9.75 4.365 9.75 9.75"></path><path fill="currentColor" d="M14.443 9.19a2.44 2.44 0 1 0-4.88 0 2.44 2.44 0 0 0 4.88 0m1.5 0a3.94 3.94 0 1 1-7.88-.001 3.94 3.94 0 0 1 7.88 0M5.25 18.5v-.87A3.75 3.75 0 0 1 9 13.88h3.894l.076.004a.75.75 0 0 1 0 1.492l-.076.004H9a2.25 2.25 0 0 0-2.25 2.25v.87a.75.75 0 0 1-1.5 0"></path><path fill="currentColor" d="M18.75 18.5v-.87A3.75 3.75 0 0 0 15 13.88h-2.637l-.077.004a.75.75 0 0 0 0 1.492l.077.004H15a2.25 2.25 0 0 1 2.25 2.25v.87a.75.75 0 0 0 1.5 0"></path></svg>
      </span>
      <p class="font-base text-[10px] leading-10 font-normal text-slate-800">Tài khoản</p>
    </button>
  </div>

  <!-- ============================================================
       DX FLOATING AI ASSISTANT CHATBOT (DX PILLAR #1)
       ============================================================ -->
  <div class="ai-chatbot-fab hidden md:flex" onclick="toggleAiChat()" title="Trò chuyện với Dược sĩ AI Pharmacity">
    <span style="font-size: 26px;">🎧</span>
  </div>

  <div class="ai-chat-window" id="aiChatWindow">
    <div class="ai-chat-header">
      <div style="display:flex; align-items:center; gap:8px;">
        <span style="width:10px; height:10px; background:#22C55E; border-radius:50%; display:inline-block;"></span>
        <strong>Dược Sĩ AI Pharmacity (24/7)</strong>
      </div>
      <span style="cursor:pointer; font-size:18px;" onclick="toggleAiChat()">✕</span>
    </div>

    <div class="ai-chat-messages" id="aiChatMessages">
      <div class="chat-bubble bot">
        👋 Xin chào! Tôi là <strong>Dược sĩ AI Pharmacity</strong>. Tôi có thể hỗ trợ bạn tư vấn sử dụng thuốc, kiểm tra tương tác thuốc, kiểm tra tồn kho tại 1.000+ nhà thuốc hoặc hướng dẫn upload đơn thuốc!
      </div>
      <div class="chat-bubble bot">
        💡 <em>Gợi ý câu hỏi: "Tôi bị nhức đầu và đau dạ dày nên dùng thuốc gì?", "Kiểm tra nhà thuốc gần Q1 còn Berocca không?"</em>
      </div>
    </div>

    <div class="ai-chat-input-area">
      <input type="text" id="aiChatInput" class="ai-chat-input" placeholder="Nhập câu hỏi hoặc triệu chứng sức khỏe..." onkeypress="handleChatKeyPress(event)">
      <button class="btn-add-cart" style="width:auto; padding:8px 14px; font-size:13px; margin:0;" onclick="sendAiMessage()">Gửi</button>
    </div>
  </div>

  <!-- ============================================================
       OFFICIAL PHARMACITY FOOTER (BLUE NEW UI)
       ============================================================ -->
  <footer class="new-ui bg-surface-primary-default text-white pb-24 md:pb-0 mt-12">
    <div class="container mx-auto px-4 md:max-w-[1384px] py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <!-- Col 1: Về Pharmacity -->
      <div class="flex flex-col gap-3">
        <h4 class="font-base text-lg font-bold text-white">Về Pharmacity</h4>
        <div class="flex flex-col space-y-1.5 text-xs md:text-sm text-slate-100">
          <a class="hover:opacity-80 transition-opacity" href="/index.php?route=home">Giới thiệu</a>
          <a class="hover:opacity-80 transition-opacity" href="/index.php?route=kiosk">Hệ thống cửa hàng</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Giấy phép kinh doanh</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Quy chế hoạt động</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Chính sách đổi trả và bảo hành</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Thông tin bảo hành thiết bị y tế</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Chính sách giao hàng</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Chính sách bảo vệ dữ liệu cá nhân</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Chính sách thanh toán</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Thể lệ chương trình thẻ thành viên</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Câu hỏi thường gặp</a>
          <a class="hover:opacity-80 transition-opacity" href="#">Thông tin tuyển dụng</a>
        </div>
      </div>

      <!-- Col 2: Danh mục -->
      <div class="flex flex-col gap-3">
        <h4 class="font-base text-lg font-bold text-white">Danh mục</h4>
        <div class="flex flex-col space-y-1.5 text-xs md:text-sm text-slate-100">
          <a href="/index.php?route=category&name=Thuoc" class="hover:opacity-80 transition-opacity">Thuốc</a>
          <a href="/index.php?route=category&name=Tra+cuu+benh" class="hover:opacity-80 transition-opacity">Tra cứu bệnh</a>
          <a href="/index.php?route=category&name=Thuc+pham+chuc+nang" class="hover:opacity-80 transition-opacity">Thực phẩm bảo vệ sức khỏe</a>
          <a href="/index.php?route=category&name=Cham+soc+ca+nhan" class="hover:opacity-80 transition-opacity">Chăm sóc cá nhân</a>
          <a href="/index.php?route=category&name=Me+va+be" class="hover:opacity-80 transition-opacity">Mẹ và Bé</a>
          <a href="/index.php?route=category&name=Cham+soc+sac+dep" class="hover:opacity-80 transition-opacity">Chăm sóc sắc đẹp</a>
          <a href="/index.php?route=category&name=Thiet+bi+y+te" class="hover:opacity-80 transition-opacity">Thiết bị y tế</a>
          <a href="/index.php?route=category&name=Nhan+hang+Pharmacity" class="hover:opacity-80 transition-opacity">Nhãn hàng Pharmacity</a>
          <a href="/index.php?route=category&name=Khuyen+mai+HOT" class="hover:opacity-80 transition-opacity">Khuyến mãi HOT 🔥</a>
          <a href="/index.php?route=category&name=Goc+suc+khoe" class="hover:opacity-80 transition-opacity">Góc sức khỏe</a>
          <a href="/index.php?route=telemedicine" class="hover:opacity-80 transition-opacity">Đội ngũ chuyên môn</a>
        </div>
      </div>

      <!-- Col 3: Tổng đài miễn cước -->
      <div class="flex flex-col gap-4">
        <h4 class="font-base text-lg font-bold text-white">Tổng đài miễn cước</h4>
        <div class="flex flex-col gap-4 text-xs md:text-sm text-slate-100">
          <a href="tel:18006821" class="hover:opacity-80">
            Hỗ trợ đặt hàng
            <span class="block font-bold text-yellow-300 text-base">1800 6821 (Nhánh 1)</span>
          </a>
          <a href="tel:18006821" class="hover:opacity-80">
            Thông tin nhà thuốc, khuyến mãi
            <span class="block font-bold text-yellow-300 text-base">1800 6821 (Nhánh 2)</span>
          </a>
          <a href="tel:18006821" class="hover:opacity-80">
            Khiếu nại, góp ý
            <span class="block font-bold text-yellow-300 text-base">1800 6821 (Nhánh 2)</span>
          </a>
        </div>
      </div>

      <!-- Col 4: Theo dõi, Chứng nhận & Thanh toán -->
      <div class="flex flex-col gap-6">
        <div>
          <h4 class="font-base text-lg font-bold text-white mb-2">Theo dõi chúng tôi trên</h4>
          <div class="flex gap-3">
            <a target="_blank" href="https://www.facebook.com/PharmacityVN">
              <svg fill="none" viewBox="0 0 24 24" class="h-8 w-8"><path fill="#1877F2" d="M22 12c0 4.991-3.657 9.128-8.437 9.878v-6.987h2.33L16.336 12h-2.773v-1.876c0-.79.387-1.562 1.63-1.562h1.26v-2.46s-1.144-.196-2.238-.196c-2.284 0-3.777 1.385-3.777 3.89V12h-2.54v2.89h2.54v6.988C5.657 21.129 2 16.992 2 12 2 6.477 6.477 2 12 2s10 4.477 10 10"></path><path fill="#fff" d="m15.893 14.89.443-2.89h-2.773v-1.876c0-.79.387-1.562 1.63-1.562h1.26v-2.46s-1.144-.196-2.238-.196c-2.285 0-3.777 1.385-3.777 3.89V12h-2.54v2.89h2.54v6.988a10 10 0 0 0 3.124 0v-6.987z"></path></svg>
            </a>
            <a target="_blank" href="https://www.youtube.com/channel/UC34rPqjyb_WCq6dMu2khYQA">
              <svg fill="none" viewBox="0 0 24 24" class="h-8 w-8"><path fill="red" d="M21.588 7.2a2.5 2.5 0 0 0-1.763-1.762C18.26 5.01 12 5.01 12 5.01s-6.26 0-7.825.412c-.84.23-1.533.922-1.763 1.779C2 8.766 2 12.01 2 12.01s0 3.262.412 4.81c.23.857.906 1.533 1.763 1.764 1.581.428 7.825.428 7.825.428s6.26 0 7.825-.412a2.5 2.5 0 0 0 1.763-1.763c.412-1.565.412-4.81.412-4.81s.016-3.262-.412-4.827"></path><path fill="#fff" d="m10.007 15.01 5.206-2.999-5.206-2.998z"></path></svg>
            </a>
            <a target="_blank" href="https://zalo.me/1123198001548302988?src=qr">
              <img class="h-8 w-8 rounded-full" src="https://production-cdn.pharmacity.io/digital/original/plain/e-com/images/static-website/20260105073249-0-nurse.png" alt="Zalo">
            </a>
          </div>
        </div>

        <div>
          <h4 class="font-base text-lg font-bold text-white mb-2">Chứng nhận bởi</h4>
          <div class="flex items-center gap-2">
            <img class="h-7 object-contain" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706162441-0-BCT.png" alt="BCT">
            <img class="h-7 object-contain" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706162441-0-DMCA.png" alt="DMCA">
            <img class="h-9 object-contain" src="https://static.legitscript.com/seals/10881071.png" alt="LegitScript">
          </div>
        </div>

        <div>
          <h4 class="font-base text-lg font-bold text-white mb-2">Hỗ trợ thanh toán</h4>
          <div class="flex max-w-[232px] flex-wrap gap-2">
            <img class="h-7 bg-white p-1 rounded" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706162440-0-COD.png" alt="COD">
            <img class="h-7 bg-white p-1 rounded" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706162441-0-Visa.png" alt="Visa">
            <img class="h-7 bg-white p-1 rounded" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706162441-0-MasterCard.png" alt="MasterCard">
            <img class="h-7 bg-white p-1 rounded" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706162441-0-JCB.png" alt="JCB">
            <img class="h-7 bg-white p-1 rounded" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706162441-0-Momo.png" alt="Momo">
            <img class="h-7 bg-white p-1 rounded" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20240706162729-0-ZaloPay.png" alt="ZaloPay">
            <img class="h-7 bg-white p-1 rounded" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20241122062454-0-napas.png" alt="Napas">
            <img class="h-7 bg-white p-1 rounded" src="https://prod-cdn.pharmacity.io/e-com/images/static-website/20241122063240-0-apple-pay.png" alt="ApplePay">
          </div>
        </div>
      </div>

    </div>

    <!-- Company Details Bottom Strip -->
    <div class="bg-[#004A9E] py-6 border-t border-blue-500/30">
      <div class="container mx-auto px-4 md:max-w-[1384px] grid grid-cols-1 md:grid-cols-2 gap-4 text-xs opacity-90">
        <div>
          <p class="font-bold text-sm text-white mb-1">Công Ty Cổ Phần Dược Phẩm Pharmacity</p>
          <p>Trụ sở: 248A Nơ Trang Long, Phường Bình Thạnh, TP.Hồ Chí Minh</p>
          <p>Điện thoại: 1800 6821 - Email: cskh@pharmacity.vn</p>
        </div>
        <div class="md:text-right">
          <p>GCNDKDN: 0311770883 do sở KH & ĐT TP.HCM cấp lần đầu ngày 05/05/2012.</p>
          <p>GCNDDKKDD: 6782/DDKKDDD-ĐNai ngày cấp 26/4/2022 Sở Y Tế Tỉnh Đồng Nai.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- ============================================================
       GLOBAL QUICK VIEW SELECT PRODUCT MODAL (POPUP "CHỌN SẢN PHẨM")
       ============================================================ -->
  <div id="quickview-modal-backdrop" onclick="if(event.target === this) closeQuickViewModal()" class="fixed inset-0 bg-slate-900/60 z-50 backdrop-blur-xs flex items-center justify-center p-4 hidden transition-opacity duration-200">
    
    <!-- Dialog Box -->
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-[840px] overflow-hidden relative border border-slate-100 flex flex-col md:flex-row max-h-[90vh]">
      
      <!-- Close Button -->
      <button onclick="closeQuickViewModal()" type="button" class="absolute top-3 right-3 z-20 w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-800 transition-all">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <!-- Mobile Title Header -->
      <div class="p-4 border-b border-slate-100 md:hidden font-bold text-slate-900 text-base">
        Chọn sản phẩm
      </div>

      <!-- Product Image (Left Column) -->
      <div class="w-full md:w-[380px] shrink-0 bg-slate-50 p-6 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r border-slate-100 relative">
        <img id="qv-img" class="w-64 h-64 md:w-80 md:h-80 object-contain drop-shadow-sm" src="" alt="Product Image">
      </div>

      <!-- Product Details & Actions (Right Column) -->
      <div class="flex-1 p-6 flex flex-col justify-between space-y-4 overflow-y-auto">
        <div>
          <div class="mb-2">
            <span class="inline-flex items-center gap-1 rounded-md px-2.5 py-1 bg-blue-50 text-blue-700 text-xs font-bold border border-blue-100">
              🚚 Miễn phí vận chuyển cho mọi đơn hàng 0đ
            </span>
          </div>

          <h2 id="qv-title" class="text-base md:text-lg font-bold text-slate-900 leading-snug line-clamp-3 mb-3"></h2>

          <!-- Price Box -->
          <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 mb-3 space-y-1">
            <div class="flex items-baseline gap-2">
              <span id="qv-price" class="text-2xl font-extrabold text-blue-600"></span>
              <span id="qv-old-price" class="text-xs text-slate-400 line-through"></span>
            </div>
            <p class="text-[11px] text-slate-500">Giá đã bao gồm thuế. Phí vận chuyển và các chi phí khác (nếu có) sẽ được thể hiện khi đặt hàng.</p>
            
            <div class="pt-1.5 flex items-center">
              <span class="inline-flex items-center gap-1 rounded-lg bg-amber-50 border border-amber-200 px-2.5 py-1 text-xs font-bold text-amber-800">
                🪙 Tích lũy <span id="qv-points" class="text-amber-700 font-extrabold ml-1"></span>
              </span>
            </div>
          </div>

          <!-- Quantity Selector -->
          <div class="space-y-1.5">
            <label class="font-bold text-xs uppercase text-slate-700">Số lượng</label>
            <div class="flex items-center gap-2">
              <button type="button" onclick="changeModalQty(-1)" class="w-9 h-9 flex items-center justify-center rounded-xl bg-slate-100 hover:bg-slate-200 font-bold text-slate-700 border border-slate-200">-</button>
              <input type="text" id="qv-qty-input" value="1" readonly class="w-12 h-9 text-center font-bold text-slate-800 bg-white border border-slate-200 rounded-xl text-sm">
              <button type="button" onclick="changeModalQty(1)" class="w-9 h-9 flex items-center justify-center rounded-xl bg-slate-100 hover:bg-slate-200 font-bold text-slate-700 border border-slate-200">+</button>
            </div>
          </div>
        </div>

        <!-- Action Buttons Form -->
        <form id="qv-modal-form" action="/index.php?route=cart" method="POST" class="pt-3 border-t border-slate-100">
          <input type="hidden" id="qv-form-product-id" name="product_id" value="">
          <input type="hidden" id="qv-form-qty" name="quantity" value="1">
          <input type="hidden" id="qv-form-action" name="action" value="add">

          <div class="flex items-center gap-3">
            <button type="button" onclick="quickViewAddToCart()" class="flex-1 font-bold rounded-xl border border-blue-600 bg-white text-blue-600 hover:bg-blue-50 py-3 text-xs md:text-sm transition-all shadow-2xs">
              Thêm vào giỏ
            </button>
            <button type="button" onclick="quickViewBuyNow()" class="flex-1 font-bold rounded-xl bg-blue-600 hover:bg-blue-700 text-white py-3 text-xs md:text-sm transition-all shadow-md">
              Mua ngay
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>

  <!-- Global Cart Toast Alert Notification -->
  <div id="cart-toast-container" class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none">
    <div class="bg-slate-900/90 backdrop-blur text-white px-5 py-3.5 rounded-2xl shadow-2xl flex items-center gap-3 border border-white/10 text-sm font-bold">
      <span class="text-xl">🛒</span>
      <span id="cart-toast-message">Đã thêm sản phẩm vào giỏ hàng!</span>
    </div>
  </div>

  <script>
    function toggleAiChat() {
      const win = document.getElementById('aiChatWindow');
      if (win) {
        win.style.display = (win.style.display === 'flex') ? 'none' : 'flex';
      }
    }

    function handleChatKeyPress(e) {
      if (e.key === 'Enter') sendAiMessage();
    }

    function sendAiMessage() {
      const input = document.getElementById('aiChatInput');
      const messages = document.getElementById('aiChatMessages');
      if (!input || !messages || !input.value.trim()) return;

      const userText = input.value.trim();
      
      const userBubble = document.createElement('div');
      userBubble.className = 'chat-bubble user';
      userBubble.textContent = userText;
      messages.appendChild(userBubble);
      
      input.value = '';
      messages.scrollTop = messages.scrollHeight;

      setTimeout(() => {
        const botBubble = document.createElement('div');
        botBubble.className = 'chat-bubble bot';
        botBubble.innerHTML = '🤖 <strong>Dược sĩ AI Pharmacity:</strong> Cảm ơn câu hỏi của bạn! Với triệu chứng "' + userText + '", hệ thống khuyến nghị bạn tham khảo ý kiến dược sĩ tại nhà thuốc hoặc theo dõi các sản phẩm giảm đau, hạ sốt, bổ sung khoáng chất chuẩn Pharmacity.';
        messages.appendChild(botBubble);
        messages.scrollTop = messages.scrollHeight;
      }, 700);
    }

    const sampleProductsList = {
      1: { id: 1, name: 'Viên sủi Berocca Performance vị cam (Hộp 10 viên)', price: 82000, originalPrice: 95000, img: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400' },
      2: { id: 2, name: 'Khẩu trang y tế Pharmacity 4 lớp 3D (Hộp 50 cái)', price: 45000, originalPrice: 55000, img: 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/ecommerce/20260529023827-0-OL00326.png' },
      3: { id: 3, name: 'Gel rửa mặt La Roche-Posay Effaclar Purifying 200ml', price: 385000, originalPrice: 420000, img: 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/promotion_sku_images/20260730095006-0-P30519.png' },
      4: { id: 4, name: 'Nước cân bằng da La Roche-Posay Effaclar Lotion 200ml', price: 410000, originalPrice: 450000, img: 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20260402114453-0-P30711.png' },
      5: { id: 5, name: 'Kem chống nắng La Roche-Posay Anthelios XL 50ml', price: 495000, originalPrice: 535000, img: 'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=400' },
      6: { id: 6, name: 'Men vi sinh BioGaia Protectis Baby Drops 5ml', price: 415000, originalPrice: 450000, img: 'https://images.unsplash.com/photo-1471864190281-a93a3070b6de?w=400' },
      7: { id: 7, name: 'Bột thanh nhiệt SENSA COOLS (6 gói x 7g)', price: 26500, originalPrice: '', img: 'https://production-cdn.pharmacity.io/digital/1080x1080/plain/e-com/images/ecommerce/20250415090632-0-P00075.jpg' },
      8: { id: 8, name: 'Máy đo huyết áp bắp tay tự động Omron HEM-7120', price: 890000, originalPrice: 1050000, img: 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=400' },
      9: { id: 9, name: 'Nước muối sinh lý Pharmacity Natri Clorid 0,9% (500ml)', price: 11000, originalPrice: '', img: 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20250722105108-0-simple.png' },
      10: { id: 10, name: 'Viên nén Panadol Extra With Optizorb GSK giảm đau, hạ sốt', price: 19000, originalPrice: '', img: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400' },
      11: { id: 11, name: 'Chai xịt Lineabon D3 + K2 Spray hỗ trợ hệ xương và răng chắc khỏe (10ml)', price: 330000, originalPrice: '', img: 'https://production-cdn.pharmacity.io/digital/640x640/plain/e-com/images/product/20250723071928-0-dadau.png' },
      12: { id: 12, name: 'Thuốc Fugacar Janssen điều trị nhiễm một hay nhiều loại giun', price: 21990, originalPrice: '', img: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400' },
      13: { id: 13, name: 'Viên nén Magne-B6 Corbière Sanofi điều trị thiếu magnesium', price: 21200, originalPrice: '', img: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400' },
      14: { id: 14, name: 'Sữa chống nắng CeraVe Invisible Dry Touch SPF 50', price: 335750, originalPrice: 395000, img: 'https://production-cdn.pharmacity.io/digital/640x0/plain/e-com/images/product/20250723071928-0-dadau.png' }
    };

    function openQuickViewById(id) {
      let p = sampleProductsList[id] || { id: id, name: 'Sản phẩm Pharmacity #' + id, price: 99000, originalPrice: 120000, img: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400' };
      openQuickViewModal(p.id, p.name, p.price, p.originalPrice, p.img);
    }

    function openQuickViewModal(id, name, price, originalPrice, img) {
      document.getElementById('qv-form-product-id').value = id;
      document.getElementById('qv-title').innerText = name;
      
      let numPrice = typeof price === 'number' ? price : parseInt(String(price).replace(/[^0-9]/g, '')) || 0;
      document.getElementById('qv-price').innerText = numPrice.toLocaleString('vi-VN') + ' ₫/Hộp';
      
      if (originalPrice && originalPrice != numPrice) {
        let numOld = typeof originalPrice === 'number' ? originalPrice : parseInt(String(originalPrice).replace(/[^0-9]/g, '')) || 0;
        document.getElementById('qv-old-price').innerText = numOld.toLocaleString('vi-VN') + ' ₫';
        document.getElementById('qv-old-price').style.display = 'inline';
      } else {
        document.getElementById('qv-old-price').style.display = 'none';
      }

      let points = Math.floor(numPrice * 0.01);
      document.getElementById('qv-points').innerText = '+' + points.toLocaleString('vi-VN') + ' P-Xu Đồng';
      
      document.getElementById('qv-img').src = img;
      document.getElementById('qv-qty-input').value = 1;
      document.getElementById('qv-form-qty').value = 1;

      document.getElementById('quickview-modal-backdrop').classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }

    function closeQuickViewModal() {
      document.getElementById('quickview-modal-backdrop').classList.add('hidden');
      document.body.style.overflow = '';
    }

    function changeModalQty(delta) {
      const input = document.getElementById('qv-qty-input');
      const formInput = document.getElementById('qv-form-qty');
      let val = parseInt(input.value) || 1;
      val = Math.max(1, val + delta);
      input.value = val;
      formInput.value = val;
    }

    function showCartToast(msg) {
      const toast = document.getElementById('cart-toast-container');
      const msgEl = document.getElementById('cart-toast-message');
      if (toast && msgEl) {
        msgEl.innerText = msg;
        toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
        setTimeout(() => {
          toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
        }, 3000);
      }
    }

    function quickViewAddToCart() {
      const pId = document.getElementById('qv-form-product-id').value;
      const qty = document.getElementById('qv-qty-input').value || 1;
      const pTitle = document.getElementById('qv-title').innerText;

      const formData = new FormData();
      formData.append('action', 'add');
      formData.append('product_id', pId);
      formData.append('quantity', qty);
      formData.append('is_ajax', '1');

      fetch('/index.php?route=cart', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          const badge = document.getElementById('header-cart-badge');
          if (badge) badge.innerText = data.cart_count;
          closeQuickViewModal();
          showCartToast('🎉 Đã thêm "' + pTitle + '" vào giỏ hàng!');
        } else {
          document.getElementById('qv-modal-form').submit();
        }
      })
      .catch(err => {
        document.getElementById('qv-form-action').value = 'add';
        document.getElementById('qv-modal-form').submit();
      });
    }

    function quickViewBuyNow() {
      document.getElementById('qv-form-action').value = 'buy_now';
      document.getElementById('qv-modal-form').submit();
    }
  </script>
</body>
</html>
