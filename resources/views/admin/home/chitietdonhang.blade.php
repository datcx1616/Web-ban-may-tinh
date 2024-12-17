@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Danh sách đơn hàng</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="datatable_wrapper" class="dataTables_wrapper">
                                <table id="datatable" class="table table-bordered table-hover table-striped" role="grid"
                                    aria-describedby="datatable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-sort="ascending">Mã đơn hàng</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Người đặt</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Ngày đặt</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Trạng thái</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1">Tin nhắn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Order as $order)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $order->id }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>{!! $order->getStatusStr() !!}</td>
                                                <td>{{ $order->message }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Thêm phần CSS để cải thiện giao diện -->
                                <style>
                                    /* Cải thiện giao diện bảng */
                                    .table {
                                        width: 100%;
                                        border-radius: 8px;
                                        border: 1px solid #ddd;
                                    }

                                    .table th,
                                    .table td {
                                        padding: 12px 15px;
                                        text-align: center;
                                        vertical-align: middle;
                                    }

                                    .table-bordered {
                                        border: 1px solid #ddd;
                                    }

                                    .thead-dark {
                                        background-color: #aac7e6;
                                        color: #fff;
                                    }

                                    .table-striped tbody tr:nth-of-type(odd) {
                                        background-color: #f9f9f9;
                                    }

                                    .table-hover tbody tr:hover {
                                        background-color: #f1f1f1;
                                    }

                                    .btn-info {
                                        background-color: #17a2b8;
                                        border-color: #17a2b8;
                                        color: white;
                                    }

                                    .btn-info:hover {
                                        background-color: #138496;
                                        border-color: #117a8b;
                                    }
                                </style>

                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.home.index') }}" class="btn bg-danger mb-3">Quay lại</a>
            </div>
        </div>
    </div>
@endsection
