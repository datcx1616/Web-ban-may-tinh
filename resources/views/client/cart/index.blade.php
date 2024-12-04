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
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-striped table-bordered table-hover text-center mb-0">
                    <thead class="thead-dark">
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
                                <td class="align-middle">
                                    <img src="{{ $product->image }}" alt=""
                                        style="height: 50px; width: 50px; object-fit: cover;">
                                    <span class="d-block">{{ $product->name }}</span>
                                </td>
                                <td class="align-middle">
                                    @if ($isSale)
                                        <div class="text-muted"><span
                                                class="text-line-through">{{ number_format($product->price) }}</span> VND
                                        </div>
                                    @endif
                                    <strong class="text-success">{{ number_format($priceShow) }} VND</strong>
                                </td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <input type="text"
                                            class="form-control form-control-sm bg-light border-0 text-center" readonly
                                            value="{{ $product->quantity }}">
                                    </div>
                                </td>
                                <td class="align-middle"><strong>{{ number_format($priceShow * $product->quantity) }}
                                        VND</strong></td>
                                <td class="align-middle">
                                    <a href="{{ route('cart.remove', ['productID' => $product->id]) }}"
                                        class="btn btn-sm btn-danger rounded-pill">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            @php
                                $total += $priceShow * $product->quantity;
                            @endphp
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    <h4>Giỏ hàng trống</h4>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Tổng kết giỏ hàng -->
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">TÓM TẮT GIỎ HÀNG</span>
                </h5>
                <div class="bg-light p-4 rounded shadow-sm">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Tổng</h5>
                        <h5 class="text-danger font-weight-bold">{{ number_format($total) }} VND</h5>
                    </div>
                    <a href="{{ route('checkout.index') }}" class="btn btn-sm px-4 py-2 rounded-pill border text-success "
                        style="background-color: transparent; border-color: #28a745;">
                        Thanh toán
                    </a>
                    <a href="{{ route('shop.index') }}" class="btn btn-sm px-4 py-2 rounded-pill border text-success"
                        style="background-color: transparent; border-color: #28a745;">
                        Tiếp tục mua sắm
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->
@endsection
