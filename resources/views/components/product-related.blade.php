<!-- Products Start -->
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <img src="{{ asset('client/img/Icon_ban_chay.png') }}" alt="logo" style="width: 50px; height: 40px;">
        <span class=" pr-3">Bạn có thể thích</span>
        {{-- //bg-secondary --}}
    </h2>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                @foreach ($products as $product)
                    <div class="">
                        <x-product-card :product="$product" :lg="12" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Products End -->
<style>
    .product-card {
        border-radius: 10px;
        /* Điều chỉnh độ bo tròn (10px là ví dụ) */
        overflow: hidden;
        /* Đảm bảo nội dung không tràn ra ngoài */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Thêm chút hiệu ứng shadow (tùy chọn) */
    }
</style>
<script>
    $(document).ready(function() {
        $('.related-carousel').owlCarousel({
            loop: true, // Lặp lại carousel
            margin: 10, // Khoảng cách giữa các mục
            nav: true, // Hiển thị nút điều hướng
            autoplay: true, // Bật chế độ tự động
            autoplayTimeout: 2000, // Thời gian giữa các lần cuộn (2 giây)
            autoplaySpeed: 1000, // Tốc độ chuyển đổi (1 giây)
            responsive: {
                0: {
                    items: 1 // Số sản phẩm hiển thị trên màn hình nhỏ
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });
    });
</script>
