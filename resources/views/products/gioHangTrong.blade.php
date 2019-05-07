@section('css')
    <link rel="stylesheet" href="./css/gioHang.css">
@endsection
@section('content')
    <div class="container-fluid" id="pay">
        <div class="row justify-content-center gioHangg">
            <div class="alert alert-primary ">
                <strong>Giỏ hàng không có sản phẩm,</strong> <a href="#" class="alert-link">Vui lòng chọn sản phẩm !</a>.
            </div>
            <div class="justify-content-center">
                <div class="hinhAnhh" ></div>
                <p>Không có sản phẩm nào trong giỏ hàng của bạn!</p>
               <a href="#"><button type="button" class="btn btn-primary btn_tiepTucMuaSam">Tiếp tục mua sắm</button></a> 
            </div>
        </div>
    </div>
@endsection