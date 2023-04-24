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
                            <h1 class="title2 text-center mb-4 mt-3" style="margin-left:370px">Ürün Listesi  |  {{$uruncount}}  | Kayıtlı Ürünler</h1>
                        </div>
                       </div>
                    </div>
                    <div class="box-body">

                        <table class="table table-bordered data-table data-table-export">
                            <thead>
                                <tr>
                                    <th><h5 class="text-center">Sıra</h5></th>
                                    <th><h5>Görsel</h5></th>
                                    <th><h5>Ürün Adı</h5></th>
                                    <th><h5>Ürün Kodu</h5></th>
                                    <th><h5>Kategori</h5></th>
                                    <th><h5>Fiyatı</h5></th>
                                    <th><h5>Adedi</h5></th>
                                    <th><h5>Renk</h5></th>
                                    <th><h5>Beden</h5></th>
                                    <th><h5 class="text-center">İşlemler</h5></th>
                                </tr>
                            </thead>
                          <tbody>
                            @php($sira=0)
                              @foreach ($products as $urun)
                              @php($sira++)
                                <tr>
                                    <td class="text-center"><h6>{{$sira}}</h6></td>
                                    <td class="text-center"><h5><img src="{{$urun->photo}}" width="70px" alt="" srcset="" class="image-fill"></h5></td>
                                    <td><h6>{{$urun->name}}</h6></td>
                                    <td><h6>{{$urun->code}}</h6></td>
                                    <td><h6>{{$urun->category}}</h6></td>
                                    <td><h6>₺ {{number_format($urun->price, 2, '.', ',')}}</h6></td>
                                    <td><h6>{{number_format($urun->number, 0, '.', '.')}}</h6></td>
                                    <td><h6>{{$urun->color}}</h6></td>
                                    <td><h6>{{$urun->size}}</h6></td>
                                    <td class="text-center">
                                       <a class="btn btn-sm btn-info" title="Görüntüle"  href="{{ route('productView', ['id' => $urun->id]) }}"><i class="ti-eye"></i></a>
                                       <a class="edit-click btn btn-sm btn-primary" href="{{ route('productEdit', ['id' => $urun->id]) }}" title="Güncelle" href="#"><i class="ti-pencil-alt"></i></a>
                                       <a class="delete-click btn btn-danger btn-sm text-white"  pid={{$urun->id}} title="Ürünü Sil"><i class="ti-trash"></i></a>

                                  </td>
                                </tr>
                              @endforeach
                          </tbody>
                        </table>

                    </div>
                    @include('modals.productDeleteModal')
                 </div>
        <!-- main content area end -->

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
        $('#productDelete').modal();
       });
    });
</script>

   @endsection


