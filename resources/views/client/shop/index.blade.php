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

    <x-logo-component />

    <x-product-category />
    <div class="container-fluid">
        <div class="container-fluid position-relative mt-4 mb-4 px-xl-5" style="height: auto; text-align: center;">
            <!-- Ảnh H2 -->
            <img src="{{ asset('client/img/H2.png') }}" alt="background" class="w-100"
                style="position: relative; z-index: 1; border-radius: 10px;">

            <!-- Ảnh tt1 -->
            <img src="{{ asset('client/img/tt1.png') }}" alt="overlay"
                style="position: absolute; top: -7px; left: 50%; transform: translateX(-50%); max-width: 25%; z-index: 2;">

            <img src="{{ asset('client/img/icon-big.png') }}" alt="overlay"
                style="position: absolute; top: -50px; left: 82%; transform: translateX(-50%); max-width: 15%; z-index: 2;">
        </div>
    </div>



    <div class="container-fluid">
        <div class="row px-xl-5 ">
            <div class="col-lg-12">
                <div class="row pb-3">
                    <x-card-product />
                </div>
            </div>


            <div class="container-fluid position-relative mb-3" style="height: auto;">
                <img src="{{ asset('client/img/tt.png') }}" alt="background" class="w-100"
                    style="position: relative; z-index: 1;">
                <img src="{{ asset('client/img/icon-big.png') }}" alt="overlay"
                    style="position: absolute; top: -85px; left: 20%; transform: translateX(-50%); max-width: 25%; z-index: 2;">
            </div>


            <style>
                .overlay-container {
                    position: relative;
                    width: 100%;
                    height: auto;
                    /* Để chiều cao tự động theo ảnh nền */
                    text-align: center;
                }

                .overlay-container img:first-child {
                    position: relative;
                    z-index: 1;
                }

                .overlay-container img:last-child {
                    position: absolute;
                    top: 0;
                    /* Có thể điều chỉnh để thay đổi độ cao */
                    left: 45%;
                    transform: translateX(-50%);
                    max-width: 30%;
                    z-index: 2;
                }
            </style>


            <x-category-product />

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
                                        <label class="custom-control-label fw-bold" for="size-2">Dưới 14
                                            inch</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-2">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['memory'] == '512' ? 'checked' : '' }} name="memory"
                                            data-value="512" id="size-3">
                                        <label class="custom-control-label fw-bold" for="size-3">Từ 14 - 15
                                            inch</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-2">
                                        <input type="checkbox" class="custom-control-input js-input-filter"
                                            {{ $query['memory'] == '1024' ? 'checked' : '' }} name="memory"
                                            data-value="1024" id="size-4">
                                        <label class="custom-control-label fw-bold" for="size-4">Từ 15 - 17
                                            inch</label>
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

            <div class="container-fluid position-relative mb-3" style="height: auto; border-radius: 10px;">
                <img src="{{ asset('client/img/tttt.png') }}" alt="background" class="w-100"
                    style="position: relative; z-index: 1; border-radius: 10px;">

            </div>
            <!-- Shop Product End -->
        </div>
    </div>

    {{-- <x-post-new-component /> --}}
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
