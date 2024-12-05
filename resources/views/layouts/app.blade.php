@php
    use App\Enums\UserRole;
    $user = Auth::user();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VINATECH - Online Shop Website</title>
    <link rel="icon" href="./" type=""> <!-- Favicon -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="{{ asset('client/img/logonew.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('client/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body>
    <div id="loader"></div>
    <!-- Topbar Start -->
    <div class="topbar container-fluid">


        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-12">
                <marquee behavior="" direction="left" style="color:black;font-size: 14px;">
                    "182, Lê Duẩn, Thành Phố Vinh, Nghệ An - Nếu gặp vấn đề liên hệ - Phụ trách :
                    Xuân Đạt - liên hệ: 0394212962."
                </marquee>
            </div>
            <div class="col-lg-4">
                <a href="{{ route('home.index') }}" class="text-decoration-none">
                    <img src="{{ asset('client/img/logonew.png') }}" alt="logo" style="width: 100px;height: 60px;">
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="{{ route('shop.index') }}" method="GET">
                    <div class="input-group rounded-2">
                        <input type="text" class="form-control "
                            style="background-color:#eef2f6; border-top-left-radius: 10px;border-bottom-left-radius: 10px;"
                            name="search" value="{{ request()->input('search', '') }}" placeholder="Tìm kiếm sản phẩm">
                        <div class="input-group-append" style="cursor: pointer;">
                            <button class="input-group-text bg-muted text-primary"
                                style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;">
                                <i class="fa fa-search" style="color: black;"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6  d-flex">
                <div class="col-6">
                    <div>
                        <img src="{{ asset('client/img/Laptop.png') }}" alt="logo"
                            style="width: 100px;height: 60px;">
                    </div>
                </div>
                <div class="col-6 text-center text-lg-right pt-3">
                    <div class="d-inline-flex align-items-center">
                        @auth
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                    data-toggle="dropdown">Chào
                                    {{ Auth::user()->name ?? '' }}</button>
                                <div class="dropdown-menu dropdown-menu-right" style="z-index:10001; border-radius: 10px;">
                                    @if ($user && $user->role === UserRole::ADMIN)
                                        <a href="{{ route('admin.home.index') }}" class="dropdown-item">Trang quản trị</a>
                                    @endif
                                    <a href="{{ route('order.index') }}" class="dropdown-item">Quản lý đơn hàng</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item">Đăng xuất</a>
                                </div>
                            </div>
                        @endauth
                        @guest
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                    data-toggle="dropdown">Tài
                                    khoản</button>
                                <div class="dropdown-menu dropdown-menu-right" style="z-index:10001; border-radius: 10px;">
                                    <a href="{{ route('login') }}" class="dropdown-item">Đăng nhập</a>
                                    <a href="{{ route('register') }}" class="dropdown-item">Đăng ký</a>
                                </div>
                            </div>
                        @endguest
                    </div>
                    <div class="d-inline-flex align-items-center d-block d-lg-none">/-strong/-heart:>:o:-((:-h <a
                            href="" class="btn px-0 ml-2">
                            <i class="fas fa-heart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle"
                                style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-shopping-cart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle"
                                style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="navbar1 container-fluid bg-light ">
        <div class="row px-xl-5 border-top border-bottom border-muted border-1 d-flex align-items-center">
            <div class="col-lg-2 d-none d-lg-block d-flex align-items-center justify-content-between">
                <a class="btn d-flex align-items-center border border-muted border-1  bg-white "
                    data-toggle="collapse" href="#navbar-vertical"
                    style="height: 46px; width:80%; padding: 0 10px;border-radius: 10px">
                    <h6 class="text-dark  m-0"><i class="fa fa-bars mr-2"></i>Danh mục</h6>
                </a>

                <x-CategoryComponent />

            </div>
            <div class="col-lg-10">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <div class="collapse navbar-collapse justify-content-between bg-light text-black"
                        id="navbarCollapse">

                        <x-MenuComponent />

                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="tel:+1234567890" class="btn px-0 mr-5">
                                <i class="fas fa-phone-alt" style="color: black;"></i>
                            </a>
                            <a href="{{ route('cart.index') }}" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart" style="color: black;"></i>
                            </a>

                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Nav
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Liên hệ</h5>
                <p class="mb-4 text-justify">Tại đây, bạn sẽ tìm thấy máy tính và các sản phẩm công nghệ liên quan chất
                    lượng, đa dạng và đáng tin cậy. Hãy khám phá ngay!</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>182 Lê Duẩn, thành phố Vinh,
                    Nghệ An</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>datcx123@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>0394212962</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">PC Master</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Trang
                                chủ</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Cửa
                                hàng</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Giỏ
                                hàng</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bài
                                viết</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Liên
                                hệ</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Chăm sóc khách hàng</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Trung
                                Tâm Trợ Giúp</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hướng
                                Dẫn Mua Hàng</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Trả
                                Hàng & Hoàn Tiền</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Chính
                                Sách Bảo Hành</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Vận
                                Chuyển</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Tài khoản</h5>
                        <p>Đăng ký ngay để nhận được nhiều ưu đãi hấp dẫn!</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email của bạn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Đăng ký</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Theo dõi chúng tôi</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('client/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('client/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('client/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('client/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('client/js/main.js') }}"></script>
    <script>
        window.onscroll = function() {
            let topbar = document.querySelector('.topbar');
            let navbar = document.querySelector('.navbar');

            if (window.scrollY > topbar.offsetHeight) {
                topbar.classList.add('hidden');
            } else {
                topbar.classList.remove('hidden');
            }
        };
        window.addEventListener("load", () => {
            var loader = document.getElementById("loader");

            setTimeout(() => {
                loader.classList.add("loader--hidden");
            }, 500);

            loader.addEventListener("transitionend", () => {
                // document.body.removeChild(loader);
            });
        });
    </script>
    <style>
        .topbar {
            position: relative;
        }

        .navbar1 {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .hidden1 {
            display: none;
        }
    </style>
</body>

</html>
