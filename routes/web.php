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

// Route::get('/pens', 'PenController@index')->name('pens.index');
// Route::get('/pens/create', 'PenController@create')->name('pens.create');
// Route::get('/pens/{pen}', 'PenController@show')->name('pens.show');
// Route::get('/pens/{pen}/edit', 'PenController@edit')->name('pens.edit');
// Route::patch('/pens/{pen}', 'PenController@update')->name('pens.update');
// Route::put('/pens/{pen}', 'PenController@update')->name('pens.update');
// Route::post('/pens', 'PenController@store')->name('pens.store');

Route::resource('pens', 'PenController');
