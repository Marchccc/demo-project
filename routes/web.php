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

Route::get('/productList', 'Porduct\ProductController@list');
Route::get('/userList', 'User\UserController@list');
Route::get('/payCallback', 'User\UserController@payCallback');
