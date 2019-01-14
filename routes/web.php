<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/register/verify/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

Route::get('/home', 'HomeController@index')->name('home');


// Admin Login
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::get('admin/panel', 'Admin\AdminController@index')->name('admin.panel');


// shop Login
Route::get('shop/login', 'Shop\LoginController@showLoginForm')->name('shop.login');
Route::post('shop/login', 'Shop\LoginController@login');
Route::post('shop/logout', 'Shop\LoginController@logout')->name('shop.logout');

Route::get('shop/panel', 'Shop\ShopController@index')->name('shop.panel');

//Shop register
Route::get('shop/register', 'Shop\RegisterController@showRegistrationForm')->name('shop.register');
Route::post('shop/register', 'Shop\RegisterController@register');

Route::get('shop/rate', 'Shop\ShopController@showRateForm')->name('shop.rate');

Route::post('shop/payPremium', 'Shop\ShopPayPalController@payPremium')->name('payPremium');

Route::get('/shop/activate/{code}', 'Shop\ShopPayPalController@activateShop')->name('activate.shop');

//PayPal
//payment form
Route::get('/formPaypal', 'PaymentController@index');
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

//Lozalización
Route::get('{locale}/testLocalizacion', 'localizacionController@test')->name('localizacion.test')->where([
    'lang' => 'en|es']);
Route::get('{locale}/testLocalizacion2', 'localizacionController@test2')->name('localizacion.test2')->where([
    'lang' => 'en|es']);

//Editor
Route::get('editor', 'editorController@index')->name('editor');
