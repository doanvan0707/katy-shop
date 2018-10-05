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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Customer\HomeController@index')->name('home.index');
Route::get('/shopping-cart', 'Customer\HomeController@shopping')->name('home.shopping');
Route::get('/checkout', 'Customer\HomeController@checkout')->name('home.checkout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
	Route::get('/', 'PageController@index');
	Route::get('/comments', 'CommentController@index')->name('comments.index');
	Route::resource('customers', 'CustomerController');
	Route::resource('products', 'ProductController');
	Route::resource('orders', 'OrderController');
	Route::get('/detail', 'OrderController@detail')->name('orders.detail');
});