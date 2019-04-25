@extends('layout.index')
@section('css')
<link rel="stylesheet" href="./css/login.css">
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card card_login">
            <div class="card-header ">
                <h3 id="btn-login">Đăng nhập</h3>

            </div>
            <div class="card-body">
                <form action="./dang_nhap" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="user_name" class="form-control" placeholder="Tên đăng nhập">

                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                    </div>
                    @if (isset($thong_bao))
                    <div class="form-group">
                        <div class="alert alert-danger" role="alert">
                            {{ $thong_bao }}
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <input type="submit" value="Đăng nhập" class="btn float-left login_btn" style="width:100%">
                    </div>
                </form>
            </div>

        </div>
        <div class="card">
            <div class="card-header">
                <h3>Đăng ký</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form action="./dang_ky" method="POST" id="form-dk">
                    {{ csrf_field() }}
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" id="dk_user_name" name="user_name" class="form-control"
                            placeholder="Tên đăng nhập">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope i_header"></i></span>
                        </div>
                        <input type="email" id="dk_email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" id="dk_password" name="password" class="form-control"
                            placeholder="Mật khẩu">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" id="dk_confirm_password" class="form-control"
                            placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="form-group" id="error">

                    </div>
                    <div class="form-group">
                        <button type="button" id="btn-dang-ky" class="btn float-right login_btn">
                            Đăng ký
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection