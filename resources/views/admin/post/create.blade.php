@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-10 offset-md-1">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Thêm bài viết</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.post.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Tiêu đề</label>
                                    <input type="text" class="form-control" required id="validationDefault01"
                                        name="title">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Hình ảnh</label>
                                    <div class="custom-file ">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                        <label class="custom-file-label" for="customFile"></label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Nội dung</label>
                                    <textarea type="text" class="form-control" id="validationDefault01" name="content"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Tác giả</label>
                                    <input type="text" class="form-control" required id="validationDefault01"
                                        name="author">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Thêm</button>
                                <a href="{{ route('admin.post.index') }}"class="btn bg-danger  ml-3">Quay lại</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
