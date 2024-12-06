@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('post.index') }}">Danh sách bài viết</a>
                    <span class="breadcrumb-item active">Chi tiết bài viết</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="row px-xl-5" style="justify-content: center;">
        <div class="col-6">
            <div class="bg-light p-30" style="text-align: center;">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">{{ $post->title }}</h4>
                        <div style="display: flex; justify-content: center;">
                            <img src="{{ $post->image }}" alt="" style="max-width: 100%; height: auto;">
                        </div>
                        <p style="margin-top: 20px; text-align: center; line-height: 1.6; padding: 0 50px;">
                            {!! $post->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <x-post-new-component />
@endsection
