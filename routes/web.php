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
Route::get('/', 'App\Http\Controllers\DashboardControllerYayang@index');

Route::get('/master/petugas', 'App\Http\Controllers\PetugasControllerYayang@index');
Route::get('/master/petugas/tambah', 'App\Http\Controllers\PetugasControllerYayang@tambah')->name('tambahpetugas');
Route::post('/master/petugas/tambah', 'App\Http\Controllers\PetugasControllerYayang@store');
Route::get('/master/petugas/edit/{id}', 'App\Http\Controllers\PetugasControllerYayang@edit');
Route::put('/master/petugas/edit/{id}', 'App\Http\Controllers\PetugasControllerYayang@update');
Route::get('/master/petugas/delete/{id}', 'App\Http\Controllers\PetugasControllerYayang@delete');

Route::get('/master/bagian', 'App\Http\Controllers\BagianControllerYayang@index');
Route::get('/master/bagian/tambah', 'App\Http\Controllers\BagianControllerYayang@tambah')->name('tambahbagian');
Route::post('/master/bagian/tambah', 'App\Http\Controllers\BagianControllerYayang@store');
Route::get('/master/bagian/edit/{id}', 'App\Http\Controllers\BagianControllerYayang@edit');
Route::put('/master/bagian/edit/{id}', 'App\Http\Controllers\BagianControllerYayang@update');
Route::get('/master/bagian/delete/{id}', 'App\Http\Controllers\BagianControllerYayang@delete');

Route::get('/master/barang', 'App\Http\Controllers\BarangControllerYayang@index');
Route::get('/master/barang/tambah', 'App\Http\Controllers\BarangControllerYayang@tambah')->name('tambahbarang');
Route::post('/master/barang/tambah', 'App\Http\Controllers\BarangControllerYayang@store');
Route::get('/master/barang/edit/{id}', 'App\Http\Controllers\BarangControllerYayang@edit');
Route::put('/master/barang/edit/{id}', 'App\Http\Controllers\BarangControllerYayang@update');
Route::get('/master/barang/delete/{id}', 'App\Http\Controllers\BarangControllerYayang@delete');

Route::get('/master/pengeluaran', 'App\Http\Controllers\PengeluaranControllerYayang@index');
Route::get('/master/pengeluaran/tambah', 'App\Http\Controllers\PengeluaranControllerYayang@tambah')->name('tambahpengeluaran');
Route::post('/master/pengeluaran/tambah', 'App\Http\Controllers\PengeluaranControllerYayang@store');
Route::get('/master/pengeluaran/edit/{id}', 'App\Http\Controllers\PengeluaranControllerYayang@edit');
Route::put('/master/pengeluaran/edit/{id}', 'App\Http\Controllers\PengeluaranControllerYayang@update');
Route::get('/master/pengeluaran/delete/{id}', 'App\Http\Controllers\PengeluaranControllerYayang@delete');

Route::get('/master/pengeluaranitem', 'App\Http\Controllers\PengeluaranitemControllerYayang@index');
Route::get('/master/pengeluaranitem/tambah', 'App\Http\Controllers\PengeluaranitemControllerYayang@tambah')->name('tambahpengeluaranitem');
Route::post('/master/pengeluaranitem/tambah', 'App\Http\Controllers\PengeluaranitemControllerYayang@store');
Route::get('/master/pengeluaranitem/edit/{id}', 'App\Http\Controllers\PengeluaranitemControllerYayang@edit');
Route::put('/master/pengeluaranitem/edit/{id}', 'App\Http\Controllers\PengeluaranitemControllerYayang@update');
Route::get('/master/pengeluaranitem/delete/{id}', 'App\Http\Controllers\PengeluaranitemControllerYayang@delete');
