@extends('layouts.master')
@section('content')
    @include('topmenu')
    <div class="main-content text-center">
        <div class="col-8 offset-2 ">
            <div class="card shadow bg-body rounded">
                <div class="card-body shadow bg-body rounded">
                    <h2 class="header-title">Ürün Düzenle</h2>
                    <h2></h2>
                    <p class="text-muted font-14 mb-4">Bu Menüden Ürün Güncelleyebilirsiniz</p>
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('productUpdate', $urun->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="text-center"> Ürün Fotoğraf</label>
                            </div>
                            <h5 class="col-md-4 mb-3 text-center" style="margin-left:340px"><img src="{{ $urun->photo }}"
                                    width="100px" alt="" srcset="" class="text-center"></h5>
                            <div class="col-sm-12">
                                <label class="text-center">Ürün Fotoğrafı Yüklemek için Url Girin (Uzun Url Hata Verir)</label>
                                <input type="text" title="Resim Urlsi Giriniz" value="{{ $urun->photo }}" name="photo" class="form-control text-center mb-2">
                            </div>
                        </div>
                        {{-- <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-row">

                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02"> Ürün Türü</label>
                                <select class="form-control p-2 text-center" id="name" name="name">
                                    <option value="Kazak" {{ $urun->name == 'Kazak' ? 'selected' : '' }}>Kazak</option>
                                    <option value="Pantolon" {{ $urun->name == 'Pantolon' ? 'selected' : '' }}>Pantolon
                                    </option>
                                    <option value="T-Shirt" {{ $urun->name == 'T-Shirt' ? 'selected' : '' }}>T-Shirt
                                    </option>
                                    <option value="Şort" {{ $urun->name == 'Şort' ? 'selected' : '' }}>Şort</option>
                                    <option value="Mayo" {{ $urun->name == 'Mayo' ? 'selected' : '' }}>Mayo</option>
                                    <option value="Süveter" {{ $urun->name == 'Süveter' ? 'selected' : '' }}>Süveter
                                    </option>
                                    <option value="Ceket" {{ $urun->name == 'Ceket' ? 'selected' : '' }}>Ceket</option>
                                    <option value="Gömlek" {{ $urun->name == 'Gömlek' ? 'selected' : '' }}>Gömlek</option>
                                    <option value="Takım Elbise" {{ $urun->name == 'Takım Elbise' ? 'selected' : '' }}>
                                        Takım Elbise</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Ürün Kategorisi</label>
                                <select class="form-control p-2 text-center" id="category" name="category">
                                    <option value="Aksesuar" {{ $urun->category == 'Aksesuar' ? 'selected' : '' }}>Aksesuar
                                    </option>
                                    <option value="Erkek" {{ $urun->category == 'Erkek' ? 'selected' : '' }}>Erkek
                                    </option>
                                    <option value="Kadın" {{ $urun->category == 'Kadın' ? 'selected' : '' }}>Kadın
                                    </option>
                                    <option value="Çocuk" {{ $urun->category == 'Çocuk' ? 'selected' : '' }}>Çocuk
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationCustomUsername">Ürün Boyu</label>
                                <select class="form-control p-2 text-center" id="size" name="size">
                                    <option value="XS" {{ $urun->size == 'XS' ? 'selected' : '' }}>XS</option>
                                    <option value="S" {{ $urun->size == 'S' ? 'selected' : '' }}>S</option>
                                    <option value="M" {{ $urun->size == 'M' ? 'selected' : '' }}>M</option>
                                    <option value="L" {{ $urun->size == 'L' ? 'selected' : '' }}>L</option>
                                    <option value="XL" {{ $urun->size == 'XL' ? 'selected' : '' }}>XL</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationCustomUsername">Ürün Renk</label>
                                <select class="form-control p-2 text-center" id="color" name="color">
                                    <option value="Kırmızı" {{ $urun->color == 'Kırmızı' ? 'selected' : '' }}>Kırmızı
                                    </option>
                                    <option value="Siyah" {{ $urun->color == 'Siyah' ? 'selected' : '' }}>Siyah</option>
                                    <option value="Beyaz" {{ $urun->color == 'Beyaz' ? 'selected' : '' }}>Beyaz</option>
                                    <option value="Kahverengi" {{ $urun->color == 'Kahverengi' ? 'selected' : '' }}>
                                        Kahverengi</option>
                                    <option value="Sarı" {{ $urun->color == 'Sarı' ? 'selected' : '' }}>Sarı</option>
                                    <option value="Lacivert" {{ $urun->color == 'Lacivert' ? 'selected' : '' }}>Lacivert
                                    </option>
                                    <option value="Yeşil" {{ $urun->color == 'Yeşil' ? 'selected' : '' }}>Yeşil</option>
                                    <option value="Gri" {{ $urun->color == 'Gri' ? 'selected' : '' }}>Gri</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustomUsername">Ürün Stok</label>
                                <input type="text" name="number" class="form-control text-center" maxlength="7"
                                    value="{{ $urun->number }}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustomUsername">Ürün Fiyatı</label>
                                <input type="text" name="price" class="form-control text-center" maxlength="7"
                                    value="{{ $urun->price }}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustomUsername">Ürün Oluşturulma Tarihi</label>
                                <input type="text" name="created_at" readonly class="form-control text-center" maxlength="7"
                                    value="{{ $urun->created_at }}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustomUsername">Ürün Son Güncellenme Tarihi</label>
                                <input type="text" name="updated_at" readonly class="form-control text-center" maxlength="7"
                                    value="{{ $urun->updated_at }}">
                            </div>
                        </div>
                        <hr>
                        <div class="mt-4 mb-1" style="margin-left:20px">
                            <a class="btn btn-secondary" href="{{ route('products') }}">Kapat</a>
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
