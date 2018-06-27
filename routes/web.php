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

Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/backet', 'HomeController@backet');
Route::post('/send-mail', 'HomeController@sendMail');
Route::post('/notify', 'HomeController@notify');

Route::get('/thanks', function(){
  return view('thanks'); 
});

Route::get('/admin', 'AdminController@index');
Route::get('/add-product', 'AdminController@addProduct');
Route::post('/add-product-func/{id?}', 'AdminController@addProductFunc');
Route::get('/getProducts', 'AdminController@getProducts');
Route::any('/deleteProduct/{id}', 'AdminController@deleteProduct');
Route::get('/getProduct/{id}', 'AdminController@getProduct');
Route::post('/deleteCurrentImage', 'AdminController@deleteCurrentImage');
Route::post('/makeGeneralImage', 'AdminController@makeGeneralImage');
Route::post('/addImage/{id}', 'AdminController@addImage');
Route::get('/notes', 'AdminController@getNotes');
Route::get('/messages', 'AdminController@getMessages');

Route::get('/product/{id}', 'HomeController@single');
