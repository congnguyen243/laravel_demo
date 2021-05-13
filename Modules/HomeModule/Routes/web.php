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

Route::prefix('homemodule')->group(function() {
    Route::get('/', 'HomeModuleController@index');
    Route::get('/home','HomeModuleController@home');
    Route::get('/create',function(){
        return view('homemodule::dashboard.create');
    });
    Route::get('/show/{id}',function(){
        return view('homemodule::dashboard.edit');
    });

    //url
    Route::get('/post/{id}','PostsController@getById');  //get
    Route::get('/delete/{id}','PostsController@destroy');//del
    Route::get('/posts','PostsController@getAllPost');//list
    Route::post ('/post-create','PostsController@create');//create
    // Route::get('api-item','ItemController@getAll');
});
