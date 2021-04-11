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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/boards', 'Boards\BoardController', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']])
    ->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'boards/{id}'], function () {
        Route::post('like', 'LikeController@store')->name('likes.like');
        Route::delete('unlike', 'LikeController@destroy')->name('likes.unlike');
    });
});
