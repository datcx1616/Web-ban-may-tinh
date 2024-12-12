<div class="iq-sidebar sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="{{ route('home.index') }}" class="text-decoration-none">
            <img src="{{ asset('client/img/aa4.png') }}" alt="logo"
                style="width: 200px; height: 110px; object-fit: contain; image-rendering: pixelated;">
        </a>

        {{-- <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div> --}}
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{ request()->fullUrl() == route('admin.home.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.home.index') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="ml-2">Trang tổng quan</span>
                    </a>
                </li>
                <li class="{{ request()->fullUrl() == route('admin.product.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.product.index') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span class="ml-2">Quản lý sản phẩm</span>
                    </a>
                </li>
                <li class="{{ request()->fullUrl() == route('admin.order.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.order.index') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"></path>
                            <path d="M12 10v4"></path>
                            <path d="M9 12h6"></path>
                        </svg>
                        <span class="ml-2">Quản lý đơn hàng</span>
                    </a>
                </li>
                <li class="{{ request()->fullUrl() == route('admin.user.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.user.index') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ml-2">Quản lý người dùng</span>
                    </a>
                </li>
                <li class="{{ request()->fullUrl() == route('admin.contact.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.contact.index') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 4h18a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"></path>
                            <path d="M8 6h8v2H8z"></path>
                            <path d="M8 10h8v2H8z"></path>
                            <path d="M8 14h8v2H8z"></path>
                        </svg>
                        <span class="ml-2">Quản lý liên hệ</span>
                    </a>
                </li>
                <li class="{{ request()->fullUrl() == route('admin.post.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.index') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12H3"></path>
                            <path d="M21 6H3"></path>
                            <path d="M21 18H3"></path>
                        </svg>
                        <span class="ml-2">Quản lý bài viết</span>
                    </a>
                </li>
                <li class="{{ request()->fullUrl() == route('admin.config.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.config.index') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 4v16"></path>
                            <path d="M4 12h16"></path>
                        </svg>
                        <span class="ml-2">Quản lý giao diện</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="pt-5 pb-2"></div>
    </div>

</div>
