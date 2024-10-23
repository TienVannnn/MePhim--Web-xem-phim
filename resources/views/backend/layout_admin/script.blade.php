
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/backend/lib/chart/chart.min.js"></script>
    <script src="/assets/backend/lib/easing/easing.min.js"></script>
    <script src="/assets/backend/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/backend/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/backend/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/assets/backend/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/assets/backend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Template Javascript -->
    <script src="/assets/backend/js/main.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script src="/assets/backend/js/ajaxSetup.js"></script>
    <script src="/assets/backend/js/convertSlugByName.js"></script>
    <script src="/assets/backend/js/froala.js"></script>
    {!! Toastr::message() !!}
    <script>
        // login admin
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}", "Thành công");
        @endif
        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}", "Thất bại");
        @endif
    </script>
