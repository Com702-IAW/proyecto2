<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/componentes/json', 'ComponenteController@json');

Auth::routes();

Route::get('/producto','ComponenteController@index')->name('producto');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/panelAdmin', 'AdminController@index')->name('panelAdmin');

Route::post('/panelPedidos', 'UsuarioController@index')->name('panelPedidos');

Route::get('/panelAdmin', 'AdminController@index');

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('github');

Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/redirect', 'SocialAuthController@redirect');

Route::get('/callback', 'SocialAuthController@callback');
