<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page')</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/login.css">
    <style>
        .card {
            border-radius: 0%;   
            width: 420px;
        }
        .card_login{
                height: 370px;
				margin-bottom: auto;
				width: 320px;
                border-radius:0%; 
                margin-right:15px
        }
    </style>
</head>

<body style="background-image: url('./images/bglogin.jpg');">
    <div class="background_body">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card card_login">
                    <div class="card-header ">
                        <h3>Đăng nhập</h3>
                  
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group form-group" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Tên đăng nhập">

                            </div>
                            
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Mật khẩu">
							</div>
							
        
                            <div class="form-group">
                                <a href="index.html"><input type="submit" value="Đăng nhập"
                                        class="btn float-left login_btn" style="width:100%"></a>
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
                        <form>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Tên đăng nhập">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope i_header"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Mật khẩu">
							</div>
							<div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
							</div>
						
                            <div class="form-group">
                                <a href="index.html"><input type="submit" value="Đăng ký"
                                        class="btn float-right login_btn"></a>
                            </div>
                        </form>
                    </div>
              
                </div>
            </div>
        </div>
    </div>
</body>

</html>