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
    return view('welcome');
});

// Route::get('/nosotros', function () {
//     return view('nosotros');
// });

// Route::get('/nosotros','RecetaController');
// Route::get('/recetas','RecetaController');

Route::get('/recetas','RecetaController@index')->name('recetas.index');
Route::get('/recetas/create','RecetaController@create')->name('recetas.create');

//la varible tiene que se igual al modelo
Route::get('/recetas/{receta}','RecetaController@show')->name('recetas.show');

Route::post('/recetas','RecetaController@store')->name('recetas.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
