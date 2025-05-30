@extends('layouts.app')
@section('content')
    <x-notification-component />

    <!-- Gọi component ProductCategory -->
    <x-product-category />


    <x-logo-component />

    <x-chat-component />

    <x-banner-home-component />

    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <!-- Block 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <a href="{{ route('shop.index') }}">
                    <div class="d-flex align-items-center bg-light shadow-sm mb-4 p-4 rounded boder">
                        <div class="icon-container text-primary mr-3">
                            <i class="fas fa-shield-alt fa-2x"></i>
                        </div>
                        <h5 class="font-weight-semi-bold m-0">Thương hiệu mới</h5>
                    </div>
                </a>
            </div>
            <!-- Block 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <a href="{{ route('shop.index') }}">
                    <div class="d-flex align-items-center bg-light shadow-sm mb-4 p-4 rounded boder">
                        <div class="icon-container text-success mr-3">
                            <i class="fas fa-undo fa-2x"></i>
                        </div>
                        <h5 class="font-weight-semi-bold m-0">Đổi trả dễ dàng</h5>
                    </div>
                </a>
            </div>
            <!-- Block 3 -->
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <a href="{{ route('shop.index') }}">
                    <div class="d-flex align-items-center bg-light shadow-sm mb-4 p-4 rounded boder">
                        <div class="icon-container text-warning mr-3">
                            <i class="fas fa-star fa-2x"></i>
                        </div>
                        <h5 class="font-weight-semi-bold m-0">Sản phẩm chất lượng</h5>
                    </div>
                </a>
            </div>
            <!-- Block 4 -->
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <a href="{{ route('shop.index') }}">
                    <div class="d-flex align-items-center bg-light shadow-sm mb-4 p-4 rounded boder">
                        <div class="icon-container text-danger mr-3">
                            <i class="fas fa-truck fa-2x"></i>
                        </div>
                        <h5 class="font-weight-semi-bold m-0">Giao hàng tận nơi</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>


    {{-- <div class=" pt-2">
        <marquee behavior="" direction="left" style="color:black;font-size: 16px;">
            "Hành trình nâng cấp công nghệ bắt đầu từ đây – nơi bạn tìm thấy giải pháp hoàn hảo cho mọi nhu cầu máy
            tính."
        </marquee>
    </div> --}}



    <x-feature-product />


    <div class="container-fluid position-relative mb-3 px-xl-5" style="height: auto;">
        <a href="{{ route('shop.index') }}">
            <div style="text-align: center;">
                <img src="{{ asset('client/img/ttt.png') }}" alt="background" style="width: 65%; height: auto;">
            </div>
            {{-- <img src="{{ asset('client/img/ttt.png') }}" alt="background" class="w-100"
                style="position: relative; z-index: 1;"> --}}
            <img src="{{ asset('client/img/icon-big.png') }}" alt="overlay"
                style="position: absolute; top: -50px; left: 20%; transform: translateX(-50%); max-width: 15%; z-index: 2;">
        </a>
    </div>


    <div class="container-fluid pt-3 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <img src="{{ asset('client/img/Icon_Doc_quyen.png') }}" alt="logo" style="width: 50px; height: 40px;">
            <span class="bg-secondary pr-3">Ưu đãi thanh toán</span>
        </h2>
        <div class="row px-xl-5">
            <!-- Khung 1 -->
            <div class="col-md-3">
                <a href="{{ route('shop.index') }}">
                    <div class="product-offer mb-30" style="height: 150px;">
                        <img class="img-fluid" src="{{ asset('client/img/ud4.png') }}" alt="logo" alt="Image 2"
                            style="height: 100%; width: 100%;">
                    </div>
                </a>
            </div>
            <!-- Khung 2 -->
            <div class="col-md-3">
                <a href="{{ route('shop.index') }}">
                    <div class="product-offer mb-30" style="height: 150px;">
                        <img class="img-fluid" src="{{ asset('client/img/ud1.png') }}" alt="logo" alt="Image 2"
                            style="height: 100%; width: 100%;">
                    </div>
                </a>
            </div>
            <!-- Khung 3 -->
            <div class="col-md-3">
                <a href="{{ route('shop.index') }}">
                    <div class="product-offer mb-30" style="height: 150px;">
                        <img class="img-fluid" src="{{ asset('client/img/ud2.png') }}" alt="logo" alt="Image 2"
                            style="height: 100%; width: 100%;">
                    </div>
                </a>
            </div>
            <!-- Khung 4 -->
            <div class="col-md-3">
                <a href="{{ route('shop.index') }}">
                    <div class="product-offer mb-30" style="height: 150px;">
                        <img class="img-fluid" src="{{ asset('client/img/ud5.png') }}" alt="logo" alt="Image 2"
                            style="height: 100%; width: 100%;">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <x-post-new-component />

    <x-product-related />
@endsection
