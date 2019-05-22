@extends('layout.index')
@section('css')
<link rel="stylesheet" href="./css/trangChu.css">

@endsection

@section('content')
<!-- 
{{ $danhmuc[0]->ten }}
<ul>
    @foreach ($danhmuc[0]->loaisp as $loaisp)
    <li>{{ $loaisp->ten }}</li>
    <ul>
        @foreach ($loaisp->kieusp as $item)
            <li>{{ $item->ten }}</li>
        @endforeach
    </ul>
    @endforeach
</ul> -->

<div class="container-fluid">
    <div class="row row_margin">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xm-8 px-1">
                <div id="demo" class="carousel slide carousel_width_hight" data-ride="carousel">
                        <ul class="carousel-indicators ">
                          <li data-target="#demo" data-slide-to="0" class="active"></li>
                          <li data-target="#demo" data-slide-to="1"></li>
                          <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="./img/5.PNG" alt="" width="100%">
                            <div class="carousel-caption">
                              {{-- <h3>Máy bay trực thăng</h3>
                              <p>Siêu khuyến mãi, siêu ưu đãi</p> --}}
                            </div>   
                          </div>
                          <div class="carousel-item">
                            <img src="./img/6.PNG" alt="" width="100%">
                            <div class="carousel-caption">
                              {{-- <h3>Moto Ducati</h3>
                              <p>Giảm 30%, giá khuyến mãi chỉ có ở ToyStore</p> --}}
                            </div>   
                          </div>
                          <div class="carousel-item">
                            <img src="./img/7.PNG" alt="" width="100%">
                            <div class="carousel-caption">
                              {{-- <h3>Xe điều khiển</h3>
                              <p>Mua sản phẩm, quà tặng siêu hấp dẫn</p> --}}
                            </div>   
                          </div>
                        </div>

                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </a>
                      </div>
                      
                    </div>
        
        
                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xm-4 px-1">
                        <div class="image_hot">
                                <img src="./img/15.PNG" alt="" class="image_img" >
                        </div>
                        
                    </div>
    </div>
    <div class="row row_margin row_border">

        @foreach ($sanpham as $item)
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xm-2 col_x ">
            <div class="card card_x" >
                <a href="./chi_tiet_sp/{{ $item->id }}">
                    <div class="w-100 card-img-top card_img_top" style="background-image: url('{{$item->hinh_anh}}');">
                    </div>
                </a>
                <div class="card-body">
                    <p class="card-title mb-0">{{$item->ten}}</p>
                    <h6 class="card_body_h6">{{ number_format($item->gia_ban ,0, ',', '.')}}₫</h6>
                    <span class="card_body_span1">{{number_format($item->gia_nhap ,0, ',', '.')}}₫</span>
                    <span class="card_body_span2">-44%</span>
                    <a href="./gio_hang/them_sp/{{ $item->id }}" class="btn btn-outline-primary btn-sm card_body_a">Thêm vào <i
                            class="fas fa-cart-plus mr-2"></i></a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-12">
            <div class="float-right">
                {{ $sanpham->links() }}
            </div>
        </div>
    </div>

    <div class="row row_margin row_border pb-2">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xm-12">
                    <div style="text-align: center; margin: 10px; font-size:35px">Cam kết bán hàng</div>
                    <hr style="margin:10px">
        </div>
       
        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4 col-xm-4 col_y w-100 ">
                <div class="col_left">
                    <img src="./img/w.png" alt="" style="width:90%">

                </div>   
                <div class="col_right">
                    <p><span>Đồ chơi có mức giá tốt nhất thị trường</span></p>
                </div>  
        </div>
        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4 col-xm-4 col_y">
                <div class="col_left">
                        <img src="./img/m.png" alt="" style="width:90%">
                    </div>   
                <div class="col_right">
                        <p><span>Tư vấn bán hàng chi tiết</span></p>
                </div>        
        </div>
        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4 col-xm-4 col_y">
                <div class="col_left">
                    <img src="./img/r.png" alt="" style="width:90%">
                </div>   
                <div class="col_right">
                    <p><span>Bảo đảm đúng 100% chất liệu đồ chơi</span></p>
                </div>   
        </div>
  </div>
</div>
@endsection