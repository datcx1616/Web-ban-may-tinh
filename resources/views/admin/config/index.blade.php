@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ route('admin.menu.index') }}" class="btn btn-primary mb-3 px-4 py-2 fw-bold shadow-sm">
                    <i class="fas fa-list"></i> Quản lý menu
                </a>
            </div>

            <div class="col-sm-12">
                <div class="card-transparent card-block card-stretch card-height">
                    <div class="card-body p-0">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Banner</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.config.slide') }}" method="POST" class="d-flex flex-column"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <ul class="list-inline p-0 mb-0">
                                        @foreach ($slides as $key => $item)
                                            <li class="mb-1">
                                                <div class="row">
                                                    <div class="col-sm-12" style="overflow: hidden">
                                                        <label for="slide-image-{{ $key }}" class="custom-label"
                                                            style="cursor: pointer;">
                                                            Chọn ảnh
                                                        </label>
                                                        <style>
                                                            .custom-label {
                                                                display: inline-block;
                                                                /* Đặt nhãn như một nút */
                                                                padding: 10px 20px;
                                                                /* Tạo khoảng cách bên trong nhãn */
                                                                background-color: #007bff;
                                                                /* Màu nền (xanh Bootstrap) */
                                                                color: #fff;
                                                                /* Màu chữ */
                                                                font-size: 16px;
                                                                /* Kích thước chữ */
                                                                font-weight: bold;
                                                                /* In đậm chữ */
                                                                text-align: center;
                                                                /* Căn giữa chữ */
                                                                border-radius: 8px;
                                                                /* Bo góc nhãn */
                                                                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                                                /* Hiệu ứng bóng */
                                                                transition: all 0.3s ease;
                                                                /* Hiệu ứng chuyển đổi khi hover */
                                                            }

                                                            .custom-label:hover {
                                                                background-color: #0056b3;
                                                                /* Đổi màu nền khi hover */
                                                                box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
                                                                /* Tăng bóng khi hover */
                                                                transform: translateY(-2px);
                                                                /* Đẩy nhãn lên một chút */
                                                            }

                                                            .custom-label:active {
                                                                transform: translateY(0);
                                                                /* Quay lại vị trí gốc khi click */
                                                                box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
                                                                /* Giảm bóng khi click */
                                                            }
                                                        </style>
                                                        <div style="text-align: center;">
                                                            <input type="file" hidden
                                                                name="slide-image-{{ $key }}"
                                                                class="input-image-slide"
                                                                id="slide-image-{{ $key }}"
                                                                data-id="{{ $key }}">
                                                            <br>
                                                            <img height="170" src="{{ $item->image }}"
                                                                id="preview-slide-image-{{ $key }}" alt="">
                                                        </div>

                                                    </div>
                                                    {{-- <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputphone">Tiêu đề</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $item->title }}"
                                                                name="title-slide-{{ $key }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputphone">Nội dung</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $item->content }}"
                                                                name="content-slide-{{ $key }}">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </li>
                                            <hr>
                                        @endforeach
                                    </ul>
                                    <div class="text-center">
                                        <button class="btn btn-primary btn-lg fw-bold px-4 py-2 shadow-sm">
                                            <i class="fas fa-sync-alt"></i> Cập nhật
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-4">
                <div class="card-transparent card-block card-stretch card-height">
                    <div class="card-body p-0">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Banner</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.config.banner') }}" method="POST" class="d-flex flex-column" enctype="multipart/form-data">
                                    @csrf
                                    <ul class="list-inline p-0 mb-0">
                                        @foreach ($banners as $key => $item)
                                            <li class="mb-1">
                                                <div class="row">
                                                    <div class="col-sm-12" style="overflow: hidden;">
                                                        <label for="banner-image-{{ $key }}" style="cursor: pointer;">Chọn ảnh</label>
                                                        <input type="file" hidden name="banner-image-{{ $key }}" class="input-image-banner" id="banner-image-{{ $key }}"
                                                            data-id="{{ $key }}">
                                                        <br>
                                                            <img height="188" src="{{ $item->image }}" id="preview-banner-image-{{ $key }}" alt="">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputphone">Tiêu đề</label>
                                                            <input type="text" class="form-control" value="{{ $item->title }}" name="title-banner-{{ $key }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr>
                                        @endforeach
                                    </ul>
                                    <button class="btn btn-primary mx-auto">Cập nhật</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            $('.input-image-slide').on('change', function() {
                const file = this.files[0]
                if (!file) {
                    return
                }
                document.getElementById(`preview-slide-image-${this.dataset.id}`).src = URL.createObjectURL(
                    file)
            })
            $('.input-image-banner').on('change', function() {
                const file = this.files[0]
                if (!file) {
                    return
                }
                document.getElementById(`preview-banner-image-${this.dataset.id}`).src = URL
                    .createObjectURL(file)
            })
        });
    </script>
@endsection
