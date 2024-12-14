@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row g-4">
            <!-- Card Template -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow border-0 rounded-4 h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="text-primary">Doanh thu</h5>
                            <span class="badge bg-primary-light text-primary">85%</span>
                        </div>
                        <h3 class="mt-3 fw-bold text-dark">{{ number_format($totalRevenue) }} VND</h3>
                        <a href="{{ route('admin.home.index2') }}" class="text-decoration-none text-muted small">Xem chi
                            tiết</a>
                        <div class="progress mt-3" style="height: 8px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat the Card Template for each item -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow border-0 rounded-4 h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="text-warning">Tổng người dùng</h5>
                            <span class="badge bg-warning-light text-warning">35%</span>
                        </div>
                        <h3 class="mt-3 fw-bold text-dark">{{ number_format($totalUser) }}</h3>
                        <p class="text-muted small">Tổng người dùng</p>
                        <div class="progress mt-3" style="height: 8px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;" aria-valuenow="35"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card shadow border-0 rounded-4 h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="text-success">Tổng đơn hàng</h5>
                            <span class="badge bg-success-light text-success">45%</span>
                        </div>
                        <h3 class="mt-3 fw-bold text-dark">{{ number_format($totalOrder) }}</h3>
                        <p class="text-muted small">Tổng đơn hàng</p>
                        <div class="progress mt-3" style="height: 8px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="45"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card shadow border-0 rounded-4 h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="text-info">Tổng bài viết</h5>
                            <span class="badge bg-info-light text-info">35%</span>
                        </div>
                        <h3 class="mt-3 fw-bold text-dark">{{ number_format($totalPost) }}</h3>
                        <p class="text-muted small">Tổng bài viết</p>
                        <div class="progress mt-3" style="height: 8px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 35%;" aria-valuenow="35"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card shadow border-0 rounded-4 h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="text-danger">Tổng số sản phẩm</h5>
                            <span class="badge bg-danger-light text-danger">25%</span>
                        </div>
                        <h3 class="mt-3 fw-bold text-dark">{{ number_format($totalProduct) }}</h3>
                        <p class="text-muted small">Tổng số sản phẩm</p>
                        <div class="progress mt-3" style="height: 8px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card shadow border-0 rounded-4 h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="text-secondary">Tổng số đơn hàng đã hủy</h5>
                            <span class="badge bg-secondary-light text-secondary">25%</span>
                        </div>
                        <h3 class="mt-3 fw-bold text-dark">{{ number_format($totalCancel) }}</h3>
                        <p class="text-muted small">Tổng số đơn hàng đã hủy</p>
                        <div class="progress mt-3" style="height: 8px;">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Doanh thu theo ngày trong 1 tháng gần đây</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart-revenue-month"></div>
                    </div>
                </div>
            </div> --}}

    {{-- <script>
        @php
            $dayStr = '';
            $totalStr = '';
            foreach ($dataRevenueMonth as $item) {
                $dayStr .= $item->day . ', ';
                $totalStr .= $item->total . ', ';
            }
        @endphp
        document.addEventListener("DOMContentLoaded", () => {
            const VNDFormatter = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND',
            });
            if (jQuery("#chart-revenue-month").length) {
                options = {
                    chart: {
                        height: 500,
                        type: "line",
                        zoom: {
                            enabled: !1
                        }
                    },
                    colors: ["#4788ff"],
                    series: [{
                        name: "Doanh thu",
                        data: [{{ $totalStr }}]
                    }],
                    dataLabels: {
                        enabled: !1
                    },
                    stroke: {
                        curve: "straight"
                    },
                    title: {
                        text: "",
                        align: "left"
                    },
                    grid: {
                        row: {
                            colors: ["#f3f3f3", "transparent"],
                            opacity: .5
                        }
                    },
                    xaxis: {
                        categories: [{{ $dayStr }}],
                        labels: {
                            formatter: function(value) {
                                let month = (new Date()).getMonth() + 1;
                                let day = (new Date()).getDay();
                                if (month < 10) {
                                    month = '0' + month;
                                }
                                if (value < 10) {
                                    value = '0' + value;
                                }
                                if (value > day) {
                                    return `${value}/${month == 1 ? 12 : month - 1}`
                                }
                                return `${value}/${month}`
                            }
                        }
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value) {
                                return VNDFormatter.format(value);
                            }
                        },
                    }
                };
                if (typeof ApexCharts !== typeof undefined) {
                    (chart = new ApexCharts(document.querySelector("#chart-revenue-month"), options)).render()
                    const body = document.querySelector('body')
                    if (body.classList.contains('dark')) {
                        apexChartUpdate(chart, {
                            dark: true
                        })
                    }

                    document.addEventListener('ChangeColorMode', function(e) {
                        apexChartUpdate(chart, e.detail)
                    })
                }
            }
        });
    </script> --}}
@endsection
