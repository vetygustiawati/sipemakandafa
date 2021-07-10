<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\UangmakanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MwsController;

Route::get('base', [HomeController::class, 'showBaseAdmin']);
Route::get('home', [HomeController::class, 'showHome']);
Route::get('visimisi', [HomeController::class, 'showVisimisi']);
Route::get('sejarah', [HomeController::class, 'showSejarah']);
Route::get('prestasi', [HomeController::class, 'showPrestasi']);
Route::get('kegponpes', [HomeController::class, 'showKegponpes']);
Route::get('foto', [HomeController::class, 'showFoto']);
Route::get('galeri', [HomeController::class, 'showGaleri']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/', function () {
    return view('home2');
});



Route::prefix('admin')->middleware('auth')->group(function() {
	Route::get('dashboard', [HomeController::class, 'dashboardAdmin']);
	Route::get('profile', [HomeController::class, 'profileAdmin']);

    Route::get('santri/create', [SantriController::class, 'create']);
	Route::get('santri/{gender}', [SantriController::class, 'indexAdmin']);
    Route::post('santri', [SantriController::class, 'store']);
    Route::get('santri/show/{santri}', [SantriController::class, 'show']);
    Route::get('santri/{santri}/edit', [SantriController::class, 'edit']);
    Route::put('santri/{santri}', [SantriController::class, 'update']);
    Route::get('santri/del/{santri}', [SantriController::class, 'destroy']);

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
	

	Route::get('user', [UserController::class, 'indexAdmin']);
    Route::get('user/create', [UserController::class, 'create']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/{user}', [UserController::class, 'show']);
    Route::get('user/{user}/edit', [UserController::class, 'editAdmin']);
    Route::put('user/{user}', [UserController::class, 'updateAdmin']);
    Route::delete('user/{user}', [UserController::class, 'destroy']);

	//laporan
	Route::get('laporanCari',[LaporanController::class,'cariAdmin']);
	Route::get('laporan',[LaporanController::class,'indexAdmin']);
	Route::get('laporan/laporanBulanan', [LaporanController::class, 'laporanBulananAdmin']);
			
	// mws
	Route::get('mws',[MwsController::class,'index']);
	Route::post('mws',[MwsController::class,'store']);
	Route::get('mws/edit/{mws}',[MwsController::class,'edit']);
	Route::delete('mws/{mws}',[MwsController::class,'destroy']);
 });

Route::get('base', [HomeController::class, 'showBaseWalisantri']);

Route::prefix('walisantri')->middleware('auth')->group(function() {
	Route::get('dashboard', [HomeController::class, 'dashboardWalisantri']);
	Route::get('santri', [SantriController::class, 'indexWalisantri']);
	Route::get('presensi', [PresensiController::class, 'indexWalisantri']);
	Route::get('uangmakan', [UangmakanController::class, 'indexWalisantri']);

	Route::get('user', [UserController::class, 'indexWalisantri']);
    Route::get('user/{user}/edit', [UserController::class, 'editWalisantri']);
    Route::put('user/{user}', [UserController::class, 'updateWalisantri']);
 });

Route::get('base', [HomeController::class, 'showBasePengasuh']);

Route::prefix('pengasuh')->middleware('auth')->group(function() {
	Route::get('dashboard', [HomeController::class, 'dashboardPengasuh']);
	
	

	//laporan
	Route::get('laporanCari',[LaporanController::class,'cariPengasuh']);
	Route::get('laporan',[LaporanController::class,'indexPengasuh']);
	Route::get('laporan/laporanBulanan', [LaporanController::class, 'laporanBulananPengasuh']);

	Route::get('user', [UserController::class, 'indexPengasuh']);
    Route::get('user/{user}/edit', [UserController::class, 'editPengasuh']);
    Route::put('user/{user}', [UserController::class, 'updatePengasuh']);
	
 });

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



