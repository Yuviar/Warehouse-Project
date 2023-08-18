<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
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

Route::get('/',[DashboardController::class,'index']);

Route::get('/daftar-barang', [BarangController::class, 'index'])->name('barang');
Route::post('/daftar-barang/baru', [BarangController::class, 'tambah']);
Route::get('/kategori-barang', [KategoriController::class, 'index']);
Route::post('/kategori-barang/tambah', [KategoriController::class, 'tambah']); 
Route::get('/kategori-barang/edit/{category}', [KategoriController::class, 'edit']);
Route::post('/kategori-barang/edit/{category}', [KategoriController::class, 'editJadi']);
Route::get('/kategori-barang/hapus/{category}', [KategoriController::class, 'hapus']);
Route::post('/kategori-barang/hapus/{category}', [KategoriController::class, 'hapusJadi']);

 
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});
