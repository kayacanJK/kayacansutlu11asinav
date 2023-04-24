@extends('layouts.master')
@section('content')
@include('topmenu')
        <!-- main content area start -->
        <div class="main-content">
            <section class="content">
                <div class="box">

                    <div class="card-body">
                        <div class="box">
                            <h1 class="title2  text-center mt-2">Müşteri Listesi | {{$users->count()}} | Kayıtlı Üyeler </h1>
                          </div>
                          <div class="text-right" style="margin-right:50px">
                          <a type="button" href="{{ route('userAdd')}}" class="btn btn-secondary btn-sm mb-3">Üye Ekle</a>
                        </div>
                        <table class="table table-bordered data-table data-table-export">
                            <thead>
                                <tr>
                                    <th><h5>Sıra</h5></th>
                                    <th><h5>Adı Soyadı</h5></th>
                                    <th><h5>E-Posta Adresi</h5></th>
                                    <th><h5>Telefon</h5></th>
                                    <th><h5>Yetki Durumu</h5></th>
                                    <th ><h5 class="text-center">İşlemler</h5></th>
                                </tr>
                            </thead>
                          <tbody>
                            @php($sira=0)
                              @foreach ($users as $user)
                              @php($sira++)
                                <tr>
                                    <td class="text-center"><h6>{{$sira}}</h6></td>
                                    <td><h6>{{$user->name}}</h6></td>
                                    <td><h6>{{$user->email}}</h6></td>
                                    <td><h6>{{$user->phone}}</h6></td>
                                    <td><h5>@if($user->who==0) Kullanıcı  @elseif($user->who==3) Askıda  @elseif($user->who==1) Yönetici @endif</h5></td>
                                    <td class="text-center">
                                       <a class="edit-click btn btn-sm btn-primary" href="{{ route('userEdit', ['id' => $user->id]) }}" title="Güncelle" href="#"><i class="ti-pencil-alt"></i></a>

                                       <a class="delete-click btn btn-danger btn-sm text-white"  uid={{$user->id}} title="Ürünü Sil"> <i class="ti-trash"></i></a>
                                  </td>
                                </tr>
                              @endforeach
                          </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  @include('modals.userDeleteModal')

            </section>
        </div>
        <!-- main content area end -->
   @endsection

   @section('css')

   @endsection
   @section('js')
   <script>
    $(function(){
       $('.delete-click').click(function(){
        id = $(this)[0].getAttribute('uid');
       // console.log(id);
        $('#id').val(id);
        $('#userDelete').modal();
       });
    });
</script>

<!-- Plugins & Activation JS For Only This Page -->
<script src="{{asset('admintema')}}/assets/js/plugins/select2/select2.full.min.js"></script>
<script src="{{asset('admintema')}}/assets/js/plugins/select2/select2.active.js"></script>
<script src="{{asset('admintema')}}/assets/js/plugins/nice-select/jquery.nice-select.min.js"></script>
<script src="{{asset('admintema')}}/assets/js/plugins/nice-select/niceSelect.active.js"></script>
<script src="{{asset('admintema')}}/assets/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="{{asset('admintema')}}/assets/js/plugins/bootstrap-select/bootstrapSelect.active.js"></script>
   @endsection






