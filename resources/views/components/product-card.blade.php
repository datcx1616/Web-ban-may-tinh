@php
    $priceShow = $product->price;
    if ($isSale) {
        $priceShow = $salePrice;
    }
@endphp

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
<div class="col-lg-{{ $lg }} col-md-4 col-sm-6 pb-1 ">
    <div class="product-item bg-light mb-4 product-card">
        <div class="product-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="{{ $product->image }}" alt="">
            <div class="product-action">
                <a class="w-100 h-100 p-3 d-block"
                    href="{{ route('shop.detail', [
                        'slug' => $product->getSlug(),
                        'id' => $product->id,
                    ]) }}">
                    <div class="mb-2" style="max-height: 48px; overflow: hidden">CPU: {{ $product->cpu }}</div>
                    <div class="mb-2" style="max-height: 48px; overflow: hidden">Ram: {{ $product->ram }}GB</div>
                    <div class="mb-2" style="max-height: 48px; overflow: hidden">Bộ nhớ: {{ $product->memory }}GB
                    </div>
                    <div class="mb-2" style="max-height: 48px; overflow: hidden">Card: {{ $product->card }}</div>
                    <div class="mb-2" style="max-height: 48px; overflow: hidden">Màn hình: {{ $product->screen }}
                    </div>
                </a>
            </div>
        </div>
        @if ($isSale)
            <div class="sale sale-value">{{ $product->sale }}%</div>
        @endif
        <div class="text-center py-4 d-flex flex-column">
            <a class="h6 text-decoration-none text-truncate mx-auto"
                href="{{ route('shop.detail', [
                    'slug' => $product->getSlug(),
                    'id' => $product->id,
                ]) }}"
                style="width: 80%; display: block;">{{ $product->name }}</a>

            <div class="d-flex align-items-center justify-content-center mt-2 flex-column">
                @if ($isSale)
                    <h6 class="mb-0 sale-origin"><span
                            class="text-line-through">{{ number_format($product->price) }}</span> VND</h6>
                @endif
                <h5>{{ number_format($priceShow) }} VND</h5>
            </div>
            <div class="d-flex align-items-center justify-content-center mb-1">
                <small>Số lượt mua: {{ $product->total_quantity ?? 0 }}</small>
            </div>
        </div>
    </div>
</div>
