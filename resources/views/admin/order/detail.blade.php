@extends('layouts.admin')
@php
    use App\Enums\OrderStatus;
@endphp
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-10 offset-md-1">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Đơn hàng {{ $order->id }}</h4>
                        </div>
                    </div>
                    <div class="card-body row">
                        <!-- Order Details Section -->
                        <div class="py-3 col-6">
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
                                <b>Hình thức thanh toán:</b>
                                @if ($order->paymentstatus == 1)
                                    Thanh toán khi nhận hàng
                                @else
                                    chuyển khoản
                                @endif
                            </p>
                        </div>
                        <div class=" py-3 col-6 ">
                            <p class="mb-3">
                                <b>Tổng số tiền:</b> <span class="text-primary">{{ number_format($order->total) }}
                                    VND</span>
                            </p>
                            <p class="mb-3">
                                <b>Ghi chú:</b> {{ $order->note }}
                            </p>
                            <p class="mb-3">
                                <b>Thông báo:</b> {{ $order->message }}
                            </p>
                        </div>
                    </div>


                    <!-- Action Buttons Section -->


                    <!-- Products Table Section -->
                    <div class="table-responsive">
                        <div id="datatable_wrapper" class="dataTables_wrapper">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th class="sorting_asc">Sản phẩm</th>
                                        <th class="sorting">Giá</th>
                                        <th class="sorting">Số lượng</th>
                                        <th class="sorting">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderDetail as $product)
                                        <tr class="text-center">
                                            <td>
                                                <a href="">
                                                    @php
                                                        $images = json_decode($product->image);
                                                    @endphp
                                                    @if (is_array($images) && count($images) > 0)
                                                        <img class="img-fluid"
                                                            src="{{ asset(str_replace('http://127.0.0.1:8000', '', $images[0])) }}"
                                                            alt=""
                                                            style="width: 70px; height: 70px; object-fit: cover;">
                                                    @else
                                                        <img class="img-fluid "
                                                            src="{{ asset('path/to/default/image.jpg') }}"
                                                            alt="No image available"
                                                            style="width: 70px; height: 70px; object-fit: cover;">
                                                    @endif
                                                    {{ $product->name }}
                                                </a>
                                            </td>
                                            <td>{{ number_format($product->price) }} VND</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ number_format($product->price * $product->quantity) }} VND</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        @switch($order->status)
                            @case(OrderStatus::ORDER)
                                <a href="{{ route('admin.order.cancel', ['id' => $order->id]) }}"
                                    class="btn btn-outline-danger mx-2">Hủy</a>
                                <a href="{{ route('admin.order.accept', ['id' => $order->id]) }}"
                                    class="btn btn-outline-success mx-2">Chấp nhận</a>
                            @break

                            @case(OrderStatus::CANCEL_ORDER)
                                <h5 class="text-center text-danger">Đơn hàng đã bị hủy.</h5>
                            @break

                            @case(OrderStatus::CONFIRM_ORDER)
                                <a href="{{ route('admin.order.cancel', ['id' => $order->id]) }}"
                                    class="btn btn-outline-danger mx-2">Hủy</a>
                                <a href="{{ route('admin.order.success', ['id' => $order->id]) }}"
                                    class="btn btn-outline-success mx-2">Giao thành công</a>
                            @break

                            @case(OrderStatus::ORDER_SUCCESS)
                                <h5 class="text-center text-success">Đơn hàng đã giao thành công.</h5>
                            @break

                            @default
                        @endswitch
                    </div>
                    <div class="text-center">
                        <a href="{{ route('admin.order.index') }}" class="btn bg-danger mb-3">Quay lại</a>
                        @if ($order->status === OrderStatus::ORDER_SUCCESS)
                            <a href="{{ route('admin.home.orders_pdf', ['id' => $order->id]) }}"
                                class="btn btn-outline-primary mb-3 ml-3">Xuất PDF</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
