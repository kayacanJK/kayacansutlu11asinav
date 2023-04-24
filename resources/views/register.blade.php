<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sınav Kayıt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="{{asset('admintema')}}/image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/typography.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/default-css.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/styles.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{asset('admintema')}}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-bg">
        <div class="container">
            <div class="login-box ptb--100">
            <form action="{{route('registerPost')}}" method="POST">
            @csrf
                    <div class="login-form-head">
                        <h4>Kayıt Ol</h4>
                        <p></p>
                    </div>
                    <div class="login-form-body">
                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </div>
                        @endif
                        <div class="form-gp">
                            <label for="exampleInputName1">Kullanıcı Adı</label>
                            <input type="text" name="name" required value="{{old('name')}}">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" required>
                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Şifre</label>
                            <input type="password" name="password"  required>
                            <i class="ti-lock"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">Şifreyi tekrarla</label>
                            <input type="password" name="password_confirmation"  required>
                            <i class="ti-lock"></i>
                        </div>

                        <div class="submit-btn-area">
                            <button type="submit">Kayıt Ol <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                            </div>
                        </div>
                        <div class="form-footer text-center mt-2">
                            <p class="text-muted">Hesabınız Varmı? <a href="{{url('/')}}">Giriş Yapın</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{asset('admintema')}}/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('admintema')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('admintema')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('admintema')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{asset('admintema')}}/assets/js/metisMenu.min.js"></script>
    <script src="{{asset('admintema')}}/assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{asset('admintema')}}/assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="{{asset('admintema')}}/assets/js/plugins.js"></script>
    <script src="{{asset('admintema')}}/assets/js/scripts.js"></script>
</body>

</html>
@include('layouts.footer')
