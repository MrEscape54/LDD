<?php

Route::get('/', 'IndexController@index');
Route::get('/login', 'LoginController@login');
Route::get('/faq', 'FaqController@faq');
Route::get('/contacto', 'ContactoController@contacto');
Route::get('/registro','RegistroController@registro');
Route::get('/perfil','PerfilController@perfil');