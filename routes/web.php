<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangKeluarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.dashboard');
});

Route::get('/user', [UserController::class,'index']);

Route::get('/user/tambah', [UserController::class,'create']);
Route::post('/user/simpan', [UserController::class,'store']);

Route::get('/user/edit/{id}', [UserController::class,'show']);
Route::post('user/update/{id}', [UserController::class,'update']);

Route::get('/user/hapus/{id}', [UserController::class,'destroy']);



Route::get('/barang', [BarangController::class,'index']);

Route::get('/barang/tambah', [BarangController::class,'create']);
Route::post('/barang/simpan', [BarangController::class,'store']);

Route::get('/barang/edit/{id}', [BarangController::class,'show']);
Route::post('barang/update/{id}', [BarangController::class,'update']);

Route::get('/barang/hapus/{id}', [BarangController::class,'destroy']);



Route::get('/jenis', [JenisController::class,'index']);

Route::get('/jenis/tambah', [JenisController::class,'create']);
Route::post('/jenis/simpan', [JenisController::class,'store']);

Route::get('/jenis/edit/{id}', [JenisController::class,'show']);
Route::post('/jenis/update/{id}', [JenisController::class,'update']);


Route::get('/supplier', [SupplierController::class, 'index']);

Route::get('/supplier/tambah', [SupplierController::class,'create']);
Route::post('/supplier/simpan', [SupplierController::class,'store']);

Route::get('/supplier/edit/{id}', [SupplierController::class,'show']);
Route::post('/supplier/update/{id}', [SupplierController::class,'update']);


Route::get('/barang_masuk', [BarangMasukController::class,'index']);

Route::get('/barang_masuk/tambah', [BarangMasukController::class, 'create']);
Route::post('/barang_masuk/simpan', [BarangMasukController::class, 'store']);


Route::get('/barang_keluar', [BarangKeluarController::class, 'index']);

Route::get('/barang_keluar/tambah', [BarangKeluarController:: class,'create']);
Route::post('/barang_keluar/simpan', [BarangKeluarController:: class,'store']);








