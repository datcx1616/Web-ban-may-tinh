@extends('layouts.app')
@php
    use Illuminate\Support\Str;
@endphp
@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-15">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.index') }}">Sản phẩm</a>
                </nav>
            </div>
        </div>
    </div>

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

        /* Hiệu ứng khi đưa chuột vào */
        .bode:hover {
            border: 1px solid red;
            /* Viền màu đỏ */
            transition: all 0.3s ease;
            /* Hiệu ứng mượt */

        }

        .boder:hover {
            border: 1px solid red;
            /* Viền màu đỏ */
            /* transition: all 0.3s ease; */
            /* Hiệu ứng mượt */
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
        }

        /* Bỏ viền mặc định để tránh xung đột */
        .slide-item {
            border: none;
            /* Không có viền ban đầu */
        }
    </style>



    <div class="container-fluid pt-2">
        <div class="row px-xl-5 slide-container">
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4 bode"
                    style="padding: 20px; border-radius: 10px; height: 80px; width: 120%;">
                    <img src="{{ asset('client/img/icon1.png') }}" alt="logo"
                        style="width: 50px; height: 40px; margin-right: 10px;">
                    <h5 class="font-weight-semi-bold m-0 text-nowrap" style="margin-left: 0;">Apple</h5>
                    <img src="{{ asset('client/img/icon1.1.png') }}" alt="logo"
                        style="width: 100px; height: 70px; margin-left: auto;">
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4 bode"
                    style="padding: 20px; border-radius: 10px; height: 80px; width: 120%;">
                    <img src="{{ asset('client/img/icon7.png') }}" alt="logo"
                        style="width: 50px; height: 40px; margin-right: 10px;">
                    <h5 class="font-weight-semi-bold m-0 text-nowrap" style="margin-left: 0;">hp</h5>
                    <img src="{{ asset('client/img/icon7.7.png') }}" alt="logo"
                        style="width: 100px; height: 70px; margin-left: auto;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4  bode"
                    style="padding: 20px; border-radius: 10px; height: 80px; width: 120%;">
                    <img src="{{ asset('client/img/icon3.png') }}" alt="logo"
                        style="width: 50px; height: 40px; margin-right: 10px;">
                    <h5 class="font-weight-semi-bold m-0 text-nowrap" style="margin-left: 0;">Acer</h5>
                    <img src="{{ asset('client/img/icon3.3.png') }}" alt="logo"
                        style="width: 100px; height: 70px; margin-left: auto;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4 bode"
                    style="padding: 20px; border-radius: 10px; height: 80px; width: 120%;">
                    <img src="{{ asset('client/img/icon4.png') }}" alt="logo"
                        style="width: 50px; height: 40px; margin-right: 10px;">
                    <h5 class="font-weight-semi-bold m-0 text-nowrap" style="margin-left: 0;">MIS</h5>
                    <img src="{{ asset('client/img/icon4.4.png') }}" alt="logo"
                        style="width: 100px; height: 70px; margin-left: auto;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4 bode"
                    style="padding: 20px; border-radius: 10px; height: 80px; width: 120%;">
                    <img src="{{ asset('client/img/icon5.png') }}" alt="logo"
                        style="width: 50px; height: 40px; margin-left: outo;">
                    <h5 class="font-weight-semi-bold m-0 text-nowrap" style="margin-left: 0;">Lenovo</h5>
                    <img src="{{ asset('client/img/icon5.5.png') }}" alt="logo"
                        style="width: 100px; height: 70px; margin-left: auto;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4 bode"
                    style="padding: 20px; border-radius: 10px; height: 80px; width: 120%;">
                    <img src="{{ asset('client/img/icon6.png') }}" alt="logo"
                        style="width: 50px; height: 40px; margin-right: 10px;">
                    <h5 class="font-weight-semi-bold m-0 text-nowrap" style="margin-left: 0;">Dell</h5>
                    <img src="{{ asset('client/img/icon6.6.png') }}" alt="logo"
                        style="width: 100px; height: 70px; margin-left: auto;">
                </div>
            </div>
        </div>
    </div>


    <style>
        /* Tùy chỉnh giao diện cho thanh điều hướng */
        .nav-tabs {
            border-bottom: 2px solid #ddd;
        }

        .nav-tabs .nav-link {
            color: #333;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border: none;
        }

        .nav-tabs .nav-link:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .nav-tabs .nav-link.disabled {
            color: #999;
            cursor: not-allowed;
        }
    </style>

    <div class="container-fluid">
        <div class="row justify-content-center px-xl-5 pb-3">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Sắp xếp theo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Khuyến mãi tốt nhất</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giá tăng dần</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giá giảm dần</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sản phẩm mới nhất</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Sản phẩm bán chạy
                        nhất</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Breadcrumb End -->
    <div class="pt-2">
        <marquee behavior="" direction="left" style="color:black;font-size: 16px;">
            "Hành trình nâng cấp công nghệ bắt đầu từ đây – nơi bạn tìm thấy giải pháp hoàn hảo cho mọi nhu cầu máy tính."
        </marquee>
    </div>

    <div class="container-fluid mt-2 mb-3">
        <div class="px-xl-5">
            <img src="{{ asset('client/img/H2.png') }}" alt="logo"
                class="first-slide w-100"style=" border-radius: 10px;">
        </div>
    </div>
    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5 ">
            <!-- Shop Sidebar Start -->

            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-12">
                <div class="row pb-3">
                    @forelse ($products as $product)
                        <x-product-card :product="$product" :lg="3" />
                    @empty
                        <div class="col-12">
                            <h4 class="text-center">Không có sản phẩm</h4>
                        </div>
                    @endforelse

                    {{-- <div class="col-12 d-flex justify-content-center align-items-center">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div> --}}
                </div>
            </div>



            <div class="container-fluid">
                <div class="row px-xl-1 pb-1 d-flex justify-content-between">
                    <div class="col pb-1">
                        <div class="d-flex align-items-center bg-light mb-4 boder"
                            style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                            <img src="{{ asset('client/img/icon10.png') }}" alt="logo"
                                style="width: 60px; height: 60px; margin-right: 10px;">
                            <h5 class="font-weight-semi-bold m-0 text-nowrap">Al</h5>
                        </div>
                    </div>

                    <div class="col pb-1">
                        <div class="d-flex align-items-center bg-light mb-4 boder"
                            style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                            <img src="{{ asset('client/img/icon11.png') }}" alt="logo"
                                style="width: 60px; height: 60px; margin-right: 10px;">
                            <h5 class="font-weight-semi-bold m-0 text-nowrap">Gaming- đồ họa</h5>
                        </div>
                    </div>
                    <div class="col pb-1">
                        <div class="d-flex align-items-center bg-light mb-4 boder"
                            style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                            <img src="{{ asset('client/img/icon12.png') }}" alt="logo"
                                style="width: 60px; height: 60px; margin-right: 10px;">
                            <h5 class="font-weight-semi-bold m-0 text-nowrap">Sinh viên - văn
                                phòng</h5>
                        </div>
                    </div>
                    <div class="col pb-1">
                        <div class="d-flex align-items-center bg-light mb-4 boder"
                            style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                            <img src="{{ asset('client/img/icon13.png') }}" alt="logo"
                                style="width: 60px; height: 60px; margin-right: 10px;">
                            <h5 class="font-weight-semi-bold m-0 text-nowrap">Mỏng nhẹ</h5>
                        </div>
                    </div>
                    <div class="col pb-1">
                        <div class="d-flex align-items-center bg-light mb-4 boder"
                            style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                            <img src="{{ asset('client/img/icon14.png') }}" alt="logo"
                                style="width: 60px; height: 60px; margin-left: outo;">
                            <h5 class="font-weight-semi-bold m-0 text-nowrap">Doanh nhân</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row px-xl-1 ">
                    <!-- Shop Sidebar Start -->
                    <div class="col-lg-2">
                        <!-- Price Start -->
                        <div class="card pb-2" style="border-radius: 10px">
                            <div class="card-heading bg-light pt-2 pl-4"
                                style="border-radius: 10px; font-weight: 700; font-size: 20px;">
                                <a class="text-dark fw-bold toggle-icon" data-toggle="collapse"
                                    href="#multiCollapseExample1" role="button" aria-expanded="false"
                                    aria-controls="multiCollapseExample1">
                                    Lọc theo giá
                                    <i class="fas fa-chevron-down ml-2"></i> <!-- Icon mũi tên đi xuống -->
                                </a>
                            </div>
                            <style>
                                .hover-shadow {
                                    transition: box-shadow 0.3s ease, transform 0.3s ease;
                                }

                                .hover-shadow:hover {
                                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                                    transform: translateY(-5px);
                                }

                                .product-card {
                                    border-radius: 10px;
                                    /* Điều chỉnh độ bo tròn (10px là ví dụ) */
                                    overflow: hidden;
                                    /* Đảm bảo nội dung không tràn ra ngoài */
                                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                    /* Thêm chút hiệu ứng shadow (tùy chọn) */
                                }

                                /* Xoay icon khi collapse mở */
                                .toggle-icon[aria-expanded="true"] i {
                                    transform: rotate(180deg);
                                    /* Xoay 180 độ */
                                    transition: transform 0.3s ease;
                                    /* Hiệu ứng mượt */
                                }

                                /* Trạng thái ban đầu của icon */
                                .toggle-icon i {
                                    transition: transform 0.3s ease;
                                    /* Hiệu ứng mượt */
                                }
                            </style>
                            <div class="p-3 collapse" style="border-radius: 10px" id="multiCollapseExample1">
                                <form>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['price'] == '1' ? 'checked' : '' }} name="price" data-value="1"
                                            id="price-1">
                                        <label class="custom-control-label" for="price-1">Dưới 5 triệu</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['price'] == '2' ? 'checked' : '' }} name="price" data-value="2"
                                            id="price-2">
                                        <label class="custom-control-label" for="price-2">5 triệu - 10 triệu</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['price'] == '3' ? 'checked' : '' }} name="price" data-value="3"
                                            id="price-3">
                                        <label class="custom-control-label" for="price-3">10 triệu - 15 triệu</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['price'] == '4' ? 'checked' : '' }} name="price" data-value="4"
                                            id="price-4">
                                        <label class="custom-control-label" for="price-4">15 triệu - 20 triệu</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['price'] == '5' ? 'checked' : '' }} name="price" data-value="5"
                                            id="price-5">
                                        <label class="custom-control-label" for="price-5">Trên 20 triệu</label>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- Price End -->


                        <!-- Color Start -->
                        <h5 class="section-title position-relative text-uppercase mb-3 pt-4"><span
                                class="bg-secondary pr-3">Ram</span>
                        </h5>
                        <div class="bg-light p-4 mb-30 product-card hover-shadow"
                            style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            <form>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['ram'] == '4' ? 'checked' : '' }} name="ram" data-value="4"
                                        id="color-1">
                                    <label class="custom-control-label" for="color-1">4 GB</label>
                                </div>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['ram'] == '8' ? 'checked' : '' }} name="ram" data-value="8"
                                        id="color-2">
                                    <label class="custom-control-label" for="color-2">8 GB</label>
                                </div>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['ram'] == '16' ? 'checked' : '' }} name="ram" data-value="16"
                                        id="color-3">
                                    <label class="custom-control-label" for="color-3">16 GB</label>
                                </div>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['ram'] == '32' ? 'checked' : '' }} name="ram" data-value="32"
                                        id="color-4">
                                    <label class="custom-control-label" for="color-4">32 GB</label>
                                </div>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['ram'] == '64' ? 'checked' : '' }} name="ram" data-value="64"
                                        id="color-5">
                                    <label class="custom-control-label" for="color-5">64 GB</label>
                                </div>
                            </form>
                        </div>
                        <!-- Color End -->

                        <!-- Size Start -->
                        <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Bộ
                                nhớ</span></h5>
                        <div class="bg-light p-4 mb-30 product-card hover-shadow"
                            style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            <form>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['memory'] == '128' ? 'checked' : '' }} name="memory" data-value="128"
                                        id="size-1">
                                    <label class="custom-control-label" for="size-1">128 GB</label>
                                </div>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['memory'] == '256' ? 'checked' : '' }} name="memory" data-value="256"
                                        id="size-2">
                                    <label class="custom-control-label" for="size-2">256 GB</label>
                                </div>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['memory'] == '512' ? 'checked' : '' }} name="memory" data-value="512"
                                        id="size-3">
                                    <label class="custom-control-label" for="size-3">512 GB</label>
                                </div>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['memory'] == '1024' ? 'checked' : '' }} name="memory"
                                        data-value="1024" id="size-4">
                                    <label class="custom-control-label" for="size-4">1024 GB</label>
                                </div>
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                    <input type="checkbox" class="custom-control-input js-input-filter"
                                        {{ $query['memory'] == '2048' ? 'checked' : '' }} name="memory"
                                        data-value="2048" id="size-5">
                                    <label class="custom-control-label" for="size-5">2048 GB</label>
                                </div>
                            </form>
                        </div>

                        <div class="card" style="border-radius: 10px">
                            <div class="card-heading bg-light pt-2 pl-4"
                                style="border-radius: 10px; font-weight: 700; font-size: 20px;">
                                <a class="text-dark fw-bold toggle-icon" data-toggle="collapse"
                                    href="#multiCollapseExample1" role="button" aria-expanded="false"
                                    aria-controls="multiCollapseExample1">
                                    Kích thước màn hình
                                    <i class="fas fa-chevron-down ml-2"></i> <!-- Icon mũi tên đi xuống -->
                                </a>
                            </div>

                            <div class="p-3 collapse" style="border-radius: 10px" id="multiCollapseExample1">
                                <form>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-2">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['memory'] == '128' ? 'checked' : '' }} name="memory"
                                            data-value="128" id="size-1">
                                        <label class="custom-control-label fw-bold" for="size-1">Tất cả</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-2">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['memory'] == '256' ? 'checked' : '' }} name="memory"
                                            data-value="256" id="size-2">
                                        <label class="custom-control-label fw-bold" for="size-2">Dưới 14 inch</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-2">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['memory'] == '512' ? 'checked' : '' }} name="memory"
                                            data-value="512" id="size-3">
                                        <label class="custom-control-label fw-bold" for="size-3">Từ 14 - 15 inch</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-2">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['memory'] == '1024' ? 'checked' : '' }} name="memory"
                                            data-value="1024" id="size-4">
                                        <label class="custom-control-label fw-bold" for="size-4">Từ 15 - 17 inch</label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Size End -->
                    </div>

                    <div class="col-lg-10">
                        <div class="row pb-3">
                            @forelse ($products as $product)
                                <x-product-card :product="$product" :lg="3" />
                            @empty
                                <div class="col-12">
                                    <h4 class="text-center">Không có sản phẩm</h4>
                                </div>
                            @endforelse

                            <div class="col-12 d-flex justify-content-center align-items-center">
                                {{ $products->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="container-fluid pt-5 pb-3">
                <h2 class="section-title position-relative text-uppercase mx-xl-2 mb-4">
                    <span class="bg-secondary pr-3">Video Hot</span>
                </h2>
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center align-items-center" style="padding: 20px;">
                        <iframe src="https://www.youtube.com/embed/l0op-_MDO4o?si=gDhFgAiJe1OvQiQu"
                            title="YouTube video player" frameborder="0"
                            style="border-radius: 10px; width: 100%; height: 200px;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-3 d-flex justify-content-center align-items-center" style="padding: 20px;">
                        <iframe src="https://www.youtube.com/embed/jxZ_YLi5E74?si=1L1O9PjaTZA-4lUM"
                            title="YouTube video player" frameborder="0"
                            style="border-radius: 10px; width: 100%; height: 200px;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-3 d-flex justify-content-center align-items-center" style="padding: 20px;">
                        <iframe src="https://www.youtube.com/embed/CUl8JaglXNQ?si=UDBywT-YwEbkrsZK"
                            title="YouTube video player" frameborder="0"
                            style="border-radius: 10px; width: 100%; height: 200px;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-3 d-flex justify-content-center align-items-center" style="padding: 20px;">
                        <iframe src="https://www.youtube.com/embed/RYJWIvKoQJs?si=NHQPK9GePtzIIZfH"
                            title="YouTube video player" frameborder="0"
                            style="border-radius: 10px; width: 100%; height: 200px;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

            </div>


            <!-- Shop Product End -->
        </div>
    </div>
    <x-post-new-component />
    <!-- Shop End -->
    <script>
        $(document).ready(function() {
            $('.js-input-filter').on('change', function() {
                const isChecked = this.checked
                $(`.js-input-filter[name=${this.name}]`).prop('checked', false)
                if (isChecked) {
                    $(this).prop('checked', true)
                }

                const params = new URLSearchParams(window.location.search)
                let paramObj = {};
                for (var value of params.keys()) {
                    paramObj[value] = params.get(value);
                }

                if ($(`.js-input-filter[name=price]:checked`).length > 0) {
                    paramObj.price = $(`.js-input-filter[name=price]:checked`).data('value')
                } else {
                    delete paramObj.price
                }

                if ($(`.js-input-filter[name=ram]:checked`).length > 0) {
                    paramObj.ram = $(`.js-input-filter[name=ram]:checked`).data('value')
                } else {
                    delete paramObj.ram
                }

                if ($(`.js-input-filter[name=memory]:checked`).length > 0) {
                    paramObj.memory = $(`.js-input-filter[name=memory]:checked`).data('value')
                } else {
                    delete paramObj.memory
                }

                window.location.href = '{{ route('shop.index') }}?' + new URLSearchParams(paramObj)
                    .toString()
            })
        })
    </script>
@endsection
