@extends('layouts.admin')
@section('content')
    <div class="container">

        <h1 class="mb-4 text-center text-primary">Thống Kê Doanh Thu</h1>

        <!-- Tổng Quan Doanh Thu -->
        <div class="row">
            <div class="col-md-3">
                <div class="card border-primary shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="text-secondary">Doanh thu hôm nay</h5>
                        <p class="h4 text-success font-weight-bold">{{ number_format($todayRevenue, 0, ',', '.') }} VND</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-warning shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="text-secondary">Doanh thu hôm qua</h5>
                        <p class="h4 text-warning font-weight-bold">{{ number_format($yesterdayRevenue, 0, ',', '.') }} VND
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-primary shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="text-secondary">Doanh thu tuần này</h5>
                        <p class="h4 text-primary font-weight-bold">{{ number_format($thisWeekRevenue, 0, ',', '.') }} VND
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-info shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="text-secondary">Doanh thu tháng này</h5>
                        <p class="h4 text-info font-weight-bold">{{ number_format($thisMonthRevenue, 0, ',', '.') }} VND</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bảng Doanh Thu Theo Tháng -->
        <div class="mt-2">
            <h2 class="text-center text-primary">Doanh Thu Theo Tháng</h2>
            <div class="card shadow-lg">
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead style="background-color: #6c757d; color: #ffffff;">
                            <tr>
                                <th>Tháng</th>
                                <th>Doanh thu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataRevenueByMonth as $monthData)
                                <tr>
                                    <td>{{ $monthData->month }}-{{ $monthData->year }}</td>
                                    <td>{{ number_format($monthData->total, 0, ',', '.') }} VND</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Bảng Doanh Thu Theo Ngày Trong Tháng -->
        <div class="mt-5">
            <h2 class="text-center text-primary">Doanh Thu Theo Ngày, Tháng, Năm</h2>
            <div class="card shadow-lg">
                <div class="card-body">
                    <!-- Form chọn tháng và năm -->
                    <form method="GET" class="mb-4">
                        <div class="form-row align-items-center">
                            <div class="col-md-4">
                                <select name="month" class="form-control">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}" {{ $i == $selectedMonth ? 'selected' : '' }}>
                                            Tháng {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="year" class="form-control">
                                    @for ($i = 2020; $i <= \Carbon\Carbon::now()->year; $i++)
                                        <option value="{{ $i }}" {{ $i == $selectedYear ? 'selected' : '' }}>
                                            Năm {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-block">Xem</button>
                            </div>
                        </div>
                    </form>

                    <!-- Bảng Doanh Thu -->
                    <table class="table table-hover table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Ngày</th>
                                <th>Doanh thu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataRevenueMonth as $dayData)
                                @if ($dayData->month == $selectedMonth && $dayData->year == $selectedYear)
                                    <tr>
                                        <td>Ngày {{ $dayData->day }}/{{ $selectedMonth }}/{{ $selectedYear }}</td>
                                        <td>{{ number_format($dayData->total, 0, ',', '.') }} VND</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.home.index') }}" class="btn bg-danger mb-3">Quay lại</a>
        <a href="{{ route('export.revenue') }}" class="btn btn-success mb-3">Xuất Excel</a>

    </div>
@endsection
