@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Chỉnh sửa thông tin sản phẩm</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" id="form-create-product" action="{{ route('admin.product.update') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <input type="hidden" value="{{ $itemProduct->id }}" name="id">
                                <div class="form-group col-md-12">
                                    <label for="email">Danh mục</label>
                                    <select class="form-control mb-3" name="id_category">
                                        <option selected="">Chọn danh mục</option>
                                        @foreach ($listCategory as $itemCategory)
                                            <option value="{{ $itemCategory->id }}"
                                                {{ $itemProduct->id_category == $itemCategory->id ? 'selected' : '' }}>
                                                {{ $itemCategory->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Tên sản phẩm</label>
                                    <input type="text" class="form-control" required value="{{ $itemProduct->name }}"
                                        name="name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Số lượng</label>
                                    <input type="text" class="form-control" required value="{{ $itemProduct->quantity }}"
                                        name="quantity">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Hình ảnh</label>
                                        <div class="custom-file mb-2">
                                            <input type="file" class="custom-file-input" id="customFile1" name="image[]">
                                            <label class="custom-file-label" for="customFile1">Chọn ảnh 1</label>
                                        </div>
                                        <div class="custom-file mb-2">
                                            <input type="file" class="custom-file-input" id="customFile2" name="image[]">
                                            <label class="custom-file-label" for="customFile2">Chọn ảnh 2</label>
                                        </div>
                                        <div class="custom-file mb-2">
                                            <input type="file" class="custom-file-input" id="customFile3" name="image[]">
                                            <label class="custom-file-label" for="customFile3">Chọn ảnh 3</label>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" name="changeImage"
                                            id="change-image">
                                        <label class="custom-control-label" for="change-image">Thay đổi hình ảnh</label>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="pwd">Giá</label>
                                    <input type="text" class="form-control" required
                                        value="{{ $itemProduct->price }}"name="price">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="pwd">Mô tả</label>
                                    <textarea class="form-control" required name="describe">{{ $itemProduct->describe }}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pwd">Màn hình</label>
                                    <input type="text" class="form-control" required
                                        value="{{ $itemProduct->screen }}"name="screen">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pwd">CPU</label>
                                    <input type="text" class="form-control" required
                                        value="{{ $itemProduct->cpu }}"name="cpu">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Ram</label>
                                    <select class="form-control mb-3" name="ram">
                                        <option value="4" checked>4 GB</option>
                                        <option value="8">8 GB</option>
                                        <option value="16">16 GB</option>
                                        <option value="32">32 GB</option>
                                        <option value="64">64 GB</option>
                                        <option value="128">128 GB</option>
                                        <option value="256">256 GB</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Bộ nhớ</label>
                                    <select class="form-control mb-3" name="memory">
                                        <option value="128" checked>128 GB</option>
                                        <option value="256">256 GB</option>
                                        <option value="512">512 GB</option>
                                        <option value="1024">1024 GB</option>
                                        <option value="2048">2056 GB</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pwd">Card</label>
                                    <input type="text" class="form-control" required
                                        value="{{ $itemProduct->card }}"name="card">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pwd">Pin</label>
                                    <input type="text" class="form-control" required
                                        value="{{ $itemProduct->battery }}"name="battery">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="pwd">Khối lượng</label>
                                    <input type="text" class="form-control" required
                                        value="{{ $itemProduct->mass }}"name="mass">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="custom-control custom-switch custom-control-inline">
                                        <input type="checkbox" class="custom-control-input"
                                            {{ $itemProduct->sale ? 'checked' : '' }} id="customSwitch2">
                                        <label class="custom-control-label" for="customSwitch2">Giảm giá</label>
                                    </div>
                                </div>
                                <div class="col-md-12 row mb-3 form-group-time-sale">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Giảm giá (%)</label>
                                        <input type="number" class="form-control" value="{{ $itemProduct->sale }}"
                                            id="validationDefault01" name="sale">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault01">Thời gian giảm giá</label>
                                        <input type="text" class="form-control" id="datetime-picker" name="timeSale">
                                        <div class="invalid-feedback d-block" id="error-time-sales">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <a href="{{ route('admin.product.index') }}" class="btn bg-danger">Quay lại</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getDateTimeString(val) {
            const y = val.getFullYear()
            const m = val.getMonth() + 1
            const d = val.getDate()
            const h = val.getHours()
            const mi = val.getMinutes()
            return `${y}-${m}-${d} ${h}:${mi}`
        }
        document.addEventListener("DOMContentLoaded", (event) => {
            $("#datetime-picker").flatpickr({
                mode: "range",
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                @if ($itemProduct->sale)
                    defaultDate: ['{{ \Carbon\Carbon::parse($itemProduct->sale_start) }}',
                        '{{ \Carbon\Carbon::parse($itemProduct->sale_end) }}'
                    ],
                @endif
                time_24hr: true
            });
            $('#customSwitch2').on('change', function() {
                if (this.checked) {
                    $('.form-group-time-sale').show(300)
                } else {
                    $('.form-group-time-sale').hide(300)
                }
            })
            $('#customSwitch2').trigger('change')
            $("#form-create-product").submit(function(e) {
                if ($('#customSwitch2')[0].checked) {
                    const timeSales = document.querySelector('#datetime-picker')._flatpickr.selectedDates
                    if (timeSales.length !== 2) {
                        $('#error-time-sales').text('Vui lòng chọn khoảng thời gian.')
                        e.preventDefault();
                        return
                    }
                    $("<input />").attr("type", "hidden")
                        .attr("name", "isSale")
                        .attr("value", 1)
                        .appendTo("#form-create-product");
                    $("<input />").attr("type", "hidden")
                        .attr("name", "saleStart")
                        .attr("value", getDateTimeString(timeSales[0]))
                        .appendTo("#form-create-product");
                    $("<input />").attr("type", "hidden")
                        .attr("name", "saleEnd")
                        .attr("value", getDateTimeString(timeSales[1]))
                        .appendTo("#form-create-product");
                }
            });
        });
    </script>
@endsection
