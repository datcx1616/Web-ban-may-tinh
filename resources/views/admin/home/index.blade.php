@extends('layouts.admin')
@section('content')
    @php
        $cards = [
            [
                'title' => 'Doanh thu',
                'percentage' => 85,
                'badge_class' => 'text-primary',
                'progress_class' => 'bg-primary',
                'value' => $totalRevenue,
                'link' => route('admin.home.chitietdoanhthu'),
                'unit' => 'VND',
            ],
            [
                'title' => 'Tổng người dùng',
                'percentage' => 35,
                'badge_class' => 'text-info',
                'progress_class' => 'bg-info',
                'value' => $totalUser,
                'link' => route('admin.home.chitietnguoidung'),
            ],
            [
                'title' => 'Tổng bài viết',
                'percentage' => 45,
                'badge_class' => 'text-success',
                'progress_class' => 'bg-success',
                'value' => $totalPost,
                'link' => route('admin.home.chitietbaiviet'),
            ],
            [
                'title' => 'Tổng số sản phẩm',
                'percentage' => 35,
                'badge_class' => 'text-warning',
                'progress_class' => 'bg-warning',
                'value' => $totalProduct,
                'link' => route('admin.home.chitietsanpham'),
            ],
            [
                'title' => 'Tổng đơn hàng',
                'percentage' => 25,
                'badge_class' => 'text-danger',
                'progress_class' => 'bg-danger',
                'value' => $totalOrder,
                'link' => route('admin.home.chitietdonhang'),
            ],
            [
                'title' => 'Tổng số đơn hàng đã hủy',
                'percentage' => 25,
                'badge_class' => 'text-secondary',
                'progress_class' => 'bg-secondary',
                'value' => $totalCancelDH,
                'link' => route('admin.home.chitietdahuy'),
            ],
            [
                'title' => 'Đơn hàng đang giao',
                'percentage' => 35,
                'badge_class' => 'text-dark',
                'progress_class' => 'bg-dark',
                'value' => $totalOrderDG,
                'link' => route('admin.home.chitietdanggiao'),
            ],
            [
                'title' => 'Đơn hàng chờ xác nhận',
                'percentage' => 35,
                'badge_class' => 'text-info',
                'progress_class' => 'bg-light',
                'value' => $totalCancelXN,
                'link' => route('admin.home.chitietchosacnhan'),
            ],
            [
                'title' => 'Đơn hàng giao thành công',
                'percentage' => 35,
                'badge_class' => 'text-warning',
                'progress_class' => 'bg-success',
                'value' => $totalOrderDB,
                'link' => route('admin.home.chitietdonhangdaban'),
            ],
        ];
    @endphp

    <div class="container-fluid py-4">
        <div class="row g-4">
            @foreach ($cards as $card)
                <div class="col-md-6 col-lg-4 mt-2">
                    <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow-lg transition-all duration-300">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="{{ $card['badge_class'] }}">{{ $card['title'] }}
                                </h5>
                                <span class="badge {{ $card['badge_class'] }}">{{ $card['percentage'] }}%</span>
                            </div>
                            <!-- Giá trị động -->
                            <h3 class="mt-3 fw-bold text-dark">
                                <span class="animated-value" data-value="{{ $card['value'] }}">0</span>
                                {{ $card['unit'] ?? '' }}
                            </h3>
                            @isset($card['link'])
                                <a href="{{ $card['link'] }}"
                                    class="text-decoration-none text-primary small mt-2 fw-bold d-inline-block"
                                    style="transition: all 0.3s; font-size: 0.9rem;">
                                    Xem chi tiết
                                </a>
                                <style>
                                    a.text-decoration-none:hover {
                                        color: #0056b3;
                                        text-decoration: underline;
                                        font-weight: bold;
                                    }
                                </style>
                            @endisset
                            <!-- Thanh tiến trình -->
                            <div class="progress mt-3" style="height: 8px; border-radius: 10px;">
                                <div class="progress-bar {{ $card['progress_class'] }} progress-animation"
                                    role="progressbar" style="width: 0%;" data-percentage="{{ $card['percentage'] }}"
                                    aria-valuenow="{{ $card['percentage'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        .card:hover {
            transform: translateY(-10px);
            /* Đẩy card lên một chút */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            /* Thêm bóng */
            transition: all 0.3s ease;
            /* Hiệu ứng mượt */
        }

        .card .card-body:hover h5,
        .card .card-body:hover a {
            color: #0056b3;
            /* Đổi màu tiêu đề hoặc liên kết khi hover */
        }

        .progress-bar:hover {
            filter: brightness(1.2);
            /* Tăng độ sáng của progress bar khi hover */
        }
    </style>

    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     const progressBars = document.querySelectorAll('.progress-animation');
        //     const animatedValues = document.querySelectorAll('.animated-value');

        //     // Hiệu ứng chạy thanh tiến trình
        //     progressBars.forEach(bar => {
        //         const percentage = bar.getAttribute('data-percentage');
        //         setTimeout(() => {
        //             bar.style.width = percentage + '%';
        //         }, 300); // Delay để hiệu ứng mượt hơn
        //     });

        //     // Hiệu ứng chạy giá trị
        //     animatedValues.forEach(valueElement => {
        //         const targetValue = parseInt(valueElement.getAttribute('data-value'), 10);
        //         let currentValue = 0;
        //         const increment = Math.ceil(targetValue / 100); // Giá trị tăng mỗi lần

        //         const updateValue = () => {
        //             currentValue += increment;
        //             if (currentValue > targetValue) {
        //                 currentValue = targetValue;
        //             }
        //             valueElement.textContent = currentValue.toLocaleString(); // Format số
        //             if (currentValue < targetValue) {
        //                 requestAnimationFrame(updateValue); // Tiếp tục tăng giá trị
        //             }
        //         };

        //         setTimeout(updateValue, 300); // Đồng bộ với hiệu ứng thanh tiến trình
        //     });
        // });

        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');

            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'scale(1.03)';
                    card.style.transition = 'transform 0.3s ease';
                });

                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'scale(1)';
                });
            });
        });
    </script>
@endsection
