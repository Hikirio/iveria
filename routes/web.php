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
Route::get('/about','HomePageController@about');
Route::get('/about/source','HomePageController@source');
Route::get('/about/product','HomePageController@product');
Route::get('/about/mineral','HomePageController@mineral');
//Route::get('/about','HomePageController@about');

Route::get('/product', function () {
    return view('infopage.product');
});
Route::get('/contact', function () {
    return view('infopage.contact');
});

//==========Админка================
Route::get('/admin', 'ProductionController@index');
Route::get('/admin/tables','UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
