@extends('front.layout.main')

@section('content')
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Trang chủ</a>
                    <a href="{{ route('detail.film', $movie['slug']) }}"> {{ $titleBread }}</a>
                    <span>{{ $episode['name'] }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="anime-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__video__player">
                    <iframe src="{{ $episode['link_embed'] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen width="100%" height="500px"></iframe>
                    {{-- <video id="player" playsinline controls data-poster="{{ $movie['poster_url'] }}">
                    </video> --}}
                </div>
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>Danh sách tập</h5>
                    </div>
                    @foreach ($episodes as $server)
                        @foreach ($server['server_data'] as $tap)
                            <a href="{{ route('watching.film', ['slug' => $movie['slug'], 'episodeSlug' => $tap['slug']]) }}" class="{{ $tap['slug'] == $episode['slug'] ? 'active' : '' }}">
                                {{ $tap['name'] }}
                            </a>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Đánh giá</h5>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__fb">
                            <div class="fb-share-button" data-href="{{ \URL::current() }}" data-layout="" data-size="">
                                <a target="_blank" href="{{ \URL::current() }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a>
                            </div>
                            <div class="fb-comments" data-href="{{ \URL::current() }}" data-width="100%" data-numposts="10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
