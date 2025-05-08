<?php

use App\Http\Controllers\EskulController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\FrontController;
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

Auth::routes();

Route::get('/',[FrontController::class, 'index']);
route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('informasi', InformasiController::class);
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('eskul', EskulController::class);
    Route::resource('fasilitas', FasilitasController::class);

});
