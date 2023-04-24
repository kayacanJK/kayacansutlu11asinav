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
                            <h1 class="title2 text-center mb-4 mt-3" style="margin-left:370px">İletişim Toplam  Gelen Mesajlar ({{$message->count()}})</h1>
                        </div>
                       </div>
                    </div>
                    <div class="box-body">

                        <table class="table table-bordered data-table data-table-export">
                            <thead>
                                <tr>
                                    <th><h5>Sıra</h5></th>
                                    <th><h5>İsim</h5></th>
                                    <th><h5>Email</h5></th>
                                    <th><h5>Telefon</h5></th>
                                    <th><h5>Nedeni</h5></th>
                                    <th><h5>Mesajı</h5></th>
                                    <th><h5 class="col-md-2">İşlemler</h5></th>
                                </tr>
                            </thead>
                          <tbody>
                            @php($sira=0)
                              @foreach ($message as $messages)
                              @php($sira++)
                                <tr>
                                    <td class="text-center"><h6>{{$sira}}</h6></td>
                                    <td><h6>{{$messages->name}}</h6></td>
                                    <td><h6>{{$messages->email}}</h6></td>
                                    <td><h6>{{$messages->phone}}</h6></td>
                                    <td><h6>{{$messages->subject}}</h6></td>
                                    <td><h6>{{$messages->message}}</h6></td>
                                    <td class="text-center">
                                       <a class="edit-click btn btn-sm btn-primary" title="Güncelle" href="{{ route('ContactReply', ['id' => $messages->id]) }}"  ><i class="ti-pencil-alt text-white"></i></a>
                                       <a class="delete-click btn btn-danger btn-sm text-white" pid={{$messages->id}} title="Ürünü Sil"><i class="ti-trash"></i></a>

                                  </td>
                                </tr>
                              @endforeach
                          </tbody>

                        </table>

                    </div>
        </div>
        <!-- main content area end -->
        @include('modals.contactDeleteModal')
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
        $('#contactDelete').modal();
       });
    });
</script>

   @endsection

