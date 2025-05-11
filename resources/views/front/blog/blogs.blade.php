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
                            </div>
                        </div>
                        <div class="row">
                            @if (!empty($blogs))
                                @foreach ($blogs as $item)
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="/uploads/blogs/{{  $item -> image }}">
                                                <div class="ep">{{ $item -> created_at}}</div>
                                                {{-- <div class="comment"><i class="fa fa-clock-o"></i> {{ $item['time'] }}</div> --}}
                                            </div>
                                            <div class="product__item__text">
                                                <h5><a href="{{ route('front.blog', $item -> slug) }}">{{ $item['name'] }}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else

                                <div class="anime__review__item">
                                    <div class="anime__review__item__text">
                                        <h4 class="text-white">Không có bài viết nào!</h4>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="pagination d-flex justify-content-center">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
