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



Route::middleware(['auth','admin'])->prefix('admin')->group(function (){
    
Route::get('/products', 'ProductController@index'); //listar
Route::get('/products/create', 'ProductController@create'); //formulario
Route::post('/products', 'ProductController@store'); //registrar
Route::get('/products/{id}/edit', 'ProductController@edit'); //editar
Route::post('/products/{id}/edit', 'ProductController@update'); //update
Route::post('/products/{id}/delete', 'ProductController@destroy'); //eliminar

Route::get('/products/{id}/images', 'ImageController@index'); //listado de images de x id
Route::post('/products/{id}/images', 'ImageController@store'); //almacenar
Route::delete('/products/{id}/images', 'ImageController@destroy'); //borrar


});

