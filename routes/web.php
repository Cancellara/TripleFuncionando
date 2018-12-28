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