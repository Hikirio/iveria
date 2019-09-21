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

//route all about branches

Route::get('/about','HomePageController@about');
Route::get('/about/source','HomePageController@source');
Route::get('/about/product','HomePageController@product');
Route::get('/about/mineral','HomePageController@mineral');


Route::get('/product', function () {
    return view('infopage.product');
});
Route::get('/contact', function () {
    return view('infopage.contact');
});

//==========Админка================
Route::get('/admin', 'AdminController@index');
Route::get('/admin/tables','UserController@index');

//==========CRUD===================
Route::delete('/admin/tables/{per}','UserController@destroy');
Route::get('/admin/tables/{per}/edit','UserController@edit');
Route::PUT('/admin/tables/{per}/update', 'UserController@update');
Route::get('/admin/tables/{per}/update', 'AdminController@update');



Route::get('/admin/oursource', 'AboutController@index');
Route::put('/admin/oursource', 'AboutController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
