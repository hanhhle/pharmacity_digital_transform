/**
 * Pharmacity Digital Transformation Interactive JavaScript Core
 */

document.addEventListener('DOMContentLoaded', function () {
  console.log('Pharmacity DX Platform initialized.');

  // --------------------------------------------------------
  // AI Chatbot Floating Assistant Logic
  // --------------------------------------------------------
  const fab = document.getElementById('aiChatbotFab');
  const chatWindow = document.getElementById('aiChatWindow');
  const closeChat = document.getElementById('closeAiChat');
  const chatInput = document.getElementById('aiChatInput');
  const sendBtn = document.getElementById('aiChatSendBtn');
  const chatMessages = document.getElementById('aiChatMessages');

  if (fab && chatWindow) {
    fab.addEventListener('click', function () {
      chatWindow.style.display = chatWindow.style.display === 'flex' ? 'none' : 'flex';
    });

    if (closeChat) {
      closeChat.addEventListener('click', function () {
        chatWindow.style.display = 'none';
      });
    }

    function addMessage(text, sender = 'bot') {
      const bubble = document.createElement('div');
      bubble.className = `chat-bubble ${sender}`;
      bubble.innerHTML = text;
      chatMessages.appendChild(bubble);
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function handleChatSend() {
      const query = chatInput.value.trim();
      if (!query) return;

      addMessage(query, 'user');
      chatInput.value = '';

      // Simulated AI Bot Responses
      setTimeout(() => {
        const lower = query.toLowerCase();
        if (lower.includes('huyết áp') || lower.includes('thuốc')) {
          addMessage('Dược sĩ AI: Dựa trên hồ sơ của bạn (Huyết áp 118/78 mmHg), đơn thuốc <strong>Amlodipine 5mg</strong> đang có sẵn tại Pharmacity 205 Nguyễn Trãi (Q1). Bạn có muốn tôi đặt giao 1 giờ không?');
        } else if (lower.includes('mặt') || lower.includes('mụn') || lower.includes('da')) {
          addMessage('Dược sĩ AI đề xuất: Bộ đôi <strong>Gel rửa mặt La Roche-Posay Effaclar</strong> + <strong>Kem chống nắng Anthelios</strong> đang có ưu đãi tặng 500 điểm Pharmacity Extra!');
        } else if (lower.includes('bác sĩ') || lower.includes('khám')) {
          addMessage('Dược sĩ AI: Bạn có thể đặt lịch tư vấn Video 1-1 với <strong>BS. CKII Nguyễn Thị Thanh</strong> (Nội khoa & Huyết áp) trong mục Telemedicine trên thanh công cụ.');
        } else {
          addMessage('Dược sĩ AI Pharmacity luôn sẵn sàng hỗ trợ! Tôi có thể tra cứu tồn kho 1.000+ nhà thuốc, hướng dẫn liều dùng, hoặc đặt lịch bác sĩ giúp bạn.');
        }
      }, 600);
    }

    if (sendBtn) sendBtn.addEventListener('click', handleChatSend);
    if (chatInput) {
      chatInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') handleChatSend();
      });
    }
  }
});
