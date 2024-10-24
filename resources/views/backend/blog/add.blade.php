@extends('admin.layout_admin.main')

@section('content')
<div class="col-sm-12 col-xl-10 col-md-10 mt-4 m-auto">
    <div class="bg-light rounded h-100 p-4">
        <h5 class="mb-4 text-uppercase">Thêm mới thương hiệu sản phẩm</h5>
        @include('admin.layout_admin.alert')
        <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" onkeyup="ChangeToSlug()" id="slug" value="{{ old('name') }}" >
                <label for="slug">Tên thương hiệu</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="slug" id="convert_slug" value="{{ old('slug') }}">
                <label for="convert_slug">Slug thương hiệu</label>
            </div>
            <div class="form-floating mb-3">
                <p>Ảnh thương hiệu</p>
                <input type="file" name="image" value="{{ old('image') }}" required>
            </div>
            <div class="form-floating mb-3">
                <span>Mô tả thương hiệu</span>
                <textarea class="form-control" name="description" id="des">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label>Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="1" type="radio" id="active1" name="active" checked="">
                        <label for="active1" class="custom-control-label">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                        <label for="no_active" class="custom-control-label">No</label>
                    </div>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Thêm thương hiệu</button>
            <a href="{{ route('brand.index') }}" class="btn btn-success"><< Quay lại</a>
        </form>
    </div>
</div>

@endsection
