<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
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

// Route::get('/daftar_mahasiswa', 
// 'App\Http\Controllers\MahasiswaController@index');

// Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
// Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
Route::get('/detail_mahasiswa/daftar_kekayaan', [MahasiswaController::class, 'daftar_kekayaan']);


// Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
// Route::view('/daftar_mahasiswa', 'daftar_mahasiswa');
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/tentang', [AdminController::class, 'show_tentang']);
Route::get('/admin/liga', [AdminController::class, 'show_liga']);
Route::get('/admin/trofi', [AdminController::class, 'show_trofi']);
Route::get('/admin/pemain', [AdminController::class, 'show_pemain']);
Route::get('/admin/sejarah', [AdminController::class, 'show_sejarah']);