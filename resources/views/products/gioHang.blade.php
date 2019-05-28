@extends('layout.index')
@section('css')
    <link rel="stylesheet" href="./css/gioHang.css">
@endsection
@section('js')
<script>
    var key = "tongGia";
    var dataString = localStorage.getItem(key);
    var danhSachGia = [];
    if(dataString===null){
        danhSachGia = JSON.parse(dataString);
    }else{
        danhSachGia=[];
    }

    var addBtn = document.getElementById('datHang');
    addBtn.addEventListener('click', addItem);
    function addItem(){
        var input = document.getElementById('tongGia');
        var newItem = input.textContent;
        // render();
        
        localStorage.setItem(key,newItem);
    }

    // function render(){
    //     var htmlList = document.getElementById()
    // }
</script>
@endsection
@section('content')
    <div class="container-fluid" id="pay">
        <div class="row" style="min-height:300px">
            @if (count($dssp) == 0)
                <div class="col-md-12 ">
            @else
                <div class="col-xs-5 col-sm-7 col-md-8 col-lg-9 col-xm-9 ">
            @endif
                <div class="container">
                    @if (count($dssp) == 0)
                        @component('products.gioHangTrong')
                        @endcomponent
                    @else
                    @foreach ($dssp as $item)
                    <div class="row">
                            <div class="col-xs-6 col-sm-12 col-md-3 col-lg-2 col-xm-9 ">
                                <div class="sanPhamm">
                                    <div
                                        class="hinhAnh" style="background-image: url('{{ $item->sanpham->hinh_anh }}');">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-12 col-md-4 col-lg-7 col-xm-9 ">
                                <div class="gioiThieu">
                                    <div class="ml-0">
                                        <span class="tenSP"><strong>{{ $item->sanpham->ten }}</strong>
                                        </span>
                                        <br>
                                        <span class="soLuongSP">Chỉ còn {{ $item->sanpham->so_luong }} sản phẩm</span>
                                        <br>
                                        <span class="nguonSP">Cung cấp bới: <a href="#">{{ $item->sanpham->nhacc->ten }}</a> </span>
                                        <br>
                                        <a href="./gio_hang/bo_sp/{{ $item->id_sp }}"> <button class="btn btn-outline-primary btn-sm" type="button">Bỏ
                                                chọn</button></a>
                                        <br>
                                    </div>
                                </div>
                            </div>
    
                            <div class=" col-xs-6 col-sm-12 col-md-5 col-lg-3 col-xm-3 tinhTien">
                                <div>
                                    <span class="gia">{{number_format($item->sanpham->gia_ban * $item->so_luong ,0, ',', '.')  }}₫</span>
                                    <br>
                                    <span
                                        class="giamGia">{{number_format($item->sanpham->gia_nhap ,0, ',', '.')   }}₫</span>
                                    <span class="badge badge-danger"
                                        class="bangGiamGia">{{ 100 - abs(round((number_format($item->sanpham->gia_ban ,0, ',', '.') / number_format($item->sanpham->gia_nhap ,0, ',', '.'))*100)) }}%</span>
                                </div>
                                <div style="display:flex; margin-top: 7px">
                                    <a type="button" class="btn btn-primary" href="./gio_hang/giam_sp/{{ $item->sanpham->id }}"
                                        style="width:35px;height:35px; background: white;border-radius:0; color: black; font-size: 12px">-</a>
                                    <input type="text" class="form-control" disabled value={{ $item->so_luong }}
                                        style="width:50px; height:35px; text-align: center;border-left:0;border-right:0; border-color: #007bff; border-radius: 0">
                                    <a type="button" class="btn btn-primary" href="./gio_hang/them_sp/{{ $item->sanpham->id }}"
                                        style="width:35px;height:35px; background: white;border-radius:0;color: black">+</a>
    
                                </div>
    
                            </div>
    
                        </div>
                    <hr>
                    @endforeach
                    @endif
                </div>
            </div>
            @if (count($dssp) != 0)
                <div class="card col-xs-5 col-sm-5 col-md-4 col-lg-3 col-xm-3">
                    <div class="tamTinh">
                        <span class="nhan"><strong>Tạm tính:</strong> </span>
                        <span class="gia">{{number_format($tongTien ,0, ',', '.')  }} ₫</span>
                    </div>
                    <hr>
                    <div class="thanhTien">
                        <span class="icon"><i class="fas fa-file-invoice-dollar"></i></span>
                        <span class="gia" id="tongGia">{{number_format($tongTien ,0, ',', '.')}} ₫</span>
                    </div>
                    <hr>
                    <a href="./gio_hang/thong_tin/{{ $dssp[0]->id_hd }}" class="btn btn-danger btn_tinhTien" type="button" id="datHang">Tiến hành đặt hàng</a>
                </div>
            @endif
        </div>
    </div>
@endsection