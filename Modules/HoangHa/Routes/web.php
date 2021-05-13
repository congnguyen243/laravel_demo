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

Route::prefix('hoangha')->group(function() {
    Route::get('/', 'HoangHaController@index');
    Route::get('/detailProduct', 'HoangHaController@detail');
    // Route::post('/detail', 'HoangHaController@getDetail');
});
