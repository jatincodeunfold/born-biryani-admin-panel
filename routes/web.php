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
Route::get('/register', function () {
    return view('Register');
});

Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/menu','MenuController@index')->name('menu');
Route::get('/add-product','ProductController@index')->name('add-product');
Route::get('/add-category','CategoryController@index')->name('add-category');
Route::get('/add-addongroup','AddongroupController@index')->name('add-addongroup');
Route::get('/add-addon','AddonController@index')->name('add-addon');
