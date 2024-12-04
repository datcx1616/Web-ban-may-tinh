@extends('layouts.app')
@section('content')
    @php
        $isSale = isDiscount($product->sale_start, $product->sale_end);
        $priceShow = $product->price;
        if ($isSale) {
            $priceShow = calcSalePrice($product->price, $product->sale);
        }
    @endphp
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
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


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{ $product->image }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
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
                        <h5 class="sale-origin"><span class="text-line-through">{{ number_format($product->price) }}</span>
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
                                    <button class="btn btn-primary btn-minus" type="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-secondary border-0 text-center" name="quantity"
                                    value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-plus" type="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>Thêm vào giỏ
                                hàng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Mô tả</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Mô tả sản phẩm</h4>
                            <p>{!! $product->describe !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">ĐÁNH GIÁ VÀ
                NHẬN XÉT</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <form method="post" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="control-group">
                            <textarea class="form-control" rows="8" name="message" required id="message" placeholder="Lời nhắn"
                                required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <x-product-related :currID="$product->id" />

    <script>
        function addToCart() {}
    </script>
@endsection
