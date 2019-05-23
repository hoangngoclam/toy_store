@section('css')
<link rel="stylesheet" href="./css/common.css">
@endsection

<header class="backgound_header" style="background:url(images/21.jpg);">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning nav_bar">
        <div class="container-fluid">

            <div class="header_left w-85">
                <a href="#" class="a_header"><i class="fas fa-phone-square i_header">
                        0384352233</i></a>
                <a href="#" class="a_header "><i class="fas fa-envelope i_header">
                        shopdochoi@gmail.com</i></a>
                <a href="#" class="a_header"><i class="fas fa-map-marked-alt i_header">
                        40F Ngô Văn Sở -P9 - TP.Đà Lạt</i></a>
            </div>
            <div class="header_right w-15">
                <a href="#" class="a_header"><i class="fas fa-address-book i_header"> Gópý</i></a>
                @if(Session::has('khachhang'))
                <a href="#" class="a_header"> {{ Session::get('khachhang')->ten }}</a> <span> / </span>
                <a href="./dang_xuat" class="a_header">Đăng xuất</a>
                @else
                <a href="./dang_nhap" class="a_header"><i class="fas fa-user-circle"> Đăng kí / Đăngnhập</i></a>
                @endif

            </div>
        </div>
    </nav>

    <div class=" container-fluid" style="margin-top: 10px">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xm-2">
                <a href="#">
                    <img src="images/logo.png" alt="logo" style="width:150px; height:90px; ">
                </a>
            </div>
            <div class="col-8 col-sm-8 col-md-7 col-lg-8 col-xm-8"
                style="display: flex; align-items: center; position: relative ;">
                <form class="form-inline input-group-lg" style="width: 100%;" method="GET" action="./tim_kiem">
                    {{ csrf_field() }}
                    <input class=" form-control mr-sm-6" type="text" name="key" placeholder="Tìm kiếm sản phẩm..."
                        style="width: 100%">
                    <button type="submit" class="btn btn-warning btn_search btn-lg "
                        style="padding-left:8px; padding-right:8px"><i class="fas fa-search mr-2"></i>Tìm kiếm</button>
                </form>
            </div>
            <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xm-2 justify-content-end "
                style="display: flex; align-items: center;">
                @if (Session::has('khachhang'))
                <a class="btn btn-warning btn-lg" style="padding-left:7px; padding-right:7px"
                    href="./gio_hang/chi_tiet/{{ Session::get('khachhang')->id }}">
                    <i class="fas fa-cart-plus mr-1"></i>
                    Giỏ hàng
                    <span id="number_product" class="badge badge-dark ml-1">{{ Session::get('number_product') }}</span>
                </a>
                @else
                <a class="btn btn-warning btn-lg" style="padding-left:7px; padding-right:7px" href="./gio_hang/chi_tiet/1">
                    <i class="fas fa-cart-plus mr-1"></i>
                    Giỏ hàng
                    <span class="badge badge-dark ml-1">0</span>
                </a>
                @endif

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light nav_bottom ">
        <div class="container-fluid ">
            <button class="navbar-toggler justify-content-center " data-target="#my-nav" data-toggle="collapse"
                aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation" style=" margin-top:5px">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="my-nav" class="collapse navbar-collapse " style="width:100%">
                <ul class="navbar-nav mr-auto " style="width:78%">

                    <li class="nav-item border_item li_width">
                        <div class="nav-link  ">
                            <button class="btn btn-warning dropdownn btn_witdth" style="padding-left:0px;">
                                <i class="far fa-list-alt m-1"> </i>Danh Mục
                                <div class="dropdownn-content mega-menu">
                                    <div class="row"    style="margin:0; padding:0">
                                        @foreach ($danhmuc[0]->loaisp as $loaisp)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                                            <ul>
                                        
                                                <a href="#"><li><strong>{{ $loaisp->ten }}</strong></li></a>
                                                <hr>
                                                @foreach ($loaisp->kieusp as $item)
                                                <a href="./kieu_sp/{{ $item->id }}"><li>{{ $item->ten }}</li></a>
                                                @endforeach

                                            </ul>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </button>
                    </div>
                    </li>

                    <li class="nav-item border_item li_width">
                        <a class="nav-link  " href="#"> <button type="button"
                                class="btn btn-outline-warning btn_witdth"><i class="fas fa-house-damage m-1"></i>Trang
                                chủ</button>
                        </a>
                    </li>

                    <li class="nav-item border_item li_width">
                        <a class="nav-link " href="#"> <button type="button"
                                class="btn btn-outline-warning btn_witdth"><i class="fab fa-hotjar m-1"
                                    style="font-weight: 10px"></i>Đang
                                hot</button></a>
                    </li>
                    <li class="nav-item border_item li_width">
                        <a class="nav-link " href="#"><button type="button"
                                class="btn btn-outline-warning btn_witdth"><i class="fas fa-check-square m-1"></i>Bán
                                chạy</button></a>
                    </li>
                    <li class="nav-item border_item li_width">
                        <a class="nav-link " href="#"><button type="button"
                                class="btn btn-outline-warning btn_witdth"><i class="fab fa-themeisle m-1"></i>Khuyến
                                mãi</button></a>
                    </li>

                    <!-- <li class="nav-item border_item" style="width: 230px">
                        <a class="nav-link " href="#"><button type="button" class="btn btn-outline-warning "
                                style="width: 100%"><i class="far fa-list-alt m-1"></i>Danh mục </button>
                        </a>
                    </li> -->


                </ul>

                <div>
                    <ul style="display:flex ;list-style: none; text-align:center ; padding-top:17px; margin-right: 0px;"
                        class="justify-content-center">
                        <li>
                            <a href="#"><button type="button" class="btn btn-primary btn-sm btn_icon"><i
                                        class="fab fa-facebook-f"></i></button></a>
                        </li>

                        <li>
                            <a href="#"><button type="button" class="btn btn-danger btn-sm btn_icon">
                                    <i class="fab fa-youtube"></i></button></a>
                        </li>

                        <li>
                            <a href="#"><button type="button" class="btn btn-info btn-sm btn_icon"><i
                                        class="fab fa-twitter" style="color: white"></i></button></a>
                        </li>
                        <li>
                            <a href="#"><button type="button" class="btn btn-success btn-sm btn_icon">
                                    <i class="fa fa-envelope"></i></button></a>
                        </li>
                        <li>
                            <a href="#"><button type="button" class="btn btn-warning btn-sm btn_icon"
                                    style="color: black"><i class="fab fa-google-plus-g"></i></button></a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>