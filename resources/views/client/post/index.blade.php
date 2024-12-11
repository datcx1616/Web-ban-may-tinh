@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('post.index') }}">Danh sách bài viết</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="container-fluid pb-3">
        <div class="row px-xl-5">
            @foreach ($postsFirst as $post)
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="border-radius: 10px; height: 300px;">
                        <img class="img-fluid" src="{{ $post->image }}" alt="">
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

    <div class="container-fluid pb-3">
        <div class="row px-xl-5">
            @foreach ($postsSecond as $post)
                <div class="col-md-4">
                    <div class="product-offer mb-30" style="border-radius: 10px; height: 300px;">
                        <img class="img-fluid" src="{{ $post->image }}" alt="">
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

    <div class="container-fluid pb-3">
        <div class="row px-xl-5">
            @foreach ($postsThird as $post)
                <div class="col-md-2">
                    <div class="product-offer mb-30" style="border-radius: 10px; height: 300px;">
                        <img class="img-fluid" src="{{ $post->image }}" alt="">
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
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">Video về một số sản phẩm</span>
        </h2>
        <div class="row mx-xl-5">
            <div class="col-md-3 d-flex justify-content-center align-items-center" style="padding: 20px;">
                <iframe src="https://www.youtube.com/embed/l0op-_MDO4o?si=gDhFgAiJe1OvQiQu" title="YouTube video player"
                    frameborder="0" style="border-radius: 10px; width: 100%; height: 200px;"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="col-md-3 d-flex justify-content-center align-items-center" style="padding: 20px;">
                <iframe src="https://www.youtube.com/embed/jxZ_YLi5E74?si=1L1O9PjaTZA-4lUM" title="YouTube video player"
                    frameborder="0" style="border-radius: 10px; width: 100%; height: 200px;"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="col-md-3 d-flex justify-content-center align-items-center" style="padding: 20px;">
                <iframe src="https://www.youtube.com/embed/CUl8JaglXNQ?si=UDBywT-YwEbkrsZK" title="YouTube video player"
                    frameborder="0" style="border-radius: 10px; width: 100%; height: 200px;"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="col-md-3 d-flex justify-content-center align-items-center" style="padding: 20px;">
                <iframe src="https://www.youtube.com/embed/RYJWIvKoQJs?si=NHQPK9GePtzIIZfH" title="YouTube video player"
                    frameborder="0" style="border-radius: 10px; width: 100%; height: 200px;"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

    </div>
    <x-product-related />
@endsection
