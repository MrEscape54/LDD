<?php

Route::get('/', 'IndexController@index');

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@submit');

Route::get('/faq', 'FaqController@faq');

Route::get('/contacto', 'ContactoController@contacto');

Route::get('/register','RegisterController@register');
Route::post('/register','RegisterController@submit');

Route::get('/perfil','PerfilController@perfil');

Route::get('/brands/listar','BrandController@listar');

Route::get('/brands/agregar','BrandController@agregar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
