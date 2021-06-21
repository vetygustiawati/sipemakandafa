<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\UangmakanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('home');
});
Route::get('base', [HomeController::class, 'showBaseAdmin']);
Route::get('home', [HomeController::class, 'showHome']);
Route::get('visimisi', [HomeController::class, 'showVisimisi']);
Route::get('infopondok', [HomeController::class, 'showInfopondok']);

// Route::get('dashboard', [AdminController::class, 'showDashboard']);
// Route::get('home', [HomeController::class, 'showHomeAdmin']);

Route::prefix('admin')->middleware('auth')->group(function() {
	Route::get('dashboard', [HomeController::class, 'dashboardAdmin']);
	// Route::get('profil', [HomeController::class, 'profilAdmin']);
	// Route::get('home', [HomeController::class, 'homeAdmin']);
	Route::get('profile', [HomeController::class, 'profileAdmin']);

    Route::get('santri/create', [SantriController::class, 'create']);
	Route::get('santri/{gender}', [SantriController::class, 'indexAdmin']);
    Route::post('santri', [SantriController::class, 'store']);
    Route::get('santri/show/{santri}', [SantriController::class, 'show']);
    Route::get('santri/{santri}/edit', [SantriController::class, 'edit']);
    Route::put('santri/{santri}', [SantriController::class, 'update']);
    Route::delete('santri/{santri}', [SantriController::class, 'destroy']);

	Route::get('presensi', [PresensiController::class, 'indexAdmin']);
    Route::get('presensi/create', [PresensiController::class, 'create']);
    Route::post('presensi', [PresensiController::class, 'store']);
    Route::get('presensi/{presensi}', [PresensiController::class, 'show']);
    Route::get('presensi/{presensi}/edit', [PresensiController::class, 'edit']);
    Route::put('presensi/{presensi}', [PresensiController::class, 'update']);
    Route::delete('presensi/{presensi}', [PresensiController::class, 'destroy']);

	Route::get('uangmakan', [UangmakanController::class, 'indexAdmin']);
    Route::get('uangmakan/create', [UangmakanController::class, 'create']);
    Route::post('uangmakan', [UangmakanController::class, 'store']);
    Route::get('uangmakan/{uangmakan}', [UangmakanController::class, 'show']);
    Route::get('uangmakan/{uangmakan}/edit', [UangmakanController::class, 'edit']);
    Route::put('uangmakan/{uangmakan}', [UangmakanController::class, 'update']);
    Route::delete('uangmakan/{uangmakan}', [UangmakanController::class, 'destroy']);

	Route::get('uangmakan/kwitansiThermo/{uangmakan}', [UangmakanController::class, 'kwitansiThermo']);
	Route::get('uangmakan/laporanBulanan/{uangmakan}', [UangmakanController::class, 'laporanBulananAdmin']);

	//laporan
	Route::get('laporanCari',[LaporanController::class,'cariAdmin']);
	Route::get('laporan',[LaporanController::class,'indexAdmin']);
			
	Route::resource('user', UserController::class)->middleware('auth');
 });

Route::get('base', [HomeController::class, 'showBaseWalisantri']);

// Route::get('dashboard', [WalisantriController::class, 'showDashboard']);
// Route::get('home', [HomeController::class, 'showHomeWalisantri']);

Route::prefix('walisantri')->middleware('auth')->group(function() {
	Route::get('dashboard', [HomeController::class, 'dashboardWalisantri']);
	// Route::get('profil', [HomeController::class, 'profilWalisantri']);
	// Route::get('home', [HomeController::class, 'homeWalisantri']);
	Route::get('santri', [SantriController::class, 'indexWalisantri']);
	Route::get('presensi', [PresensiController::class, 'indexWalisantri']);
	Route::get('uangmakan', [UangmakanController::class, 'indexWalisantri']);

	Route::get('pengaturan', [PengaturanController::class, 'index']);
    Route::get('pengaturan/{pengaturan}/edit', [PengaturanController::class, 'edit']);
    Route::put('pengaturan/{pengaturan}', [PengaturanController::class, 'update']);
 });

Route::get('base', [HomeController::class, 'showBasePengasuh']);

// Route::get('dashboard', [PengasuhController::class, 'showDashboard']);
// Route::get('home', [HomeController::class, 'showHomePengasuh']);

Route::prefix('pengasuh')->middleware('auth')->group(function() {
	Route::get('dashboard', [HomeController::class, 'dashboardPengasuh']);
	// Route::get('profil', [HomeController::class, 'profilPengasuh']);
	// Route::get('home', [HomeController::class, 'homePengasuh']);
	
	Route::get('uangmakan/laporanBulanan/{uangmakan}', [UangmakanController::class, 'laporanBulananPengasuh']);
	Route::get('laporanCari',[LaporanController::class,'cariPengasuh']);
	Route::get('laporan',[LaporanController::class,'indexPengasuh']);
	
 });

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



