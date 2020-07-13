<?php

use Illuminate\Support\Facades\Route;

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
    return view('Login');
});

Route::get('/login','Userauthentication@index')->name('login');
Route::get('/register','Userauthentication@register')->name('register');
Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/menu','MenuController@index')->name('menu');
Route::get('/add-product','ProductController@index')->name('add-product');
Route::get('/add-category','CategoryController@index')->name('add-category');
Route::get('/add-addongroup','AddongroupController@index')->name('add-addongroup');
Route::get('/add-addon','AddonController@index')->name('add-addon');
Route::get('/coupons','CouponController@index')->name('coupons');
Route::get('/add-coupon','CouponController@addcoupon')->name('add-coupon');
Route::get('/add-payment','PaymentmethodController@addpayment')->name('add-payment');
Route::get('/add-shipping','ShippingmethodController@addshipping')->name('add-shipping');
Route::get('/shipping-method','ShippingmethodController@index')->name('shipping-method');
Route::get('/payments-method','PaymentmethodController@index')->name('payments-method');

Route::get('404', 'PagesController@index');

Route::fallback(function () {
    return redirect('404');

});