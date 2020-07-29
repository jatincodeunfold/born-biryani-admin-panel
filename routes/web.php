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
//Route::get('/register','Userauthentication@register')->name('register');

Route::get('404', 'PagesController@index');

Route::post('/login-process','Userauthentication@login_process')->name('login-process');


Route::fallback(function () {
    return redirect('404');
});

Route::get('/logout', function () {
    session()->forget('auth');
    return redirect('login');
});

Route::group(['middleware'=>['customAuth']],function(){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/menu','MenuController@index')->name('menu');
   
    Route::get('/category', function () {
        return view('Addcategory');
    });
    Route::post('/add-category','CategoryController@index')->name('add-category');

    Route::get('/product', function () {
        return view('Addproduct');
    });
    Route::post('/add-product','ProductController@index')->name('add-product');

    Route::get('/addongroup', function () {
        return view('Addongroup');
    });
    Route::post('/add-addongroup','AddongroupController@index')->name('add-addongroup');
    Route::post('/getproducts','AddongroupController@getproducts')->name('getproducts');

    Route::get('/addon', function () {
        return view('Addon');
    });
   
    Route::post('/add-addon','AddonController@index')->name('add-addon');
    Route::post('/getaddongroup','AddonController@getaddongroup')->name('getaddongroup');

    Route::get('/addcoupon', function () {
        return view('Addcoupon');
    });

    Route::get('/coupons','CouponController@index')->name('coupons');
    Route::post('/add-coupon','CouponController@addcoupon')->name('add-coupon');

    Route::get('/addpayment', function () {
        return view('addPaymentMethod');
    });
    Route::get('/paymentsmethods','PaymentmethodController@index')->name('paymentsmethods');
    Route::post('/add-payment','PaymentmethodController@addpayment')->name('add-payment');

    Route::get('/addshipping', function () {
        return view('addShippingMethod');
    });
    Route::post('/add-shipping','ShippingmethodController@addshipping')->name('add-shipping');
    Route::get('/shippingmethods','ShippingmethodController@index')->name('shippingmethods');
    
});