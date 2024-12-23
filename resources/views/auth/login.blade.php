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
                                <button type="submit" class="btn btn-pill text-white btn-block btn-primary-login">Đăng
                                    nhập</button>

                                <!-- Social Login Buttons -->
                                <div class="social-login mt-2 " style=" border-radius: 10px;">
                                    <button type="button" class="btn btn-pill btn-block btn-facebook-login"
                                        style=" border-radius: 10px;">
                                        <i class="fab fa-facebook-f"></i> Đăng nhập bằng Facebook
                                    </button>
                                    <button type="button" class="btn btn-pill btn-block btn-google-login"
                                        style=" border-radius: 10px;">
                                        <i class="fab fa-google"></i> Đăng nhập bằng Gmail
                                    </button>
                                </div>

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
