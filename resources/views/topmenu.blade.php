
    <!-- header area end -->
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="nav-btn pull-left mb-3">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left mt-2">Yetkili</h4>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="{{asset('admintema')}}/assets/images/author/avatar.png" alt="avatar">
                <h4 class="user-name bg dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}<i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu pull-right" style="margin-left:500px">
                    <a class="dropdown-item" href="{{url('messages')}}">Mesajlar</a>
                    <a class="dropdown-item" href="{{url('profil')}}">Profil</a>
                    <a class="dropdown-item" href="{{route('signOut')}}">Çıkış Yap</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
