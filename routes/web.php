<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'BlogController@index');
Route::get('/admin', 'BlogController@addProduct');
Route::post('/store', 'BlogController@store');
Route::get('/', 'BlogController@index');
Route::get('/delete/{post}', 'BlogController@delete');
Route::get('/update/{post}', 'BlogController@update');
Route::patch('/storeupdate/{post}', 'BlogController@storeUpdate');
Route::get('/post/{post}', 'BlogController@show');
Route::post('/post/{post}/comment', 'CommentController@addComment');
Route::post('/storecategory', 'CategoryController@storecategory');
Route::get('/category/{item}', 'CategoryController@showCategory');
Route::get('/order', 'OrderController@order');
Route::post('/placeOrder', 'OrderController@placeOrder');
Route::get('/cart', 'CartController@index');
Route::post('/addToCart/{post}', 'CartController@addToCart');
Route::get('/remove/{post}', 'CartController@remove');
Route::get('/vieworder/{order}', 'OrderController@vieworder');
Route::post('/addquantity/{post}', 'CartController@addquantity');
Route::post('/removequantity/{post}', 'CartController@removequantity');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
