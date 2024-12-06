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
    <x-product-related />
@endsection
