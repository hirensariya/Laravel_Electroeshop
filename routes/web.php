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
Route::get('/', 'admin@home');

Route::post('/register','admin@register');

Route::post('/login','admin@login');

Route::get('/logout', 'admin@logout');

Route::get('/login', function () {
    return view('login');
});

Route::get('/product/{cat}', 'admin@index');

Route::get('/product-detail/{id}', 'admin@product');

Route::get('/addcart', 'admin@addcart');

Route::get('/cart', 'admin@cart');

Route::get('/uptcart', 'admin@uptcart');

Route::get('/checkout', 'admin@checkout');

Route::post('/placeorder', 'admin@placeorder');

Route::get('/thank', 'admin@thank');

Route::get('/deletecart/{id}', 'admin@deletecart');

Route::get('/vieworder', 'admin@vieworder');

Route::get('/editprof', 'admin@editprof');

Route::post('/editprof', 'admin@upprof');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

// ADMIN ROUTE

Route::post('/admin/', 'admin@adminlogin');

Route::get('/admin/', function () {
    return view('admin/index');
});


Route::get('/admin/dashbord', 'admin@admindashbord');

Route::post('/admin/product', 'admin@adminaddproduct');

Route::get('/admin/product', function () {
    return view('admin/addproduct');
});


Route::get('/admin/order', 'admin@adminorder');

Route::get('/admin/custmer', 'admin@admincustmer');

Route::get('/admin/logout', 'admin@adminlogout');

Route::get('/admin/editproduct/{id}', 'admin@admineditproduct');

Route::post('/admin/editproduct/{id}', 'admin@admindetailproduct');

Route::get('/admin/deletproduct/{id}', 'admin@admindeletproduct');