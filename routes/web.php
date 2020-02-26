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

Route::prefix('/login')->group(function () {
    Route::any('index','Login\LoginController@index');
    Route::any('login','Login\LoginController@login');
});

Route::prefix('/ray')->group(function () {
    Route::any('index','Ray\RayController@index');
    Route::any('ray','Ray\RayController@ray');
});