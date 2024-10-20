<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="/"><img src="{{ asset('assets/front/img/logo3.png') }}" alt="img"></a>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li>
                            <a href="{{ route('category', $phimLe['data']['type_list']) }}" title="Phim lẻ">
                               Phim lẻ
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category', $phimBo['data']['type_list']) }}" title="Phim bộ">
                               Phim bộ
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category', $hoatHinh['data']['type_list']) }}" title="Phim hoạt hình">
                               Phim hoạt hình
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category', $tvShows['data']['type_list']) }}" title="TV Shows">
                               TV Shows
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__nav text-white mt-3">
                    <p>
                        MêPhim - Trang web xem phim trực tuyến miễn phí chất lượng cao với giao diện trực quan, tốc độ tải trang nhanh, cùng kho phim với hơn 10.000+ phim mới, phim hay, luôn cập nhật phim nhanh, hứa hẹn sẽ đem lại phút giây thư giãn cho bạn.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 text-white">
                <p>
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="mailto:tienlevan78py@gmail.com">MêPhim</a>. All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  </p>

              </div>
          </div>
      </div>
  </footer>
