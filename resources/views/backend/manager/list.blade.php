@extends('backend.layout_admin.main')

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
        <div class="col-md-4 product_manager"><select id="Productmanager" class="form-select text-capitalize"><option value="">manager</option><option value="Household">Household</option><option value="Office">Office</option><option value="Electronics">Electronics</option><option value="Shoes">Shoes</option><option value="Accessories">Accessories</option><option value="Game">Game</option></select></div>
        <div class="col-md-4 product_stock"><select id="ProductStock" class="form-select text-capitalize"><option value=""> Stock </option><option value="Out_of_Stock">Out of Stock</option><option value="In_Stock">In Stock</option></select></div>
      </div>
    </div>
    <div class="col-12 mt-4">
        <div class="bg-light rounded h-100 p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-4">Danh sách nhân viên</h6>
                <a href="{{ route('manager.create') }}" class="mb-4 btn btn-primary"> <i class="fa fa-plus"></i> Thêm mới nhân viên</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox"></th>
                            <th scope="col">Tên nhân viên</th>
                            <th scope="col">Điện thoại</th>
                            <th scope="col">Email</th>
                            <th scope="col">Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($managers)
                            @foreach ($managers as $manager)
                                <tr>
                                    <th><input type="checkbox" name="" id="" value="{{ $manager -> id }}"></th>
                                    <td>{{ $manager -> name }}</td>
                                    <td>{{ $manager -> phone }}</td>
                                    <td>{!! $manager -> email !!}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('manager.edit', $manager -> id) }}" class="btn btn-primary btn-sm" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
                                        <form id="delete-form-{{ $manager->id }}" action="{{ route('manager.destroy', $manager->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button title="Xóa" class="btn btn-danger btn-sm" type="button" onclick="confirmation({{ $manager->id }})">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        <div class="alert alert-success auto-hide">
                            <p>Không có nhân viên nào!</p>
                        </div>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    {{ $managers -> links() }}
</div>
@endsection
