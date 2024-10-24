@extends('admin.layout_admin.main')

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/backend/js/deleteItem.js') }}"></script>
    <script src="{{ asset('assets/backend/js/changeStatus.js') }}"></script>
@endsection

@section('content')
<div class="card m-4">
    <div class="card-header">
      <h5 class="card-title">Filter</h5>
      <div class="d-flex justify-content-between align-items-center row pt-4 gap-6 gap-md-0 g-md-6">
        <div class="col-md-4 product_status"><select id="ProductStatus" class="form-select text-capitalize"><option value="">Status</option><option value="Scheduled">Scheduled</option><option value="Publish">Publish</option><option value="Inactive">Inactive</option></select></div>
        <div class="col-md-4 product_blog"><select id="Productblog" class="form-select text-capitalize"><option value="">blog</option><option value="Household">Household</option><option value="Office">Office</option><option value="Electronics">Electronics</option><option value="Shoes">Shoes</option><option value="Accessories">Accessories</option><option value="Game">Game</option></select></div>
        <div class="col-md-4 product_stock"><select id="ProductStock" class="form-select text-capitalize"><option value=""> Stock </option><option value="Out_of_Stock">Out of Stock</option><option value="In_Stock">In Stock</option></select></div>
      </div>
    </div>
    <div class="col-12 mt-4">
        <div class="bg-light rounded h-100 p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-4">Danh sách bài viết</h6>
                <a href="{{ route('blog.create') }}" class="mb-4 btn btn-primary"> <i class="fa fa-plus"></i> Thêm mới bài viết</a>
            </div>
            <div class="table-responsive">
                @if($blogs -> isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" id="tenThuongHieu"></th>
                            <th scope="col"><label for="tenThuongHieu">Tên bài viết</label></th>
                            <th scope="col">Slug</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Kích hoạt</th>
                            <th scope="col">Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <th><input type="checkbox" name="" id="name-{{ $blog -> id }}" value="{{ $blog -> id }}"></th>
                                    <td><label for="name-{{ $blog -> id }}">{{ $blog -> name }}</label></td>
                                    <td>{{ $blog -> slug }}</td>
                                    <td><img src="/uploads/blogs/{{ $blog -> image }}" alt="{{ $blog -> name }}" width="50"></td>
                                    <td>{!! \App\Helper\Helper::active($blog -> active, $blog -> id, 'blog') !!}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('blog.edit', $blog -> id) }}" class="btn btn-primary btn-sm" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
                                        <form id="delete-form-{{ $blog->id }}" action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button title="Xóa" class="btn btn-danger btn-sm" type="button" onclick="confirmation({{ $blog->id }})">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="alert alert-success">
                            <p>Không có bài viết nào!</p>
                        </div>
                    @endif
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    {{ $blogs -> links() }}
</div>
@endsection
