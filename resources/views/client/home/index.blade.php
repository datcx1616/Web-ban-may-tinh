@extends('layouts.app')
@section('content')
    <style>
        /* Tạo hiệu ứng chạy qua lại cho mỗi phần tử */
        @keyframes slide {
            0% {
                transform: translateX(100%);
            }

            50% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .slide-container {
            display: flex;
            flex-wrap: nowrap;
            /* Đảm bảo các phần tử không xuống hàng */
            justify-content: flex-start;
            overflow-x: hidden;
            /* Ẩn thanh cuộn ngang */
            white-space: nowrap;
            /* Ngăn các phần tử xuống hàng */
        }

        .slide-item {
            flex: 0 0 auto;
            /* Không giãn nở và không thu nhỏ */
            margin-right: 30px;
            margin-bottom: 20px;
            /* Thêm margin dưới để tạo khoảng cách khi xuống hàng */
            animation: slide 20s linear infinite;
            /* Thay đổi từ 10s thành 20s để làm chậm hiệu ứng */
        }

        .slide-item:nth-child(1) {
            animation-delay: 0s;
        }

        .slide-item:nth-child(2) {
            animation-delay: 2s;
        }

        .slide-item:nth-child(3) {
            animation-delay: 4s;
        }

        .slide-item:nth-child(4) {
            animation-delay: 6s;
        }

        .slide-item:nth-child(5) {
            animation-delay: 8s;
        }

        .slide-item:nth-child(6) {
            animation-delay: 10s;
        }
    </style>



    <div class="container-fluid pt-3">
        <div class="row px-xl-5 pb-1 slide-container">
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon1.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">App</h5>
                    <img src="{{ asset('client/img/icon1.1.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon7.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">hp</h5>
                    <img src="{{ asset('client/img/icon7.7.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon3.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">Acer</h5>
                    <img src="{{ asset('client/img/icon3.3.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon4.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">MSI</h5>
                    <img src="{{ asset('client/img/icon4.4.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon5.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">Leno</h5>
                    <img src="{{ asset('client/img/icon5.5.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon6.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">Dell</h5>
                    <img src="{{ asset('client/img/icon6.6.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
        </div>
    </div>




    <x-banner-home-component />

    <style>
        .social-sidebar {
            position: fixed;
            top: 50%;
            left: 70px;
            transform: translateY(-50%);
            z-index: 1000;
        }

        .social-sidebar .icon {
            display: block;
            margin: 10px 0;
            text-align: center;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            background-color: white;
            border: 1px solid #ddd;
        }

        .social-sidebar .icon img {
            max-width: 60%;
            height: auto;
        }

        .social-sidebar .facebook {
            border-color: #3b5998;
        }

        .social-sidebar .youtube {
            border-color: #FF0000;
        }

        .social-sidebar .instagram {
            border-color: #C13584;
        }

        .social-sidebar .tiktok {
            border-color: #000000;
        }
    </style>

    <div class="social-sidebar">
        <a href="https://facebook.com" class="icon facebook">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
        </a>
        <a href="https://youtube.com" class="icon youtube">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" alt="YouTube">
        </a>
        <a href="https://instagram.com" class="icon instagram">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
        </a>
        <a href="https://tiktok.com" class="icon tiktok">
            <img src="data:image/png;base64,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"
                alt="TikTok">
            <!-- Đường dẫn mới cho logo TikTok -->
        </a>





    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        .button-container {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            z-index: 1000;
        }

        .custom-btn {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 11px;
            font-weight: bold;
            text-align: center;
            background: linear-gradient(to bottom, #ff7e31, #ff3b00);
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .custom-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.4);
        }

        .zalo-btn {
            background: white;
            border: 2px solid #0078FF;
            color: #0078FF;
            font-size: 16px;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .zalo-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
        }

        .zalo-btn img,
        .icon {
            width: 24px;
            height: 24px;
            margin-bottom: 5px;
        }
    </style>

    <body>
        <div class="button-container">
            <!-- Nút "Máy Cũ Giá Tốt" -->
            <div class="custom-btn">
                <div>
                    <!-- Icon SVG cho Máy Cũ Giá Tốt -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11 1.5v13H9v-13h2zM5 2v13H3V2h2z" />
                    </svg>
                    <br>Máy Cũ <br>Giá Tốt
                </div>
            </div>

            <!-- Nút "Thu Cũ Giá Cao" -->
            <div class="custom-btn">
                <div>
                    <!-- Icon SVG cho Thu Cũ Giá Cao -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 3.5a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zM2 8a6 6 0 1 1 12 0A6 6 0 0 1 2 8z" />
                    </svg>
                    <br>Thu Cũ <br>Giá Cao
                </div>
            </div>

            <!-- Nút Zalo "Tư Vấn Ngay" -->
            <div class="zalo-btn">
                <!-- Icon SVG cho Zalo -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0078FF"
                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.654 1.328a.678.678 0 0 1 .696-.245l2.646.623c.286.067.45.297.408.516l-.591 3.17a.678.678 0 0 1-.356.511l-1.201.7a11.462 11.462 0 0 0 4.516 4.516l.7-1.201a.678.678 0 0 1 .511-.356l3.17-.591a.678.678 0 0 1 .516.408l.623 2.646a.678.678 0 0 1-.245.696l-2.102 1.22a1.745 1.745 0 0 1-1.77.112 13.468 13.468 0 0 1-6.397-6.397 1.745 1.745 0 0 1 .112-1.77l1.22-2.102z" />
                </svg>
                Tư Vấn Ngay
            </div>
        </div>
        </div>

        <style>
            .icon-red {
                color: red;
                /* Đặt màu đỏ cho các biểu tượng */
            }
        </style>

        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px; border-radius: 10px;">
                        <h1 class="fas fa-shield-alt icon-red m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Thương hiệu đảm bảo</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px; border-radius: 10px;">
                        <h1 class="fas fa-undo icon-red m-0 mr-2"></h1>
                        <h5 class="font-weight-semi-bold m-0">Đổi trả dễ dàng</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px; border-radius: 10px;">
                        <h1 class="fas fa-star icon-red m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Sản phẩm chất lượng</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px; border-radius: 10px;">
                        <h1 class="fas fa-truck icon-red m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Giao hàng tận nơi</h5>
                    </div>
                </div>
            </div>
        </div>



        <div id="chatbox">
            <div id="chat-header">
                Chat với chúng tôi
                <span id="close-chat">✖</span> <!-- Icon đóng hộp thoại -->
            </div>
            <div id="chat-body">
                <div class="message">Chào bạn! Bạn cần giúp đỡ gì hôm nay?</div>
            </div>
            <input type="text" id="user-input" placeholder="Nhập tin nhắn của bạn...">
            <button id="send-button">Gửi</button>
        </div>

        <style>
            body {
                font-family: Arial, sans-serif;
            }

            #chatbox {
                z-index: 1000;
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 300px;
                border: 1px solid #ccc;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                background-color: white;
                transition: width 0.3s ease, height 0.3s ease;
                /* Hiệu ứng cho cả chiều rộng và chiều cao */
            }

            #chatbox.collapsed {
                width: 50px;
                /* Kích thước khi thu nhỏ ngang */
                height: 40px;
                /* Chiều cao khi thu nhỏ ngang */
                overflow: hidden;
                /* Ẩn nội dung khi thu nhỏ */
            }

            #chat-header {
                background-color: #007bff;
                color: white;
                padding: 10px;
                border-radius: 8px 8px 0 0;
                text-align: center;
                position: relative;
            }

            #close-chat {
                position: absolute;
                right: 10px;
                top: 5px;
                cursor: pointer;
                font-size: 16px;
                color: white;
            }

            #chat-body {
                max-height: 400px;
                overflow-y: auto;
                padding: 10px;
            }

            .message {
                margin: 5px 0;
            }

            #user-input {
                width: calc(100% - 80px);
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            #send-button {
                padding: 10px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            #send-button:hover {
                background-color: #0056b3;
            }
        </style>


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




        <x-feature-product />



        <div class="container-fluid pt-5 pb-3">

            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <img src="{{ asset('client/img/Icon_Doc_quyen.png') }}" alt="logo"
                    style="width: 50px; height: 40px;">
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
        <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3">Chuyên trang thương hiệu</span>
            </h2>
            <div class="row px-xl-5">
                <!-- Khung 1 -->
                <div class="col-md-3">
                    <div class="product-offer mb-30" style="height: 150px;">
                        <img class="img-fluid"
                            src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/apple-chinh-hang-home.jpg"
                            alt="Image 1" style="height: 100%; width: 100%;">
                    </div>
                </div>
                <!-- Khung 2 -->
                <div class="col-md-3">
                    <div class="product-offer mb-30" style="height: 150px;">
                        <img class="img-fluid"
                            src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/SIS%20asus.png"
                            alt="Image 2" style="height: 100%; width: 100%;">
                    </div>
                </div>
                <!-- Khung 3 -->
                <div class="col-md-3">
                    <div class="product-offer mb-30" style="height: 150px;">
                        <img class="img-fluid"
                            src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/gian-hang-samsung-home.png"
                            alt="Image 3" style="height: 100%; width: 100%;">
                    </div>
                </div>
                <!-- Khung 4 -->
                <div class="col-md-3">
                    <div class="product-offer mb-30" style="height: 150px;">
                        <img class="img-fluid"
                            src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/xiaomi.png"
                            alt="Image 4" style="height: 100%; width: 100%;">
                    </div>
                </div>
            </div>
        </div>

        <x-post-new-component />

        <x-product-related />
    @endsection
