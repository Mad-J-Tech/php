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


Route::get("register", "RegisterController@index");

Route::post("register", "RegisterController@store");

Route::get("login", "LoginController@index");

Route::get("task", "TaskController@index");

Route::post("task", "TaskController@store");

Route::delete("task/{id}", "TaskController@destroy");
