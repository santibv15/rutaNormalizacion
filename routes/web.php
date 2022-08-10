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

Route::get('/', function () {
    return view('welcome');
});

#region estado producto
Route::get('EstadoProducto/insert', function(){
    return view('EstadoProducto/insert');
})->name('insertestadop');

Route::post ('EstadoProducto/insert', 'EstadopController@InsertEstadop')->name('InsertEstadoP');

Route::get ('EstadoProducto/view', 'EstadopController@ViewEstadop')->name('ViewEstadoP');

Route::get('EstadoProducto/update/{id}', 'EstadopController@UpdateEstadop')->name('UpdateEstadoP');

Route::post('EstadoProducto/update', 'EstadopController@UpdateBdEstadop') ->name('UpdateBdEstadoP');

Route::get('EstadoProducto/delete/{id}','EstadopController@DeleteEstadop')->name('DeleteEstadoP');
#endregion


#region categoria
Route:: get('Categoria/insert', function(){
    return view('Categoria/insert');
})->name('insertcategoria');

Route::post('Categoria/insert', 'CategoriaController@InsertCategoria')->name('InsertCategoria');

Route::get('Categoria/view', 'CategoriaController@ViewCategoria')->name('ViewCategoria');

Route::get('Categoria/update/{id}', 'CategoriaController@UpdateCategoria')->name('UpdateCategoria');

Route::post('Categoria/update', 'CategoriaController@UpdateBdCategoria') ->name('UpdateBdCategoria');

Route::get('Categoria/delete/{id}', 'CategoriaController@DeleteCategoria')->name('DeleteCategoria');

#endregion

#region mesa sectorial

Route::get('MesaSectorial/insert', function (){
    return view('MesaSectorial/insert');
})->name('insertmesa');

Route::post('MesaSectorial/insert', 'MesaController@InsertMesa')->name('InsertMesa');

Route::get('MesaSectorial/view', 'MesaController@ViewMesa')->name('ViewMesa');

Route::get('MesaSectorial/update/{id}', 'MesaController@UpdateMesa')->name('UpdateMesa');

Route::post('MesaSectorial/update', 'MesaController@UpdateBdMesa') ->name('UpdateBdMesa');

Route::get('MesaSectorial/Delete/{id}', 'MesaController@DeleteMesa')->name('DeleteMesa');
#endregion