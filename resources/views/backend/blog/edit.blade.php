@extends('admin.layout_admin.main')
@section('content')
<div class="col-sm-12 col-xl-10 col-md-10 mt-4 m-auto">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4 text-uppercase">{{ $title }}</h6>
        @include('admin.layout_admin.alert')
        <form action="{{ route('brand.update', $brand -> id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" onkeyup="ChangeToSlug()" id="slug" value="{{ $brand -> name }}">
                <label for="slug">Tên thương hiệu</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="slug" id="convert_slug" value="{{ $brand -> slug }}">
                <label for="convert_slug">Slug thương hiệu</label>
            </div>
            <div class="form-floating mb-3">
                <p>Ảnh thương hiệu</p>
                <input type="file" name="image" value="{{ old('image') }}">
                <img src="/uploads/brands/{{ $brand -> image }}" alt="{{ $brand -> name }}" width="50">
            </div>
            <div class="form-floating mb-3">
                <span>Mô tả thương hiệu</span>
                <textarea class="form-control" name="description" id="des">{{ $brand -> description}}</textarea>
            </div>
            <div class="mb-3">
                <label>Kích hoạt</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="1" type="radio" id="active1" name="active" checked=""
                        {{ $brand -> active == 1 ? 'checked' : '' }}
                        >
                        <label for="active1" class="custom-control-label">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                        {{ $brand -> active == 0 ? 'checked' : '' }}
                        >
                        <label for="no_active" class="custom-control-label">No</label>
                    </div>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Cập nhật thương hiệu</button>
            <a href="{{ route('brand.index') }}" class="btn btn-success"><< Quay lại</a>
        </form>
    </div>
</div>

@endsection
