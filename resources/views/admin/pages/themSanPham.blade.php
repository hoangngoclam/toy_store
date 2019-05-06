@extends('admin.index')
@section('content')
<form method="post" action="./admin/them_san_pham">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name-sp">Tên sản phẩm</label>
            <input id="name-sp" name="name_sp" class="form-control" type="text">
        </div>
        <div class="form-group col-md-6">
            <label for="name-sp">Kiểu sản phẩm</label>
            <select id="inputState" name="kieu_sp" class="form-control">
                <option selected value="1">Kieu 1</option>
                <option  value="2">Kieu 2</option>
                <option  value="3">Kieu 3</option>
                <option  value="4">Kieu 4</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name-sp">Nhà sản xuất</label>
            <select id="inputState" name="nha_cc" class="form-control">
                <option selected value="1">Kieu 1</option>
                <option  value="2">Kieu 2</option>
                <option  value="3">Kieu 3</option>
                <option  value="4">Kieu 4</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="name-sp">Chất liệu chính</label>
            <input id="name-sp"name="chat_lieu_chinh" class="form-control" type="text">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name-sp">Số lượng</label>
            <input id="name-sp"name="so_luong" class="form-control" type="text">
        </div>
        <div class="form-group col-md-6">
            <label for="name-sp">Giá bán</label>
            <input id="name-sp"name="gia_ban" class="form-control" type="text">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name-sp">Giá nhập</label>
            <input id="name-sp"name="gia_nhap" class="form-control" type="text">
        </div>
        <div class="form-group col-md-6">
            <label for="name-sp">Số lần xem</label>
            <input id="name-sp"name="so_lan_xem" class="form-control" type="text">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="name-sp">Hình ảnh</label>
            <input id="name-sp"name="hinh_anh" class="form-control" type="text">
        </div>
    </div>
</form>
@endsection