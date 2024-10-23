
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.layout_admin.head')
    </head>
@yield('css')
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        @include('backend.layout_admin.loading')
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        @include('backend.layout_admin.sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('backend.layout_admin.navbar')
            <!-- Navbar End -->

            {{-- start content --}}
            @yield('content')
            {{-- end content --}}

            <!-- Footer Start -->
            @include('backend.layout_admin.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('backend.layout_admin.hideAlert')
    @include('backend.layout_admin.script')
    @yield('js')
</body>
</html>
