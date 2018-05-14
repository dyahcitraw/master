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
Route::any('product', function () {
    return view('product');
});

Route::get('/', function () {
    return view('demo');
});

Route::get('shopping-cart', function () {
    return view('shopping-cart');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('article', function () {
    return view('article');
});

Route::get('product-detail', function () {
    return view('product-detail');
});

Route::get('admin', function () {
    return view('admin');
});
// Route::get('/demo', function () {
//     return view('demo');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
