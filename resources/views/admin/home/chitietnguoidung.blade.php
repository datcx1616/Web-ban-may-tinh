@extends('layouts.admin')
@php
    use App\Enums\UserRole;
@endphp
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Danh sách người dùng</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="datatable_wrapper" class="dataTables_wrapper">
                                <table id="datatable" class="table data-table table-striped dataTable" role="grid"
                                    aria-describedby="datatable_info">
                                    <thead>
                                        <tr class="ligth" role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-sort="ascending" style="width: 158.094px;">Id</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 247.594px;">Họ tên</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 118.938px;">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 39.7031px;">Vai trò</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $user)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role === UserRole::ADMIN ? 'Admin' : 'Người dùng' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.home.index') }}" class="btn bg-danger">Quay lại</a>
            </div>
        </div>
    </div>
@endsection
