{{-- <style>
.container {
    max-width: 500px;
    margin: 50px auto;
    text-align: left;
    font-family: sans-serif;
}
form {
    border: 1px solid #1A33FF;
    background: #ecf5fc;
    padding: 40px 50px 45px;
}
.form-control:focus {
    border-color: #000;
    box-shadow: none;
}
label {
    font-weight: 600;
}
.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}
.form-control.error {
    border-color: red;
    padding: .375rem .75rem;
}
    </style>
<form action="" method="post" action="{{ route('contact') }}">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
        @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Subject</label>
        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
            id="subject">
        @if ($errors->has('subject'))
        <div class="error">
            {{ $errors->first('subject') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
            rows="4"></textarea>
        @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>
    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form> --}}
 <!-- basic form start -->

 <style>
.resım1{
    margin-left: 290px
}


 </style>
<body style="background-color: lightblue;">
 <title>İletişim Formu</title>
 <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/arkaplan.css">
 <link rel="shortcut icon" type="{{asset('admintema')}}/image/png" href="{{asset('admintema')}}/assets/images/icon/favicon.ico">
 <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/styles.css">
 <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('admintema')}}/assets/css/slicknav.min.css">
 <div class="col-5 mt-5" style="margin-left:550px">
    <div class="card">
        <div class="card-body">
            <div class="logo">
                <a href="#" class="resım1"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/120px-Laravel.svg.png" style="width:150px" alt="logo"></a>
            </div>
            <h4 class="header-title text-center" style="font-size:50px">İletişim Formu</h4>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif
        <form action="" method="post" action="{{ route('contact') }}">
            @csrf
                <div class="form-group">
                    <label>İsim</label>
                    <input type="text" class="form-control" name="name" id="name" required placeholder="İsim Giriniz">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required placeholder="Email Giriniz">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Telefon</label>
                    <input type="text" class="form-control" name="phone" id="phone" required placeholder="Telefon Numarası Giriniz">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sebep?</label>
                    <input type="text" class="form-control" name="subject" id="subject" required placeholder="İletişim Nedeninizi Giriniz">
                </div>
                <div class="form-group">
                    <label>Mesaj</label>
                    <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                </div>
                <input type="submit" name="send" value="Gönder" class="btn btn-dark btn-block">
                <div class="form-footer text-center mt-2 mb-2">
                    <p class="text-muted">Giriş Sayfasına<a href="{{url('login')}}">Dönün</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- form end -->
