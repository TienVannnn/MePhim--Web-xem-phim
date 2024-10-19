<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="/">
                        <img src="/assets/front/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="./categories.html">Categories</a></li>
                                    <li><a href="./anime-details.html">Anime Details</a></li>
                                    <li><a href="./anime-watching.html">Anime Watching</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                    <li><a href="./signup.html">Sign Up</a></li>
                                    <li><a href="./login.html">Login</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    {{-- <a href="#" class="search-switch"><span class="icon_search"></span></a> --}}
                    <a href="./login.html"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>

    <div class="col-lg-4 col-6 search_film col-sm-12">
        <form action="{{ route('search_all_film') }}" method="GET" autocomplete="off">
            <div class="input-group">
                <input type="text"  class="form-control search-box" name="keyword" placeholder="Nhập tên phim để tìm kiếm..." >
                <div class="input-group-append">
                    <button type="submit" class="input-group-text text-primary bg-transparent" id="search-button">
                        <i class="fa fa-search"></i>
                        <span class="loading-spinner" style="display:none;"></span>
                    </button>
                </div>
            </div>
        </form>

    </div>
</header>

