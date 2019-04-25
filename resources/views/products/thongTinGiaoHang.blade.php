@extends('layout.index')
@section('css')
<link rel="stylesheet" href="./css/login.css">
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-center thongTin" >
        <div class="card">
            <div class="card-header text-center ">
                <h3>Thông tin giao hàng</h3>
            </div>
            <div class="card-body" 
                <form action="./thong_tin" method="POST" id="form-dk" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="usr">Tên người nhận</label>
                        <input type="text" class="form-control" id="usr" name="name">
                    </div>
                    <div class="form-group">
                        <label for="usr">Số điện thoại</label>
                        <input type="text" class="form-control" id="usr"name="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="usr">Địa chỉ giao hàng</label>
                        <input type="text" class="form-control" id="usr"name="address">
                    </div>
                    
                    <div class="form-group">
                        <label for="comment">Yêu cầu</label>
                        <textarea class="form-control" rows="3" id="comment" name="request"></textarea>
                    </div>
                    <div class="form-group">
                        <h4>Tổng tiền: <span>300.000đ</span> </h4>
                    </div>
                    <div class="form-group">
                        <button type="button" id="btn-dang-ky" class="btn btn-block float-right btn-warning">
                           Mua hàng
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection