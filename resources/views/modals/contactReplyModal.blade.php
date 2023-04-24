@extends('layouts.master')
@section('content')
    @include('topmenu')
    <div class="main-content text-center">
        <div class="col-8 offset-2 ">
            <div class="card shadow bg-body rounded">
                <div class="card-body shadow bg-body rounded">
                    <h2 class="header-title">Mesaj Yanıtla</h2>
                    <h2></h2>
                    <p class="text-muted font-15 mb-4"> &nbsp;  &nbsp; Bu Menüden Seçtiğiniz Mesajı Yanıtlayabilirsiniz</p>
                    <form action="{{ route('sendEmail') }}" method="POST">
                        @csrf
                        @method('POST')
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                        <input type="hidden" name="email" value="{{ $contact->email }}">
                        <div class="form-group  col-md-4" style="margin-left:330px">
                            <label><h6>İsim</h6></label>
                            <input type="text" class="form-control text-center" readonly value="{{$contact->name}}" name="" id="" required>
                        </div>
                        <div class="form-group col-md-5" style="margin-left:290px">
                            <label><h6>Mesajı</h6></label>
                            <input readonly class="form-control" type="text" value="{{$contact->message}}" name="" id="message" rows="4">
                        </div>
                        <hr>
                        <div class="form-group col-md-5" style="margin-left:290px">
                            <label><h6>Cevap Yaz;</h6></label>
                            <textarea required class="form-control" name="message" id="message" rows="4"></textarea>
                        </div>
                        <div class="mt-4 mb-1" style="margin-left:20px">
                            <a class="btn btn-secondary" href="{{ route('messages') }}">Kapat</a>
                            <button type="submit" class="btn btn-primary">Gönder</button>
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
