<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactUsFormController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('404', function () {
    return view('404');
});
Route::get('register', function () {
    return view('register');
});
Route::get('profil', function () {
    return view('profil');
});
Route::get('main', function () {
    return view('main',);
});
Route::get('forgot', function () {
    return view('forgot');
});
Route::get('main', [Controller::class, 'main'])->name('main','contactback');
Route::get('profil', [Controller::class, 'profil'])->name('profil');
Route::get('404', [Controller::class, 'hata'])->name('404');
Route::get('dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('login', [Controller::class, 'login'])->name('login');
Route::post('loginPost', [Controller::class, 'loginPost'])->name('loginPost');
Route::get('products', [Controller::class, 'products'])->name('products');
Route::get('orders', [Controller::class, 'orders'])->name('orders');
Route::post('productDelete', [Controller::class, 'productDelete'])->name('productDelete');
Route::get('signOut', [Controller::class, 'signOut'])->name('signOut');
Route::post('registerPost', [Controller::class, 'registerPost'])->name('registerPost');
Route::post('userUpdatePost', [Controller::class, 'userUpdatePost'])->name('userUpdatePost');
Route::post('userUpdate', [Controller::class, 'userUpdate'])->name('userUpdate');
Route::get('users', [Controller::class, 'users'])->name('users');
Route::get('messages', [ContactUsFormController::class, 'messages'])->name('messages');
Route::post('deleteProduct',[ProductController::class,'deleteProduct'])->name('deleteProduct');
Route::post('userDelete', [Controller::class, 'userDelete'])->name('userDelete');
Route::post('usersDelete', [Controller::class, 'usersDelete'])->name('usersDelete');
Route::post('modals.userEditModal', [Controller::class, 'userEdit'])->name('userEdit');
Route::get('detail{id}', [Controller::class, 'detail'])->name('detail');
// Ürün  Yönlendirmeleri
Route::get('product/edit/{id}', [Controller::class, 'Productedit'])->name('productEdit');
Route::get('product/view/{id}', [Controller::class, 'Productview'])->name('productView');
Route::put('product/update/{id}', [Controller::class, 'Productupdate'])->name('productUpdate');
// Kullanıcı Düzenleme Yönlendirmeleri
Route::get('user/edit/{id}', [Controller::class, 'edit'])->name('userEdit');
Route::put('user/update/{id}', [Controller::class, 'update'])->name('userUpdate');
Route::get('user/add', [Controller::class, 'Add'])->name('userAdd');
Route::put('user/create', [Controller::class, 'create'])->name('userCreate');
// Şifremi Unuttum Routları
Route::get('forgot', [Controller::class, 'showForgotForm'])->name('forgot');
Route::post('forgot', [Controller::class, 'sendResetLink'])->name('forgot.link');
Route::get('reset{token}', [Controller::class, 'showResetForm'])->name('reset');
Route::post('reset', [Controller::class, 'resetPassword'])->name('resetPassword');
// Contact Routları
Route::get('contact', [ContactUsFormController::class, 'createForm']);
Route::post('contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact');
Route::post('contactDelete', [ContactUsFormController::class, 'ContactDelete'])->name('contactDelete');
Route::post('/send-email', [ContactUsFormController::class, 'sendEmail'])->name('sendEmail');
Route::get('contact/reply/{id}', [ContactUsFormController::class, 'reply'])->name('ContactReply');

// Order Routları
Route::post('orderDelete', [Controller::class, 'orderDelete'])->name('orderDelete');
Route::get('order/detail/{id}', [Controller::class, 'orderDetail'])->name('orderDetail');
Route::put('order/update/{id}', [Controller::class, 'orderUpdate'])->name('orderUpdate');
