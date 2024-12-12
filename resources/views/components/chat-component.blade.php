<div id="chatbox">
    <div id="chat-header">
        Chat với chúng tôi
        <span id="close-chat">✖</span> <!-- Icon đóng hộp thoại -->
    </div>
    <div id="chat-body">
        <div class="message">Chào bạn! Bạn cần giúp đỡ gì hôm nay?</div>
    </div>
    <input type="text" id="user-input" placeholder="Nhập tin nhắn của bạn..." class="ml-3" style="width: 90%;">
    <button id="send-button" class="ml-3 mt-2 mb-2" style="width: 90%;">Gửi</button>

</div>

<script>
    const chatbox = document.getElementById('chatbox');
    const closeButton = document.getElementById('close-chat');

    closeButton.addEventListener('click', function() {
        chatbox.classList.toggle('collapsed'); // Chuyển đổi giữa trạng thái thu nhỏ và bình thường
    });

    document.getElementById('send-button').addEventListener('click', function() {
        const userInput = document.getElementById('user-input');
        const message = userInput.value;

        if (message) {
            const chatBody = document.getElementById('chat-body');
            const newMessage = document.createElement('div');
            newMessage.className = 'message';
            newMessage.textContent = message;
            chatBody.appendChild(newMessage);

            userInput.value = '';
            chatBody.scrollTop = chatBody.scrollHeight;
        }
    });
</script>
