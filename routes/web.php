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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('layouts.main');
});
Route::get('post','PostController@index');
Route::get('/test',function(){
    return view('welcome');
});
Route::get('/test2',function(){
    return view('test2');
});
Route::get('/test3',function(){
    return view('testPHP');
});

Route::get('/setupuser',function(){
    return view('setupuser');
});

Route::get('/authenticate',function(){
    return view('authenticate');
});

Route::get('/continue',function(){
    return view('continue');
});

Route::get('/logindemo',function(){
    return view('FormLogin');
});

Route::get('/callable',function(){
    return view('callable');
});

// call_user_func_array
Route::get('/calluserfuncarray',function(){
    return view('calluserfuncarray');
});

// overloading
Route::get('/overloading',function(){
    return view('overloading');
});

Route::get('/chapter4',function(){
    return view('chapter4');
});

// Route::post('/post','FormController@store');
// Route::get('/show', 'FormController@show');
// Route::get('/test',function(){
//     return view('form');
// });

