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
                    <span class="breadcrumb-item active">Giỏ hàng</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="container-fluid py-4">
        <div class="row g-4">
            <!-- Giỏ hàng -->
            <div class="col-lg-8">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-dark fw-bold mb-4">Giỏ hàng của bạn</h5>
                        <table class="table table-hover align-middle text-center">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cart as $product)
                                    @php
                                        $isSale = isDiscount($product->sale_start, $product->sale_end);
                                        $priceShow = $product->price;
                                        if ($isSale) {
                                            $priceShow = calcSalePrice($product->price, $product->sale);
                                        }
                                    @endphp
                                    <tr>
                                        <td class="text-start d-flex align-items-center">
                                            <img src="{{ $product->image }}" alt="" class="rounded-circle me-3"
                                                style="height: 50px; width: 50px; object-fit: cover;">
                                            <span class="fw-bold">{{ $product->name }}</span>
                                        </td>
                                        <td>
                                            @if ($isSale)
                                                <div class="text-muted small text-decoration-line-through">
                                                    {{ number_format($product->price) }} VND
                                                </div>
                                            @endif
                                            <strong class="text-success">{{ number_format($priceShow) }} VND</strong>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control bg-light text-center border-0"
                                                readonly value="{{ $product->quantity }}" style="width: 80px;">
                                        </td>
                                        <td>
                                            <strong>{{ number_format($priceShow * $product->quantity) }} VND</strong>
                                        </td>
                                        <td>
                                            <a href="{{ route('cart.remove', ['productID' => $product->id]) }}"
                                                class="btn btn-sm btn-outline-danger rounded-circle">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @php
                                        $total += $priceShow * $product->quantity;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="5">
                                            <h5 class="text-muted">Giỏ hàng trống</h5>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tóm tắt giỏ hàng -->
            <div class="col-lg-4">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-dark fw-bold mb-4">Tóm tắt giỏ hàng</h5>
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                            <span class="text-muted">Tổng cộng:</span>
                            <h5 class="text-danger fw-bold">{{ number_format($total) }} VND</h5>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="{{ route('checkout.index') }}" class="btn btn-success w-100 rounded-pill">Thanh
                                toán</a>
                            <a href="{{ route('shop.index') }}"
                                class="btn btn-outline-success w-100 rounded-pill ml-2">Tiếp tục
                                mua sắm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart End -->
@endsection
