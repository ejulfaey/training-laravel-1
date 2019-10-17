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

Route::name('todo.')->group(function () {

    Route::name('index')->get('/', 'TodoController@index');
    Route::name('create')->get('create', 'TodoController@create');
    Route::name('store')->post('store', 'TodoController@store');
    Route::name('edit')->get('edit/{todo}', 'TodoController@edit');
    Route::name('update')->post('update/{todo}', 'TodoController@update');
    Route::name('delete')->get('delete/{todo}', 'TodoController@delete');

});
