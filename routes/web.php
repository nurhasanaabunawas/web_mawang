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
use App\Http\Controllers\user\LayananController;
use App\Http\Controllers\user\LembagaController;
use App\Http\Controllers\user\DataPendudukController;
use App\Http\Controllers\user\PkkController;
use App\Http\Controllers\user\UmkmController;
use App\Http\Controllers\user\KarangtarunaController;
use App\Http\Controllers\user\PosyanduController;
use App\Http\Controllers\user\LpmController;
use App\Http\Controllers\user\FkpmController;
use App\Models\User;

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
  Route::resource('user', UserController::class);
  Route::resource('profil', ProfilController::class);
  Route::resource('layanan', LayananController::class);
  Route::resource('lembaga', LembagaController::class);
  Route::resource('datapenduduk', DataPendudukController::class);
  Route::resource('pkk', PkkController::class);
  Route::resource('karangtaruna', KarangtarunaController::class);
  Route::resource('umkm', UmkmController::class);
  Route::resource('posyandu', PosyanduController::class);
  Route::resource('lpm', LpmController::class);
  Route::resource('fkpm', FkpmController::class);

  Route::get('login', [login::class, 'index'])->name('admin.login')->middleware('guest');
	Route::post('login', [login::class, 'authenticate'])->name('admin.authenticate');
  Route::get('logout', [login::class, 'logout'])->name('admin.logout');
  
});
Route::middleware(['auth'])->group(function(){
  Route::prefix('admin')->group(function(){
      Route::resource('dashboard', DashboardController::class);
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
});
  
