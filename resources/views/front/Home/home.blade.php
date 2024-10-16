@extends('front.layout.main')

@section('content')
 <!-- Hero Section Begin -->
 {{-- <section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="/assets/front/img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="/assets/front/img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="/assets/front/img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Hero Section End -->

<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Phim lẻ đề cử</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="{{ route('category', ['slug' => $phimLe['data']['type_list']]) }}" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($phimLe['data']['items'] as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="https://phimimg.com/{{ $item['poster_url'] }}">
                                        <div class="ep">{{ $item['episode_current'] }}</div>
                                        <div class="comment"><i class="fa fa-clock-o"></i> {{ $item['time'] }}</div>
                                        <div class="view"><i class="fa fa-language"></i> {{ $item['lang'] }}</div>
                                    </div>
                                    <div class="product__item__text">
                                        {{-- <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul> --}}
                                        <h5><a href="{{ route('detail.film', $item['slug']) }}">{{ $item['name'] }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="popular__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Phim bộ đề cử</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="{{ route('category', $phimBo['data']['type_list']) }}" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($phimBo['data']['items'] as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ config('api_url.url') . $item['poster_url'] }}">
                                        <div class="ep">{{ $item['episode_current'] }}</div>
                                        <div class="comment"><i class="fa fa-clock-o"></i> {{ $item['time'] }}</div>
                                        <div class="view"><i class="fa fa-language"></i> {{ $item['lang'] }}</div>
                                    </div>
                                    <div class="product__item__text">
                                        {{-- <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul> --}}
                                        <h5><a href="{{ route('detail.film', $item['slug']) }}">{{ $item['name'] }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="recent__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Phim hoạt hình đề cử</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="{{ route('category', $hoatHinh['data']['type_list']) }}" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($hoatHinh['data']['items'] as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ config('api_url.url') . $item['poster_url'] }}">
                                    <div class="ep">{{ $item['episode_current'] }}</div>
                                    <div class="comment"><i class="fa fa-clock-o"></i> {{ $item['time'] }}</div>
                                    <div class="view"><i class="fa fa-language"></i> {{ $item['lang'] }}</div>
                                </div>
                                <div class="product__item__text">
                                    {{-- <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul> --}}
                                    <h5><a href="{{ route('detail.film', $item['slug']) }}">{{ $item['name'] }}</a></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="live__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>TV Shows</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="{{ route('category', $tvShows['data']['type_list']) }}" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($tvShows['data']['items'] as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ config('api_url.url') . $item['poster_url'] }}">
                                    <div class="ep">{{ $item['episode_current'] }}</div>
                                    <div class="comment"><i class="fa fa-clock-o"></i> {{ $item['time'] }}</div>
                                    <div class="view"><i class="fa fa-language"></i> {{ $item['lang'] }}</div>
                                </div>
                                <div class="product__item__text">
                                    {{-- <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul> --}}
                                    <h5><a href="{{ route('detail.film', $item['slug']) }}">{{ $item['name'] }}</a></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            @include('front.layout.sidebar')
        </div>
    </div>
</section>
<!-- Product Section End -->
@endsection
