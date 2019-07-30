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
    return view('index');
});
Route::get('/pricing', function () {
    return view('infopage.pricing');
});
Route::get('/about', function () {
    return view('infopage.about');
});
Route::get('/product', function () {
    return view('infopage.product');
});
Route::get('/contact', function () {
    return view('infopage.contact');
});

//==========Админка================
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
