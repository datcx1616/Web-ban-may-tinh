@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-10 offset-md-1">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Danh sách sản phẩm</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="datatable_wrapper" class="dataTables_wrapper">
                                <div class="d-flex mb-3 text-center justify-content-center">
                                    <a class="btn btn-primary mx-2" href="{{ route('admin.product.create') }}">Thêm sản
                                        phẩm</a>
                                    <a class="btn btn-primary mx-2" href="{{ route('admin.category.index') }}">Quản lý danh
                                        mục</a>
                                </div>

                                <table id="datatable" class="table data-table table-striped dataTable" role="grid"
                                    aria-describedby="datatable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-sort="ascending">Id</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Danh mục</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Tên sản phẩm</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Số lượng</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Hình ảnh</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listProduct as $itemProduct)
                                            @php
                                                $images = json_decode($itemProduct->image, true); // Giải mã JSON thành mảng trong vòng lặp
                                            @endphp
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $itemProduct->id }}</td>
                                                <td>{{ $itemProduct->category_name }}</td>
                                                <td>{{ $itemProduct->name }}</td>
                                                <td>{{ $itemProduct->quantity }}</td>
                                                <td>
                                                    @if ($images && count($images) > 0)
                                                        @foreach ($images as $image)
                                                            <img class="img-fluid rounded mb-2" style="width: 150%"
                                                                src="{{ $image }}" alt="Image">
                                                        @endforeach
                                                    @else
                                                        <span>No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ number_format($itemProduct->price) }} VND</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('admin.product.edit', ['id' => $itemProduct->id]) }}"
                                                            class="btn btn-warning mx-1">Sửa</a>
                                                        <a href="{{ route('admin.product.delete', ['id' => $itemProduct->id]) }}"
                                                            class="btn btn-danger mx-1">Xoá</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                                <!-- Custom CSS for improved table -->
                                <!-- Custom CSS for improved table and button colors -->
                                <style>
                                    table.dataTable {
                                        border-radius: 8px;
                                        overflow: hidden;
                                    }

                                    table th,
                                    table td {
                                        text-align: center;
                                        padding: 12px;
                                    }

                                    table th {
                                        background-color: #f8f9fa;
                                        font-weight: bold;
                                    }

                                    table tbody tr:hover {
                                        background-color: #f1f1f1;
                                    }

                                    .btn {
                                        font-size: 14px;
                                        padding: 6px 12px;
                                    }

                                    .img-fluid {
                                        width: auto;
                                        max-height: 100px;
                                    }

                                    /* Custom colors for the Edit button */
                                    .btn-warning {
                                        background-color: #ffc107;
                                        /* Change to desired color */
                                        color: #fff;
                                        /* Text color */
                                    }

                                    .btn-warning:hover {
                                        background-color: #e0a800;
                                        /* Hover effect */
                                    }

                                    /* Custom colors for the Delete button */
                                    .btn-danger {
                                        background-color: #dc3545;
                                        /* Change to desired color */
                                        color: #fff;
                                        /* Text color */
                                    }

                                    .btn-danger:hover {
                                        background-color: #c82333;
                                        /* Hover effect */
                                    }
                                </style>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
