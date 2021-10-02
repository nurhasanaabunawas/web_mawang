<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\WilayahAdministrasi;
use App\Http\Controllers\admin\PemerintahanController;
use App\Http\Controllers\admin\Penduduk;
use App\Http\Controllers\admin\LaporanBulanan;
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
//     Route::get('dashboard', [DashboardController::class, 'index']);
// });

Route::prefix('admin')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('penduduk', [Penduduk::class, 'index'])->name('admin.penduduk');
    Route::get('laporan_bulanan', [LaporanBulanan::class, 'index'])->name('admin.laporan_bulanan');



    Route::resource('wilayah_administrasi', WilayahAdministrasi::class)->only([
			'index', 'store', 'update', 'destroy'
		]);
    Route::resource('pemerintahan', PemerintahanController::class)->only([
    	'index', 'store', 'update', 'destroy'
    ]);
});

