<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', 'IndexController@index')->name('/');
Route::get('faq', 'FaqController@faq')->name('faq');
Route::get('contacto', 'ContactoController@contacto')->name('contacto');
Route::get('profile', 'ProfileController@profile')->middleware('auth')->name('profile');

Route::get('products/watches', 'ProductController@showProducts')->name('products.watches'); //debe estar antes que el resource
Route::get('products/watches/brands/{brand}', 'ProductController@showByBrand')->name('products.brand');
Route::get('products/watches/categories/{category}', 'ProductController@showByCategory')->name('products.category');
Route::get('products/watches/genres/{genre}', 'ProductController@showByGenre')->name('products.genre');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('brands', 'BrandController');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('users', 'UserController');
});

Auth::routes();
