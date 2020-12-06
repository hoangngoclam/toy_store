@extends('layout.index')
@section('css')
<link rel="stylesheet" href="./css/login.css">
@section('content')
    <div class="container">
        <div class="row  justify-content-center thongTin" >
            <div class="card col-md-5 my-md-3">
                <div class="card-header text-center ">
                    <h3>Thông tin giao hàng</h3>
                </div>
                <div class="card-body" >
                    <form action="./gio_hang/thong_tin/{{ Request::segment(3) }}" method="POST" id="form-dk" >
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
                            <h4>Tổng tiền: <span id="tong-gia">300.000đ</span> </h4>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="btn-dang-ky" class="btn btn-block float-right btn-warning">
                            Mua hàng
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    @endsection
    @section('js')
       <script>
           $(document).ready(function () {
               var tongGia = localStorage.getItem("tongGia");
               $('#tong-gia').text(tongGia);
           });
       </script> 
    @endsection