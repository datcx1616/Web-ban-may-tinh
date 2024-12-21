@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-10 offset-md-1">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Thêm menu</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.menu.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Tên menu</label>
                                    <input type="text" class="form-control" required id="validationDefault01"
                                        name="name">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Route</label>
                                    <input type="text" class="form-control" required id="validationDefault01"
                                        name="route">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Thứ tự</label>
                                    <input type="text" class="form-control" required id="validationDefault01"
                                        name="order">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Thêm</button>
                                <a href="{{ route('admin.menu.index') }}" class="btn bg-danger">Quay lại</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
