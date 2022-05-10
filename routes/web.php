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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/role','App\Http\Controllers\RoleController@index');
Route::get('/role/tambah','App\Http\Controllers\RoleController@tambah');
Route::post('/role/save','App\Http\Controllers\RoleController@save');
Route::get('/role/edit/{id}','App\Http\Controllers\RoleController@edit');
Route::post('/role/update','App\Http\Controllers\RoleController@update');
Route::get('/role/delete/{id}','App\Http\Controllers\RoleController@delete');

Route::get('/user','App\Http\Controllers\UserController@index');
Route::get('/user/tambah','App\Http\Controllers\UserController@tambah');
Route::post('/user/save','App\Http\Controllers\UserController@save');
Route::get('/user/edit/{id}','App\Http\Controllers\UserController@edit');
Route::post('/user/update','App\Http\Controllers\UserController@update');
Route::get('/user/delete/{id}','App\Http\Controllers\UserController@delete');
