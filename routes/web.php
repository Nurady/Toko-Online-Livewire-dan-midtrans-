<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/product', '\App\Http\Livewire\Product\Index')
    ->name('admin.product')
    ->middleware('auth');

Route::get('/shop', '\App\Http\Livewire\Shop\Index')
    ->name('shop.index');

Route::get('/cart', '\App\Http\Livewire\Shop\Cart')
    ->name('shop.cart');

Route::get('/checkout', '\App\Http\Livewire\Shop\Checkout')
    ->name('shop.checkout');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
