@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Chỉnh sửa danh mục</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.category.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $itemCategory->id }}" name="id">
                            <div class="form-group">
                                <label for="email">Tên danh mục</label>
                                <input type="text" class="form-control" required value="{{ $itemCategory->name }}"
                                    name="name">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mô tả</label>
                                <input type="text" class="form-control" required value="{{ $itemCategory->describe }}"
                                    name="describe">
                            </div>
                            <div class="form-group">
                                <label for="validationDefault01">Hình ảnh</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileImg" name="img">
                                    <label class="custom-file-label" for="customFileImg"></label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" name="changeImage"
                                        id="change-image">
                                    <label class="custom-control-label" for="change-image">Thay đổi hình ảnh</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validationDefault02">Icon</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileIcon" name="icon">
                                    <label class="custom-file-label" for="customFileIcon"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="is_show_home_page">Trạng thái</label>
                                <select name="is_show" id="is_show" class="form-control">
                                    <option value="0">Ẩn
                                    </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <a href="{{ route('admin.category.index') }}" class="btn bg-danger">Quay lại</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
