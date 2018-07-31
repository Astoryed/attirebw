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

Route::get('/', 'UserController@welcome')->name('welcome');

Route::get('/about', 'UserController@about')->name('about');

Route::get('/contact', 'UserController@contact')->name('contact');

Route::get('/stockist', 'UserController@stockist')->name('stockist');

Route::get('/newArrivals', 'UserController@newArrivals')->name('newArrivals');

Route::get('/privacy', 'UserController@privacy')->name('privacy');

Route::get('/return', 'UserController@returnPolicy')->name('returnPolicy');

Route::get('/ready', 'UserController@ready')->name('ready');

Route::get('/client', 'UserController@client')->name('client');

Route::get('/details/{id}', 'UserController@details')->name('details');

Route::resource('/cart', 'CartController');


Auth::routes();

Route::get('/poster','CartController@poster');

Route::get('/more/{id}','CartController@getMore')->name('more');

Route::get('/deleteCart','CartController@deleteCart')->name('deleteCart');

Route::post('/add-to-cart/{id}','CartController@getAddToCart')->name('addToCart');

Route::get('/remove/{id}','CartController@getDelete')->name('remove');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/products', 'ProductController');

Route::resource('/customer', 'CustomerController');


Route::prefix('admin')->group(function() {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/', 'AdminUserController@index')->name('admin.dashboard');

    Route::get('/create', 'AdminUserController@create')->name('create');

    Route::get('/display', 'AdminUserController@display')->name('display');

    Route::post('/store', 'AdminUserController@store')->name('store');

    Route::delete('/destroy/{id}', 'AdminUserController@destroy')->name('destroy');

});

