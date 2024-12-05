@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('login-public/css/style.css') }}">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <style>
                            .product-card {
                                border-radius: 10px;
                                padding: 30px;
                                background-color: #f8f9fa;
                                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                            }

                            .form-group input.form-control {
                                border-radius: 5px;
                                padding: 15px;
                                margin-bottom: 10px;
                                border: 1px solid #ced4da;
                                font-size: 16px;
                            }

                            .input-error {
                                color: #dc3545;
                                font-size: 14px;
                                margin-top: 5px;
                            }

                            .btn-primary {
                                background-color: #007bff;
                                border-color: #007bff;
                                border-radius: 5px;
                                padding: 12px;
                                font-size: 16px;
                            }

                            .btn-primary:hover {
                                background-color: #0056b3;
                                border-color: #0056b3;
                            }

                            .text-muted a {
                                color: #007bff;
                            }

                            .text-muted a:hover {
                                text-decoration: underline;
                            }
                        </style>
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
                                        id="email" placeholder="Nhập email">
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

                                <input type="submit" value="Đăng ký" class="btn btn-pill text-white btn-block btn-primary">

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
