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

Route::prefix('master')->group(function() {
    Route::get('/', 'MasterController@index');
    //z001
    Route::get('z001', 'Z001Controller@index');
    Route::post('/z001/getAllCate', 'Z001Controller@getAllCate');
    Route::post('/z001/save', 'Z001Controller@save');
    Route::post('/z001/delete', 'Z001Controller@delete');

    //z002
    Route::get('z002', 'Z002Controller@index');
    Route::post('z002/create', 'Z002Controller@create');
    Route::post('z002/show', 'Z002Controller@show');
    Route::post('/z002/getAll', 'Z002Controller@getAll');
    Route::post('z002/delete', 'Z002Controller@destroy');

});
