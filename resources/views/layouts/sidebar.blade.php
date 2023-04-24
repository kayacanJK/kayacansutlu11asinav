
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="{{ route('main') }}"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/120px-Laravel.svg.png" style="width:150px" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="">
                                <a href="{{ route('main') }}" aria-expanded="true"><i class="ti-dashboard"></i><span>Anasayfa</span></a>
                            </li>
                            <li>
                                <li class="">
                                    <a href="{{ url('profil') }}" aria-expanded="true"><i class="ti-user"></i><span>Profil</span></a>
                                </li>
                                <li class="">
                                    <a href="{{ route('messages') }}" aria-expanded="true"><i class="ti-email"></i><span>Mesajlar</span></a>
                                </li>
                                <li class="">
                                    <a href="{{ url('products') }}" aria-expanded="true"><i class="ti-shopping-cart"></i><span>Ürünler</span></a>
                                </li>
                                <li class="">
                                    <a href="{{ url('orders') }}" aria-expanded="true"><i class="ti-credit-card"></i><span>Siparişler</span></a>
                                </li>
                                <li class="">
                                    <a href="{{ url('users') }}" aria-expanded="true"><i class="ti-crown"></i><span>Üyeler</span></a>
                                </li>

                                <li>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
