<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');

Route::get('/faq', 'FaqController@faq');

Route::get('/contacto', 'ContactoController@contacto');

Route::get('/perfil', 'PerfilController@perfil');

Route::get('/brands/listar', 'BrandController@listar');

Route::get('/brands/agregar', 'BrandController@agregar');

Auth::routes();

