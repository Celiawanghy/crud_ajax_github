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

Route::get('/', 'UsersController@create');
Route::post('/display', 'UsersController@store');
Route::get('/listing', 'UsersController@listing');
Route::post('/delete', 'UsersController@delete');