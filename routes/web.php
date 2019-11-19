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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Categoria', 'CategoriaController@index')->name('Categoria');
Route::get('/detalles/{id}', 'ProductoController@index')->name('DetallesProducto');
Route::get('/inicio/{filename}', 'ProductoController@getproducto')->name('inicio.producto');

Route::get('/adminPanel', 'AdminController@index')->name('AdminPanel');
Route::get('/adminPanel/clientes', 'AdminController@showClientes')->name('Clientes');
Route::get('/adminPanel/productos', 'AdminController@showProducto')->name('Productoslist');
Route::get('/adminPanel/productos/actualizar/{id}', 'AdminController@edit')->name('ProductosEditar');
Route::get('/adminPanel/productos/eliminar/{id}', 'ProductoController@destroy')->name('ProductosEliminar');
Route::post('/producto/update/{id}', 'ProductoController@update')->name('producto.update');

Route::get('/Categoria/alimentosybebidas', 'CategoriaController@showAlimentosybebidas')->name('alimentosybebidas');
Route::get('/Categoria/bebes', 'CategoriaController@showBebes')->name('bebes');
Route::get('/Categoria/celularesytelefonia', 'CategoriaController@showCelularesytelefonia')->name('celularesytelefonia');
Route::get('/Categoria/computacion', 'CategoriaController@showComputacion')->name('computacion');
Route::get('/Categoria/consolasyvideojuegos', 'CategoriaController@showConsolasyvideojuegos')->name('consolasyvideojuegos');
Route::get('/Categoria/electrodomestico', 'CategoriaController@showElectrodomestico')->name('electrodomestico');
Route::get('/Categoria/hogarmueblesjardin', 'CategoriaController@showHogarmueblesjardin')->name('hogarmueblesjardin');
Route::get('/Categoria/juegosyjuguetes', 'CategoriaController@showJuegosyjuguetes')->name('juegosyjuguetes');
Route::get('/Categoria/ropabolsascalzado', 'CategoriaController@showRopabolsascalzado')->name('ropabolsascalzado');

Route::get('/agregarProducto', 'ProductoController@agregar')->name('agregarproducto');
Route::post('/agregarProducto/save', 'ProductoController@save')->name('agregarproductosave');


Route::post('/cliente/update/{id}', 'AdminController@update')->name('cliente.update');
Route::get('/adminPanel/clientes/eliminar/{id}', 'AdminController@destroy')->name('clienteEliminar');
Route::get('/adminPanel/clientes/actualizar/{id}', 'AdminController@clienteseditar')->name('clienteEditar');

Route::post('/ventas/savedatos', 'ventascontroller@savedatos')->name('saveventas');
Route::get('/ventas', 'ventascontroller@index')->name('indexventas');