<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index')->name('/');
Route::get('faq', 'FaqController@faq')->name('faq');
Route::get('contacto', 'ContactoController@contacto')->name('contacto');
Route::get('profile', 'ProfileController@profile')->middleware('auth')->name('profile');


Route::get('products/watches', 'ProductController@showProducts')->name('products.watches'); //debe estar antes que el resource

Route::group(['middleware' => 'auth'], function() {
    Route::resource('brands', 'BrandController');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('users', 'UserController');
});

Auth::routes();
