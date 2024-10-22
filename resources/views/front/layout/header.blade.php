<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lgg-2">
                <div class="header__logo">
                    <a href="/">
                        <img src="/assets/front/img/logo3.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/" title="Trang chủ">Trang chủ</a></li>
                            {{-- <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="./categories.html">Categories</a></li>
                                    <li><a href="./anime-details.html">Anime Details</a></li>
                                    <li><a href="./anime-watching.html">Anime Watching</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                    <li><a href="./signup.html">Sign Up</a></li>
                                    <li><a href="./login.html">Login</a></li>
                                </ul>
                            </li> --}}
                            <li class="{{ request()->is('danh-sach-phim-le') ? 'active' : '' }}">
                                <a href="{{ route('category', $phimLe['data']['type_list']) }}" title="Phim lẻ">
                                   Phim lẻ
                                </a>
                            </li>
                            <li class="{{ request()->is('danh-sach-phim-bo') ? 'active' : '' }}">
                                <a href="{{ route('category', $phimBo['data']['type_list']) }}" title="Phim bộ">
                                   Phim bộ
                                </a>
                            </li>
                            <li class="{{ request()->is('danh-sach-hoat-hinh') ? 'active' : '' }}">
                                <a href="{{ route('category', $hoatHinh['data']['type_list']) }}" title="Phim hoạt hình">
                                   Phim hoạt hình
                                </a>
                            </li>
                            <li class="{{ request()->is('danh-sach-tv-shows') ? 'active' : '' }}">
                                <a href="{{ route('category', $tvShows['data']['type_list']) }}" title="TV Shows">
                                   TV Shows
                                </a>
                            </li>

                            {{-- <li><a href="#">Contacts</a></li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="" title="Bài viết"><i class="fa fa-comment"></i></a>
                    @if(Auth::user())
                        <a href="{{ route('front.user.profile') }}" title="Hồ sơ"><span class="icon_profile"></span></a>
                    @else
                        <a href="{{ route('front.login') }}">Đăng nhập</a>
                    @endif
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>

    <div class="col-lg-4 col-6 search_film col-sm-12">
        <form action="{{ route('search_all_film') }}" method="GET" autocomplete="off">
            <div class="input-group">
                <input type="text" required  class="form-control search-box" name="keyword" placeholder="Nhập tên phim để tìm kiếm..." >
                <div class="input-group-append">
                    <button type="submit" title="Tìm kiếm" class="input-group-text text-primary bg-transparent" id="search-button">
                        <i class="fa fa-search"></i>
                        <span class="loading-spinner" style="display:none;"></span>
                    </button>
                </div>
            </div>
        </form>

    </div>
</header>

