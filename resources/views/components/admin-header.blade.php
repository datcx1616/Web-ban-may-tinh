<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <ul class="navbar-nav ml-auto navbar-list align-items-center">
            <li class="nav-item nav-icon dropdown caption-content">
                <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{-- <img src="{{ asset('') }}admin/assets/images/user/1.jpg" class="img-fluid rounded-circle"
                                    alt="user"> --}}
                    <div class="caption ml-3 mt-4">
                        <h6 class="mb-0 line-height" id="userName" style="cursor: pointer;">
                            {{ Auth::user() ? Auth::user()->name : '' }}
                        </h6>
                        <div id="logoutDropdown" class="dropdown-menu" style="display: none;">
                            <a href="{{ route('logout') }}" class="dropdown-item">Đăng xuất</a>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const userName = document.getElementById("userName");
        const logoutDropdown = document.getElementById("logoutDropdown");

        userName.addEventListener("click", function() {
            const isHidden = logoutDropdown.style.display === "none";
            logoutDropdown.style.display = isHidden ? "block" : "none";
        });

        // Đóng dropdown nếu nhấn bên ngoài
        document.addEventListener("click", function(event) {
            if (!userName.contains(event.target) && !logoutDropdown.contains(event.target)) {
                logoutDropdown.style.display = "none";
            }
        });
    });
</script>
