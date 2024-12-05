@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('login-public/css/style.css') }}">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <style>
                            .form-control {
                                border-radius: 5px;
                                padding: 10px 15px;
                                font-size: 16px;
                                border: 1px solid #ced4da;
                            }

                            .form-control:focus {
                                border-color: #007bff;
                                box-shadow: 0 0 6px rgba(0, 123, 255, 0.5);
                            }

                            .input-error {
                                color: #dc3545;
                                font-size: 14px;
                                margin-top: 5px;
                                display: block;
                            }

                            .btn-primary {
                                background-color: #007bff;
                                border-color: #007bff;
                                padding: 10px 15px;
                                font-size: 18px;
                                border-radius: 5px;
                            }

                            .btn-primary:hover {
                                background-color: #0056b3;
                                border-color: #004080;
                            }

                            .text-muted a {
                                color: #007bff;
                                text-decoration: none;
                            }

                            .text-muted a:hover {
                                text-decoration: underline;
                            }
                        </style>

                        <div class="form-block py-5 product-card">
                            <div class="mb-4">
                                <h3>Đăng nhập</h3>
                            </div>

                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <!-- Input Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                                        id="email" placeholder="Nhập email">
                                    @if ($errors->has('email'))
                                        <span class="input-error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <!-- Input Password -->
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Nhập mật khẩu">
                                    @if ($errors->has('password'))
                                        <span class="input-error">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>

                                <span class="d-block text-center my-4 text-muted">
                                    Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký</a>
                                </span>
                            </form>
                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="{{ asset('login-public/js/main.js') }}"></script>
@endsection
