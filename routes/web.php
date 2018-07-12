<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');
Route::get('/faq', 'FaqController@faq');
Route::get('/contacto', 'ContactoController@contacto');
Route::get('/perfil', 'PerfilController@perfil');

Route::resources([
    'brands' => 'BrandController',
    'categories' => 'CategoryController',
    'genres' => 'GenreController'
]);

Auth::routes();

