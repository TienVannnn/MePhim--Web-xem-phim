@extends('front.layout.main')
@section('content')
    @include('front.layout.breadcrumb')
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>{{ $title }}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="product__page__filter">
                                        <p>Order by:</p>
                                        <select>
                                            <option value="">A-Z</option>
                                            <option value="">1-10</option>
                                            <option value="">10-50</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if (!empty($data['data']['items']))
                                @foreach ($data['data']['items'] as $item)
                                    <div class="col-lg-3 col-md-6 col-sm-6">
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
                            @else

                                <div class="anime__review__item">
                                    <div class="anime__review__item__text">
                                        <h4 class="text-white">Không có film nào trùng khớp với từ khóa tìm kiếm!</h4>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="pagination d-flex justify-content-center">
                        {{ $pagination->links() }}
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
