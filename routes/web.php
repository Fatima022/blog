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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/info-contacto', 'HomeController@detalle')->name('detalle');

/*
//READ LEER
Route::get();

// CREATE CREAR
Route::post();

//UPDATE ACTUALIZAR
Route::put();

//DELETE BORRAR
Route::delete();
*/

Route::resource('/blog', 'PostController');
/*
blog.index
blog.edit
blog.show
blog.create
*/

