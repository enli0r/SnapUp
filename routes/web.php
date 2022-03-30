<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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

//Pages
Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');

//Register
Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@store'); //Inheriting the name register

//Login
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store'); //Inheriting the name login

//Logout
Route::post('/logout', 'LogoutController@store')->name('logout'); //Has to be post request

//Products
Route::group(['prefix' => 'products'], function(){
    Route::get('/', 'ProductController@index')->name('products');
    Route::put('/', 'ProductController@index');

    Route::get('/{post:id}', 'ProductController@show')->name('show');
    Route::put('/{post:id}', 'CartController@store')->name('cart.store');

    Route::get('/categories/{category?}/{subcategorySlug?}', 'CategoryController@index')->name('products.categories');
});

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/{id}', 'CartController@destroy')->name('cart.remove');

Route::get('/cart/order-details', 'OrderDetailsController@index')->name('order-details');
Route::put('/cart/order-details', 'OrderDetailsController@validation');


Route::put('/cart/order', 'OrderController@store')->name('order.store');

