<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');
Route::get('faq', 'FaqController@faq')->name('faq');
Route::get('contacto', 'ContactoController@contacto')->name('contacto');
Route::get('profile', 'ProfileController@profile')->middleware('auth')->name('profile');

Route::resources([
    'brands' => 'BrandController',
    'categories' => 'CategoryController',
    'products' => 'ProductController'
]);

Auth::routes();