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




// 
Route::get('/products/{id}','ProductController@show'); // Ver Productos sin roll de administrador

// 
Route::post('/cart','CartDetailController@store'); // Agregar Producto al Carrito de compra
Route::delete('/cart','CartDetailController@destroy'); // Eliminar Producto del Carrito de compra
Route::post('/order','CartController@update'); // Confirmar Pedido


// RUTAS BAJO EL ROLL DE ADMINISTRADOR
Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function(){
    // Rutas Vista Productos...
    Route::get('/products','ProductController@index'); // Listar Productos con roll de administrador
    Route::get('/products/create','ProductController@create'); // Crear un nuevo Producto
    Route::post('/products','ProductController@store'); // Actualiza un Registro de Producto

    // Rutas Para Edición de Productos Existentes
    Route::get('/products/{id}/edit','ProductController@edit'); // Realiza la petición al producto a actualizar
    Route::post('/products/{id}/edit','ProductController@update'); // Actualiza un Registro de Producto

    // Ruta Para La Eliminación del producto
    Route::delete('/products/{id}','ProductController@destroy'); // Realiza la petición al producto a actualizar

    // Ruta para el Registro de nuevas imagenes al Producto
    Route::get('/products/{id}/images', 'ImageController@index'); // Listar Imagenes
    Route::post('/products/{id}/images', 'ImageController@store'); // Guardar Nuevas Imagenes
    Route::delete('/products/{id}/images', 'ImageController@destroy'); // Eliminar Imagenes

    // Ruta Para destacar una imagen de Producto
    Route::get('/products/{id}/images/select/{image}','ImageController@select');
   
});

 // Rutas sin el middleware y sin prefix('admin')
    //// Rutas Vista Productos...
    // Route::get('/admin/products','ProductController@index'); // Listar Productos
    // Route::get('/admin/products/create','ProductController@create'); // Crear un nuevo Producto
    // Route::post('/admin/products','ProductController@store'); // Actualiza un Registro de Producto

    //// Rutas Para Edición de Productos Existentes
    // Route::get('/admin/products/{id}/edit','ProductController@edit'); // Realiza la petición al producto a actualizar
    // Route::post('/admin/products/{id}/edit','ProductController@update'); // Actualiza un Registro de Producto

    //// Ruta Para La Eliminación del producto
    // Route::delete('/admin/products/{id}','ProductController@destroy'); // Realiza la petición al producto a actualizar
