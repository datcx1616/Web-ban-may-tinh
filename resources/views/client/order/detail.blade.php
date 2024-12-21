@php
    use App\Enums\OrderStatus;
@endphp
@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('order.index') }}">Đơn hàng</a>
                    <span class="breadcrumb-item active">Đặt hàng</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-12">
                <p class="mb-3">
                    <b>Người nhận:</b> {{ $order->fullname }}
                </p>
                <p class="mb-3">
                    <b>Số điện thoại:</b> {{ $order->phone }}
                </p>
                <p class="mb-3">
                    <b>Địa chỉ:</b> {{ $order->address }}
                </p>
                <p class="mb-3">
                    <b>Tổng số tiền:</b> {{ number_format($order->total) }} VND
                </p>
                <p class="mb-3">
                    <b>Ghi chú:</b> {{ $order->note }}
                </p>
                <p class="mb-3">
                    <b>Thông báo:</b> {{ $order->message }}
                </p>
                @if ($order->status === OrderStatus::ORDER)
                    <p class="mb-3 d-flex align-items-center justify-content-center">
                        <a class="btn btn-danger" href="{{ route('order.cancel', ['id' => $order->id]) }}">Hủy đặt hàng</a>
                    </p>
                @endif
            </div>
            <div class="col-12">
                <table class="table table-bordered table-hover text-center mb-0 shadow-sm rounded">
                    <thead>
                        <tr>
                            <th class="py-3">Sản phẩm</th>
                            <th class="py-3">Giá</th>
                            <th class="py-3">Số lượng</th>
                            <th class="py-3">Tổng</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach ($orderDetail as $product)
                            <tr>
                                <td class="align-middle">
                                    @php
                                        $images = json_decode($product->image);
                                    @endphp
                                    @if (is_array($images) && count($images) > 0)
                                        <img class="img-fluid w-100"
                                            src="{{ asset(str_replace('http://127.0.0.1:8000', '', $images[0])) }}"
                                            alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                    @else
                                        <img class="img-fluid w-100" src="{{ asset('path/to/default/image.jpg') }}"
                                            alt="No image available" style="width: 50px; height: 50px; object-fit: cover;">
                                    @endif
                                    <span class="d-block mt-2">{{ $product->name }}</span>
                                </td>
                                <td class="align-middle text-nowrap">{{ number_format($product->price) }} VND</td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 120px;">
                                        <input type="text"
                                            class="form-control form-control-sm bg-light border-0 text-center" readonly
                                            value="{{ $product->quantity }}">
                                    </div>
                                </td>
                                <td class="align-middle text-nowrap">
                                    {{ number_format($product->price * $product->quantity) }} VND</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
