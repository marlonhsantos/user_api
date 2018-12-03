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

Route::prefix('api')->group(function () {
    Route::get('user', 'UserController@get')->name('users');
    Route::get('user/{id}', 'UserController@read')->name('user');
    Route::put('user/{id}', 'UserController@update')->name('update_user');
    Route::post('user', 'UserController@create')->name('create_user');
    Route::delete('user/{id}', 'UserController@delete')->name('delete_user');
});