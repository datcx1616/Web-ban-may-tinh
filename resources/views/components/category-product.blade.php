@php
    $listCategory = \App\Models\Category::where('is_show', 3)->get();
@endphp


<div class="container-fluid pt-2">
    <div class="row px-xl-1 pb-1 d-flex ">
        @if (isset($listCategory) && $listCategory->count())
            @foreach ($listCategory as $itemCategory)
                <div class="col-lg-3 pb-1"> <!-- Giảm chiều rộng của cột -->
                    <div class="d-flex align-items-center bg-light mb-4 boder"
                        style="padding: 15px; border-radius: 10px; height: 90px; justify-content: space-between; overflow: hidden; width: 100%;">
                        <!-- Hình ảnh bên trái -->
                        <img src="{{ $itemCategory->img }}" alt="logo" style="width: 60px; height: 40px;">
                        <!-- Tăng kích thước hình ảnh -->

                        <!-- Thẻ chứa tên danh mục -->
                        <div class="category-name d-flex align-items-center justify-content-start"
                            style="flex-grow: 1; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                            <!-- Bao bọc tên danh mục trong thẻ a -->
                            <a href="{{ route('shop.index', ['category' => $itemCategory->id]) }}"
                                class="nav-item nav-link" style="display: block; text-align: right; overflow: hidden;">
                                <h5 class="font-weight-semi-bold m-0" style="margin: 0; line-height: 1.2;">
                                    {{ $itemCategory->name }}
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No categories available.</p>
        @endif
    </div>
</div>

{{-- <div class="container-fluid">
    <div class="row px-xl-1 pb-1 d-flex justify-content-between">
        <div class="col pb-1">
            <div class="d-flex align-items-center bg-light mb-4 boder"
                style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                <img src="{{ asset('client/img/icon10.png') }}" alt="logo"
                    style="width: 60px; height: 60px; margin-right: 10px;">
                <h5 class="font-weight-semi-bold m-0 text-nowrap">Al</h5>
            </div>
        </div>

        <div class="col pb-1">
            <div class="d-flex align-items-center bg-light mb-4 boder"
                style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                <img src="{{ asset('client/img/icon11.png') }}" alt="logo"
                    style="width: 60px; height: 60px; margin-right: 10px;">
                <h5 class="font-weight-semi-bold m-0 text-nowrap">Gaming- đồ họa</h5>
            </div>
        </div>
        <div class="col pb-1">
            <div class="d-flex align-items-center bg-light mb-4 boder"
                style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                <img src="{{ asset('client/img/icon12.png') }}" alt="logo"
                    style="width: 60px; height: 60px; margin-right: 10px;">
                <h5 class="font-weight-semi-bold m-0 text-nowrap">Sinh viên - văn
                    phòng</h5>
            </div>
        </div>
        <div class="col pb-1">
            <div class="d-flex align-items-center bg-light mb-4 boder"
                style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                <img src="{{ asset('client/img/icon13.png') }}" alt="logo"
                    style="width: 60px; height: 60px; margin-right: 10px;">
                <h5 class="font-weight-semi-bold m-0 text-nowrap">Mỏng nhẹ</h5>
            </div>
        </div>
        <div class="col pb-1">
            <div class="d-flex align-items-center bg-light mb-4 boder"
                style="padding: 20px; border-radius: 10px; height: 80px; width: 100%;">
                <img src="{{ asset('client/img/icon14.png') }}" alt="logo"
                    style="width: 60px; height: 60px; margin-left: outo;">
                <h5 class="font-weight-semi-bold m-0 text-nowrap">Doanh nhân</h5>
            </div>
        </div>
    </div>
</div> --}}
