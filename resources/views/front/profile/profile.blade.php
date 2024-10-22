@extends('front.layout.main')

@section('content')
    <div class="alert alert-success">
        <p>Hello {{ Auth::user() -> name }}</p>
        <a href="{{ route('front.logout') }}">Đăng xuất</a>
    </div>
@endsection
