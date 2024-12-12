<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2>ĐĂNG KÝ NHẬN TIN KHUYẾN MÃI</h2>
        <p>Nhận Ngay Voucher 10%</p>
        <form action="#" style=" text-align: left;" class="form2">
            <label for="email" class="ml-4">Email:</label>
            <input type="email" id="email" name="email" required class="ml-4">

            <label for="phone" class="ml-4">Số điện thoại:</label>
            <input type="tel" id="phone" name="phone" required class="ml-4">

            <label>
                <input type="checkbox" required class="ml-4"> Tôi đồng ý với điều khoản
            </label>

            <button class="button1" type="submit" class="ml-4">ĐĂNG KÝ NGAY</button>
        </form>
        <a href="#" onclick="closePopup()">Bữa khác nha</a>
    </div>
</div>
<style>
    /* Animation for the popup to scale in */
    @keyframes scaleIn {
        .form2 {
            transform: scale(0.8);
            /* Ban đầu nhỏ hơn một chút */
            opacity: 0;
            /* Ban đầu mờ */
        }

        to {
            transform: scale(1);
            /* Kích thước bình thường */
            opacity: 1;
            /* Hiển thị rõ ràng */
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

    // Xử lý khi người dùng nhấn "ĐĂNG KÝ NGAY"
    document.querySelector('form2').addEventListener('submit', function(e) {
        e.preventDefault(); // Ngăn chặn hành vi gửi form mặc định (tải lại trang)

        // Hiển thị thông báo (tùy chọn)
        alert('Đăng ký thành công!');

        // Tắt popup
        closePopup();
    });
</script>
