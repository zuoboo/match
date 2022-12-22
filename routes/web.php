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

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('show/{id}', 'UserController@show')->name('users.show');
    Route::get('edit/{id}', 'UserController@edit')->name('users.edit');
    Route::post('update/{id}', 'UserController@update')->name('users.update');
});

Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/matching', 'MatchingController@index')->name('matching');

Route::group(['prefix' => 'chat', 'middleware' => 'auth'], function () {
    Route::post('show', 'ChatController@show')->name('chat.show');
    Route::post('chat', 'ChatController@chat')->name('chat.chat');
});
