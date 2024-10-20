@extends('front.layout.main')

@section('content')

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
                                <a href="{{ route('category', ['slug' => $phimLe['data']['type_list']]) }}" class="primary-btn">Xem tất cả <span class="arrow_right"></span></a>
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
                                <a href="{{ route('category', $phimBo['data']['type_list']) }}" class="primary-btn">Xem tất cả <span class="arrow_right"></span></a>
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
                                <a href="{{ route('category', $hoatHinh['data']['type_list']) }}" class="primary-btn">Xem tất cả <span class="arrow_right"></span></a>
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
                                <a href="{{ route('category', $tvShows['data']['type_list']) }}" class="primary-btn">Xem tất cả <span class="arrow_right"></span></a>
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
@endsection
