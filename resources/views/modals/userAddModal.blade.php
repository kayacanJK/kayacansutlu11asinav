
@extends('layouts.master')
@section('content')
@include('topmenu')
        <div class="main-content text-center">
            <div class="col-8 offset-2 ">
              <div class="card shadow bg-body rounded">
                  <div class="card-body shadow bg-body rounded">
                      <h2 class="header-title">Kullanıcı Ekle</h2>
                      <h2></h2>
                      <p class="text-muted font-14 mb-4">Bu Menüden Kullanıcı Ekleyebilirsiniz</p>
                      <form action="{{ route('userCreate') }}" method="POST">
                          @csrf
                          @method('PUT')
                          @if ($errors->any())
                          <div class="alert alert-danger" role="alert">
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </div>
                          @endif
                          <div class="mb-3">
                              <label  class="form-label">İsim Soyisim:</label>
                              <input type="text" name="name"  value="{{old('name')}}" required class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="row">
                              <div class="mb-3 col-md-12">
                                  <label  class="form-label">E-Posta:</label>
                                  <input type="text" name="email" class="form-control" value="{{old('email')}}" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label  class="form-label">Telefon:</label>
                              <input type="text" name="phone" value="{{old('phone')}}" class="form-control" value="" required maxlength="11" minlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" autofocus="" id="tel">
                          </div>
                          <div class="row">
                            <div class="mb-3 col-md-12">
                                <label  class="form-label">Şifre:</label>
                                <input type="password" value="" name="password"  class="form-control"  required>
                            </div>
                        </div>
                          <hr>
                          <select class="form-control mb-2 p-2 text-center" value="{{old('who')}}" id="who" name="who">
                              <option value="0">Kullanıcı</option>
                              <option value="1">Yönetici</option>
                            </select>
                            <div class="mt-4 mb-1" style="margin-right:0px">
                              <a  class="btn btn-secondary" href="{{route('users')}}">Kapat</a>
                              <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
          </form>
        </div>
      </div>
</div>
</div>
        <!-- main content area end -->
   @endsection

   @section('css')

   @endsection
   @section('js')

   @endsection

