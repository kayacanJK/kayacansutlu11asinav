<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\AddUserRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\Contact;
use App\Http\Controllers\ContactUsFormController;

class Controller extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function main()
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
       $contactcount = Contact::get()->count();
       $siparisler = Order::get()->count();
       $usercount=User::get()->count();
       $uruncount=Product::get()->count();
       return view('main',compact('uruncount','usercount','contactcount','siparisler'));
    }
    public function Create(AddUserRequest $request)
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
        $request->flash();
        try {
            $user=new User;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->who=$request->who;
            $user->password=Hash::make($request->password);
            $user->save();
           toastr()->success('Üye Eklendi','Başarılı');
           return redirect()->route('users')->with('', '');
        } catch (\Throwable $th) {
            toastr()->error($th,'Hata');
            return redirect()->back();
        }
    }
    public function Add()
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
        return view('modals.userAddModal');
    }
    public function profil()
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
       return view('profil');
    }
    public function hata()
    {
        return view('404');
    }
    public function loginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(Auth::user()->who==3){
                toastr()->error('Başarısız '.Auth::user()->name,'Hesabınız Askıda', ['hideMethod' => 'fadeOut']);
                Auth::logout();
                return redirect()->route('login');
            }
            elseif(Auth::user()->who==1)
            {
                toastr()->success('Hoşgeldin '.Auth::user()->name,'Merhaba', ['hideMethod' => 'fadeOut']);
                return redirect()->route('main');
            }
            else
            {
                toastr()->info('Sayın '.Auth::user()->name.' yönetici yetkiniz bulunmamaktadır', 'Bilgilendirme');
                Auth::logout();
                return redirect()->route('login');
            }
        }
            toastr()->error('Şifreniz veya E-Postanız hatalı ','Hata', ['hideMethod' => 'fadeOut']);
            return redirect()->route('login');
    }
    public function detail($id)
    {
        $user = User::find($id);
        return view('',compact('users'));
    }
    public function users()
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
        if(Auth::user()->who==0){
            return redirect()->route('404');
        }
        $users=User::orderBy('id')->get();
        return view('users',compact('users'));
    }
    public function products()
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
        if(Auth::user()->who==0){
            return redirect()->route('404');
        }
        $uruncount=Product::get()->count();
        $products=Product::orderBy('id')->get();
        return view('products',compact('products','uruncount'));
    }
    public function registerPost(RegisterPostRequest $request)
    {
        $request->flash();
        try {

            $user=new User;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=Hash::make($request->password);
            $user->save();
           toastr()->success('Üyeliğiniz tamalanmıştır','Başarılı');
           return redirect()->route('login');
        } catch (\Throwable $th) {
            toastr()->error($th,'Hata');
            return redirect()->back();
        }

    }

    public function signOut()
    {
        toastr()->info('Güle Güle '.Auth::user()->name, 'Uğurlama');
        Auth::logout();
        return redirect()->route('login');
    }
    public function userUpdatePost(Request $request)
    {
        try {
            if(Str::length($request->password)<6)
            {
                toastr()->error('Şifreniz en az 6 karakter olmalıdır','Hata');
                return redirect()->back();
            }
            if($request->password!=$request->password_confirmation)
            {
                toastr()->error('Şifre ve Şifre Tekrarı Eşleşmiyor','Hata');
                return redirect()->back();
            }
            $user=User::whereId(Auth::user()->id)->first();
            $user->name=$request->name;
            $user->phone=$request->phone;
            $user->password=Hash::make($request->password);
            $user->save();
           toastr()->success('Bilgileriniz Güncellenmiştir','Başarılı');
           return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error($th,'Hata');
            return redirect()->back();
        }

    }
    public function edit($id)
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
        $user = User::find($id);

        return view('modals.userEditModal', compact('user'));

    return response()->json(['html' => $html]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->who=$request->who;
        $user->save();
        return redirect()->route('users')->with('success', 'Kullanıcı Durumu güncellendi.');
    }
    public function Productedit($id)
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
        $urun = Product::find($id);

        return view('modals.productEditModal', compact('urun'));

    return response()->json(['html' => $html]);
    }

    public function Productupdate(Request $request, $id)
    {
        $urun = Product::find($id);
        $urun->photo=$request->photo;
        $urun->name=$request->name;
        $urun->category=$request->category;
        $urun->size=$request->size;
        $urun->color=$request->color;
        $urun->number=$request->number;
        $urun->price=$request->price;
        $urun->save();
        return redirect()->route('products')->with('success', 'Ürün güncellendi.');
    }
    public function Productview($id)
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
        $urun = Product::find($id);
        return view('modals.productViewModal', compact('urun'));
    }
    public function userDelete()
    {
      $sil = Auth::user();
       $sil->delete();
       Auth::logout();
       toastr()->success('Üyeliğiniz Silinmiştir', 'Başarılı');
       return redirect()->route('login');
    }
    public function usersDelete(Request $request)
    {
        $user = User::whereId($request->id)->first();
        $user->who = -1;
        $user->delete();
        return redirect()->route('users')->with('success', 'Üye Silindi');
    }
    public function dashboard()
 {
    return view('main');
    return view('main',compact('users'));
 }

    public function productDelete(Request $request)
    {
        $urun = Product::whereId($request->id)->first();
        $urun->delete();
        return redirect()->route('products')->with('success', 'Silindi');
    }


    public function showForgotForm(){
return view('forgot');

    }

    public function sendResetLink(Request $request){
        {
            $request->validate([
                'email' => 'required|email|exists:users,email'
            ]);




                $tokens = DB::table('password_resets')->where('email', $request->email)->get();
                foreach($tokens as $t)
                {

                    $fark=Carbon::now()->diffInMinutes(Carbon::parse($t->created_at));
                    if($fark>=5)
                    {

                        DB::table('password_resets')->where('token', $t->token)->delete();
                    }

                }

                $token = Str::random(64);

                DB::table('password_resets')->insert(
                    ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
                );


            $action_link = route('reset', ['token' => $token, 'email' => $request->email]);
            $body = "Şifreni Sıfırlamak İstediğini Duyduk  ." . $request->email .
                ". Linke Tıklayarak Şifre Sıfırlama Bağlantısına Gidebilirsin";


            Mail::send('email-forgot', ['action_link' => $action_link, 'body' => $body], function ($message) use ($request) {
                $message->from('sinav@ihmtal.com', 'Sınav Kaya');
                $message->to($request->email, 'Kaya')
                    ->subject('Reset Password');
            });

            return back()->withSuccess('Şifre Sıfırlama Bağlantısını Gönderdik!');
        }
    }

public function showResetForm(Request $request, $token = null){
    return view('reset')->with(['token'=>$token, 'email'=>$request->email]);
}

public function resetPassword(Request $request){
$request->validate([
         'email'=>'required|email|exists:users,email',
         'password'=>'required|min:6|confirmed',
         'password_confirmation'=>'required',
]);

 $check_token = DB::table('password_resets')->where([
    'email'=>$request->email,
    'token'=>$request->token,
 ])->first();

 if(!$check_token){
    return back()->withInput()->with('Başarısız','Geçersiz Token');
}else{

    User::where('email', $request->email)->update([
          'password'=>\Hash::make($request->password),
    ]);

    \DB::table('password_resets')->where([
         'email'=>$request->email
    ])->delete();
    toastr()->success('Şifreni Sıfırladın!','Giriş Yap!');
          return redirect()->route('login')->with('Onaylandı','Başarıyla Şifrenizi Değiştirdiniz')
            ->with('verifiedEmail', $request->email);
 }
}
public function login(){
    return view('login');
        }
        public function orders(Request $request){

            if (Auth::id()==null) {
                return redirect()->route('404')->with('', '');
            }

            $orders = Order::orderBy('id')->get();

            return view('orders', compact('orders'));
        }
        public function orderDelete(Request $request)
        {
            $order = Order::whereId($request->id)->first();
            $order->delete();
            return redirect()->route('orders')->with('success', 'Seçilen Sipariş Silindi');
        }
        public function orderDetail($id)
        {
            if (Auth::id()==null) {
                return redirect()->route('404')->with('', '');
            }

            $order = Order::find($id);
            return view('modals.orderDetail', compact('order'));
        }
        public function orderUpdate(Request $request, $id)
        {
            $order = Order::find($id);
            $order->status=$request->status;
            $order->save();
            return redirect()->back()->with('success', 'Seçilen Sipariş Güncellendi');
        }
}
