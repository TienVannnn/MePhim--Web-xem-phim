
<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('front.layout.head')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('front.layout.header')
    <!-- Header End -->

    {{-- content --}}
    @yield('content')
    {{-- end content --}}

<!-- Footer Section Begin -->
    @include('front.layout.footer')
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  @include('front.layout.search')
<!-- Search model end -->

<!-- Js Plugins -->
@include('front.layout.script')

</body>

</html>
