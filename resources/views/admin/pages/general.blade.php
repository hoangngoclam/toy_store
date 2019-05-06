@extends('admin.index')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3 pointer">
            <a class="card bg-primary item-general" href="admin/sanpham">
                <div class="card-body">
                    <h5 class="card-title">Sản phẩm</h5>
                    <p class="card-text">Quản lý sản phẩm</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 pointer">
            <a class="card bg-success item-general"  href="admin/hoadon">
                <div class="card-body">
                    <h5 class="card-title">Hóa đơn</h5>
                    <p class="card-text">Quản lý hóa đơn</p>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection