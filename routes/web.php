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

Route::get('/pedidos/listado','PedidoController@json');

Route::get('/pedidos/listado/{id}','PedidoController@pedidoId');

Auth::routes();

Route::get('/producto','ComponenteController@index')->name('producto');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/panelAdmin', 'AdminController@index')->name('panelAdmin');

Route::any('panelAdmin/store', 'ComponenteController@store');

Route::post('/producto/store', 'PedidoController@store')->name('guardarPedido');

Route::any('/panelPedidos', 'PedidoController@index')->name('panelPedidos');

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('github');

Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/redirect', 'SocialAuthController@redirect');

Route::get('/callback', 'SocialAuthController@callback');

Route::get('/pdf', 'PdfController@invoice');

Route::get('/token/{id}', 'PedidoController@compartido');
