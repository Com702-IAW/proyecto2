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

Route::any('/panelAdmin', 'AdminController@index')->name('panelAdmin');

<<<<<<< HEAD
Route::any('panelAdmin/store', 'ComponenteController@store');

Route::post('/producto/store', 'PedidoController@store')->name('guardarPedido');

Route::any('/panelPedidos', 'PedidoController@index')->name('panelPedidos');
=======
Route::any('panelAdmin/store', 'AdminController@store');

Route::any('/producto/store', 'PedidoController@store')->name('guardarPedido');

Route::post('/panelPedidos', 'PedidoController@index')->name('panelPedidos');
>>>>>>> 04c3040d69e6eff0c9ca1feda58e2085b03908fe

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('github');

Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/redirect', 'SocialAuthController@redirect');

Route::get('/callback', 'SocialAuthController@callback');

Route::get('/pdf', 'PdfController@invoice');
<<<<<<< HEAD

Route::get('/token/{id}', 'PedidoController@compartido');
=======
>>>>>>> 04c3040d69e6eff0c9ca1feda58e2085b03908fe
