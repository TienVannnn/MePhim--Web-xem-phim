@extends('backend.layout_admin.main')

@section('content')
<div class="col-sm-12 col-xl-10 col-md-10 mt-4 m-auto">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4 text-uppercase">Thêm mới nhân viên</h6>
        @include('backend.layout_admin.alert')
        <form action="{{ route('manager.store') }}" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nhập tên nhân viên...">
                <label for="name">Tên nhân viên</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="pass" class="form-control" name="password" value="{{ old('password') }}">
                <label for="pass">Mật khẩu</label>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Thêm nhân viên</button>
            <a href="{{ route('manager.index') }}" class="btn btn-success"><< Quay lại</a>
        </form>
    </div>
</div>

@endsection
