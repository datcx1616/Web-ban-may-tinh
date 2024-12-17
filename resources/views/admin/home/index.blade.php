@extends('layouts.admin')
@section('content')
    @php
        $cards = [
            [
                'title' => 'Doanh thu',
                'percentage' => 85,
                'badge_class' => ' text-primary',
                'progress_class' => 'bg-primary',
                'value' => $totalRevenue,
                'link' => route('admin.home.index2'),
                'unit' => 'VND',
            ],
            [
                'title' => 'Tổng người dùng',
                'percentage' => 35,
                'badge_class' => ' text-info',
                'progress_class' => 'bg-info',
                'value' => $totalUser,
            ],
            [
                'title' => 'Tổng bài viết',
                'percentage' => 45,
                'badge_class' => ' text-success',
                'progress_class' => 'bg-success',
                'value' => $totalPost,
            ],
            [
                'title' => 'Tổng số sản phẩm',
                'percentage' => 35,
                'badge_class' => ' text-warning',
                'progress_class' => 'bg-warning',
                'value' => $totalProduct,
            ],
            [
                'title' => 'Tổng đơn hàng',
                'percentage' => 25,
                'badge_class' => ' text-danger',
                'progress_class' => 'bg-danger',
                'value' => $totalOrder,
            ],
            [
                'title' => 'Tổng số đơn hàng đã hủy',
                'percentage' => 25,
                'badge_class' => ' text-secondary',
                'progress_class' => 'bg-secondary',
                'value' => $totalCancelDH,
            ],
            [
                'title' => 'Đơn hàng đang giao',
                'percentage' => 35,
                'badge_class' => ' text-dark',
                'progress_class' => 'bg-dark',
                'value' => $totalOrderDG,
            ],
            [
                'title' => 'Đơn hàng chờ xác nhận',
                'percentage' => 35,
                'badge_class' => ' text-info',
                'progress_class' => 'bg-light',
                'value' => $totalCancelXN,
            ],
            [
                'title' => 'Đơn hàng đã bán',
                'percentage' => 35,
                'badge_class' => 'text-warning',
                'progress_class' => 'bg-success',
                'value' => $totalOrderDB,
            ],
        ];
    @endphp

    <div class="container-fluid py-4">
        <div class="row g-4">
            @foreach ($cards as $card)
                <div class="col-md-6 col-lg-4 mt-3">
                    <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow-lg transition-all duration-300">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="{{ $card['badge_class'] }} text-uppercase font-weight-bold">{{ $card['title'] }}
                                </h5>
                                <span class="badge {{ $card['badge_class'] }}">{{ $card['percentage'] }}%</span>
                            </div>
                            <h3 class="mt-3 fw-bold text-dark">{{ number_format($card['value']) }} {{ $card['unit'] ?? '' }}
                            </h3>
                            @isset($card['link'])
                                <a href="{{ $card['link'] }}" class="text-decoration-none text-muted small mt-2">Xem chi tiết</a>
                            @endisset
                            <div class="progress mt-3" style="height: 8px; border-radius: 10px;">
                                <div class="progress-bar {{ $card['progress_class'] }}" role="progressbar"
                                    style="width: {{ $card['percentage'] }}%;" aria-valuenow="{{ $card['percentage'] }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
