<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">Admin</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/assets/backend/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::guard('manager') -> user() -> name ?? 'Username'}}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard
            </a>
            {{-- Category --}}
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('category.*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Danh mục</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('category.create') }}" class="dropdown-item {{ request()->routeIs('category.create') ? 'active' : '' }}"><i class="fa fa-plus me-2"></i> Thêm mới danh mục</a>
                    <a href="{{ route('category.index') }}" class="dropdown-item {{ request()->routeIs('category.index') ? 'active' : '' }}"><i class="fa fa-list me-2"></i> Danh sách danh mục</a>
                </div>
            </div> --}}
            {{-- Brand --}}
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('brand.*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Thương hiệu</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('brand.create') }}" class="dropdown-item {{ request()->routeIs('brand.create') ? 'active' : '' }}"><i class="fa fa-plus me-2"></i> Thêm mới thương hiệu</a>
                    <a href="{{ route('brand.index') }}" class="dropdown-item {{ request()->routeIs('brand.index') ? 'active' : '' }}"><i class="fa fa-list me-2"></i> Danh sách thương hiệu</a>
                </div>
            </div> --}}
            {{-- Collection --}}
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('collection.*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Bộ sưu tập</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('collection.create') }}" class="dropdown-item {{ request()->routeIs('collection.create') ? 'active' : '' }}"><i class="fa fa-plus me-2"></i> Thêm mới bộ sưu tập</a>
                    <a href="{{ route('collection.index') }}" class="dropdown-item {{ request()->routeIs('collection.index') ? 'active' : '' }}"><i class="fa fa-list me-2"></i> Danh sách bộ sưu tập</a>
                </div>
            </div> --}}
            <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
