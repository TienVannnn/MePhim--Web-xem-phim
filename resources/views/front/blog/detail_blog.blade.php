@extends('front.layout.main')
@section('content')


<section class="blog-details bg-white">
    <div class="breadcrumb-option" style="color: black">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/" class="text-black"><i class="fa fa-home"></i> Trang chủ</a>
                    <a href="{{ route('front.blogs') }}" class="text-black"> Bài viết</a>
                    <span class="text-black">{{ $titleBread }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="blog__details__title ">
                    <h2 class="text-black">{{ $blog -> name }}</h2>
                    <h6 class="text-black">{{ $blog -> author -> name }} <span> - {{ $blog -> created_at }}</span></h6>
                    <div class="blog__details__social">
                        <a href="#" class="facebook"><i class="fa fa-facebook-square"></i> Facebook</a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i> Linkedin</a>
                        <a href="#" class="twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="blog__details__content">
                    <div class="blog__details__text">
                        <p>{!! $blog -> content !!}</p>
                    </div>
                    <div class="blog__details__btns">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog__details__btns__item">
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
        </div>
    </section>
@endsection
