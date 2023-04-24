@extends('layouts.master')
@section('content')
        <!-- main content area start -->
        <div class="main-content">
 <!-- main content area start -->
 <div class="main-content">
    @include('layouts.header')
    @section('content')
    @include('topmenu')

        <div class="main-content-inner">
            <div class="row">
<!--Export Data Table Start-->
<div class="col-12 mb-20 mt-3 ">
                <div class="box">
                    <div class="box-head">
                       <div class="row">
                        <div class="col-md-9 col-9">
                            <h1 class="title2 text-center mb-4 mt-3" style="margin-left:370px">Siparişler ({{$orders->count()}})</h1>
                        </div>
                       </div>
                    </div>
                    <div class="box-body">

                        <table class="table table-bordered data-table data-table-export">
                            <thead>
                                <tr>
                                    <th class="col-md-1"><h5>Seri No.</h5></th>
                                    <th class="col-md-2"><h5>Kullanıcı Adı</h5></th>
                                    <th><h5>Sipariş Tarihi</h5></th>
                                    <th><h5>Takip Numarası</h5></th>
                                    <th><h5>Fiyat</h5></th>
                                    <th><h5>Durumu</h5></th>
                                    <th><h5>İşlemler</h5></th>
                                </tr>
                            </thead>
                          <tbody>
                            @php($sira=0)



                            @foreach ($orders as $key=>$order)
                              @php($sira++)
                                <tr>
                                    <td class="text-center"><h3>{{$sira}}</h3></td>
                                    <td><h5>{{$order->name}}</h5></td>
                                    <td><h6>{{ date('d/m/Y', strtotime($order->created_at)) }}</h6></td>
                                    <td><h6>{{ $order->tracking_no ?? '' }}</h6></td>
                                    <td><h6>₺ {{number_format($order->price, 2, '.', ',')}}</h6></td>
                                    <td><h6> @if ($order['status'] == 'completed')
                                        <span class="label label-success">Teslim Edildi</span>
                                    @elseif($order['status'] == "in progress")
                                        <span class="label label-danger">İşlemde</span>
                                    @elseif($order['status'] == 'cancelled')
                                        <span class="label label-danger">İptal Edildi</span>
                                    @elseif($order['status'] == 'out of delivery')
                                        <span class="label label-danger">Yolda</span>
                                    @else
                                       <span class="label label-danger">Beklemede</span>
                                    @endif</h6></td>
                                    <td class="text-center">
                                       <a class="edit-click btn btn-sm btn-primary" title="Güncelle" href="{{ route('orderDetail', ['id' => $order->id]) }}"  ><i class="ti-pencil-alt text-white"></i></a>
                                       <a class="delete-click btn btn-danger btn-sm text-white" pid={{$order->id}} title="Ürünü Sil"><i class="ti-trash"></i></a>

                                  </td>
                                </tr>
                              @endforeach
                          </tbody>
                        </table>
                    </div>
               </div>
        <!-- main content area end -->
        @include('modals.orderDeleteModal')
   @endsection

   @section('css')

   @endsection
   @section('js')
   <script>
    $(function(){
       $('.delete-click').click(function(){
        id = $(this)[0].getAttribute('pid');
       // console.log(id);
        $('#id').val(id);
        $('#orderDelete').modal();
       });
    });
</script>

   @endsection

