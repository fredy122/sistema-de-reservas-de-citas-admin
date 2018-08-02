<?php


Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('password/reset', 'Auth\ResetPasswordController@index');

Route::get('dashboard', 'dashboardController@index')->name('dashboard');
Route::get('dashboard/panel', 'panelController@index')->name('panel');
Route::get('dashboard/registro', 'Auth\RegisterController@create');
Route::post('save', 'Auth\RegisterController@save');

Route::get('dashboard/calendario', 'CalendarioController@index');
Route::get('dashboard/citas', 'CitaController@index')->name('citas');

Route::get('dashboard/usuarios', 'Auth\ListarController@index');
Route::get('dashboard/perfil', 'Auth\UsuarioController@index');

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
