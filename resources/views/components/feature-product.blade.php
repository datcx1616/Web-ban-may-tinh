<div class="container-fluid pt-2 pb-1">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <img src="{{ asset('client/img/Ellipse.png') }}" alt="logo" style="width: 50px; height: 40px;">
        <span class="bg-secondary pr-3">Sản phẩm nổi bật</span>
    </h2>
    <div class="row px-xl-1">
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
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 1000, // Thời gian cuộn 2 giây
            responsive: {
                0: {
                    items: 1
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
