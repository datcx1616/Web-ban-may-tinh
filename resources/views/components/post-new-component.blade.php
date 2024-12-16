<div class="container-fluid pt-3 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Tin công nghệ mới</span>
    </h2>
    <div class="row px-xl-5">
        @foreach ($posts as $post)
            <div class="col-md-3">
                <div class="product-offer mb-30" style=" border-radius: 10px; height: 200px;">
                    <img class="img-fluid" src="{{ $post->image }}" alt="" style="height: 100%; width: 100%;">
                    <div class="offer-text">
                        <!-- Thêm liên kết vào tiêu đề -->
                        <h3 class="text-white mb-3" style="text-align: center; width: 70%;">
                            <a href="{{ route('post.detail', ['id' => $post->id]) }}"
                                style="color: inherit; text-decoration: none;">
                                {{ $post->title }}
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
