@extends('backend.layout_admin.main')

@section('content')
<div class="col-sm-12 col-xl-10 col-md-10 mt-4 m-auto">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4 text-uppercase">{{ $title }}</h6>
        @include('backend.layout_admin.alert')
        <form action="{{ route('manager.update', $manager -> id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" value="{{ $manager -> name }}">
                <label for="name">Tên nhân viên</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="phone" name="phone" value="{{ $manager -> phone }}">
                <label for="phone">Số điện thoại</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" id="email" class="form-control" name="email" value="{{ $manager -> email }}">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="pass" class="form-control" name="password">
                <label for="pass">Mật khẩu cần đổi</label>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Cập nhật nhân viên</button>
            <a href="{{ route('manager.index') }}" class="btn btn-success"><< Quay lại</a>
        </form>
    </div>
</div>

@endsection
