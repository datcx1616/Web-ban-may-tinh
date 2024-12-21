@extends('layouts.app')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @php
        $isSale = isDiscount($product->sale_start, $product->sale_end);
        $priceShow = $product->price;
        if ($isSale) {
            $priceShow = calcSalePrice($product->price, $product->sale);
        }
    @endphp
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-4">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.index') }}">Cửa hàng</a>
                    <span class="breadcrumb-item active">Chi tiết</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <x-logo-component />
    <!-- Shop Detail Start -->
    <div class="bg-light" style=" border-radius: 10px;">
        <div class="container-fluid pb-5">
            {{-- bg-light --}}
            <div class="row px-xl-5">
                <div class="col-lg-5 mb-30">
                    <div id="product-carousel" class="carousel slide" data-ride="carousel">
                        <div id="product-carousel" class="carousel slide" data-ride="carousel">
                            @php
                                $images = json_decode($product->image, true); // Giải mã JSON thành mảng
                            @endphp
                            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($images as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                            <img class="d-block w-100 h-100" src="{{ $image }}" alt="Image">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#product-carousel" data-slide="prev"
                                data-bs-target="#productCarousel">
                                <i class="fa fa-2x fa-angle-left text-dark"></i>
                            </a>
                            <a class="carousel-control-next" href="#product-carousel" data-slide="next"
                                data-bs-target="#productCarousel">
                                <i class="fa fa-2x fa-angle-right text-dark"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 h-auto mb-30">
                    <div class="h-100 p-30">
                        <h3>{{ $product->name }}</h3>
                        <div class="d-flex mb-3">
                            <div class="text-primary mr-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star-half-alt"></small>
                                <small class="far fa-star"></small>
                            </div>
                            <small class="pt-1">(99 Reviews)</small>
                        </div>
                        @if ($isSale)
                            <h5 class="sale-origin"><span
                                    class="text-line-through">{{ number_format($product->price) }}</span>
                                VND</h5>
                        @endif
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">
                                <i class="fa fa-check-circle mr-2"></i> Ram:
                            </strong>
                            <div class="custom-control custom-radio custom-control-inline">
                                {{ $product->ram . ' GB' ?? '' }}
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">
                                <i class="fa fa-check-circle mr-2"></i> Bộ nhớ:
                            </strong>
                            <div class="custom-control custom-radio custom-control-inline">
                                {{ $product->memory . ' GB' ?? '' }}
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">
                                <i class="fa fa-check-circle mr-2"></i> CPU:
                            </strong>
                            <div class="custom-control custom-radio custom-control-inline">
                                {{ $product->cpu ?? '' }}
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">
                                <i class="fa fa-check-circle mr-2"></i> Trọng lượng:
                            </strong>
                            <div class="custom-control custom-radio custom-control-inline">
                                {{ $product->mass ?? '' }}
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">
                                <i class="fa fa-check-circle mr-2"></i> Pin:
                            </strong>
                            <div class="custom-control custom-radio custom-control-inline">
                                {{ $product->battery ?? '' }}
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">
                                <i class="fa fa-check-circle mr-2"></i> Màn hình:
                            </strong>
                            <div class="custom-control custom-radio custom-control-inline">
                                {{ $product->screen ?? '' }}
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">
                                <i class="fa fa-check-circle mr-2"></i> Card đồ họa:
                            </strong>
                            <div class="custom-control custom-radio custom-control-inline">
                                {{ $product->card ?? '' }}
                            </div>
                        </div>

                        <form action="{{ route('cart.add') }}" method="POST">
                            <div class="d-flex align-items-center mb-4 pt-2">
                                @csrf
                                <input type="hidden" name="productID" value="{{ $product->id }}">
                                <div class="input-group quantity mr-3" style="width: 130px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-minus" type="button"
                                            style="background-color: transparent; border-color: #28a745;">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control bg-secondary border-0 text-center"
                                        name="quantity" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-plus" type="button"
                                            style="background-color: transparent; border-color: #28a745;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <Button class="btn btn-sm px-4 py-2 rounded-pill border text-success"
                                    style="background-color: transparent; border-color: #28a745;">
                                    <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                                </Button>
                                <a href="{{ route('shop.index') }}"
                                    class="btn btn-sm px-4 py-2 rounded-pill border text-success ml-3"
                                    style="background-color: transparent; border-color: #28a745;">
                                    Quay lại cửa hàng
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" row col-lg-12">
                <div class="col-lg-6 mb-3 px-xl-5 ">
                    <div class="policy-container">
                        <h6 class="mt-1 mb-2 ml-4">Chính sách dành cho sản phẩm</h6>
                        <div class="row ml-3">
                            <div class="col-6">
                                <a class="policy-item mb-2"><i class="fas fa-check-circle"></i> Hàng chính hãng</a>
                                <a class="policy-item mb-2"><i class="fas fa-truck"></i> Giao hàng miễn phí trong 90
                                    phút</a>
                                <a class="policy-item"><i class="fas fa-sync-alt"></i> Chính sách đổi trả</a>
                            </div>
                            <div class="col-6">
                                <a class="policy-item mb-2"><i class="fas fa-shield-alt"></i> Bảo hành 24 tháng</a>
                                <a class="policy-item mb-2"><i class="fas fa-tools"></i> Hỗ trợ cài đặt miễn phí</a>
                                <a class="policy-item"><i class="fas fa-credit-card"></i> Chính sách trả góp</a>
                            </div>
                        </div>
                    </div>
                    <div class="policy-container mt-2">
                        <h6 class="mt-1 mb-2 ml-4">Khuyến mãi liên quan</h6>
                        <div class="row ml-3">
                            <div class="col-12">
                                <a class="policy-item mb-2"><i class="fas fa-tags"></i>Nhập mã PVFREESHIP2412 giảm
                                    25.000đ cho đơn hàng từ 300.000đ có sản phẩm này</a>
                                <a class="policy-item mb-2"><i class="fas fa-tags"></i> Giảm thêm đến 350.000đ dành cho
                                    Học sinh - sinh viênXem chi tiết</a>
                                <a class="policy-item"><i class="fas fa-percentage"></i> Giảm thêm đến 1.000.000 VNĐ khi
                                    thanh toán qua VNPAYXem chi tiết</a>
                                {{-- <a class="policy-item"><i class="fas fa-percentage"></i> Hoàn 500.000 VNĐ khi mở thẻ tín
                                    dụng VPBANK tại Phong VũXem chi tiết</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3 px-xl-5 ">
                    <div class="policy-container">
                        <h6 class="mt-1 mb-2 ml-4">Quà tặng và ưu đãi khác</h6>
                        <div class="row ml-3">
                            <div class="col-12">
                                <a class="policy-item mb-2"><i class="fas fa-gift"></i>Tặng phiếu mua hàng
                                    150,000đ mua Balo, Túi chống sốc (Hạn sử dụng 15 ngày) Xem chi tiết</a>
                                <a class="policy-item mb-2"><i class="fas fa-gift"></i> Tặng phiếu mua hàng 300,000đ mua
                                    màn hình (Hạn sử dụng 15 ngày) Xem chi tiết</a>
                                <a class="policy-item mb-2"><i class="fas fa-gift"></i> Tiết kiệm 600,000đ khi mua
                                    Microsoft 365 Personal kèm thiết bị Xem chi tiết</a>
                                <a class="policy-item mb-2"><i class="fas fa-gift"></i> Tặng phiếu mua hàng giảm ngay
                                    200.000đ, áp dụng cho sản phẩm Máy in (thời hạn sử dụng 15 ngày) Xem chi tiết</a>
                                <a class="policy-item mb-2"><i class="fas fa-gift"></i> Tặng phiếu mua hàng giảm ngay
                                    200.000đ, áp dụng cho sản phẩm Máy in (thời hạn sử dụng 15 ngày) Xem chi tiết</a>
                                <a class="policy-item"><i class="fas fa-check-circle"></i> Tặng mã ưu đãi giảm ngay 3% khi
                                    mua
                                    Máy tính bảng</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .policy-container {
                    border: 2px solid #969393;
                    /* Độ dày và màu của border */
                    border-radius: 10px;
                    /* Làm bo góc */
                    padding: 15px;
                    /* Khoảng cách giữa nội dung và border */
                }

                .policy-item {
                    display: block;
                    color: #333;
                    text-decoration: none;
                    transition: all 0.3s ease;
                    font-size: 14px;
                }

                .policy-item i {
                    margin-right: 8px;
                    color: #007bff;
                    /* Màu biểu tượng */
                }

                .policy-item:hover {
                    background-color: #f8f9fa;
                    border-color: #007bff;
                    color: #007bff;

                }
            </style>

            <div class="row px-xl-5">
                <div class="col-12">
                    <div class="bg-light p-30">
                        <div class="nav nav-tabs mb-4 w-100 d-flex justify-content-center">
                        </div>

                        <div class="row">
                            <div class="tab-content col-6">
                                <div class="tab-pane fade show active" id="tab-pane-1">
                                    <h5 class="mb-3"style="font-size: 1.5rem;">Mô tả sản phẩm</h5>
                                    <p>{!! $product->describe !!}</p>
                                </div>
                            </div>
                            <div class="tab-content col-6">
                                <div class="tab-pane fade show active" id="tab-pane-1">
                                    <h5 class="mb-3 ml-5"style="font-size: 1.5rem;">Thông tin chi tiết</h5>
                                    <div class="container mt-5 ml-5">
                                        <div class="card product-card">
                                            <div class="product-header">
                                                <h4 class="mb-0">Thông tin sản phẩm</h4>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Thương hiệu</strong> <span>Dell</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Bảo hành</strong> <span>36 tháng</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Kích thước</strong> <span>21.45"</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Tần số quét</strong> <span>60Hz</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Thời gian phản hồi</strong> <span>10 ms</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Tỉ lệ</strong> <span>16:9</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Độ tương phản tĩnh</strong> <span>3,000:1</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Độ sáng</strong> <span>250 cd/m2</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Góc nhìn</strong> <span>178 (H) / 178 (V)</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Độ phủ màu</strong> <span>72% NTSC</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Số lượng màu</strong> <span>16.7 triệu màu</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Tấm nền</strong> <span>VA LED</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <strong>Độ phân giải</strong> <span>Full HD (1920 x 1080)</span>
                                                </li>
                                            </ul>
                                            <div class="text-center p-4">
                                                <button class="btn btn-sm px-5 py-2 rounded-pill border text-success"
                                                    type="submit"
                                                    style="background-color: transparent; border-color: #28a745;">Xem thêm
                                                    nội dung</button>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .product-card {
                                            border: none;
                                            border-radius: 10px;
                                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                            overflow: hidden;
                                        }

                                        .product-header {
                                            background-color: #b0b5bb;
                                            color: #fff;
                                            padding: 15px;
                                            text-align: center;
                                        }

                                        .list-group-item {
                                            border: none;
                                            padding: 12px 20px;
                                            font-size: 16px;
                                        }

                                        .list-group-item span {
                                            font-weight: 500;
                                            color: #495057;
                                        }

                                        .list-group-item:nth-child(odd) {
                                            background-color: #f9f9f9;
                                        }

                                        .view-more-btn {
                                            background-color: #007bff;
                                            color: #fff;
                                            border: none;
                                            padding: 10px 20px;
                                            border-radius: 25px;
                                            transition: background-color 0.3s;
                                        }

                                        .view-more-btn:hover {
                                            background-color: #0056b3;
                                            color: #fff;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Detail End -->


        <div class="container-fluid">
            <h2 class="section-title position-relative mx-xl-5 mb-4"><span class=" pr-3">ĐÁNH
                    GIÁ
                    VÀ
                    NHẬN XÉT</span></h2>
            <div class="row px-xl-5">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form p-30" style=" border-radius: 10px;">
                        <form method="post" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control" name="name" required id="name"
                                    placeholder="Họ và Tên" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control input2" name="email" required id="email"
                                    style="width:100%" placeholder="Email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="8" name="message" required id="message" placeholder="Nhận xét"
                                    required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-sm px-5 py-2 rounded-pill border text-success" type="submit"
                                    style="background-color: transparent; border-color: #28a745;">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-product-related :currID="$product->id" />
    </div>




    <script>
        // function addToCart() {}
        document.addEventListener("DOMContentLoaded", function() {
            @if (session('error'))
                $('#alertModal').modal('show');
                setTimeout(function() {
                    $('#alertModal').modal('hide');
                }, 3000);
            @endif
        });
    </script>
@endsection
