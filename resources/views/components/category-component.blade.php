<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
    id="navbar-vertical" style="width: calc(80% - 30px); z-index: 999;">
    <div class="navbar-nav w-100">
        @foreach ($listCategory as $itemCategory)
            <a href="{{ route('shop.index', ['category' => $itemCategory->id]) }}" class="nav-item nav-link">
                {{ $itemCategory->name }}
            </a>
        @endforeach
    </div>

    <style>
        .new {
            font-size: 16px;
            color: #000;
        }

        .navbar-nav a {
            display: inline-block;
            position: relative;
            color: #000;
            font-size: 18px;
            cursor: pointer;
            transition: 0.4s all ease;
        }

        .navbar-nav a:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 1px;
            left: 0;
            background-color: #000;
            transform-origin: bottom right;
            transition: transform 0.5s ease-out;
        }

        .navbar-nav a:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
</nav>
