<style>
    .card{
	    background-color: #fff;
    width: 1000px;
    border: none;
    border-radius: 16px;

}

.info{
      line-height: 19px;
}

.name{
	color: #4c40e0;
    font-size: 18px;
    font-weight: 600;
    margin-left: 330px;
}

.order{
	font-size: 14px;
	font-weight: 400;
	color: #b7b5b5;
    margin-left: 350px;
}
.detail{

	line-height:19px;
}

.summery{


	    color: #d2cfcf;
    font-weight: 700;
    font-size: 18px;
    margin-left:30px;
}



.text{

	line-height:15px;
}
.new{

	color: #000;
	font-size: 14px;
	font-weight: 600;
}
.money{


	font-size: 14px;
	font-weight:500;
}
.address{

color: #d2cfcf;
	font-weight:500;
	font-size:14px;
}

.last{

	font-size: 10px;
	font-weight: 500;

}

.bilgi{
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.anaisim{
    color: #4c40e0;
    font-weight: 600;
}
.sae{
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.address-line{
	color: #4C40E0;
    font-size: 11px;
    font-weight: 700;
}
</style>

@extends('layouts.master')
@section('content')
    @include('topmenu')
    <div class="main-content text-center">
        <div class="col-8 offset-2 ">
            <div class="card shadow bg-body rounded">
                <div class="card-body shadow bg-body rounded">
                    <h2 class="header-title">Sipariş Detay</h2>
                    <h2></h2>
                    <h5 class="text-muted font-13 mb-4">[ {{$order->name}}  ] Adlı Kullanıcının ({{$order->tracking_no}}) Takip Numaralı  Siparişi</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                        <div class="row">
                            <div class="container mt-5 d-flex justify-content-center">
                                <div class="card p-4 mt-1">
                                   <div class="first d-flex justify-content-between align-items-center mb-3">
                                     <div class="info">
                                         <span class="d-block name text-center">Teşekkürler, {{$order->name}}</span>
                                         <span class="order">Sipariş - #{{$order->pin_code}}</span>

                                     </div>

                                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/120px-Laravel.svg.png" width="40"/>


                                   </div>
                                       <div class="detail">
                                   <span class="d-block summery">@if($order->status=='completed')Sipariş Teslim Edildi @elseif ($order->status=='cancelled')Sipariş İptal Edildi @elseif ($order->status=='out of delivery') Sipariş Yola Çıktı @elseif ($order->status=='in progress') Sipariş İşlemde @else Sipariş Beklemede  @endif</span>
                                       </div>
                                   <hr>
                                   <div class="text">
                                 <span class="d-block new mb-1" >{{$order->name}}</span>
                                  </div>
                                 <span class="anaisim d-block address mb-3">{{$order->address1}} | {{$order->address2}}</span>
                                 <div class="row">
                                    <div class="col-md-6 bilgi" style="margin-bottom:20px">
                                        <h6 style="text-align: left" class="mt-2 mb-1">İsim:  {{$order->name}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-1">Email:  {{$order->email}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-1">Telefon:  {{$order->phone}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-1">Açık Adres:  {{$order->address1}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-1">Bina:  {{$order->address2}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-1">Sokak:  {{$order->city}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-1">Eyalet:  {{$order->state}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-1">Ülke:  {{$order->country}}</h6>
                                     </div>
                                     <div class="col-md-6 sae" style="margin-bottom:20px">
                                        <h6 style="text-align: left" class="mt-2 mb-2">Ödeme Yöntemi:  @if($order->payment_method=='credit_card')Kredi Kartı İle Ödeme @else Kapıda Nakit Ödeme @endif</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-2">Toplam Fiyat:  ₺{{number_format($order->price, 2, '.', ',')}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-2">Ürün:  {{$order->product}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-2">Adet:  {{$order->quanity}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-2">Takip Numarası:  {{$order->tracking_no}}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-2">Satın Alım Tarihi:  {{ date('d/m/Y', strtotime($order->created_at)) }}</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-2 anaisim">Fatura Adresi:</h6>
                                        <h6 style="text-align: left" class="mt-2 mb-2">{{$order->faturaadres}}</h6>
                                     </div>
                                 </div>

                                 <div class="col-md-4 " style="margin-left:300px">
                                    <label for="">Sipariş Durumu</label>
                                    <form action="{{ route('orderUpdate', ["id" => $order->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <select class="form-control p-2 text-center" id="status" name="status">
                                        <option value="pending" {{ $order->status ==' pending' ? 'selected' : '' }}>Bekleniyor</option>
                                        <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Teslim Edildi</option>
                                        <option value="in progress" {{ $order->status == 'in progress' ? 'selected' : '' }}>İşlemde</option>
                                        <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>İptal Edildi</option>
                                        <option value="out of delivery" {{ $order->status == 'out of delivery' ? 'selected' : '' }}>Yola Çıktı</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary mt-2"><h6>Kaydet</h6></button>
                                </form>
                                </div>


                                   <div class="  money d-flex flex-row mt-2 align-items-center">
                                     {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/120px-Laravel.svg.png" width="20" /> --}}

                                     <span class="ml-2"></span>
                                        </div>
                                        <div class="last d-flex align-items-center mt-3">
                                         <span class="address-line"></span>
                                        </div>
                                 </div>
                             </div>
                        </div>
                        <hr>
                        <div class="mt-4 mb-1" style="margin-left:0px">
                            <a class="btn btn-secondary " href="{{ route('orders') }}"><h6>Geri Dön</h6></a>
                        </div>

                    </form>
                </div>
                </div>
            </div>
        </div>
        @endsection
    </div>
    <!-- main content area end -->


@section('css')
@endsection
@section('js')
@endsection
