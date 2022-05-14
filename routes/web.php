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

// Route::get('/role','App\Http\Controllers\RoleController@index');
// Route::get('/role/tambah','App\Http\Controllers\RoleController@tambah');
// Route::post('/role/save','App\Http\Controllers\RoleController@save');
// Route::get('/role/edit/{id}','App\Http\Controllers\RoleController@edit');
// Route::post('/role/update','App\Http\Controllers\RoleController@update');
// Route::get('/role/delete/{id}','App\Http\Controllers\RoleController@delete');

// Route::get('/user','App\Http\Controllers\UserController@index');
// Route::get('/user/tambah','App\Http\Controllers\UserController@tambah');
// Route::post('/user/save','App\Http\Controllers\UserController@save');
// Route::get('/user/edit/{id}','App\Http\Controllers\UserController@edit');
// Route::post('/user/update','App\Http\Controllers\UserController@update');
// Route::get('/user/delete/{id}','App\Http\Controllers\UserController@delete');


Route::get('/bagian','App\Http\Controllers\BagianController@index');
Route::get('/bagian/tambah','App\Http\Controllers\BagianController@tambah');
Route::post('/bagian/save','App\Http\Controllers\BagianController@save');
Route::get('/bagian/edit/{id}','App\Http\Controllers\BagianController@edit');
Route::post('/bagian/update','App\Http\Controllers\BagianController@update');
Route::get('/bagian/delete/{id}','App\Http\Controllers\BagianController@delete');

Route::get('/barang','App\Http\Controllers\BarangController@index');
Route::get('/barang/tambah','App\Http\Controllers\BarangController@tambah');
Route::post('/barang/save','App\Http\Controllers\BarangController@save');
Route::get('/barang/edit/{id}','App\Http\Controllers\BarangController@edit');
Route::post('/barang/update','App\Http\Controllers\BarangController@update');
Route::get('/barang/delete/{id}','App\Http\Controllers\BarangController@delete');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/save','App\Http\Controllers\PegawaiController@save');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/delete/{id}','App\Http\Controllers\PegawaiController@delete');

Route::get('/pemesanan','App\Http\Controllers\PemesananController@index');
Route::get('/pemesanan/tambah','App\Http\Controllers\PemesananController@tambah');
Route::post('/pemesanan/save','App\Http\Controllers\PemesananController@save');
Route::get('/pemesanan/edit/{id}','App\Http\Controllers\PemesananController@edit');
Route::post('/pemesanan/update','App\Http\Controllers\PemesananController@update');
Route::get('/pemesanan/delete/{id}','App\Http\Controllers\PemesananController@delete');

Route::get('/pengambilan','App\Http\Controllers\PengambilanController@index');
Route::get('/pengambilan/tambah','App\Http\Controllers\PengambilanController@tambah');
Route::post('/pengambilan/save','App\Http\Controllers\PengambilanController@save');
Route::get('/pengambilan/edit/{id}','App\Http\Controllers\PengambilanController@edit');
Route::post('/pengambilan/update','App\Http\Controllers\PengambilanController@update');
Route::get('/pengambilan/delete/{id}','App\Http\Controllers\PengambilanController@delete');

Route::get('/produksi','App\Http\Controllers\ProduksiController@index');
Route::get('/produksi/tambah','App\Http\Controllers\ProduksiController@tambah');
Route::post('/produksi/save','App\Http\Controllers\ProduksiController@save');
Route::get('/produksi/edit/{id}','App\Http\Controllers\ProduksiController@edit');
Route::post('/produksi/update','App\Http\Controllers\ProduksiController@update');
Route::get('/produksi/delete/{id}','App\Http\Controllers\ProduksiController@delete');
