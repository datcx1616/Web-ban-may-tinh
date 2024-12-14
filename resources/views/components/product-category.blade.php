@php
    $listCategory = \App\Models\Category::where('is_show', 2)->get();
@endphp


<div class="container-fluid pt-2">
    <div class="row px-xl-5 slide-container">
        @if (isset($listCategory) && $listCategory->count())
            @foreach ($listCategory as $itemCategory)
                <div class="col-lg-2 col-md-4 col-sm-12 pb-1 slide-item"> <!-- Giảm chiều rộng của cột -->
                    <div class="d-flex align-items-center bg-light mb-4 bode"
                        style="padding: 10px; border-radius: 10px; height: 80px; justify-content: space-between;">

                        <!-- Hình ảnh bên trái -->
                        <img src="{{ asset('client/img/icon1.png') }}" alt="logo" style="width: 40px; height: 35px;">
                        <!-- Giảm khoảng cách giữa ảnh và tên -->

                        <!-- Thẻ chứa tên category và ảnh bên phải -->
                        <div class="category-name d-flex align-items-center justify-content-start" style="flex-grow: 1;">
                            <!-- Sát vào ảnh bên trái -->
                            <!-- Bao bọc tên danh mục trong thẻ a -->
                            <a href="{{ route('shop.index', ['category' => $itemCategory->id]) }}"
                                class="nav-item nav-link" style="display: block;">
                                <h5 class="font-weight-semi-bold text-nowrap m-0" style="margin: 0;">
                                    {{ $itemCategory->name }}
                                </h5>
                            </a>
                        </div>

                        <!-- Hình ảnh bên phải -->
                        <img src="{{ $itemCategory->img }}" alt="logo" style="width: 90px; height: 60px;">
                        <!-- Giảm khoảng cách ảnh bên phải -->
                    </div>
                </div>
            @endforeach
        @else
            <p>No categories available.</p>
        @endif
    </div>
</div>





{{-- <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
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
        </div> --}}
