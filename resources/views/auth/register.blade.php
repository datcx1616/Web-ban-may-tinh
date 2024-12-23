@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('login-public/css/style.css') }}">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block py-5 product-card">
                            <div class="mb-4">
                                <h3>Đăng ký</h3>
                            </div>
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="name">Họ tên</label>
                                    <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                        id="name" placeholder="Nhập họ tên">
                                    @error('name')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                        id="email" placeholder="Nhập email"style="width:100%">
                                    @error('email')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" value="{{ old('password') }}"
                                        name="password" id="password" placeholder="Nhập mật khẩu">
                                    @error('password')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password_confirmation">Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" value="{{ old('password_confirmation') }}"
                                        name="password_confirmation" id="password_confirmation"
                                        placeholder="Nhập lại mật khẩu">
                                    @error('password_confirmation')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <input type="submit" value="Đăng ký"
                                    class="btn btn-pill text-white btn-block btn-primary-login">

                                <span class="d-block text-center my-4 text-muted">Đã có tài khoản? <a
                                        href="{{ route('login') }}">Đăng nhập</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('login-public/js/main.js') }}"></script>
@endsection
