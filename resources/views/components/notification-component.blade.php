<div id="popup" class="popup" style="display: none;">
    <div class="popup-content" onclick="event.stopPropagation()">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2>ĐĂNG KÝ NHẬN TIN KHUYẾN MÃI</h2>
        <p>Nhận Ngay Voucher 10%</p>
        <form id="form2" action="#" style="text-align: left;" class="form2">
            <label for="email" class="ml-4">Email:</label>
            <input type="email" id="email" name="email" required class="ml-4">

            <label for="phone" class="ml-4">Số điện thoại:</label>
            <input type="tel" id="phone" name="phone" required class="ml-4">

            <label>
                <input type="checkbox" required class="ml-4"> Tôi đồng ý với điều khoản
            </label>

            <button class="button1 ml-4" type="submit">ĐĂNG KÝ NGAY</button>
        </form>
        <a href="#" onclick="closePopup()">Bữa khác nha</a>
    </div>
</div>

<style>
    /* Animation for the popup to scale in */
    @keyframes scaleIn {
        from {
            transform: scale(0.8);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>

<script>
    // Hiển thị popup khi trang tải
    window.onload = function() {
        setTimeout(function() {
            document.getElementById('popup').style.display = 'flex';
        }, 1000); // Hiển thị sau 1 giây
    };

    // Đóng popup
    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
    document.getElementById('popup').addEventListener('click', function() {
        closePopup();
    });
    // Ngăn chặn đóng popup khi nhấp vào nội dung bên trong
    document.querySelector('.popup-content').addEventListener('click', function(event) {
        event.stopPropagation();
    });

    // Xử lý khi người dùng nhấn "ĐĂNG KÝ NGAY"
    document.getElementById('form2').addEventListener('submit', function(e) {
        e.preventDefault(); // Ngăn chặn hành vi gửi form mặc định

        // Hiển thị thông báo (tùy chọn)
        alert('Đăng ký thành công!');

        // Tắt popup
        closePopup();
    });
</script>
