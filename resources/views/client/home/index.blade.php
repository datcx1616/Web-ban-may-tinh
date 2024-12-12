@extends('layouts.app')
@section('content')
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
        /* Đảm bảo popup nằm trên các phần tử khác */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Nền tối */
            justify-content: center;
            align-items: center;
            /* Căn giữa popup theo chiều dọc */
            z-index: 9999;
            /* Đảm bảo popup luôn ở trên */
        }

        .popup-content {
            background-color: #fff;
            padding: 40px;
            /* Tăng khoảng cách bên trong */
            border-radius: 10px;
            width: 500px;
            /* Tăng chiều rộng */
            height: auto;
            /* Chiều cao tự động (hoặc bạn có thể đặt cố định, ví dụ: 400px) */
            text-align: center;
            transform: scale(0.8);
            /* Ban đầu popup sẽ nhỏ hơn một chút */
            animation: scaleIn 0.5s forwards;
            /* Hiệu ứng mở rộng */
        }

        .popup h2 {
            font-size: 28px;
            /* Tăng kích thước tiêu đề */
            margin-bottom: 20px;
        }

        .popup p {
            font-size: 20px;
            color: #e60000;
            margin-bottom: 20px;
        }

        input[type="email"],
        input[type="tel"],
        .button1 {
            width: 90%;
            /* Giảm chiều rộng để có khoảng cách với viền form */
            padding: 15px;
            /* Tăng kích thước nút và ô nhập liệu */
            margin: 10px 0;

            border-radius: 6px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        .button1 {
            background-color: #e60000;
            color: white;
            margin-left: 25px;
            font-size: 18px;
            cursor: pointer;
        }

        .button1:hover {
            background-color: #c50000;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            cursor: pointer;
        }

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


    <x-product-category />


    <x-logo-component />

    <x-chat-component />

    <x-banner-home-component />

    <style>
        .icon-red {
            color: red;
        }
    </style>

    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <!-- Block 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light shadow-sm mb-4 p-4 rounded hover-shadow">
                    <div class="icon-container text-primary mr-3">
                        <i class="fas fa-shield-alt fa-2x"></i>
                    </div>
                    <h5 class="font-weight-semi-bold m-0">Thương hiệu đảm bảo</h5>
                </div>
            </div>
            <!-- Block 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light shadow-sm mb-4 p-4 rounded hover-shadow">
                    <div class="icon-container text-success mr-3">
                        <i class="fas fa-undo fa-2x"></i>
                    </div>
                    <h5 class="font-weight-semi-bold m-0">Đổi trả dễ dàng</h5>
                </div>
            </div>
            <!-- Block 3 -->
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light shadow-sm mb-4 p-4 rounded hover-shadow">
                    <div class="icon-container text-warning mr-3">
                        <i class="fas fa-star fa-2x"></i>
                    </div>
                    <h5 class="font-weight-semi-bold m-0">Sản phẩm chất lượng</h5>
                </div>
            </div>
            <!-- Block 4 -->
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light shadow-sm mb-4 p-4 rounded hover-shadow">
                    <div class="icon-container text-danger mr-3">
                        <i class="fas fa-truck fa-2x"></i>
                    </div>
                    <h5 class="font-weight-semi-bold m-0">Giao hàng tận nơi</h5>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-shadow {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg-light {
            background: linear-gradient(135deg, #f9f9f9, #ffffff);
        }
    </style>


    <div class=" pt-2">
        <marquee behavior="" direction="left" style="color:black;font-size: 16px;">
            "Hành trình nâng cấp công nghệ bắt đầu từ đây – nơi bạn tìm thấy giải pháp hoàn hảo cho mọi nhu cầu máy
            tính."
        </marquee>
    </div>



    <x-feature-product />


    <div class="container-fluid mt-2 mb-3">
        <div class="px-xl-5">
            <img src="{{ asset('client/img/tt.png') }}" alt="logo"
                class="first-slide w-100"style=" border-radius: 10px;">
        </div>
    </div>
    <div class="container-fluid pt-5 pb-3">

        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <img src="{{ asset('client/img/Icon_Doc_quyen.png') }}" alt="logo" style="width: 50px; height: 40px;">
            <span class="bg-secondary pr-3">Ưu đãi thanh toán</span>
        </h2>
        <div class="row px-xl-5">
            <!-- Khung 1 -->
            <div class="col-md-3">
                <div class="product-offer mb-30" style="height: 150px;">
                    <img class="img-fluid" src="{{ asset('client/img/ud4.png') }}" alt="logo" alt="Image 2"
                        style="height: 100%; width: 100%;">
                </div>
            </div>
            <!-- Khung 2 -->
            <div class="col-md-3">
                <div class="product-offer mb-30" style="height: 150px;">
                    <img class="img-fluid" src="{{ asset('client/img/ud1.png') }}" alt="logo" alt="Image 2"
                        style="height: 100%; width: 100%;">
                </div>
            </div>
            <!-- Khung 3 -->
            <div class="col-md-3">
                <div class="product-offer mb-30" style="height: 150px;">
                    <img class="img-fluid" src="{{ asset('client/img/ud2.png') }}" alt="logo" alt="Image 2"
                        style="height: 100%; width: 100%;">
                </div>
            </div>
            <!-- Khung 4 -->
            <div class="col-md-3">
                <div class="product-offer mb-30" style="height: 150px;">
                    <img class="img-fluid" src="{{ asset('client/img/ud5.png') }}" alt="logo" alt="Image 2"
                        style="height: 100%; width: 100%;">
                </div>
            </div>
        </div>
    </div>


    <x-post-new-component />

    <x-product-related />
@endsection
