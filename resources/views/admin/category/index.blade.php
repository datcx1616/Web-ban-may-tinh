@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-10 offset-md-1">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Danh mục sản phẩm</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="datatable_wrapper" class="dataTables_wrapper">
                                <div class="text-center">
                                    <a class="btn btn-primary mb-3" href="{{ route('admin.category.create') }}">Thêm danh
                                        mục</a>
                                </div>

                                <table id="datatable" class="table data-table table-striped dataTable" role="grid"
                                    aria-describedby="datatable_info">
                                    <thead>
                                        <tr class="ligth" role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-sort="ascending" style="width: 158.094px;">Id</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 247.594px;">Tên danh mục</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 118.938px;">Mô tả</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 118.938px;">ảnh</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 118.938px;">icon</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 118.938px;">Trạng thái</th>

                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 39.7031px;">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listCategories as $itemCategory)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $itemCategory->id }}</td>
                                                <td>{{ $itemCategory->name }}</td>
                                                <td>{{ $itemCategory->describe }}</td>
                                                <td>
                                                    <img height="100" src="{{ $itemCategory->img }}" alt="">
                                                </td>
                                                <td>
                                                    <img height="100" src="{{ $itemCategory->icon }}" alt="">
                                                </td>
                                                <td>{{ $itemCategory->is_show }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('admin.category.edit', ['id' => $itemCategory->id]) }}"
                                                            class="btn btn-warning">Sửa</a>
                                                        <a href="{{ route('admin.category.delete', ['id' => $itemCategory->id]) }}"
                                                            class="btn btn-danger mx-2">Xoá</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('admin.product.index') }}"class="btn bg-danger mb-3 text-center">Quay lại</a>
                </div>

            </div>
        </div>
    </div>
@endsection
