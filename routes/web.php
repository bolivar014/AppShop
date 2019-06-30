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

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rutas Vista Productos...
Route::get('/admin/products','ProductController@index'); // Listar Productos
Route::get('/admin/products/create','ProductController@create'); // Crear un nuevo Producto
Route::post('/admin/products','ProductController@store'); // Actualiza un Registro de Producto

// Rutas Para Edición de Productos Existentes
Route::get('/admin/products/{id}/edit','ProductController@edit'); // Realiza la petición al producto a actualizar
Route::post('/admin/products/{id}/edit','ProductController@update'); // Actualiza un Registro de Producto
