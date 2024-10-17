@extends('front.layout.main')
@section('content')
@include('front.layout.breadcrumb')
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="{{ $movie['poster_url'] }}">
                        <div class="ep">{{ $movie['episode_current'] }}</div>
                        <div class="comment"><i class="fa fa-clock-o"></i> {{ $movie['time'] }}</div>
                        <div class="view"><i class="fa fa-language"></i> {{ $movie['lang'] }}</div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3>{{ $movie['name'] }}</h3>
                            <span>Nguồn gốc: {{ $movie['origin_name'] }}</span>
                        </div>
                        {{-- <div class="anime__details__rating">
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                            <span>1.029 Votes</span>
                        </div> --}}
                        {{-- <p>{{ $movie['content'] }}</p> --}}
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li class="text-capitalize"><span>Kiểu:</span> {{ $movie['type'] }}</li>
                                        <li><span>Đạo diễn:</span> {{ implode(', ', $movie['director']) }}</li>
                                        <li><span>Ngày phát sóng:</span> {{ \Carbon\Carbon::parse($movie['created']['time'])->format('d/m/Y H:i:s') }}</li>
                                        <li><span>Trạng thái:</span> {{ $movie['status'] == 'completed' ? 'Hoàn thành' : 'Đang cập nhật' }}</li>
                                        <li><span>Thể loại:</span> {{ implode(', ', collect($movie['category'])->pluck('name')->toArray()) }}</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Đánh giá:</span> {{ $movie['tmdb']['vote_average'] }} / {{ $movie['tmdb']['vote_count'] }} lần</li>
                                        <li><span>Thời lượng:</span> {{ $movie['time'] }}</li>
                                        <li><span>Chất lượng:</span> {{ $movie['quality'] }}</li>
                                        <li><span>Năm sản xuất:</span> {{ $movie['year'] }}</li>
                                        <li><span>Quốc gia:</span> {{ $movie['country'][0]['name'] }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @php
                            $firstEpisode = collect($episodes)->flatMap(function ($server) {
                                return $server['server_data'];
                            })->first();
                        @endphp
                        <div class="anime__details__btn">
                            <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Theo dõi</a>
                            @if ($firstEpisode)
                                <a href="{{ route('watching.film', ['slug' => $movie['slug'], 'episodeSlug' => $firstEpisode['slug']]) }}" class="watch-btn">
                                    <span>Xem ngay</span><i class="fa fa-angle-right"></i>
                                </a>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Nội dung phim</h5>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__details__text">
                                <p>{{ $movie['content'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="anime__details__sidebar">
                        <div class="section-title">
                            <h5>Diễn viên</h5>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__text">
                                <p>{{ implode(', ', $movie['actor']) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
