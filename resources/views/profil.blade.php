@extends('layouts.master')
@section('content')
    <!-- main content area start -->
    <div class="main-content">
        @include('topmenu')
        <div class="box-body login-register-form">
            <!-- Textual inputs start -->

            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="header-title text-center" style="font-size:30px">Profil Ayarları</h2>
                        <p class="text-center text-muted font-14 ">Kullanıcı Ayarları</p>
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                        <form action="{{ route('userUpdatePost') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label">Kullanıcı Adı</label>
                                <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}"
                                    readonly id="example-text-input">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Telefon</label>
                                <input class="form-control" minlength="10" maxlength="11" type="text" name="phone" value="{{ Auth::user()->phone }}">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Şifre</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label class="">Şifre Tekrarı</label>
                                <input type="password" name="password_confirmation" required class="form-control">
                            </div>
                            <br>
                            <div class="row">
                                <div><button style="margin-left:15px" class="btn btn-primary" type="submit">Değişiklikleri Onayla</button>
                                    <a class="delete-click btn btn-danger text-center text-white" pid={{auth()->user()->id}}  style="margin-left:715px">Hesabımı
                                        Sil</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- Textual inputs end -->
            @include('modals.AccountDeleteModal')
        </div>
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
        $('#accountDelete').modal();
       });
    });
</script>

@endsection
