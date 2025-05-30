@extends('layouts.app')
@php
    $total = 0;
@endphp
@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.index') }}">Cửa hàng</a>
                    <span class="breadcrumb-item active">Thanh toán</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Start -->
    <form action="{{ route('checkout.order') }}" method="POST">
        @csrf
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <h5 class="section-title position-relative text-uppercase mb-3">
                        <span class="bg-secondary pr-3">Thông tin nhận hàng</span>
                    </h5>
                    <div class="bg-light p-4 mb-5 rounded shadow-sm">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="fullname">Họ tên người nhận</label>
                                <input class="form-control" type="text" name="fullname" id="fullname" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="phone">Số điện thoại người nhận</label>
                                <input class="form-control" type="text" name="phone" id="phone" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="address">Địa chỉ người nhận</label>
                                <input class="form-control" type="text" name="address" id="address" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="note">Lời nhắn</label>
                                <textarea class="form-control" name="note" id="note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="section-title position-relative text-uppercase mb-3">
                        <span class="bg-secondary pr-3">Hóa đơn</span>
                    </h5>
                    <div class="bg-light p-4 mb-5 rounded shadow-sm">
                        <div class="border-bottom mb-3">
                            <h6 class="mb-3">Sản phẩm</h6>
                            @foreach ($cart as $product)
                                @php
                                    $isSale = isDiscount($product->sale_start, $product->sale_end);
                                    $priceShow = $product->price;
                                    if ($isSale) {
                                        $priceShow = calcSalePrice($product->price, $product->sale);
                                    }
                                @endphp
                                <div class="d-flex justify-content-between">
                                    <p>{{ $product->name }}</p>
                                    <p>{{ number_format($product->quantity * $priceShow) }} VND</p>
                                </div>
                                @php
                                    $total += $product->quantity * $priceShow;
                                @endphp
                            @endforeach
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Tổng</h5>
                                <h5 class="text-danger font-weight-bold">{{ number_format($total) }} VND</h5>
                            </div>
                        </div>
                        <div style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                            <button type="submit" name="action" value="bank"
                                class="btn btn-sm px-4 py-2 rounded-pill border text-success"
                                style="background-color: transparent; border-color: #28a745;">
                                Thanh toán qua ngân hàng
                            </button>
                            <button type="submit" name="action" value="home"
                                class="btn btn-sm px-4 py-2 rounded-pill border text-success"
                                style="background-color: transparent; border-color: #28a745;">
                                Thanh toán khi nhận hàng
                            </button>
                            <a href="{{ route('shop.index') }}"
                                class="btn btn-sm px-4 py-2 rounded-pill border text-success"
                                style="background-color: transparent; border-color: #28a745;">
                                Tiếp tục mua sắm
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Checkout End -->
@endsection
s
