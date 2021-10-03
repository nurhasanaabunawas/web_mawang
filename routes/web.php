<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\WilayahAdministrasi;
use App\Http\Controllers\admin\PemerintahanController;
use App\Http\Controllers\admin\PendudukController;
use App\Http\Controllers\admin\LaporanBulanan;
use App\Http\Controllers\Login;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\ProfilController;

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
//     Route::resource('/', UserController::class)->only([
//       'index'
//     ]);
// });

Route::prefix('/')->group(function(){
  Route::resource('dashboard', UserController::class);
  Route::resource('profil', ProfilController::class);
  
});

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

    Route::resource('penduduk', PendudukController::class)->only([
    	'index', 'store', 'update', 'destroy'
    ]);

   
});

Route::get('/login', function() {
  return view('User.login');
});

Route::post('/postlogin', 'Login@postlogin')->name('postlogin');
