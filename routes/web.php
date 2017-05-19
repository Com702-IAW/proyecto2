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

Route::get('/', 'ComponenteController@index');

Route::get('/componentes/json', 'ComponenteController@json');

Auth::routes();

Route::get('/producto','ComponenteController@producto')->name('producto');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/panelAdmin', 'AdminController@index')->name('panelAdmin');

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('github');

Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/redirect', 'SocialAuthController@redirect');

Route::get('/callback', 'SocialAuthController@callback');
