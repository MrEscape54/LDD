<?php

Route::get('/', 'IndexController@index');

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@submit');

Route::get('/faq', 'FaqController@faq');

Route::get('/contacto', 'ContactoController@contacto');

Route::get('/registro','RegistroController@registro');
Route::post('/registro','RegistroController@validator');

Route::get('/perfil','PerfilController@perfil');

Route::get('/brands/listar','BrandController@listar');

Route::get('/brands/agregar','BrandController@agregar');

