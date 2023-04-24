@extends('layouts.master')
@section('content')
        <!-- main content area start -->
        <div class="main-content">
         @include('topmenu')
         <section class="content">
                             <!-- seo fact area start -->
                             <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mt-6 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div style="font-size: 27px" class="seofct-icon"><i class="ti-user"></i> Kayıtlı Kullanıcı Sayısı</div>
                                            <h1 class="text-white">{{$usercount}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-6 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div style="font-size: 27px" class="seofct-icon"><i class="ti-shopping-cart" ></i>Kayıtlı Ürünler </div>
                                            <h1 class="text-white">{{$uruncount}}</h1>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6 mt-md-6 mb-3">
                                        <div class="card">
                                            <div class="seo-fact sbg3">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon" style="font-size: 27px"><i class="ti-email"></i>Gelen Mesajlar</div>
                                                    <h1 class="text-white">{{$contactcount}}</h1>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                            <div class="col-md-6 mt-md-6 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg3">
                                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon" style="font-size: 27px"><i class="ti-credit-card"></i> Siparişler</div>
                                                            <h1 class="text-white">{{$siparisler}}</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    <!-- seo fact area end -->
        </div>
        <!-- main content area end -->
   @endsection

   @section('css')

   @endsection
   @section('js')

   @endsection

