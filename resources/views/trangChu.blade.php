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

<div class="container-fluid mt-4">
    <div class="row row_magin">
        @foreach ($sanpham as $item)
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xm-2 card_x px-1">
            <div class="card ">
                <a href="./chi_tiet_sp/{{ $item->id }}">
                    <div class="w-100 card-img-top card_img_top" style="background-image: url('{{$item->hinh_anh}}');">
                    </div>
                </a>
                <div class="card-body">
                    <p class="card-title mb-0">{{$item->ten}}</p>
                    <h6 class="card_body_h6">{{$item->gia_nhap}}₫</h6>
                    <span class="card_body_span1">{{$item->gia_ban}}₫</span>
                    <span class="card_body_span2">-44%</span>
                    <a href="./gio_hang/them_sp/{{ $item->id }}" class="btn btn-primary btn-sm card_body_a">Thêm vào <i
                            class="fas fa-cart-plus mr-2"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')
    <script>

    </script>
@endsection