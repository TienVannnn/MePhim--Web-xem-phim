@extends('front.layout.main')
@section('content')
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Đăng nhập</h3>
                    <form action="{{ route('front.handleLogin') }}" method="POST">
                        @csrf
                        <div class="input__item">
                            <input type="email" name="email" placeholder="Email address">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="password" name="password" placeholder="Password">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Đăng nhập ngay</button>
                    </form>
                    <a href="#" class="forget_pass">Quên mật khẩu?</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Bạn chưa có tài khoản?</h3>
                    <a href="#" class="btn btn-primary">Đăng ký ngay</a>
                </div>
            </div>
        </div>
        <div class="login__social">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <span>hoặc</span>
                        <ul>
                            {{-- <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Đăng nhập với
                            Facebook</a></li> --}}
                            <li><a href="{{ route('auth.google') }}" class="google"><i class="fa fa-google"></i> Đăng nhập với Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
