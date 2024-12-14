@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Thêm danh mục </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Tên danh mục</label>
                                    <input type="text" class="form-control" required id="validationDefault01"
                                        name="name">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Mô tả</label>
                                    <input type="text" class="form-control" required id="validationDefault01"
                                        name="describe">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Hình ảnh</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileimg" name="img">
                                        <label class="custom-file-label" for="customFileImg"></label>
                                    </div>

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault02">Icon</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileicon" name="icon">
                                        <label class="custom-file-label" for="customFileIcon"></label>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="is_show">Trạng thái</label>
                                    <select name="is_show" id="is_show" class="form-control">
                                        <option value="0">Ẩn
                                        </option>
                                        <option value="1">
                                            1 </option>
                                        <option value="2">
                                            2 </option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Thêm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
