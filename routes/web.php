<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});

//Route::get('/clientes', 'ClientesController@index')->name('Clientes');

//Route::get('/clientes/create', 'ClientesController@create')->name('Create');

//Route::get('/clientes/edit','ClientesController@edit')->name('Edit');

//Route::get('/', function () {
 //   return view('inicio');
//});

route::resource('clientes', 'ClientesController');
route::resource('catalogos', 'CatalogosController');
route::resource('pagosclientes', 'PagosClientesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
