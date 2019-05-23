@extends('admin.index')
@section('content')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12">
            <table id="dataTable"  class="table table-striped" style="width:100%">
                <thead >
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Tên người nhận</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Nơi nhận</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hoadon as $item)
                    <tr id={{$item->id}}>
                        <th scope="row">{{ $item->id}}</th>
                        <td>{{ $item->trang_thai}}</td>
                        <td>{{ $item->tong_tien}}</td>
                        <td>{{ $item->ten_nguoi_nhan}}</td>
                        <td>{{ $item->so_dien_thoai_nhan}}</td>
                        <td>{{ $item->noi_nhan}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Button group">
                                <button class="btn btn-primary btn-xem-sp" data-id="{{ $item->id  }}"
                                    data-toggle="modal" data-target="#xem-sp">Xem</button>
                                <button class="btn btn-warning btn-sua-sp" data-id="{{ $item->id  }}"
                                    data-toggle="modal" data-target="#sua-sp">Sửa</button>
                                {{-- <button class="btn btn-danger btn-xoa-sp" data-id="{{ $item->id  }}">Xóa</button> --}}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection